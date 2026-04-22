<div>
    {{-- Hero --}}
    <x-banner-second />

    {{-- Content --}}
    <div class="w-full px-5 flex justify-center bg-repeat"
        style="background-image: url('{{ asset('storage/images/bg1.png') }}">
        <div class="w-full max-w-[1155px] py-[100px]">
            <div class="w-full space-y-[50px]">
                <h1 class="text-[32px] lg:text-[48px] text-[var(--primary-color)] font-bold">Award & Certified</h1>
                <div class=" columns-2 lg:columns-3 gap-[30px]">
                    @foreach ($awards as $award)
                        <img wire:key="award-{{ $award->id }}" src="{{ asset('storage/' . $award->image) }}"
                            class="w-full" loading="lazy" alt="">
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
