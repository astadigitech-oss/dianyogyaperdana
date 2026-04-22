<div>
    {{-- Hero --}}
    <x-banner-second />

    {{-- Content --}}
    <section class="w-full px-5 flex justify-center relative bg-repeat"
        style="background-image: url('{{ asset('storage/images/bg1.png') }}">
        <div class="w-full lg:max-w-[900px] relative z-[1] xl:max-w-[1155px] space-y-[20px] py-[100px]">
            <div class="w-full flex justify-start">
                <a href="{{ url()->previous() }}"
                    class="hover:bg-[#fff7f0] text-[#fff7f0] bg-[#712334]
                        transition-all duration-500 hover:text-[#712334]
                        block px-[30px] py-[10px] inter font-bold text-[18px] rounded-[8px]">  
                    Back
                </a>

            </div>
            <div class="w-full bg-white px-[30px] rounded-[18px] py-[40px] space-y-[40px]">
                <div class="w-full spacep-[5px]">
                    <div class=" space-y-[10px] sm:space-y-0 sm:flex w-full justify-between items-center">
                        <h1 class="text-[28px] xl:text-[48px] font-bold">{{ $insight->name }}</h1>
                        <div class="text-[18px] font-bold text-end">
                            <p>{{ $insight->category->name }}</p>
                            <p>{{ $insight->date }}</p>
                        </div>
                    </div>
                    <div class="border-[2px] border-[var(--primary-color)] w-full"></div>
                </div>

                <div class="w-full rounded-[18px] overflow-hidden">
                    <img src="{{ asset('storage/' . $insight->image) }}" class="w-full" loading="lazy" alt="">
                </div>

                <div class="w-full">
                    {!! $insight->description !!}
                </div>
            </div>
        </div>

        <div class="bg-[#c6cfe4]/50 z-[0] absolute w-full h-full"></div>
    </section>
</div>
