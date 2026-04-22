<div>
    {{-- Hero --}}
    <x-banner-second />

    {{-- Content --}}
    <section class="w-full px-5 flex justify-center bg-repeat"
        style="background-image: url('{{ asset('storage/images/bg1.png') }}">
        <div class="w-full lg:max-w-[900px] z-[1] xl:max-w-[1155px] space-y-[20px] py-[100px]">
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
                    <div class="flex w-full justify-between items-center">
                        <h1 class="text-[28px] xl:text-[48px] font-bold">{{ $gallery->name }}</h1>
                        <div class="text-[18px] font-bold text-end">
                            <p>{{ $gallery->date }}</p>
                        </div>
                    </div>
                    <div class="border-[2px] border-[var(--primary-color)] w-full"></div>
                </div>
                <div class="w-full rounded-[18px] overflow-hidden">
                    <img src="{{ asset('storage/' . $gallery->image) }}" class="w-full" loading="lazy" alt="">
                </div>
                
                <div class="w-full grid sm:grid-cols-3 gap-[20px]">
                    @foreach ($galleryObjects as $galleryObject)
                            <livewire:components.gallery-object id="{{ $galleryObject->id }}" src="{{ $galleryObject->image }}" />
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    {{-- <section
        class="fixed inset-0 z-[1000] w-full min-h-screen flex justify-center items-start bg-black/50 overflow-y-auto">
        <div class="bg-white rounded-[18px] max-w-[800px] w-[90%] p-5 my-10">
            <img src="{{ asset('storage/images/serviceTry.jpg') }}" class="object-cover w-full h-full rounded-[12px]"
                alt="">
        </div>
    </section> --}}
