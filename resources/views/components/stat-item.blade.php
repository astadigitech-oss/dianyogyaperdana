<div>
    <div class="space-y-[10px] p-5 group hover:text-[#C6CFE4] text-[var(--primary-color)]">
        <div class="w-full flex justify-center">
            <div class="bg-[#C6CFE4] group-hover:bg-[var(--primary-color)] rounded-full group-hover:-translate-y-5 transition-all duration-500 flex shadow-xl justify-center items-center w-[120px] h-[120px]">
                {{ $slot }}
            </div>
        </div>
        <h2 class="text-[18px] font-bold text-center text-[var(--primary-color)]">{{ $label }}</h2>
    </div>
</div>
