<div>
    <div class="flex gap-[20px] items-center">
        <p style="--color-list-legality : {{$color}}" class="text-[var(--color-list-legality)] text-[32px] font-bold">{{$number}}.</p>
        <div style="--color-list-legality : {{$color}}; --color-text-legality : {{$textColor}}" class="text-[var(--color-text-legality)] rounded-[28px] w-full hover:scale-x-105 transition-all duration-500 bg-[var(--color-list-legality)] text-[24px] px-[30px] py-[20px]">
            <p>{{$slot}}</p>
        </div>
    </div>
</div>
