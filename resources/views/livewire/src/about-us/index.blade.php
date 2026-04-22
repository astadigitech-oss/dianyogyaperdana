<div>
    {{-- Hero --}}
    <x-banner-second />

    {{-- Content --}}
    <section class="w-full px-5 flex justify-center"
        style="background-image: url('{{ asset('storage/images/bg1.png') }}')">
        <div class="w-full max-w-[1155px] py-[50px]">
            <div class="w-full space-y-[80px]">
                <div class="space-y-[30px]">
                    {{-- <div class="w-full  shadow-xl">
                        <img loading="lazy" src="{{ asset('storage/images/kantor.jpeg') }}" class="w-full h-full"
                            alt="">
                    </div> --}}
                    <div class="space-y-[20px]">
                        <h1 class="text-[32px] text-[var(--primary-color)] font-bold">OUR COMMITMENT</h1>
                        <div class="lg:flex space-y-[20px] lg:space-y-0 justify-between items-start">
                            <div
                                class="lg:w-[40%] text-justify lg:text-start text-[28px] font-bold text-[var(--primary-color)]">
                                “We are ready to provide quality employees and also help you recruit work assignments at
                                your destination. It has patent legality and is ready to meet all necessary procedural
                                requirements.”
                            </div>
                            <div class="lg:w-[55%] text-justify lg:text-start text-[24px]">
                                PT. Dian Yogya Perdana is an experienced company in the fields of: recruitment
                                management and placement of workers from Indonesia. Formed a legal entity since 2004,
                                has more than 18 years of experience in recruitment and placement of workers. Has
                                provided thousands of workers from East Java, Indonesia to become workers for various
                                foreign companies in various Asian countries, such as NDK Quart, Yamaha Electronic,
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-[20px]">
                    <div class="w-full flex justify-center">
                        <h1 class="text-center text-[32px] text-[var(--primary-color)] font-bold">OUR VALUES</h1>
                    </div>
                    <div class="w-full text-center text-[24px] flex justify-center">
                        <P>Our core values reflect our commitment to excellence, ensuring fast, safe, appropriate, and
                            transparent services for both employers and employees.</P>
                    </div>

                    <div class="flex flex-col md:flex-row gap-5 items-center h-auto xl:h-[500px]">
                        <img class="w-full h-[200px] lg:h-[400px] xl:h-full object-center object-cover rounded-xl"
                            src="{{ asset('storage/images/fly.jpg') }}" alt="Fly">
                        <img class="w-full h-[200px] lg:h-[400px] xl:h-full object-cover rounded-xl"
                            src="{{ asset('storage/images/group.jpg') }}" alt="Group">
                    </div>


                    <div class="w-full lg:flex space-y-[30px] lg:space-y-0 items-center justify-between">
                        <div class="lg:w-[40%] space-y-[30px]">
                            <div class=" space-y-[5px]">
                                <h3 class="text-[32px] text-[var(--primary-color)] font-bold">OUR EXPERTISE</h3>
                                <h4 class="text-[32px] text-[var(--primary-color)] font-black">28 YEARS OF EXPERIENCE IN
                                </h4>
                            </div>
                            <p class="text-[24px]">"Be next to you to meet your needs for quality employers from
                                Indonesian with legal and
                                trustworthy procedures without forgetting labor rights"</p>
                        </div>
                        <div class="lg:w-[55%] space-y-[50px]">
                            <div class="space-y-[10px]">
                                <div class="w-full flex justify-between items-center">
                                    <h3 class="text-[16px] text-[var(--primary-color)] font-bold">Manufacturing</h3>
                                    <p class="text-[14px]">94%</p>
                                </div>
                                <div class="w-full bg-gray-200 rounded-[28px] h-[20px]">
                                    <div class="h-full w-[94%] bg-blue-800 rounded-[28px]"></div>
                                </div>
                            </div>
                            <div class="space-y-[10px]">
                                <div class="w-full flex justify-between items-center">
                                    <h3 class="text-[16px] text-[var(--primary-color)] font-bold">Plantation</h3>
                                    <p class="text-[14px]">80%</p>
                                </div>
                                <div class="w-full bg-gray-200 rounded-[28px] h-[20px]">
                                    <div class="h-full w-[80%] bg-blue-800 rounded-[28px]"></div>
                                </div>
                            </div>
                            <div class="space-y-[10px]">
                                <div class="w-full flex justify-between items-center">
                                    <h3 class="text-[16px] text-[var(--primary-color)] font-bold">Hospitality</h3>
                                    <p class="text-[14px]">73%</p>
                                </div>
                                <div class="w-full bg-gray-200 rounded-[28px] h-[20px]">
                                    <div class="h-full w-[73%] bg-blue-800 rounded-[28px]"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-[20px]">
                    <div class="lg:grid grid-cols-2 gap-[20px] hidden">
                        <x-card-value label="Fast">
                            It aims to expedite the hiring process of employers and objectively address their needs and
                            wishes through structured intermediary procedures.
                        </x-card-value>


                        <x-card-value label="Appropriate">
                            PT Dian Yogya Perdana is a suitable position to pass the company’s operational legitimacy
                            and fulfill the company’s need for quality employers.
                        </x-card-value>


                        <x-card-value label="Safe">
                            Prioritize suitable placements, use trained and qualified staff to identify potential
                            employers according to the needs of target companies, and regularly visit partner companies
                            to identify potential employees. Make employees feel safe
                        </x-card-value>


                        <x-card-value label="Transparent">
                            Professionalism in affiliation, not only by meeting the company’s eligibility requirements,
                            but also by being open in the process of attracting potential employers. To be a sincere and
                            reliable partner.
                        </x-card-value>
                    </div>
                    <div class="w-full lg:hidden">
                        <div class="swiper swiperValue">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="w-full py-[50px] px-[20px]">
                                        <x-card-value label="Fast">
                                            It aims to expedite the hiring process of employers and objectively address
                                            their needs and wishes through structured intermediary procedures.
                                        </x-card-value>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full py-[50px] px-[20px]">
                                        <x-card-value label="Appropriate">
                                            PT Dian Yogya Perdana is a suitable position to pass the company’s
                                            operational legitimacy and fulfill the company’s need for quality employers.
                                        </x-card-value>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full py-[50px] px-[20px]">
                                        <x-card-value label="Safe">
                                            Prioritize suitable placements, use trained and qualified staff to identify
                                            potential employers according to the needs of target companies, and
                                            regularly visit partner companies to identify potential employees. Make
                                            employees feel safe
                                        </x-card-value>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="w-full py-[50px] px-[20px]">
                                        <x-card-value label="Transparent">
                                            Professionalism in affiliation, not only by meeting the company’s
                                            eligibility requirements, but also by being open in the process of
                                            attracting potential employers. To be a sincere and reliable partner.
                                        </x-card-value>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Vision Miision & Team --}}
    <section class="w-full bg-[var(--primary-color)] px-5 flex justify-center">
        <div class="w-full max-w-[1155px] space-y-[100px] py-[50px]">
            <div class="w-full lg:flex gap-[20px] space-y-[50px] lg:space-y-0 justify-between relative">
                <div class="absolute hidden lg:block left-0 top-0 w-full">
                    <img src="{{ asset('storage/images/world.png') }}" class=" opacity-30 w-full" alt="">
                </div>
                <div class="space-y-[30px] w-full lg:max-w-[45%]">
                    <h1 class="text-[38px] text-white font-bold">Vision</h1>
                    <p class="text-[24px] text-white text-justify">
                        As one of the PPTKIS in the field of labor in Indonesia and abroad, PT Dian Yogya Perdana
                        prioritizes the quality, protection and professionalism of the workforce. And remember to
                        develop potential TKI in accordance with Indonesian law as outlined in the 1945 Constitution and
                        Law No. 39 of 2004 to protect the whole nation and homeland Indonesia, promote public welfare,
                        education national life and strive for the establishment and effective work ethic. to lead a
                        just and prosperous life.
                    </p>
                </div>
                <div class="space-y-[30px] w-full lg:max-w-[45%] ">
                    <h1 class="text-[38px] text-white font-bold">Mission</h1>
                    <div class="text-white relative">
                        <x-legality-list color="white" textColor="#01093F" number="1">
                            Protect workers according to the rules of both countries
                        </x-legality-list>
                        <div class="w-[10px] relative left-[100px] h-[20px] bg-white"></div>
                        <x-legality-list color="white" textColor="#01093F" number="2">
                            Expanding market opportunities for placement of Indonesian migrant workers
                        </x-legality-list>
                        <div class="w-[10px] relative left-[100px] h-[20px] bg-white"></div>
                        <x-legality-list color="white" textColor="#01093F" number="3">
                            Protect workers according to the rules of both countries
                        </x-legality-list>
                        <div class="w-[10px] relative left-[100px] h-[20px] bg-white"></div>
                        <x-legality-list color="white" textColor="#01093F" number="4">
                            Improving human resources service facilities, quality and productivity
                        </x-legality-list>
                        <div class="w-[10px] relative left-[100px] h-[20px] bg-white"></div>
                        <x-legality-list color="white" textColor="#01093F" number="5">
                            Improve the quality of industrial development, labor inspection and regulation
                        </x-legality-list>
                        <div class="w-[10px] relative left-[100px] h-[20px] bg-white"></div>
                        <x-legality-list color="white" textColor="#01093F" number="6">
                            Resources and public services
                        </x-legality-list>
                    </div>
                </div>
            </div>
            <div class="w-full px-[30px] bg-[#1a3776] rounded-[8px] relative">
                <div class="absolute rounded-[8px] px-[30px] py-[5px] bg-[#1a3776] left-[30px] -top-[60px]">
                    <h3 class="text-[32px] text-white font-bold">Our Team</h3>
                    <p class="text-[16px] text-white">BOARD OF MANAGEMENT</p>
                </div>
                <div class="swiper swiperTeam">
                    <div class="swiper-wrapper">
                        @foreach ($employees as $employee)
                            <div class="swiper-slide" wire:key="employee-{{ $employee->id }}">
                                <div class="h-[400px] pb-[30px] pt-[40px] w-full">
                                    <div
                                        class="w-full hover:-translate-y-[10px] transition-all duration-500 rounded-[8px] overflow-hidden h-full relative">
                                        <div
                                            class="absolute top-0 left-0 w-full h-full bg-gradient-to-t from-gray-100 to-transparent">
                                            <div
                                                class="text-[var(--primary-color)] px-[10px] py-[20px] w-full h-full flex items-end">
                                                <div class="space-y-[1px]">
                                                    <h1 class="text-[20px] font-bold">{{ $employee->name }}</h1>
                                                    <p class="text-[16px]">{{ $employee->position }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <img src="{{ asset('storage/' . $employee->image) }}"
                                            class="w-full h-full object-cover object-left-top" alt="">
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    <livewire:components.contact-form />
</div>
