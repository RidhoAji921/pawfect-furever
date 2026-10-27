@php
    $isHome = request()->routeIs('welcome') || request()->is('/');
@endphp

<header class="sticky top-0 z-50 w-full bg-[#F8EDE3]/90 backdrop-blur-md border-b border-[#D0B8A8]/40 shadow-xs transition-all duration-300">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <div class="flex-shrink-0">
                <a href="{{ route('welcome') }}" class="flex items-center gap-3 group">
                    <img src="{{ asset('images/Logo.png') }}" alt="Logo Pawfect Furever" class="h-12 w-auto object-contain transition-transform duration-300 group-hover:scale-105 drop-shadow-xs">
                    <span class="hidden sm:inline-block font-Quicksand font-bold text-lg md:text-xl text-textTitle tracking-tight">
                        Pawfect <span class="text-Orange/70">Furever</span>
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation Links -->
            <nav class="hidden lg:flex items-center gap-1 xl:gap-2 px-3 py-1.5 bg-[#EEC6A1]/25 rounded-full border border-[#D0B8A8]/40 shadow-xs">
                <a href="{{ $isHome ? '#home' : url('/#home') }}"
                   class="px-4 py-1.5 rounded-full text-textTitle font-Quicksand font-bold text-sm xl:text-base hover:bg-white hover:text-Orange/70 hover:shadow-xs transition-all duration-200">
                    Home
                </a>
                <a href="{{ $isHome ? '#about' : url('/#about') }}"
                   class="px-4 py-1.5 rounded-full text-textTitle font-Quicksand font-bold text-sm xl:text-base hover:bg-white hover:text-Orange/70 hover:shadow-xs transition-all duration-200">
                    About
                </a>
                <a href="{{ url('/service') }}"
                   class="px-4 py-1.5 rounded-full text-textTitle font-Quicksand font-bold text-sm xl:text-base hover:bg-white hover:text-Orange/70 hover:shadow-xs transition-all duration-200">
                    Services
                </a>
                <a href="{{ $isHome ? '#testimoni' : url('/#testimoni') }}"
                   class="px-4 py-1.5 rounded-full text-textTitle font-Quicksand font-bold text-sm xl:text-base hover:bg-white hover:text-Orange/70 hover:shadow-xs transition-all duration-200">
                    Testimoni
                </a>
                <a href="{{ url('/cek-reservasi') }}"
                   class="px-4 py-1.5 rounded-full text-textTitle font-Quicksand font-bold text-sm xl:text-base hover:bg-white hover:text-Orange/70 hover:shadow-xs transition-all duration-200">
                    Cek Reservasi
                </a>
            </nav>

            <!-- Desktop Auth / Action Buttons -->
            <div class="hidden lg:flex items-center gap-3">
                @auth
                    {{-- Admin Panel Shortcut (if Admin) --}}
                    @if(Auth::user()->is_admin)
                        <a href="{{ route('admin.panel') }}"
                           class="flex items-center gap-1.5 px-3.5 py-2 bg-textTitle text-white text-xs font-Quicksand font-bold rounded-full hover:bg-textTitle/85 shadow-sm transition-all duration-200 hover:scale-105"
                           title="Masuk ke Admin Panel">
                            <svg class="w-4 h-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z" clip-rule="evenodd"/>
                            </svg>
                            <span>Admin Panel</span>
                        </a>
                    @endif

                    {{-- Profile / My Bookings Button --}}
                    <a href="{{ route('profile') }}"
                       class="group flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-Orange/70 to-Orange/10 text-white font-Quicksand font-bold text-sm rounded-full shadow-sm hover:shadow-md hover:scale-105 transition-all duration-200">
                        <span class="max-w-[130px] truncate">Halo, {{ explode(' ', Auth::user()->name)[0] }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" class="transition-transform duration-300 group-hover:rotate-12">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 10c-1.32 0 -1.983 .421 -2.931 1.924l-.244 .398l-.395 .688a50.89 50.89 0 0 0 -.141 .254c-.24 .434 -.571 .753 -1.139 1.142l-.55 .365c-.94 .627 -1.432 1.118 -1.707 1.955c-.124 .338 -.196 .853 -.193 1.28c0 1.687 1.198 2.994 2.8 2.994l.242 -.006c.119 -.006 .234 -.017 .354 -.034l.248 -.043l.132 -.028l.291 -.073l.162 -.045l.57 -.17l.763 -.243l.455 -.136c.53 -.15 .94 -.222 1.283 -.222c.344 0 .753 .073 1.283 .222l.455 .136l.764 .242l.569 .171l.312 .084c.097 .024 .187 .045 .273 .062l.248 .043c.12 .017 .235 .028 .354 .034l.242 .006c1.602 0 2.8 -1.307 2.8 -3c0 -.427 -.073 -.939 -.207 -1.306c-.236 -.724 -.677 -1.223 -1.48 -1.83l-.257 -.19l-.528 -.38c-.642 -.47 -1.003 -.826 -1.253 -1.278l-.27 -.485l-.252 -.432c-1.011 -1.696 -1.618 -2.099 -3.053 -2.099z" />
                            <path d="M19.78 7h-.03c-1.219 .02 -2.35 1.066 -2.908 2.504c-.69 1.775 -.348 3.72 1.075 4.333c.256 .109 .527 .163 .801 .163c1.231 0 2.38 -1.053 2.943 -2.504c.686 -1.774 .34 -3.72 -1.076 -4.332a2.05 2.05 0 0 0 -.804 -.164z" />
                            <path d="M9.025 3c-.112 0 -.185 .002 -.27 .015l-.093 .016c-1.532 .206 -2.397 1.989 -2.108 3.855c.272 1.725 1.462 3.114 2.92 3.114l.187 -.005a1.26 1.26 0 0 0 .084 -.01l.092 -.016c1.533 -.206 2.397 -1.989 2.108 -3.855c-.27 -1.727 -1.46 -3.114 -2.92 -3.114z" />
                            <path d="M14.972 3c-1.459 0 -2.647 1.388 -2.916 3.113c-.29 1.867 .574 3.65 2.174 3.867c.103 .013 .2 .02 .296 .02c1.39 0 2.543 -1.265 2.877 -2.883l.041 -.23c.29 -1.867 -.574 -3.65 -2.174 -3.867a2.154 2.154 0 0 0 -.298 -.02z" />
                            <path d="M4.217 7c-.274 0 -.544 .054 -.797 .161c-1.426 .615 -1.767 2.562 -1.078 4.335c.563 1.451 1.71 2.504 2.941 2.504c.274 0 .544 -.054 .797 -.161c1.426 -.615 1.767 -2.562 1.078 -4.335c-.563 -1.451 -1.71 -2.504 -2.941 -2.504z" />
                        </svg>
                    </a>

                    {{-- Logout Button --}}
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit"
                                class="p-2 text-textParagraph hover:text-statusCancel hover:bg-statusCancel/10 rounded-full transition-all duration-200"
                                title="Keluar / Logout">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                        </button>
                    </form>
                @else
                    <a href="{{ route('signup.show') }}"
                       class="text-textParagraph hover:text-textTitle font-Quicksand font-bold text-sm px-3 py-2 transition-colors duration-200">
                        Daftar
                    </a>
                    <a href="{{ route('login.show') }}"
                       class="group flex items-center gap-2 px-5 py-2 bg-gradient-to-r from-Orange/70 to-Orange/10 text-white font-Quicksand font-bold text-sm rounded-full shadow-sm hover:shadow-md hover:scale-105 transition-all duration-200">
                        <span>Masuk</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor" class="transition-transform duration-300 group-hover:rotate-12">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12 10c-1.32 0 -1.983 .421 -2.931 1.924l-.244 .398l-.395 .688a50.89 50.89 0 0 0 -.141 .254c-.24 .434 -.571 .753 -1.139 1.142l-.55 .365c-.94 .627 -1.432 1.118 -1.707 1.955c-.124 .338 -.196 .853 -.193 1.28c0 1.687 1.198 2.994 2.8 2.994l.242 -.006c.119 -.006 .234 -.017 .354 -.034l.248 -.043l.132 -.028l.291 -.073l.162 -.045l.57 -.17l.763 -.243l.455 -.136c.53 -.15 .94 -.222 1.283 -.222c.344 0 .753 .073 1.283 .222l.455 .136l.764 .242l.569 .171l.312 .084c.097 .024 .187 .045 .273 .062l.248 .043c.12 .017 .235 .028 .354 .034l.242 .006c1.602 0 2.8 -1.307 2.8 -3c0 -.427 -.073 -.939 -.207 -1.306c-.236 -.724 -.677 -1.223 -1.48 -1.83l-.257 -.19l-.528 -.38c-.642 -.47 -1.003 -.826 -1.253 -1.278l-.27 -.485l-.252 -.432c-1.011 -1.696 -1.618 -2.099 -3.053 -2.099z" />
                            <path d="M19.78 7h-.03c-1.219 .02 -2.35 1.066 -2.908 2.504c-.69 1.775 -.348 3.72 1.075 4.333c.256 .109 .527 .163 .801 .163c1.231 0 2.38 -1.053 2.943 -2.504c.686 -1.774 .34 -3.72 -1.076 -4.332a2.05 2.05 0 0 0 -.804 -.164z" />
                            <path d="M9.025 3c-.112 0 -.185 .002 -.27 .015l-.093 .016c-1.532 .206 -2.397 1.989 -2.108 3.855c.272 1.725 1.462 3.114 2.92 3.114l.187 -.005a1.26 1.26 0 0 0 .084 -.01l.092 -.016c1.533 -.206 2.397 -1.989 2.108 -3.855c-.27 -1.727 -1.46 -3.114 -2.92 -3.114z" />
                            <path d="M14.972 3c-1.459 0 -2.647 1.388 -2.916 3.113c-.29 1.867 .574 3.65 2.174 3.867c.103 .013 .2 .02 .296 .02c1.39 0 2.543 -1.265 2.877 -2.883l.041 -.23c.29 -1.867 -.574 -3.65 -2.174 -3.867a2.154 2.154 0 0 0 -.298 -.02z" />
                            <path d="M4.217 7c-.274 0 -.544 .054 -.797 .161c-1.426 .615 -1.767 2.562 -1.078 4.335c.563 1.451 1.71 2.504 2.941 2.504c.274 0 .544 -.054 .797 -.161c1.426 -.615 1.767 -2.562 1.078 -4.335c-.563 -1.451 -1.71 -2.504 -2.941 -2.504z" />
                        </svg>
                    </a>
                @endauth
            </div>

            <!-- Mobile Hamburger Button -->
            <div class="flex lg:hidden items-center gap-2">
                @auth
                    @if(Auth::user()->is_admin)
                        <a href="{{ route('admin.panel') }}" class="px-2.5 py-1 bg-textTitle text-white text-xs font-Quicksand font-bold rounded-full">
                            Admin
                        </a>
                    @endif
                @endauth
                <button type="button"
                        id="navbar-mobile-toggle"
                        aria-label="Toggle navigation menu"
                        class="p-2 rounded-xl text-textTitle hover:bg-Orange/20 focus:outline-none transition-colors">
                    <svg id="navbar-icon-open" class="w-6 h-6 block" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg id="navbar-icon-close" class="w-6 h-6 hidden" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="navbar-mobile-menu" class="hidden lg:hidden border-t border-[#D0B8A8]/40 bg-[#F8EDE3]/98 px-4 pt-3 pb-6 shadow-lg transition-all duration-300">
        <div class="flex flex-col space-y-2 font-Quicksand font-bold">
            <a href="{{ $isHome ? '#home' : url('/#home') }}"
               class="px-3 py-2 rounded-xl text-textTitle hover:bg-[#EEC6A1]/40 transition-colors">
                Home
            </a>
            <a href="{{ $isHome ? '#about' : url('/#about') }}"
               class="px-3 py-2 rounded-xl text-textTitle hover:bg-[#EEC6A1]/40 transition-colors">
                About
            </a>
            <a href="{{ url('/service') }}"
               class="px-3 py-2 rounded-xl text-textTitle hover:bg-[#EEC6A1]/40 transition-colors">
                Services
            </a>
            <a href="{{ $isHome ? '#testimoni' : url('/#testimoni') }}"
               class="px-3 py-2 rounded-xl text-textTitle hover:bg-[#EEC6A1]/40 transition-colors">
                Testimoni
            </a>
            <a href="{{ url('/cek-reservasi') }}"
               class="px-3 py-2 rounded-xl text-textTitle hover:bg-[#EEC6A1]/40 transition-colors">
                Cek Reservasi
            </a>

            <div class="pt-3 border-t border-[#D0B8A8]/40 flex flex-col gap-2">
                @auth
                    @if(Auth::user()->is_admin)
                        <a href="{{ route('admin.panel') }}"
                           class="flex items-center justify-center gap-2 w-full py-2.5 bg-textTitle text-white rounded-xl text-sm font-bold shadow-sm">
                            <svg class="w-4 h-4 text-yellow-300" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 1.944A11.954 11.954 0 012.166 5C2.056 5.649 2 6.319 2 7c0 5.225 3.34 9.67 8 11.317C14.66 16.67 18 12.225 18 7c0-.682-.057-1.35-.166-2.001A11.954 11.954 0 0110 1.944zM11 14a1 1 0 11-2 0 1 1 0 012 0zm0-7a1 1 0 10-2 0v3a1 1 0 102 0V7z" clip-rule="evenodd"/>
                            </svg>
                            Panel Admin
                        </a>
                    @endif
                    <a href="{{ route('profile') }}"
                       class="flex items-center justify-center gap-2 w-full py-2.5 bg-gradient-to-r from-Orange/70 to-Orange/10 text-white rounded-xl text-sm font-bold shadow-sm">
                        Profil & Riwayat Reservasi ({{ Auth::user()->name }})
                    </a>
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <button type="submit"
                                class="flex items-center justify-center gap-2 w-full py-2 text-statusCancel bg-statusCancel/10 rounded-xl text-sm font-bold transition-colors">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"/>
                            </svg>
                            Logout
                        </button>
                    </form>
                @else
                    <div class="grid grid-cols-2 gap-2">
                        <a href="{{ route('signup.show') }}"
                           class="flex items-center justify-center py-2.5 bg-white border border-[#D0B8A8] text-textTitle rounded-xl text-sm font-bold text-center">
                            Daftar
                        </a>
                        <a href="{{ route('login.show') }}"
                           class="flex items-center justify-center py-2.5 bg-gradient-to-r from-Orange/70 to-Orange/10 text-white rounded-xl text-sm font-bold text-center">
                            Masuk
                        </a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
</header>

<script>
    (function() {
        const toggleBtn = document.getElementById('navbar-mobile-toggle');
        const mobileMenu = document.getElementById('navbar-mobile-menu');
        const iconOpen = document.getElementById('navbar-icon-open');
        const iconClose = document.getElementById('navbar-icon-close');

        if (toggleBtn && mobileMenu) {
            toggleBtn.addEventListener('click', function() {
                const isHidden = mobileMenu.classList.contains('hidden');
                if (isHidden) {
                    mobileMenu.classList.remove('hidden');
                    iconOpen.classList.add('hidden');
                    iconOpen.classList.remove('block');
                    iconClose.classList.remove('hidden');
                    iconClose.classList.add('block');
                } else {
                    mobileMenu.classList.add('hidden');
                    iconOpen.classList.remove('hidden');
                    iconOpen.classList.add('block');
                    iconClose.classList.add('hidden');
                    iconClose.classList.remove('block');
                }
            });

            // Close on clicking links inside mobile menu
            mobileMenu.querySelectorAll('a').forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    iconOpen.classList.remove('hidden');
                    iconOpen.classList.add('block');
                    iconClose.classList.add('hidden');
                    iconClose.classList.remove('block');
                });
            });
        }
    })();
</script>
