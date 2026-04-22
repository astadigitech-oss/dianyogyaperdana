<div x-data="{ active: @entangle('active').defer }">
    <button @click="active = true"
        class="w-full block group hover:cursor-pointer hover:-translate-y-[10px] transition-all duration-500 shadow-xl bg-white rounded-[8px] h-[350px] p-[20px]">
        <div class="w-full space-y-[20px] h-full">
            <div class="h-[200px] relative rounded-[8px] bg-cover overflow-hidden bg-center w-full"
                style="background-image: url('{{ asset('storage/' . $src) }}')">
                <div class="absolute w-full flex justify-center left-0 bottom-0">
                    <div class="w-[200px] h-[20px] bg-white rounded-t-[8px]"></div>
                </div>
                <div
                    class="flex px-[10px] justify-center items-center text-white w-full h-full group-hover:bg-black/30 duration-500 transition-all bg-black/60">
                    <h1 class="text-[36px] leading-[50px] text-center font-bold">{{ $label }}</h1>
                </div>
            </div>
            <p class="text-[16px] text-justify leading-[24px]">
                {{ $content }}
            </p>
        </div>
    </button>

    {{-- Modal --}}
    <div x-show="active" x-cloak x-transition.opacity
        class="fixed z-[1000] inset-0 flex justify-center items-center px-5 bg-black/50">
        <div class="w-full sm:w-[60%] h-[60%] sm:h-[80%] p-[40px] relative rounded-[8px] bg-white">
            <div class="absolute w-full flex justify-end right-[10px] top-[10px]">
                <button
                    class="w-[40px] transition-all duration-500 hover:cursor-pointer hover:text-[var(--primary-color)] hover:bg-white text-white h-[40px] p-[10px] bg-[var(--primary-color)] rounded-full flex justify-center items-center"
                    @click="active = false">
                    <svg class="w-full" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.1211 11.9998L18.0001 8.11682C18.2519 7.83058 18.3853 7.45918 18.3732 7.07811C18.361 6.69705 18.2042 6.33491 17.9346 6.06532C17.665 5.79573 17.3029 5.63891 16.9218 5.62674C16.5407 5.61458 16.1693 5.74797 15.8831 5.99982L12.0001 9.87882L8.11008 5.98782C7.97074 5.84849 7.80533 5.73796 7.62329 5.66256C7.44124 5.58715 7.24612 5.54834 7.04908 5.54834C6.85203 5.54834 6.65691 5.58715 6.47487 5.66256C6.29282 5.73796 6.12741 5.84849 5.98808 5.98782C5.84874 6.12715 5.73822 6.29256 5.66281 6.47461C5.58741 6.65666 5.5486 6.85177 5.5486 7.04882C5.5486 7.24587 5.58741 7.44098 5.66281 7.62303C5.73822 7.80508 5.84874 7.97049 5.98808 8.10982L9.87908 11.9998L6.00008 15.8818C5.84795 16.0178 5.72517 16.1834 5.63924 16.3685C5.55331 16.5536 5.50605 16.7542 5.50034 16.9582C5.49463 17.1621 5.5306 17.3651 5.60604 17.5547C5.68148 17.7443 5.79481 17.9165 5.9391 18.0608C6.08338 18.2051 6.25558 18.3184 6.44517 18.3939C6.63476 18.4693 6.83775 18.5053 7.04172 18.4996C7.24569 18.4938 7.44635 18.4466 7.63142 18.3607C7.81649 18.2747 7.98209 18.1519 8.11808 17.9998L12.0001 14.1208L15.8781 17.9998C16.1595 18.2812 16.5411 18.4393 16.9391 18.4393C17.337 18.4393 17.7187 18.2812 18.0001 17.9998C18.2815 17.7184 18.4396 17.3368 18.4396 16.9388C18.4396 16.5409 18.2815 16.1592 18.0001 15.8778L14.1211 11.9998Z"
                            fill="currentColor" />
                    </svg>
                </button>
            </div>
            <div class="w-full h-full space-y-[20px]">
                <div class="w-full h-[60%]">
                    <div class="swiper swiperService h-full">
                        <div class="swiper-wrapper">
                            @foreach ($serviceObjects as $serviceObject)
                                <div class="swiper-slide h-full" wire:key="service-{{ $serviceObject->id }}">
                                    <div class="w-full relative h-full p-[10px] overflow-hidden">
                                        <img src="{{ asset('storage/' . $serviceObject->image) }}"
                                            class="w-full h-full object-cover object-center" loading="lazy" alt="">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="space-y-[10px] w-full h-[25%]">
                    <h1 class="text-[28px] sm:text-[32px] font-bold">{{ $label }}</h1>
                    <div class="h-full w-full overflow-y-auto">
                        {!! $description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
