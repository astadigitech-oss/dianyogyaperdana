<div>
    {{-- Hero --}}
    <x-banner-second />

    {{-- Content --}}
    <div class="w-full px-5 flex justify-center bg-[#0a1836] py-[100px]">
        <div class="w-full max-w-[1155px]">
            <div class="w-full bg-[#536ea8] p-[15px] md:p-[25px] space-y-[10px] md:space-y-[30px] rounded-[16px]">
                <div class="w-full justify-center flex">
                    <h1 class="text-[32px] md:text-[48px] text-white font-bold">Our Team</h1>
                </div>
                <div class="w-full">
                    <img src="{{ asset('storage/'.$team->image)}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
