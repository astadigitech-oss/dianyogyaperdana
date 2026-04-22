<div>
    {{-- Hero --}}
    <x-banner-second />

    {{-- Content --}}
    <div class="w-full px-5 flex justify-center bg-repeat relative"
        style="background-image: url('{{ asset('storage/images/bg1.png') }}">

        <div class="w-full space-y-[50px] relative z-[1] max-w-[1155px] py-[100px]">
            <div class="space-y-[30px]">
                <div class=" sm:flex justify-between items-center">
                    <div class="flex items-center justify-between gap-[50px]">
                        <h1 class="text-[48px] text-[var(--primary-color)] font-bold">Insight</h1>
                        <x-button-second label="See More" href="/insights/insight" />
                    </div>
                    <div class="flex gap-[50px] items-center">
                        <button
                            class="w-[60px] hover:cursor-pointer hover:bg-[var(--primary-color)] hover:text-white transition-all duration-500 h-[50px] px-[10px] py-[10px] bg-white rounded-[8px] text-[var(--primary-color)] flex justify-center items-center swiper-button-prev-insight">
                            <svg class="h-full" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.4821 19.5C10.0845 19.4999 9.70325 19.342 9.42205 19.061L4.83605 14.475C4.18082 13.818 3.81287 12.9279 3.81287 12C3.81287 11.0721 4.18082 10.182 4.83605 9.525L9.42205 4.939C9.70345 4.65774 10.085 4.49978 10.4829 4.49988C10.8808 4.49997 11.2623 4.65811 11.5436 4.9395C11.8248 5.2209 11.9828 5.6025 11.9827 6.00036C11.9826 6.39822 11.8244 6.77974 11.5431 7.061L6.95705 11.646C6.91049 11.6925 6.87355 11.7476 6.84834 11.8084C6.82313 11.8691 6.81016 11.9342 6.81016 12C6.81016 12.0658 6.82313 12.1309 6.84834 12.1916C6.87355 12.2524 6.91049 12.3076 6.95705 12.354L11.5431 16.939C11.753 17.1488 11.8959 17.4161 11.9539 17.7072C12.0118 17.9982 11.9821 18.3 11.8685 18.5741C11.7549 18.8483 11.5626 19.0826 11.3158 19.2474C11.069 19.4122 10.7788 19.5001 10.4821 19.5Z"
                                    fill="currentColor" />
                                <path
                                    d="M17.482 19.5C17.0844 19.4999 16.7032 19.342 16.422 19.061L10.422 13.061C10.2826 12.9217 10.172 12.7563 10.0966 12.5743C10.0211 12.3922 9.9823 12.1971 9.9823 12C9.9823 11.8029 10.0211 11.6078 10.0966 11.4258C10.172 11.2437 10.2826 11.0783 10.422 10.939L16.422 4.939C16.5613 4.79974 16.7267 4.68928 16.9087 4.61393C17.0907 4.53859 17.2858 4.49983 17.4828 4.49988C17.6798 4.49992 17.8749 4.53877 18.0569 4.6142C18.2389 4.68963 18.4042 4.80017 18.5435 4.9395C18.6827 5.07884 18.7932 5.24424 18.8685 5.42626C18.9439 5.60828 18.9826 5.80336 18.9826 6.00036C18.9825 6.19736 18.9437 6.39242 18.8683 6.57441C18.7928 6.75639 18.6823 6.92174 18.543 7.061L13.6 12L18.539 16.939C18.7486 17.1485 18.8915 17.4155 18.9496 17.7062C19.0077 17.9969 18.9783 18.2983 18.8652 18.5723C18.7521 18.8463 18.5604 19.0806 18.3142 19.2458C18.068 19.4109 17.7784 19.4994 17.482 19.5Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                        <button
                            class="w-[60px] hover:cursor-pointer hover:bg-[var(--primary-color)] hover:text-white transition-all duration-500 h-[50px] px-[10px] py-[10px] bg-white rounded-[8px] text-[var(--primary-color)] flex justify-center items-center swiper-button-next-insight">
                            <svg class="h-full" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13.1 19.5C12.8032 19.5001 12.5131 19.4122 12.2663 19.2474C12.0195 19.0826 11.8271 18.8483 11.7135 18.5741C11.5999 18.2999 11.5702 17.9982 11.6282 17.7072C11.6861 17.4161 11.8291 17.1488 12.039 16.939L16.625 12.354C16.6715 12.3076 16.7085 12.2524 16.7337 12.1916C16.7589 12.1309 16.7719 12.0658 16.7719 12C16.7719 11.9342 16.7589 11.8691 16.7337 11.8084C16.7085 11.7476 16.6715 11.6925 16.625 11.646L12.043 7.061C11.7616 6.77974 11.6035 6.39822 11.6034 6.00036C11.6033 5.6025 11.7612 5.2209 12.0425 4.9395C12.3237 4.65811 12.7053 4.49997 13.1031 4.49988C13.501 4.49978 13.8826 4.65774 14.164 4.939L18.75 9.525C19.4052 10.182 19.7732 11.0721 19.7732 12C19.7732 12.9279 19.4052 13.818 18.75 14.475L14.164 19.061C14.0243 19.2006 13.8584 19.3113 13.6758 19.3866C13.4932 19.462 13.2975 19.5005 13.1 19.5Z"
                                    fill="currentColor" />
                                <path
                                    d="M6.09992 19.5C5.80315 19.5001 5.51301 19.4122 5.26621 19.2474C5.01941 19.0826 4.82705 18.8483 4.71346 18.5741C4.59987 18.2999 4.57017 17.9982 4.6281 17.7072C4.68604 17.4161 4.82901 17.1488 5.03892 16.939L9.98192 12L5.04292 7.061C4.76153 6.77974 4.60339 6.39822 4.6033 6.00036C4.6032 5.6025 4.76116 5.2209 5.04242 4.9395C5.32369 4.65811 5.70521 4.49997 6.10307 4.49988C6.50093 4.49978 6.88253 4.65774 7.16392 4.939L13.1639 10.939C13.3033 11.0783 13.4139 11.2437 13.4893 11.4258C13.5648 11.6078 13.6036 11.8029 13.6036 12C13.6036 12.1971 13.5648 12.3922 13.4893 12.5743C13.4139 12.7563 13.3033 12.9217 13.1639 13.061L7.16392 19.061C7.02421 19.2006 6.8583 19.3113 6.67571 19.3866C6.49312 19.462 6.29744 19.5005 6.09992 19.5Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="w-full">
                    <div class="swiper swiperInsight">
                        <div class="swiper-wrapper" wire:ignore>
                            @foreach ($insights as $insight)
                                <div class="swiper-slide" wire:key="insight-{{ $insight->id }}">
                                    <div class="w-full p-[20px]">
                                        <x-insight-card id="{{ $insight->id }}" label="{{ $insight->name }}"
                                            src="{{ $insight->image }}" hari="{{ $insight->hari }}" tanggal="{{ $insight->tanggal }}">
                                            {{ strip_tags(html_entity_decode($insight->clean_description)) }}
                                        </x-insight-card>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

            <div class="space-y-[30px] w-full lg:flex justify-between items-start">
                <div class="w-full lg:w-[60%] space-y-[30px] ">
                    <div class="w-full flex justify-between items-center">
                        <h1 class="text-[48px] text-[var(--primary-color)] font-bold">Gallery</h1>
                        <x-button-second label="See More" href="/insights/gallery" />
                    </div>
                    <div class=" grid sm:grid-cols-2 gap-[20px]">
                        @foreach ($galleries as $gallery)
                            <a href="/insights/gallery/{{ $gallery->id }}" wire:key="gallery-{{ $gallery->id }}"
                                class="relative group w-full overflow-hidden h-[300px] bg-white rounded-[8px] bg-center object-cover"
                                style="background-image: url('{{ asset('storage/' . $gallery->image) }}')">

                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/60 to-black/0 opacity-100 transition-opacity duration-500 group-hover:opacity-0">
                                </div>
                                <div
                                    class="absolute inset-0 bg-gradient-to-t from-black/60 to-black/50 opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                                </div>
                                <div
                                    class="absolute group-hover:bottom-1/3 transition-all duration-500 bottom-[20px] px-[30px] text-white font-bold text-[18px]">
                                    <h1 class="text-[28px] group-hover:text-[36px] transition-all duration-500 ">
                                        {{ $gallery->name }}
                                    </h1>
                                    <p class="text-[18px] group-hover:text-[26px] transition-all duration-500 ">
                                        {{ $gallery->date }}
                                    </p>
                                </div>
                            </a>
                        @endforeach

                    </div>
                </div>
                <div class="w-full lg:w-[35%] h-[350px] overflow-hidden rounded-[28px] relative">
                    <div class="absolute w-full h-full left-0 top-0">
                        <div
                            class="absolute z-[1000] flex justify-end items-end p-[40px] w-full h-full left-0 bottom-0 bg-black/50">
                            <x-button-second label="See More" href="/insights/gallery" />
                        </div>
                        <video src="{{ asset('storage/videos/homeGallery.mp4') }}" autoplay playsinline
                            class="w-full h-full object-cover"></video>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-[#c6cfe4]/50 z-[0] absolute w-full h-full"></div>
    </div>
</div>
