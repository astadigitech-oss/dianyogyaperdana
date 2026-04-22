<div>
    <div class="w-full lg:flex justify-between">
        <div class="lg:w-[65%]">
            <div class="w-full space-y-[50px]">
                <div class="w-full text-[20px] space-y-[30px] lg:space-y-0 lg:flex justify-between items-center gap-4">
                    <!-- Search -->
                    <input type="text" wire:model.live.debounce.300ms="search" placeholder="Search . . ."
                        class="w-full lg:w-[70%] px-5 h-[40px] outline-none border-[4px] border-[#c6cfe4] transition-all duration-500 hover:scale-105 hover:border-blue-900 rounded-[8px] bg-white">

                    <!-- Select -->
                    <select wire:model.live="category"
                        class="w-full lg:w-[25%] h-[40px] px-4 outline-none border-[4px] border-[#c6cfe4] rounded-[8px] bg-white text-gray-700 transition-all duration-500 hover:scale-105 hover:border-blue-900 cursor-pointer">
                        <option value="all">All</option>
                        @foreach ($filters as $filter)
                            <option value="{{ $filter->id }}">{{ $filter->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="w-full lg:grid-cols-2 grid gap-[20px]">
                    @foreach ($insights as $insight)
                        <x-insight-card wire:key="insight-{{ $insight->id }}" id="{{ $insight->id }}"
                            label="{{ $insight->name }}" src="{{ $insight->image }}"
                            category="{{ $insight->category->name }}" date="{{ $insight->date }}">

                            {{ strip_tags(html_entity_decode($insight->clean_description)) }}
                        </x-insight-card>
                    @endforeach

                </div>
                <!-- Pagination -->
                <div class="mt-6">
                    {{ $insights->links() }}
                </div>
            </div>
        </div>
        <div class="lg:w-[30%]">
            <div class="w-full space-y-[40px]">
                <div class="w-full bg-white rounded-[8px] px-[20px] pb-[30px] pt-[20px] shadow-xl space-y-[10px]">
                    <h1 class="text-[28px] text-[var(--primary-color)] font-bold">Category</h1>
                    <div class="w-full space-y-[5px]">
                        <!-- All button -->
                        <button wire:click="$set('category', 'all')"
                            class="hover:cursor-pointer py-[10px] border-b-2 bg-white group block w-full text-[var(--primary-color)] hover:text-white transition-all duration-500 hover:bg-[var(--primary-color)] rounded-[8px] border-gray-200">
                            <div class="flex px-[10px] justify-between inter text-[18px] font-bold items-center">
                                <p>All</p>
                                <div
                                    class="p-[5px] text-white transition-all duration-500 group-hover:text-[var(--primary-color)] group-hover:bg-white bg-[var(--primary-color)] rounded-[8px]">
                                    {{ $all }}
                                </div>
                            </div>
                        </button>

                        @foreach ($filters as $filter)
                            <button wire:click="$set('category', {{ $filter->id }})"
                                wire:key="filter-{{ $filter->id }}"
                                class="hover:cursor-pointer py-[10px] border-b-2 bg-white group block w-full text-[var(--primary-color)] hover:text-white transition-all duration-500 hover:bg-[var(--primary-color)] rounded-[8px] border-gray-200">

                                <div class="flex px-[10px] justify-between inter text-[18px] font-bold items-center">
                                    <p>{{ $filter->name }}</p>
                                    <div
                                        class="p-[5px] text-white transition-all duration-500 group-hover:text-[var(--primary-color)] group-hover:bg-white bg-[var(--primary-color)] rounded-[8px]">
                                        {{ $filter->insights_count }}
                                    </div>
                                </div>
                            </button>
                        @endforeach

                    </div>
                </div>

                <div class="w-full bg-white rounded-[8px] px-[20px] pb-[30px] pt-[20px] shadow-xl space-y-[10px]">
                    <h1 class="text-[28px] text-[var(--primary-color)] font-bold">Recent Insights</h1>
                    <div class="w-full space-y-[10px]">
                        @foreach ($recentInsights as $recentInsight)
                            <a wire:key="recent-{{ $recentInsight->id }}"
                                href="/insights/insight/{{ $recentInsight->id }}"
                                class="px-[20px] bg-gray-200 hover:bg-[var(--primary-color)] text-[var(--primary-color)] hover:text-white transition-all duration-500 rounded-[8px] inter w-full py-[10px] block space-y-[5px]">

                                <h3 class="text-[18px] font-bold">{{ $recentInsight->name }}</h3>
                                <p class="text-[14px]">{{ $recentInsight->clean_description }}</p>
                            </a>
                        @endforeach

                    </div>
                </div>

                <div class="w-full bg-white rounded-[8px] px-[20px] pb-[30px] pt-[20px] shadow-xl space-y-[10px]">
                    <h1 class="text-[28px] text-[var(--primary-color)] font-bold">Recent Insights</h1>
                    <div class="w-full grid grid-cols-2 gap-[10px]">
                        @foreach ($recentGalleries as $recentGallery)
                            <a href="/insights/gallery/{{ $recentGallery->id }}"
                            wire:key="recentGallery-{{ $recentGallery->id }}"
                                class="px-[20px] h-[100px] bg-gray-200 hover:bg-[var(--primary-color)] bg-cover relative shadow-xl text-[var(--primary-color)] hover:text-white transition-all duration-500 rounded-[8px] inter overflow-hidden w-full py-[10px] block space-y-[5px]"
                                style="background-image: url('{{ asset('storage/'.$recentGallery->image) }}');">
                                <div
                                    class="w-full h-full text-center bg-black/50 opacity-0 hover:opacity-100 transition-all duration-500 absolute left-0 top-0 flex text-[18px] font-bold justify-center items-center text-white">
                                    {{ $recentGallery->name }}</div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
