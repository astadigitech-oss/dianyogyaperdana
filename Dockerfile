# =========================
# STAGE 1: Build Assets (Using Bun for speed)
# =========================
FROM oven/bun:alpine AS node-builder
WORKDIR /app

# Copy manifest files
COPY package.json bun.lockb* ./
RUN bun install --frozen-lockfile

COPY . .
RUN bun run build

# =========================
# STAGE 2: PHP Runtime
# =========================
FROM php:8.3-fpm-alpine AS runtime

# Set consistent WORKDIR
WORKDIR /app

# Install system dependencies & PHP extensions
RUN apk add --no-cache \
    bash \
    curl \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    zip \
    unzip \
    git \
    oniguruma-dev \
    icu-dev \
    libzip-dev \
    $PHPIZE_DEPS \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        pdo \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        gd \
        intl \
        zip \
        opcache \
    && apk del $PHPIZE_DEPS

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Optimasi Layer: Install dependencies dulu
COPY composer.json composer.lock ./
RUN composer install --no-dev --no-scripts --no-autoloader --prefer-dist

# Copy full application code
COPY . .

# Copy assets dari stage build
COPY --from=node-builder /app/public/build ./public/build

# Finalisasi Composer & Permissions
RUN composer dump-autoload --optimize --no-dev \
    && chown -R www-data:www-data /app/storage /app/bootstrap/cache

# =========================
# ENTRYPOINT SCRIPT
# =========================
# Menangani link storage dan caching saat container dinyalakan
RUN echo '#!/bin/sh' > /usr/local/bin/docker-entrypoint.sh && \
    echo 'php artisan storage:link --force' >> /usr/local/bin/docker-entrypoint.sh && \
    echo 'php artisan config:cache' >> /usr/local/bin/docker-entrypoint.sh && \
    echo 'php artisan route:cache' >> /usr/local/bin/docker-entrypoint.sh && \
    echo 'exec "$@"' >> /usr/local/bin/docker-entrypoint.sh && \
    chmod +x /usr/local/bin/docker-entrypoint.sh

ENTRYPOINT ["docker-entrypoint.sh"]

EXPOSE 8000

# Standar port untuk development/internal
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
