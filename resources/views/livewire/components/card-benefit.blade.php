<div 
    x-data="{ open: false }"
    class="w-[300px] group shadow-xl xl:w-[350px] transition-all duration-500 relative bg-white rounded-[8px] min-h-[170px] xl:min-h-[210px]">

    <div class="w-full relative p-5">
        <div class="w-full h-[130px] relative xl:h-[170px] overflow-hidden">
            <div class="bg-black/55 absolute z-[2] w-full h-full"></div>
            <img loading="lazy" class="absolute z-[1] w-full object-cover"
                src="{{ asset('storage/images/' . $src) }}" alt="">
            <div class="absolute z-[3] w-full px-2 h-full flex items-center justify-center">
                <h2 class="text-center text-[26px] lg:text-[36px] font-bold leading-[40px] text-white">
                    {{ $label }}
                </h2>
            </div>
        </div>
        <div class="absolute bottom-0 left-0 z-[4] w-full flex justify-center">
            <button 
                @click="open = !open"
                class="w-[100px] text-[var(--primary-color)] h-[40px] lg:h-[50px] rounded-[8px] bg-white flex justify-center items-center">
                <svg class="w-[40px] transition-all duration-500"
                    :class="open ? 'rotate-180' : ''"
                    viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.7099 8.20998C18.6169 8.11625 18.5063 8.04186 18.3845 7.99109C18.2626 7.94032 18.1319 7.91418 17.9999 7.91418C17.8679 7.91418 17.7372 7.94032 17.6153 7.99109C17.4934 8.04186 17.3828 8.11625 17.2899 8.20998L12.7099 12.79C12.6169 12.8837 12.5063 12.9581 12.3845 13.0089C12.2626 13.0596 12.1319 13.0858 11.9999 13.0858C11.8679 13.0858 11.7372 13.0596 11.6153 13.0089C11.4934 12.9581 11.3828 12.8837 11.2899 12.79L6.70988 8.20998C6.61691 8.11625 6.50631 8.04186 6.38445 7.99109C6.26259 7.94032 6.13189 7.91418 5.99988 7.91418C5.86787 7.91418 5.73716 7.94032 5.6153 7.99109C5.49344 8.04186 5.38284 8.11625 5.28988 8.20998C5.10363 8.39734 4.99908 8.6508 4.99908 8.91498C4.99908 9.17917 5.10363 9.43262 5.28988 9.61998L9.87988 14.21C10.4424 14.7718 11.2049 15.0873 11.9999 15.0873C12.7949 15.0873 13.5574 14.7718 14.1199 14.21L18.7099 9.61998C18.8961 9.43262 19.0007 9.17917 19.0007 8.91498C19.0007 8.6508 18.8961 8.39734 18.7099 8.20998Z"
                        fill="currentColor" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Konten expand/collapse -->
    <div class="transition-all duration-500 overflow-hidden"
         :class="open ? 'max-h-[1000px]' : 'max-h-0'">
        <div class="pb-5 px-5">
            <p class="text-[16px]">
                {{ $description }}
            </p>
        </div>
    </div>
</div>
