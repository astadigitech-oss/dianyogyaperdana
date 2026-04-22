<x-filament-widgets::widget>
    <x-filament::section>
        <div
            class="flex items-center justify-between bg-gradient-to-r from-amber-400 via-orange-500 to-red-500 text-white rounded-xl p-8 shadow-lg">
            <div>
                <h1 class="text-4xl font-extrabold mb-2">
                    👋 Hi, {{ auth()->user()->name }}
                </h1>
                <p class="text-lg opacity-90">
                    Welcome back to your dashboard 🚀
                </p>
            </div>
            <div class="hidden md:block">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Welcome Icon"
                    class="w-10 h-10 drop-shadow-lg">
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
