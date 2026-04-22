<div>
    {{-- Hero --}}
    <x-banner-second />

    {{-- Content --}}
    <section class="w-full px-5 flex justify-center bg-repeat"
        style="background-image: url('{{ asset('storage/images/bg1.png') }}">
        <div class="w-full relative space-y-[50px] max-w-[1155px] py-[100px]">
            <div class="space-y-[10px] w-full text-[var(--primary-color)] text-center">
                <div class="w-full flex justify-center text-center">
                    <h1 class="text-[48px] font-bold">Services</h1>
                </div>
                <div class="w-full flex justify-center">
                    <p class="text-[18px] max-w-[800px]">We deliver comprehensive services to ensure effective
                        recruitment, employee
                        development, and
                        productivity optimization, meeting the needs of employers and employees alike.</p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 xl:grid-cols-3 gap-[20px]">
                @foreach ($services as $service)
                    <livewire:components.service-object wire:key="service-{{ $service->id }}" id="{{ $service->id }}"
                        label="{{ $service->name }}" src="{{ $service->image }}"
                        content="{{ strip_tags(html_entity_decode($service->clean_description)) }}" :description="$service->description" />
                @endforeach

            </div>

            <div class="space-y-[30px]">
                <div class="w-full text-center text-[var(--primary-color)]">
                    <div class="w-full flex justify-center">
                        <h1 class="text-[48px] font-bold">How Employees Are Selected</h1>
                    </div>
                    <div class="w-full text-[18px] flex justify-center">
                        There are four processes for selecting employees who meet the company’s criteria
                    </div>
                </div>
                <div class="w-full relative rounded-[8px] overflow-hidden">
                    <div
                        class="absolute top-0 left-0 w-full group h-full bg-black/0 flex justify-center items-center hover:bg-black/80 hover:cursor-pointer duration-500 transition-all">
                        <p
                            class="text-[68px] opacity-0 group-hover:opacity-100 transition-all duration-500 text-white font-bold">
                            Our Flow</p>
                    </div>
                    <img src="{{ asset('storage/images/flow.png') }}" class="w-full" alt="">
                </div>
            </div>

            <div class="space-y-[30px]">
                <div class="w-full text-[var(--primary-color)] flex justify-start">
                    <h1 class="text-[40px] font-bold">Summary of Recruitment Stages</h1>
                </div>
                <div class="grid sm:grid-cols-2 gap-[20px]">
                    <x-flow-card number="01" label="Choice offers">
                        Physical health and knowledge ability test to help determine which part of the job you will be
                        accepted for
                    </x-flow-card>


                    <x-flow-card number="02" label="Acceptence">
                        After the job seeker has metthe criteria of the selection process, the next step is the
                        recruitment of the worker by the employment agency
                    </x-flow-card>


                    <x-flow-card number="03" label="Documentation">
                        Workers mus fulfill requirements in the form of official documents to become legal workers in
                        the destination country
                    </x-flow-card>


                    <x-flow-card number="04" label="Photography">
                        PT. Dian Yogya Perdana provided evidence in the form of photos of the workers posted and some
                        other needs to accept the trust in partnership with PT Dian Yogya Perdana
                    </x-flow-card>


                </div>
            </div>
        </div>
    </section>
</div>
