<div>
    {{-- Hero --}}
    <x-banner-second />
    <div class="w-full flex px-5 justify-center bg-white">
        <div class="w-full max-w-[1155px] py-[100px]">
            <div class="lg:flex space-y-[100px] lg:space-y-0 justify-between">
                <div class="lg:w-[50%] w-full space-y-[50px]">
                    <h1 class="text-[48px] text-[var(--primary-color)] font-bold">Legality</h1>
                    <div class="text-white relative">
                        <x-legality-list color="#01093F" number="1">
                            Protect workers according to the rules of both countries
                        </x-legality-list>
                        <div class="w-[10px] relative left-[100px] h-[20px] bg-[var(--primary-color)]"></div>
                        <x-legality-list color="#01093F" number="2">
                            Expanding market opportunities for placement of Indonesian migrant workers
                        </x-legality-list>
                        <div class="w-[10px] relative left-[100px] h-[20px] bg-[var(--primary-color)]"></div>
                        <x-legality-list color="#01093F" number="3">
                            Protect workers according to the rules of both countries
                        </x-legality-list>
                        <div class="w-[10px] relative left-[100px] h-[20px] bg-[var(--primary-color)]"></div>
                        <x-legality-list color="#01093F" number="4">
                            Improving human resources service facilities, quality and productivity
                        </x-legality-list>
                        <div class="w-[10px] relative left-[100px] h-[20px] bg-[var(--primary-color)]"></div>
                        <x-legality-list color="#01093F" number="5">
                            Improve the quality of industrial development, labor inspection and regulation
                        </x-legality-list>
                        <div class="w-[10px] relative left-[100px] h-[20px] bg-[var(--primary-color)]"></div>
                        <x-legality-list color="#01093F" number="6">
                            Resources and public services
                        </x-legality-list>
                    </div>
                </div>
                <div class="lg:w-[45%] w-full">
                    <div class=" columns-2 gap-[20px]">
                        @foreach($legalities as $legality)
                            <img src="{{ asset('storage/'.$legality->image) }}" loading="lazy" class="w-full" alt="">
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
