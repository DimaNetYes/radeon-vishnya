<!DOCTYPE html>
<html>

<head>
    <title>Radeon Vishnya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('Fav48x48.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-800 min-h-screen flex flex-col">

    <header id="header"
        class="fixed top-0 left-0 w-full z-50 bg-black/20 backdrop-blur-md border-b border-white/10 text-white shadow-black/20 transition-transform duration-300 ">
        <div class="max-w-7xl mx-auto flex justify-between items-center px-4 md:px-5 py-4 md:py-5">
            <div class="flex items-center gap-3">

                <a href="/" class="hidden md:block text-2xl font-bold">🍒 RV</a>

                <div class="flex items-center gap-2 text-sm font-medium">

                    <a href="/language/en" class="{{ app()->getLocale() == 'en'
    ? 'text-red-500'
    : 'text-gray-300 hover:text-red-500' }}
                                         transition">

                        EN

                    </a>

                    <span class="text-gray-600">|</span>

                    <a href="/language/de" class="{{ app()->getLocale() == 'de'
    ? 'text-red-500'
    : 'text-gray-300 hover:text-red-500' }}
                                           transition">

                        DE

                    </a>

                    <span class="text-gray-600">|</span>

                    <a href="/language/ru" class="{{ app()->getLocale() == 'ru'
    ? 'text-red-500'
    : 'text-gray-300 hover:text-red-500' }}
                                        transition">

                        RU

                    </a>

                </div>

            </div>

            <!-- Button for mobile size -->
            <button id="mobile-menu-button" class="md:hidden p-2">
                <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 text-white" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path id="menu-path" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- desktop Menu -->
            <nav class="hidden md:flex gap-8 pr-2">
                <a href="/"
                    class="pb-1 border-b-2 border-transparent hover:border-red-600 transition">{{ __('messages.home') }}</a>
                <a href="/projects"
                    class="border-b-2 border-transparent hover:border-red-600 transition">{{ __('messages.projects') }}</a>
                <a href="/journal"
                    class="border-b-2 border-transparent hover:border-red-600 transition">{{ __('messages.journal') }}</a>
                <a href="https://www.youtube.com/@radeonvischnya/videos"
                    class="border-b-2 border-transparent hover:border-red-600 transition" target="_blank"
                    rel="noopener noreferrer">Youtube</a>
                <!-- <a href="/about" class="border-b-2 border-transparent hover:border-red-600 transition">Обо мне</a> -->
            </nav>

        </div>

    </header>

    <!-- Mobile Menu -->
    <!-- Затемнение -->
    <div id="mobile-overlay" class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden z-40">
    </div>

    <div id="mobile-menu"
        class="fixed top-0 right-0 h-screen w-72 bg-black text-white border-l border-white/10 shadow-2xl translate-x-full transition-transform duration-300 z-50">

        <div class="flex justify-between items-center px-6 py-5 border-b border-white/10">
            <div class="text-xl font-bold">
                🍒 RV
            </div>
            <button id="mobile-menu-close" class="text-white text-4xl leading-none hover:text-red-500 transition">
                &times;
            </button>
        </div>

        <nav class="flex flex-col pt-4">
            <!-- request()->is('/') show active menu -->
            <a href="/"
                class="px-8 py-5 border-b border-red-900/40 active:bg-red-900/40
active:scale-95 hover:bg-red-900/20 transition  {{ request()->is('/') ? 'border-l-4 border-l-red-600 bg-red-900/20 text-red-500' : 'hover:bg-red-900/20' }}">
                🏡 {{ __('messages.home') }}

            </a>

            <a href="/projects"
                class="px-8 py-5 border-b border-red-900/40 active:bg-red-900/40
active:scale-95 hover:bg-red-900/20 transition {{ request()->is('projects*') ? 'border-l-4 border-l-red-600 bg-red-900/20 text-red-500' : 'hover:bg-red-900/20' }}">
                🎮 {{ __('messages.projects') }}
            </a>

            <a href="/journal"
                class="px-8 py-5 border-b border-red-900/40 active:bg-red-900/40
active:scale-95 hover:bg-red-900/20 transition {{ request()->is('journal*') ? 'border-l-4 border-l-red-600 bg-red-900/20 text-red-500' : 'hover:bg-red-900/20' }}">
                🧭 {{ __('messages.journal') }}
            </a>

            <a href="https://www.youtube.com/@radeonvischnya/videos" target="_blank" class="px-8 py-5 border-b border-red-900/40 active:bg-red-900/40
active:scale-95 hover:bg-red-900/20 transition">
                ▶ Youtube
            </a>
        </nav>

    </div>


    <main class="flex-1 w-full max-w-7xl mx-auto ">
        @yield('content')
    </main>

    <footer class="bg-black text-gray-300 bg-cover bg-center "
        style="background-image: url('{{ asset('images/footer/bg_footer.png') }}');">

        <div class="max-w-7xl mx-auto px-8 pt-12 pb-4 ">

            <p class="text-center italic text-gray-400 text-3xl text-white">
                {{ __('messages.footer_title') }}
            </p>

            <div class="max-w-lg h-0.5 bg-red-600 rounded mx-auto my-6"></div>

            <h2 class="text-center text-1xl font-bold text-white">
                Radeon Vishnya
            </h2>

            <p class="text-center mt-3 text-l text-gray-400">
                {{ __('messages.footer_thx') }}
            </p>

            <div class="flex justify-center gap-8 mt-8">

                <a href="https://www.youtube.com/@radeonvischnya/featured" target="_blank" rel="noopener noreferrer"
                    class="hover:text-red-600 transition">
                    <svg class="w-7 h-7 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>YouTube</title>
                        <path
                            d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
                    </svg>
                </a>

                <a href="https://t.me/RadeonVishnya" target="_blank" rel="noopener noreferrer"
                    class="hover:text-red-600 transition">
                    <svg class="w-7 h-7 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>Telegram</title>
                        <path
                            d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.18 1.898-.962 6.502-1.36 8.627-.168.9-.499 1.201-.82 1.23-.696.065-1.225-.46-1.9-.902-1.056-.693-1.653-1.124-2.678-1.8-1.185-.78-.417-1.21.258-1.91.177-.184 3.247-2.977 3.307-3.23.007-.032.014-.15-.056-.212s-.174-.041-.249-.024c-.106.024-1.793 1.14-5.061 3.345-.48.33-.913.49-1.302.48-.428-.008-1.252-.241-1.865-.44-.752-.245-1.349-.374-1.297-.789.027-.216.325-.437.893-.663 3.498-1.524 5.83-2.529 6.998-3.014 3.332-1.386 4.025-1.627 4.476-1.635z" />
                    </svg>
                </a>

                <a href="https://github.com/DimaNetYes" target="_blank" rel="noopener noreferrer"
                    class="hover:text-red-600 transition">
                    <svg class="w-7 h-7 fill-current" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <title>GitHub</title>
                        <path
                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                    </svg>
                </a>

            </div>

            <p class="text-center text-sm text-gray-500 mt-10">
                © {{ date('Y') }} Radeon Vishnya. {{ __('messages.footer_rights') }}
            </p>

        </div>

    </footer>

</body>