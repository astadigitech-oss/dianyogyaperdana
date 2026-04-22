<div>
    <a href="{{$href}}"
        class="flex justify-center font-bold transition-all duration-500 border-white border-[4px] bg-[#1C4192] hover:bg-white hover:text-[#1C4192] rounded-full text-white gap-[20px] items-center px-[20px] lg:px-[50px] py-[10px] lg:py-[10px]">
        <p class="text-[12px] lg:text-[18px] font-bold">{{$label}}</p>
        {{ $slot }}
    </a>
</div>
