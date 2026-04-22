<div x-data="{ burgerActive: false, aboutUs: false }">
    <button @click="burgerActive = !burgerActive" class="group space-y-1">
        <!-- Garis 1 -->
        <span class="block h-0.5 w-6 rounded bg-white transition-all duration-300 ease-in-out"
            :class="burgerActive ? 'translate-y-2 rotate-45' : 'translate-y-0 rotate-0'"></span>

        <!-- Garis 2 -->
        <span class="block h-0.5 w-6 rounded bg-white transition-all duration-300 ease-in-out"
            :class="burgerActive ? 'opacity-0' : 'opacity-100'"></span>

        <!-- Garis 3 -->
        <span class="block h-0.5 w-6 rounded bg-white transition-all duration-300 ease-in-out"
            :class="burgerActive ? '-translate-y-2 -rotate-45' : 'translate-y-0 rotate-0'"></span>
    </button>

    <div class="absolute top-[100px] left-0 z-[20000] flex w-full pb-10 pt-5 justify-center bg-[#01093F] transition-all duration-500"
        :class="burgerActive ? 'translate-x-0 opacity-100' : '-translate-x-5 opacity-0 pointer-events-none'">
        <ul class="w-full px-5 text-white">
            <a href="/" class="flex px-5 py-5 border-b-[2px] border-white text-[16px]">Home</a>

            <button @click="aboutUs = !aboutUs" class="w-full border-b-[2px] border-white text-[16px] px-5 py-5">
                <div class="flex w-full items-center justify-between">
                    <p>About Us</p>
                    <svg class="transition-all duration-300" :class="aboutUs ? 'rotate-180' : ''" width="24"
                        height="24" viewBox="0 0 24 24" fill="currentColor">
                        <path
                            d="M18.7099 8.20998C18.6169 8.11625 18.5063 8.04186 18.3845 7.99109C18.2626 7.94032 18.1319 7.91418 17.9999 7.91418C17.8679 7.91418 17.7372 7.94032 17.6153 7.99109C17.4934 8.04186 17.3828 8.11625 17.2899 8.20998L12.7099 12.79C12.6169 12.8837 12.5063 12.9581 12.3845 13.0089C12.2626 13.0596 12.1319 13.0858 11.9999 13.0858C11.8679 13.0858 11.7372 13.0596 11.6153 13.0089C11.4934 12.9581 11.3828 12.8837 11.2899 12.79L6.70988 8.20998C6.61691 8.11625 6.50631 8.04186 6.38445 7.99109C6.26259 7.94032 6.13189 7.91418 5.99988 7.91418C5.86787 7.91418 5.73716 7.94032 5.6153 7.99109C5.49344 8.04186 5.38284 8.11625 5.28988 8.20998C5.10363 8.39734 4.99908 8.6508 4.99908 8.91498C4.99908 9.17917 5.10363 9.43262 5.28988 9.61998L9.87988 14.21C10.4424 14.7718 11.2049 15.0873 11.9999 15.0873C12.7949 15.0873 13.5574 14.7718 14.1199 14.21L18.7099 9.61998C18.8961 9.43262 19.0007 9.17917 19.0007 8.91498C19.0007 8.6508 18.8961 8.39734 18.7099 8.20998Z"
                            fill="currentColor" />
                    </svg>
                </div>
                <div class="overflow-hidden transition-all duration-500 ease-in-out"
                    :class="aboutUs ? 'max-h-[1000px]' : 'max-h-0'">
                    <ul class="pl-5 flex flex-col py-5">
                        <li><a href="/about-us" class="flex px-5 py-5 border-b-2 border-white/10 text-[14px]">About
                                Us</a></li>
                        <li><a href="/company-profile"
                                class="flex px-5 py-5 border-b-2 border-white/10 text-[14px]">Company Profile</a></li>
                        <li><a href="/organizational-structure"
                                class="flex px-5 py-5 border-b-2 border-white/10 text-[14px]">Organizational
                                Structure</a></li>
                        <li><a href="/legality"
                                class="flex px-5 py-5 border-b-2 border-white/10 text-[14px]">Legality</a></li>
                        <li><a href="/award-certified"
                                class="flex px-5 py-5 border-b-2 border-white/10 text-[14px]">Award & Certified</a></li>
                    </ul>
                </div>
            </button>

            <a href="/services" class="flex px-5 py-5 border-b-[2px] border-white text-[16px]">Services</a>
            <a href="/insights" class="flex px-5 py-5 border-b-[2px] border-white text-[16px]">Insight</a>
            <a href="/contacts" class="flex px-5 py-5 border-b-[2px] border-white text-[16px]">Contact</a>
        </ul>
    </div>
</div>
