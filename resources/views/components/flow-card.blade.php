<div>
    <div class="bg-[var(--primary-color)] min-h-[270px] lg:min-h-[220px] xl:min-h-[200px] text-white rounded-[8px] p-[20px]">
        <div class="flex items-start gap-[20px]">
            <p class=" text-[48px] font-black">{{ $number }}</p>
            <div class="">
                <h3 class="text-[28px] font-bold">{{ $label }}</h3>
                <p class="text-[18px]">{{ $slot }}</p>
            </div>
        </div>
    </div>
</div>
