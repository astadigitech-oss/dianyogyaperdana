<div>
    <div class="w-full space-y-[50px]">
        <div class="w-full">
            <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search . . ."
                class="w-full px-5 h-[40px] outline-none border-[4px] border-[#c6cfe4] transition-all duration-500 hover:scale-105 hover:border-blue-900 rounded-[8px] bg-white">
        </div>
        <div class="w-full grid sm:grid-cols-3 gap-[20px]">

            @if ($galleries)
                @foreach ($galleries as $gallery)
                    <a wire:key="gallery-{{ $gallery->id }}" href="/insights/gallery/{{ $gallery->id }}"
                        class="relative group w-full overflow-hidden h-[300px] bg-white rounded-[8px] bg-center object-cover"
                        style="background-image: url('{{ asset('storage/' . $gallery->image) }}')">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-black/0 opacity-100 transition-opacity duration-500 group-hover:opacity-0">
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/60 to-black/50 opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                        </div>
                        <div
                            class="absolute group-hover:bottom-1/3 transition-all duration-500 bottom-[20px] px-[30px] text-white font-bold text-[18px]">
                            <h1 class="text-[28px] group-hover:text-[36px] transition-all duration-500 ">
                                {{ $gallery->name }}</h1>
                            <p class="text-[18px] group-hover:text-[26px] transition-all duration-500 ">
                                {{ $gallery->date }}
                            </p>
                        </div>
                    </a>
                @endforeach
            @endif
        </div>
        <div>
            {{ $galleries->links() }}
        </div>
    </div>
</div>
