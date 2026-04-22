<div>
    <div class="w-full h-[350px] bg-white rounded-[16px] shadow-xl p-[20px]">
        <div class="flex flex-col justify-between h-full">
            <div class="space-y-[10px]">
                <div class="w-full h-[150px] rounded-[16px] relative overflow-hidden">
                    <img src="{{ asset('storage/' . $src) }}" loading="lazy" class="w-full h-full object-cover"
                        alt="">
                </div>
                <div class="space-y-[5px]">
                    <h1 class="text-[18px] text-[var(--primary-color)] font-bold">{{ $label }} </h1>
                    <div class="font-bold">
                        <p class="text-[12px] text-[var(--primary-color)]">{{ $category }}</p>
                        <p class="text-[12px] text-[#727171]">{{ $date }}</p>
                    </div>
                    <p class="text-[15px]">{{ $slot }}</p>
                </div>
            </div>
            <div class="w-full flex justify-between items-end">
                <div class="">
                    <p class="text-[12px]">{{ $hari }}</p>
                    <p class="text-[12px]">{{ $tanggal }}</p>
                </div>
                <a href="/insights/insight/{{ $id }}"
                    class="hover:bg-[#fff7f0] text-[#fff7f0] bg-[#712334] transition-all duration-500 hover:text-[#712334] block px-[13px] py-[6px] rounded-[8px]">
                    Read More
                </a>
            </div>
        </div>
    </div>
</div>
