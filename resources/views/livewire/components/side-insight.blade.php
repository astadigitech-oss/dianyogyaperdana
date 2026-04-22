<div>
    <div class="w-full space-y-[50px]">
        <div class="w-full bg-white rounded-[8px] px-[20px]  pb-[30px] pt-[20px] shadow-xl space-y-[10px]">
            <h1 class="text-[28px] text-[var(--primary-color)] font-bold">Category</h1>
            <div class="w-full] space-y-[5px]">
                @foreach ($categories as $category)
                    <div wire:key="category-{{ $category->id }}"
                        class="py-[10px] border-b-2 bg-white group text-[var(--primary-color)] hover:text-white transition-all duration-500 hover:bg-[var(--primary-color)] rounded-[8px] border-gray-200">

                        <a href="/insights/insight" wire:navigate
                            class="flex px-[10px] justify-between inter text-[18px] font-bold items-center">
                            <p>{{ $category->name }}</p>
                            <div
                                class="p-[5px] text-white transition-all duration-500 group-hover:text-[var(--primary-color)] group-hover:bg-white bg-[var(--primary-color)] rounded-[8px]">
                                {{ $category->insights_count }}
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
