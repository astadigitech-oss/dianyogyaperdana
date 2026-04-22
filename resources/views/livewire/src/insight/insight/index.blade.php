<div>
    {{-- Hero --}}
    <x-banner-second />

    {{-- Content --}}
    <section class="w-full px-5 flex justify-center relative bg-repeat"
        style="background-image: url('{{ asset('storage/images/bg1.png') }}">
        <div class="w-full lg:max-w-[900px] relative z-[1] xl:max-w-[1155px] py-[100px]">
            <div class="w-full lg:flex justify-between">
                <livewire:components.product-list />
            </div>
        </div> 

        <div class="bg-[#c6cfe4]/50 z-[0] absolute w-full h-full"></div>
    </section>
</div>
