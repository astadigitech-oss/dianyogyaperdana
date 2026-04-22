<div>
    {{-- Hero --}}
    <section class="w-full justify-center flex relative px-[50px] h-[800px] md:h-[500px] lg:h-[750px]">
        <div class="absolute top-0 left-0 w-full h-full z-[1]">
            <img src="{{ asset('storage/images/banner.png') }}" loading="lazy"
                class="object-top w-full h-full object-cover" alt="">
        </div>
        <div class="absolute z-[2] w-full h-full bg-black/60"></div>
        <div class="w-full relative z-[10] max-w-[1155px]">
            <div
                class="w-full flex justify-center text-center items-center lg:h-[500px] relative top-[180px] md:h-[100px] lg:top-[240px]">
                <div class="space-y-[30px] ">
                    <h1 class=" text-[38px] lg:text-[48px] inter text-white font-bold">Smart Solutions for Optimal
                        Performance Through
                        Trusted Outsourcing Services</h1>
                    <div class="flex justify-center">
                        <x-button-main label="Reach Out" href="/services" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Benefit --}}
    <section class="bg-gray-400 relative w-full h-[1050px] xl:h-[700px]">
        <div class="absolute w-full h-full">
            <img class="object-cover w-full h-full" loading="lazy" src="{{ asset('storage/images/bg1.webp') }}"
                alt="">
        </div>
        <div class="absolute -top-[80px] z-[10] w-full flex justify-center">
            <div class="w-full relative max-w-[1155px]">
                <div class="swiper swiperBenefit">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="w-full flex py-5 justify-center">
                                <livewire:components.card-benefit label="Qualified Employees" src="benefit1.jpeg"
                                    description="Our full-time employees are selected for their
                                    dedication, discipline, and work ethic. We prioritize those who are in good health, of working age,
                                    and enthusiastic about achieving company goals in a professional manner." />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full flex py-5 justify-center">
                                <livewire:components.card-benefit label="Best Recruitment" src="benefit2.jpeg"
                                    description="We implement standardized qualification tests for job
                                    seekers, offer career guidance, and introduce the culture of destination countries to ensure smooth
                                    adaptation in fast-paced work environments." />
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="w-full flex py-5 justify-center">
                                <livewire:components.card-benefit label="Proper Company" src="benefit3.jpeg"
                                    description="We comply with all regulations and laws, respect our
                                partners’ policies, and conduct regular inspections. We ensure service quality and uphold employee
                                rights through consistent training and evaluations." />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="absolute overflow-x-clip -bottom-[150px] xl:-bottom-[0px] h-full w-full xl:flex">
            <div
                class="xl:absolute shadow-xl relative left-0 w-[100%] xl:w-[55%] xl:bottom-[0px] z-[6] rounded-r-[16px] h-[500px] bg-[var(--primary-color)] flex justify-end py-[40px] px-[40px]">
                <div class="absolute top-0 origin-left left-2 lg:left-10 w-full flex items-center h-full">
                    <p
                        class="text-white text-[18px] lg:text-[28px] rotate-180 [writing-mode:vertical-rl] inter font-semibold">
                        COMPANY
                        PROFILE</p>
                </div>
                <div class="lg:w-[80%] flex flex-col justify-between">
                    <div class="w-full relative z-[100] flex items-center justify-between">
                        <h3 class="inter text-[20px] lg:text-[28px] text-white font-bold">Media Gallery</h3>
                        <x-button-second label="Visit Link" href="/insights/gallery">
                            <svg class="w-[18px] lg:w-[24px]" viewBox="0 0 24 24" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_405_1816)">
                                    <path
                                        d="M18.589 0.00063938H5.411C3.98874 -0.0100219 2.62033 0.543881 1.60593 1.54084C0.591536 2.5378 0.013995 3.89641 0 5.31864L0 7.18264C0 7.58047 0.158035 7.962 0.43934 8.2433C0.720644 8.5246 1.10218 8.68264 1.5 8.68264C1.89782 8.68264 2.27936 8.5246 2.56066 8.2433C2.84196 7.962 3 7.58047 3 7.18264V5.31864C3.01339 4.69188 3.27467 4.09599 3.72658 3.66151C4.1785 3.22703 4.7842 2.98938 5.411 3.00064H18.589C19.2158 2.98938 19.8215 3.22703 20.2734 3.66151C20.7253 4.09599 20.9866 4.69188 21 5.31864V18.6826C20.9866 19.3094 20.7253 19.9053 20.2734 20.3398C19.8215 20.7743 19.2158 21.0119 18.589 21.0006H5.411C4.7842 21.0119 4.1785 20.7743 3.72658 20.3398C3.27467 19.9053 3.01339 19.3094 3 18.6826V16.8186C3 16.4208 2.84196 16.0393 2.56066 15.758C2.27936 15.4767 1.89782 15.3186 1.5 15.3186C1.10218 15.3186 0.720644 15.4767 0.43934 15.758C0.158035 16.0393 0 16.4208 0 16.8186L0 18.6826C0.013995 20.1049 0.591536 21.4635 1.60593 22.4604C2.62033 23.4574 3.98874 24.0113 5.411 24.0006H18.589C20.0113 24.0113 21.3797 23.4574 22.3941 22.4604C23.4085 21.4635 23.986 20.1049 24 18.6826V5.31864C23.986 3.89641 23.4085 2.5378 22.3941 1.54084C21.3797 0.543881 20.0113 -0.0100219 18.589 0.00063938Z"
                                        fill="currentColor" />
                                    <path
                                        d="M3.49991 11.9993C3.49991 12.3971 3.65794 12.7786 3.93925 13.0599C4.22055 13.3412 4.60208 13.4993 4.99991 13.4993L14.9749 13.4723L11.5089 16.9383C11.2275 17.2195 11.0694 17.6011 11.0693 17.9989C11.0692 18.3968 11.2271 18.7784 11.5084 19.0598C11.7897 19.3412 12.1712 19.4993 12.5691 19.4994C12.9669 19.4995 13.3485 19.3415 13.6299 19.0603L18.2159 14.4743C18.541 14.1493 18.7988 13.7634 18.9747 13.3387C19.1506 12.9141 19.2412 12.4589 19.2412 11.9993C19.2412 11.5396 19.1506 11.0845 18.9747 10.6598C18.7988 10.2351 18.541 9.84928 18.2159 9.52427L13.6339 4.93827C13.4946 4.79901 13.3292 4.68855 13.1472 4.6132C12.9651 4.53785 12.7701 4.4991 12.5731 4.49915C12.3761 4.49919 12.181 4.53804 11.999 4.61347C11.817 4.6889 11.6517 4.79944 11.5124 4.93877C11.2311 5.22017 11.0732 5.60177 11.0733 5.99963C11.0733 6.19663 11.1122 6.39169 11.1876 6.57367C11.263 6.75566 11.3736 6.92101 11.5129 7.06027L14.9259 10.4723L4.99991 10.4993C4.60208 10.4993 4.22055 10.6573 3.93925 10.9386C3.65794 11.2199 3.49991 11.6014 3.49991 11.9993Z"
                                        fill="currentColor" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_405_1816">
                                        <rect width="24" height="24" fill="currentColor" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </x-button-second>
                    </div>
                    <div class="w-full h-[350px] bg-white">
                        <video class="w-full h-full object-cover" loading="lazy" autoplay muted playsinline
                            src="{{ asset('storage/videos/homeGallery.mp4') }}"></video>
                    </div>
                </div>
            </div>
            <div
                class="xl:absolute shadow-xl relative bottom-[50px] xl:-bottom-[50px] right-0 w-full xl:w-[50%] z-[5] rounded-l-[16px] bg-[#712234]">
                <div class="w-full py-[80px] flex justify-end">
                    @if ($branches->count() > 0)
                        <div class="absolute bottom-0 z-[1] right-0 w-[300px] xl:w-[350px]">
                            <div class="w-full h-full">
                                <div
                                    class="absolute inset-0 z-[3] bg-gradient-to-r from-[rgb(113,34,52)]/50 to-transparent">
                                </div>
                                <img src="{{ asset('storage/images/branch.png') }}" class="bottom-0 z-[2] w-full"
                                    loading="lazy" alt="">
                            </div>
                        </div>
                    @endif
                    <div class="relative z-[5] w-full lg:w-[85%] flex justify-center lg:justify-start">
                        <div class="w-[80%] space-y-[50px] xl:space-y-[35px]">
                            <h3 class="text-white text-[34px] font-bold inter">Branch Office</h3>
                            <div class="space-y-[30px]">
                                @foreach ($branches as $branch)
                                    <a href="" wire:key="branch-{{ $branch->id }}"
                                        class="flex hover:scale-105 transition-all duration-500 text-white justify-between items-center">
                                        <p class="text-[16px] lg:text-[24px]">{{ $branch->name }}</p>
                                        <svg class="w-[24px]" viewBox="0 0 24 24" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_405_1690)">
                                                <path
                                                    d="M19.1218 18.394L23.0408 14.475C23.6772 13.8082 24.0323 12.9218 24.0323 12C24.0323 11.0782 23.6772 10.1919 23.0408 9.52501L19.1218 5.60601C18.8406 5.32461 18.4591 5.16648 18.0612 5.16638C17.6633 5.16629 17.2817 5.32425 17.0003 5.60551C16.719 5.88677 16.5608 6.2683 16.5607 6.66616C16.5606 7.06401 16.7186 7.44562 16.9998 7.72701L19.7798 10.508L1.52985 10.531C1.13202 10.531 0.750491 10.689 0.469186 10.9704C0.187881 11.2517 0.0298462 11.6332 0.0298462 12.031C0.0298462 12.4288 0.187881 12.8104 0.469186 13.0917C0.750491 13.373 1.13202 13.531 1.52985 13.531L19.7608 13.508L16.9998 16.273C16.7266 16.5559 16.5754 16.9348 16.5788 17.3281C16.5823 17.7214 16.74 18.0976 17.0181 18.3757C17.2962 18.6539 17.6725 18.8116 18.0657 18.815C18.459 18.8184 18.8379 18.6673 19.1208 18.394H19.1218Z"
                                                    fill="currentColor" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_405_1690">
                                                    <rect width="24" height="24" fill="currentColor" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                    @if (!$loop->last)
                                        <div class="w-full border-[1px] border-white"></div>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Quote --}}
    <section class="w-full px-5  lg:top-0 flex justify-center relative pt-[100px] pb-[200px]">
        <div class="absolute z-[2] left-0 top-0 w-full h-full bg-black/60"></div>
        <div class="absolute z-[1] left-0 top-0 w-full h-full">
            <img class="object-cover w-full h-full" loading="lazy" src="{{ asset('storage/images/shakeHand.jpg') }}"
                alt="">
        </div>
        <div class="w-full relative z-[4] max-w-[1155px]">
            <h1 class="text-[28px] sm:text-[48px] text-center text-white font-bold inter">
                "We support companies in hiring qualified Indonesian employees to achive their corporate goals."
            </h1>
        </div>
    </section>

    {{-- Stats --}}
    <section class="w-full flex justify-center bg-[#C6CFE4] relative">
        <div class="absolute -top-[100px] px-5 xl:px-0 z-[100] w-full flex justify-center">
            <div
                class="w-full relative bg-white flex flex-col-reverse xl:flex-row items-stretch shadow-xl py-[20px] px-[20px] max-w-[1155px]">
                <div
                    class="xl:max-w-[500px] relative sm:pt-[150px] xl:pt-0 lg:text-start text-center space-y-[10px] w-full xl:pr-6">
                    <h1 class="text-[26px]  font-bold inter text-[var(--primary-color)]">Why Choose Us?</h1>
                    <p class="text-[18px] text-justify">
                        Providing professional recruitment services with quality management to meet corporate needs and
                        ensure client satisfaction.
                    </p>
                </div>

                <!-- Divider -->
                <div class="w-px bg-[#7586A4] mx-6"></div>

                <div class="xl:max-w-[600px] relative w-full xl:pl-6">
                    <div class="md:absolute left-0 -top-[100px] w-full flex justify-between items-center">
                        <div class="swiper swiperStat">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="w-full flex justify-center">
                                        <x-stat-item label="COMPREHENSIVE SCREENING">
                                            <svg class="w-[50px]" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_405_1381)">
                                                    <path
                                                        d="M15.4999 6C15.8977 6 16.2793 6.15804 16.5606 6.43934C16.8419 6.72064 16.9999 7.10218 16.9999 7.5C16.9999 7.89783 16.8419 8.27936 16.5606 8.56066C16.2793 8.84197 15.8977 9 15.4999 9H8.49991C8.10208 9 7.72055 8.84197 7.43925 8.56066C7.15794 8.27936 6.99991 7.89783 6.99991 7.5C6.99991 7.10218 7.15794 6.72064 7.43925 6.43934C7.72055 6.15804 8.10208 6 8.49991 6H15.4999ZM23.5609 23.561C23.4216 23.7004 23.2562 23.811 23.0742 23.8864C22.8921 23.9619 22.697 24.0007 22.4999 24.0007C22.3028 24.0007 22.1077 23.9619 21.9257 23.8864C21.7436 23.811 21.5782 23.7004 21.4389 23.561L19.4279 21.549C18.8273 21.8424 18.1683 21.9966 17.4999 22C16.6099 22 15.7399 21.7361 14.9998 21.2416C14.2598 20.7472 13.683 20.0443 13.3425 19.2221C13.0019 18.3998 12.9127 17.495 13.0864 16.6221C13.26 15.7492 13.6886 14.9474 14.3179 14.318C14.9473 13.6887 15.7491 13.2601 16.622 13.0865C17.4949 12.9128 18.3997 13.0019 19.222 13.3425C20.0443 13.6831 20.7471 14.2599 21.2415 14.9999C21.736 15.74 21.9999 16.61 21.9999 17.5C21.9965 18.1684 21.8423 18.8274 21.5489 19.428L23.5609 21.439C23.7003 21.5783 23.8109 21.7437 23.8863 21.9258C23.9618 22.1078 24.0006 22.3029 24.0006 22.5C24.0006 22.6971 23.9618 22.8922 23.8863 23.0742C23.8109 23.2563 23.7003 23.4217 23.5609 23.561ZM17.4999 19C17.7966 19 18.0866 18.912 18.3333 18.7472C18.5799 18.5824 18.7722 18.3481 18.8857 18.074C18.9993 17.7999 19.029 17.4983 18.9711 17.2074C18.9132 16.9164 18.7703 16.6491 18.5606 16.4393C18.3508 16.2296 18.0835 16.0867 17.7925 16.0288C17.5016 15.9709 17.2 16.0007 16.9259 16.1142C16.6518 16.2277 16.4175 16.42 16.2527 16.6666C16.0879 16.9133 15.9999 17.2033 15.9999 17.5C15.9999 17.8978 16.1579 18.2794 16.4392 18.5607C16.7206 18.842 17.1021 19 17.4999 19ZM11.4999 21H7.49991C6.83687 21 6.20098 20.7366 5.73214 20.2678C5.2633 19.7989 4.99991 19.163 4.99991 18.5V5.5C4.99991 4.83696 5.2633 4.20107 5.73214 3.73223C6.20098 3.26339 6.83687 3 7.49991 3H18.4999C18.6325 3 18.7597 3.05268 18.8535 3.14645C18.9472 3.24022 18.9999 3.36739 18.9999 3.5V10.5C18.9999 10.8978 19.1579 11.2794 19.4392 11.5607C19.7206 11.842 20.1021 12 20.4999 12C20.8977 12 21.2793 11.842 21.5606 11.5607C21.8419 11.2794 21.9999 10.8978 21.9999 10.5V3.5C21.9999 2.57174 21.6312 1.6815 20.9748 1.02513C20.3184 0.368749 19.4282 0 18.4999 0H7.49991C6.04171 0.00158817 4.64368 0.581561 3.61258 1.61267C2.58147 2.64377 2.0015 4.0418 1.99991 5.5V18.5C2.0015 19.9582 2.58147 21.3562 3.61258 22.3873C4.64368 23.4184 6.04171 23.9984 7.49991 24H11.4999C11.8977 24 12.2793 23.842 12.5606 23.5607C12.8419 23.2794 12.9999 22.8978 12.9999 22.5C12.9999 22.1022 12.8419 21.7206 12.5606 21.4393C12.2793 21.158 11.8977 21 11.4999 21Z"
                                                        fill="currentColor" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_405_1381">
                                                        <rect width="24" height="24" fill="currentColor" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </x-stat-item>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full flex justify-center">
                                        <x-stat-item label="SCHEDULING RECRUITMENT">
                                            <svg class="w-[50px]" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_406_440)">
                                                    <path
                                                        d="M12.014 23.666C11.3965 23.6668 10.8003 23.4404 10.339 23.03L6.741 20H0V3.5C0 2.57174 0.368749 1.6815 1.02513 1.02513C1.6815 0.368749 2.57174 0 3.5 0L20.5 0C21.4283 0 22.3185 0.368749 22.9749 1.02513C23.6313 1.6815 24 2.57174 24 3.5V20H17.328L13.62 23.065C13.1769 23.4563 12.6051 23.6703 12.014 23.666ZM3 17H7.836L12 20.511L16.248 17H21V3.5C21 3.36739 20.9473 3.24022 20.8536 3.14645C20.7598 3.05268 20.6326 3 20.5 3H3.5C3.36739 3 3.24021 3.05268 3.14645 3.14645C3.05268 3.24022 3 3.36739 3 3.5V17ZM12 10C12.4945 10 12.9778 9.85338 13.3889 9.57868C13.8 9.30397 14.1205 8.91353 14.3097 8.45671C14.4989 7.99989 14.5484 7.49723 14.452 7.01228C14.3555 6.52732 14.1174 6.08186 13.7678 5.73223C13.4181 5.3826 12.9727 5.1445 12.4877 5.04804C12.0028 4.95157 11.5001 5.00108 11.0433 5.1903C10.5865 5.37952 10.196 5.69995 9.92133 6.11108C9.64662 6.5222 9.5 7.00555 9.5 7.5C9.5 8.16304 9.76339 8.79893 10.2322 9.26777C10.7011 9.73661 11.337 10 12 10ZM8 13V15H16V13C16 12.4696 15.7893 11.9609 15.4142 11.5858C15.0391 11.2107 14.5304 11 14 11H10C9.46957 11 8.96086 11.2107 8.58579 11.5858C8.21071 11.9609 8 12.4696 8 13Z"
                                                        fill="currentColor" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_406_440">
                                                        <rect width="24" height="24" fill="currentColor" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </x-stat-item>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full flex justify-center">
                                        <x-stat-item label="ESTABLISH GUIDELINES">
                                            <svg class="w-[50px]" viewBox="0 0 24 24" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.16 11.6926L9.39996 9.86556L7.23996 11.9446L9.43996 14.2316C9.65576 14.46 9.91497 14.6432 10.2024 14.7702C10.4898 14.8973 10.7997 14.9657 11.114 14.9716H11.151C11.7739 14.9698 12.371 14.7226 12.813 14.2836L17.834 9.26056L15.712 7.14056L11.16 11.6926Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M11.922 23.9994L11.391 23.7624C11.007 23.5884 2.00003 19.4994 2.00003 11.9994V5.52442C2.00009 4.8947 2.19831 4.28096 2.5666 3.77016C2.93489 3.25936 3.45458 2.87741 4.05203 2.67842L12 0.0294189L19.949 2.67942C20.5466 2.87773 21.0665 3.25941 21.4347 3.77017C21.8029 4.28093 22.0007 4.89477 22 5.52442V11.9994C22 20.5384 12.863 23.6814 12.474 23.8114L11.922 23.9994ZM12 3.19142L5.00003 5.52442V11.9994C5.00003 16.6694 10.344 19.8464 12.077 20.7524C13.819 20.0254 19 17.4074 19 11.9994V5.52442L12 3.19142Z"
                                                    fill="currentColor" />
                                            </svg>

                                        </x-stat-item>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div
            class="w-full max-w-[1159px] pt-[320px] space-y-[30px] xl:space-y-0 sm:pt-[230px] xl:pt-[150px] pb-[150px] xl:pb-[60px] xl:flex justify-between">
            <div class="space-y-[20px] px-5 xl:px-0 xl:max-w-[500px] inter text-[var(--primary-color)]">
                <h3 class="text-[36px] text-center xl:text-start font-bold">Simple and High Quality
                </h3>
                <p class="text-[18px] text-center xl:text-start">PT Dian Yogya Perdana ensures service quality through
                    a reliable recruitment
                    system, professional
                    communication, and adherence to equality principles. With years of experience and clear legality,
                    the company offers practical and high-quality recruitment solutions to meet corporate workforce
                    needs and ensure seamless cooperation.</p>
            </div>
            <div class="w-full relative xl:py-[30px] xl:max-w-[500px]">
                <div class="absolute top-0 z-5 left-0 w-full flex justify-center">
                    <img loading="lazy" class="object-cover w-full sm:w-[80%] lg:w-[70%] xl:w-full"
                        src="{{ asset('storage/images/world.png') }}" alt="">
                </div>
                <div
                    class="w-full px-10 xl:px-0 relative space-y-[50px] xl:space-y-[20px] z-[10] py-5 grid grid-cols-2">
                    <div class="w-full flex justify-center text-[var(--primary-color)]">
                        <div class="space-y-[15px] text-center">
                            <h3 class="counter text-[38px] sm:text-[48px] leading-[28px] italic font-black"
                                data-target="25" data-suffix="+">0</h3>
                            <p class="text-[16px]">Awards</p>
                        </div>
                    </div>
                    <div class="w-full flex justify-center text-[var(--primary-color)]">
                        <div class="space-y-[15px] text-center">
                            <h3 class="counter text-[38px] sm:text-[48px] leading-[28px] italic font-black"
                                data-target="28" data-suffix="+">0</h3>
                            <p class="text-[16px]">Years Experience</p>
                        </div>
                    </div>
                    <div class="w-full flex justify-center text-[var(--primary-color)]">
                        <div class="space-y-[15px] text-center">

                        </div>
                    </div>
                    <div class="w-full flex justify-center text-[var(--primary-color)]">
                        <div class="space-y-[15px] text-center">
                            <h3 class="counter text-[48px] sm:text-[68px] leading-[28px] sm:leading-[48px] italic font-black"
                                data-target="1250" data-suffix="+">0</h3>
                            <p class="text-[16px]">Professional Employees</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Insights --}}
    <section class="w-full flex justify-center bg-[#C6CFE4] px-5 pb-[100px] xl:px-0 overflow-hidden relative">
        <div class="absolute z-[2] h-full w-full"
            style="background: linear-gradient(
         to bottom,
         rgba(198, 207, 228, 1) 0%, 
         rgba(198, 207, 228, 0.25) 50%, 
         rgba(198, 207, 228, 0.5) 100%  /* bawah 50% */
     );">
        </div>
        <img src="{{ asset('storage/images/bg1.webp') }}" class="z-[1] absolute w-full h-full object-cover" alt="">
        <div class="w-full space-y-[50px] relative z-[3] max-w-[1155px]">
            <div class="space-y-[30px]">
                {{-- <div class=" sm:flex justify-between items-center"> --}}
                    <div class="flex items-center justify-between gap-[50px]">
                        <h1 class="max-w-[50px] lg:max-w-[1000px] leading-[50px] text-[48px] text-[var(--primary-color)] font-bold">Latest Insights</h1>
                        <x-button-second label="See More" href="/insights/insight" />
                    </div>
                    {{-- <div class="flex gap-[50px] items-center">
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
                    </div> --}}
                {{-- </div> --}}
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
        </div>
    </section>

    {{-- Client --}}
    <section class="w-full flex bg-[#536ea8] justify-center">
        <div class="w-full max-w-[1155px] px-5 relative xl:px-0 py-[30px]">
            <div class="absolute bg-[#536ea8] z-[100] -top-[50px] rounded-t-[16px] left-0 px-[50px] py-[10px]">
                <h3 class="text-white text-[28px] font-black">Our Client</h3>
            </div>
            <div class="swiper swiperClient">
                <div class="swiper-wrapper" wire:ignore>
                    @foreach ($clients as $client)
                        <div class="swiper-slide h-full" wire:key="client-{{ $client->id }}">
                            <div class="w-full flex justify-center h-[80px] lg:h-[100px] items-center">
                                <img class="w-full" loading="lazy" src="{{ asset('storage/' . $client->image) }}"
                                    alt="">
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    {{-- Testimoni --}}
    <section class="w-full flex bg-[var(--primary-color)] justify-center py-[30px]">
        <div class="w-full max-w-[1155px]">
            <div class="w-full text-white">
                <div class="w-full flex justify-center text-center">
                    <h1 class="text-[48px] text-center font-bold">Testimonial</h1>
                </div>
                <div class="text-[18px] w-full flex justify-center">
                    <p>What our clients say</p>
                </div>
            </div>
            <div class="w-full">
                <div class="swiper swiperTestimonial">
                    <div class="swiper-wrapper" wire:ignore>
                        @foreach ($testimonials as $testi)
                            <div class="swiper-slide" wire:key="testi-{{ $testi->id }}">
                                <div class="px-[10px] py-[30px]">
                                    <div
                                        class="w-full hover:translate-y-[-10px] transition-all duration-500 space-y-[15px] rounded-[8px] overflow-hidden relative py-[10px] px-[10px]">

                                        <div class="flex relative z-[100] justify-between">
                                            <div class="max-w-[60%] flex items-center gap-[10px]">
                                                <div class="p-[10px] rounded-[8px] bg-white w-[100px] h-[50px]">
                                                    <img loading="lazy" class="w-full h-full object-cover"
                                                        src="{{ asset('storage/' . $testi->image_office) }}"
                                                        alt="">
                                                </div>
                                                <h1 class="text-[var(--primary-color)] text-[20px] font-bold">
                                                    {{ $testi->name }}
                                                </h1>
                                            </div>
                                            <div class="gap-[5px]">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    @if ($i <= $testi->star)
                                                        ⭐
                                                    @else
                                                        ☆
                                                    @endif
                                                @endfor
                                            </div>
                                        </div>

                                        <div
                                            class="text-[16px] px-[10px] relative z-[100] text-[var(--primary-color)]">
                                            {!! $testi->testimoni !!}
                                        </div>

                                        <div class="absolute top-0 left-0 w-full h-full">
                                            <img src="{{ asset('storage/images/bg1.webp') }}"
                                                class="w-full h-full object-cover" loading="lazy" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>

    {{-- Contact Form --}}
    <livewire:components.contact-form />
</div>
