<!doctype html>
<html class="overflow-x-hidden scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Tarbiya - Islamic learning online.</title>
    <meta content="Authentic Islamic learning for Muslim children and families." name="description" />
    <meta content="Tarbiya, Islam, Islam for children, Sunnah, tawheed, online learning, ibaadah, Islam for families." name="keywords" />

    <!-- Open Graph / Facebook -->
    <meta content="website" property="og:type" />
    <meta content="https://tarbiya.me/" property="og:url" />
    <meta content="Tarbiya - Islamic learning online." property="og:title" />
    <meta content="Authentic Islamic learning for Muslim children and families." property="og:description" />
    <meta content="https://tarbiya.me/og-image.jpg" property="og:image" />

    <!-- Twitter -->
    <meta content="summary_large_image" property="twitter:card" />
    <meta content="https://tarbiya.me/" property="twitter:url" />
    <meta content="Tarbiya - Islamic learning online." property="twitter:title" />
    <meta content="Authentic Islamic learning for Muslim children and families." property="twitter:description" />
    <meta content="https://tarbiya.me/og-image.jpg" property="twitter:image" />

    <link href="{{ Vite::asset('resources/images/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180" />
    <link href="{{ Vite::asset('resources/images/favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png" />
    <link href="{{ Vite::asset('resources/images/favicon-16x16.png') }}" rel="icon" sizes="16x16" type="image/png" />
    <link href="{{ Vite::asset('resources/images/site.webmanifest') }}" rel="manifest" />

    {{-- <link href="/src/style.css" rel="stylesheet" /> --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.9.0/fonts/remixicon.css" rel="stylesheet" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LBM3283W0V"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-LBM3283W0V");
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-montserrat overflow-x-hidden" x-data="{ showLegalModal: false, activeLegalTab: 'terms' }">
    <nav class="fixed top-0 z-50 w-full px-4 py-2 transition-all duration-300" x-data="{ mobileMenuOpen: false }">
        <div class="container mx-auto rounded-full border border-gray-300 bg-red-500/5 p-1 backdrop-blur-sm transition-all duration-300">
            <div class="flex items-center justify-between px-2">
                <a class="flex items-center space-x-2 rounded-full px-4 py-2 font-semibold text-white" href="/">
                    <img alt="Tarbiya Logo" class="h-8 w-auto" src="{{ Vite::asset('resources/images/logo.png') }}" />
                </a>
                <div class="hidden items-center space-x-8 text-white md:flex">
                    <a class="hover:text-gray-200" href="/">Home</a>
                    <a class="hover:text-gray-200" href="/about.html">About Us</a>
                    <a class="hover:text-gray-200" href="/#who-we-are">Who We Are</a>
                    <a class="hover:text-gray-200" href="/#pricing">Pricing</a>
                    <a class="hover:text-gray-200" href="/#faq">FAQ</a>
                    <a class="hover:text-gray-200" href="/contact.html">Contact</a>
                </div>
                <div class="flex items-center gap-2 pr-2 md:pr-0">
                    <!-- Language Switcher -->
                    <div class="relative" x-data="{
                        open: false,
                        currentLang: 'EN',
                        languages: [
                            { code: 'en', name: 'English', label: 'EN' },
                            { code: 'ar', name: 'العربية', label: 'AR' },
                            { code: 'fr', name: 'Français', label: 'FR' },
                            { code: 'es', name: 'Español', label: 'ES' },
                            { code: 'id', name: 'Bahasa Indonesia', label: 'ID' },
                            { code: 'ms', name: 'Melayu', label: 'MS' },
                            { code: 'ur', name: 'اردو', label: 'UR' }
                        ],
                        init() {
                            let match = document.cookie.match(/(^|;) ?googtrans=([^;]*)(;|$)/);
                            if (match) {
                                let lang = match[2].split('/')[2];
                                if (lang) {
                                    let found = this.languages.find(l => l.code === lang);
                                    if (found) this.currentLang = found.label;
                                }
                            }
                        },
                        changeLanguage(code, label) {
                            this.currentLang = label;
                            this.open = false;
                    
                            var selectField = document.querySelector('.goog-te-combo');
                            if (selectField) {
                                selectField.value = code;
                                selectField.dispatchEvent(new Event('change'));
                            } else {
                                document.cookie = `googtrans=/en/${code}; path=/; domain=${window.location.hostname}`;
                                document.cookie = `googtrans=/en/${code}; path=/;`;
                                window.location.reload();
                            }
                        }
                    }">
                        <button @click.away="open = false" @click="open = !open" class="flex items-center gap-1 rounded-full bg-white/10 px-3 py-2 text-xs font-medium text-white transition-all hover:bg-white/20 md:text-sm">
                            <i class="ri-global-line"></i>
                            <span x-text="currentLang"></span>
                            <i :class="open ? 'rotate-180' : ''" class="ri-arrow-down-s-line text-xs transition-transform"></i>
                        </button>

                        <!-- Dropdown -->
                        <div class="absolute right-0 top-full mt-2 w-48 overflow-hidden rounded-2xl border border-gray-700 bg-gray-900/95 shadow-xl backdrop-blur-lg" x-cloak x-show="open" x-transition:enter-end="opacity-100 translate-y-0" x-transition:enter-start="opacity-0 translate-y-2" x-transition:enter="transition ease-out duration-200" x-transition:leave-end="opacity-0 translate-y-2" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150">
                            <div class="flex flex-col py-2">
                                <template :key="lang.code" x-for="lang in languages">
                                    <button :class="currentLang === lang.label ? 'bg-gray-800 text-white font-semibold' : ''" @click="changeLanguage(lang.code, lang.label)" class="flex w-full items-center justify-between px-4 py-2 text-left text-sm text-gray-300 transition-colors hover:bg-gray-800 hover:text-white">
                                        <span x-text="lang.name"></span>
                                        <span class="text-xs text-gray-500" x-text="lang.label"></span>
                                    </button>
                                </template>
                            </div>
                        </div>
                    </div>

                    <a class="hidden rounded-full bg-gray-100 px-4 py-2 text-xs transition-all hover:bg-gray-200 md:block md:px-6 md:text-sm" href="/#newsletter-section">Join Waitlist</a>
                    <!-- Mobile Menu Toggle -->
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="p-1 text-white focus:outline-none md:hidden">
                        <i class="ri-menu-3-line text-xl" x-show="!mobileMenuOpen"></i>
                        <i class="ri-close-line text-xl" x-cloak x-show="mobileMenuOpen"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div class="container mx-auto mt-2 rounded-2xl border border-gray-700 bg-gray-900/95 p-4 shadow-xl backdrop-blur-lg md:hidden" x-cloak x-show="mobileMenuOpen" x-transition:enter-end="opacity-100 translate-y-0" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter="transition ease-out duration-200" x-transition:leave-end="opacity-0 -translate-y-2" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150">
            <div class="flex flex-col space-y-4 text-center text-white">
                <a class="py-2 font-medium hover:text-gray-300" href="/">Home</a>
                <a class="border-t border-gray-800 py-2 font-medium hover:text-gray-300" href="/about.html">About Us</a>
                <a @click="mobileMenuOpen = false" class="border-t border-gray-800 py-2 font-medium hover:text-gray-300" href="/#who-we-are">Who We Are</a>
                <a @click="mobileMenuOpen = false" class="border-t border-gray-800 py-2 font-medium hover:text-gray-300" href="/#pricing">Pricing</a>
                <a @click="mobileMenuOpen = false" class="border-t border-gray-800 py-2 font-medium hover:text-gray-300" href="/#faq">FAQ</a>
                <a class="border-t border-gray-800 py-2 font-medium hover:text-gray-300" href="/contact.html">Contact</a>
                <a @click="mobileMenuOpen = false" class="mx-auto mt-2 inline-block rounded-full bg-white px-4 py-2 text-xs font-semibold text-gray-900 transition-colors hover:bg-gray-200" href="/#newsletter-section">Join Waitlist</a>
            </div>
        </div>
    </nav>

    {{ $slot }}

    <!-- Custom Google Translate implementation -->
    <div id="google_translate_element" style="display: none"></div>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                    pageLanguage: "en",
                    includedLanguages: "en,ar,fr,es,id,ms,ur",
                    autoDisplay: false,
                },
                "google_translate_element",
            );
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    {{-- <script type="module" src="/src/main.ts"></script> --}}
</body>

</html>
