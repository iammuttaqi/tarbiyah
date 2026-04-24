<!doctype html>
<html class="overflow-x-hidden scroll-smooth" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="{{ csrf_token() }}" name="csrf-token" />
    <title>{{ $title ?? 'Tarbiya - Islamic learning online' }}</title>
    <meta content="{{ $description ?? 'Authentic Islamic learning for Muslim children and families' }}" name="description" />
    <meta content="{{ $keywords ?? 'tarbiya, islam, islam for children, sunnah, tawheed, online learning, ibaadah, islam for families' }}" name="keywords" />

    <!-- Open Graph / Facebook -->
    <meta content="website" property="og:type" />
    <meta content="https://tarbiya.me/" property="og:url" />
    <meta content="{{ $title ?? 'Tarbiya - Islamic learning online' }}" property="og:title" />
    <meta content="{{ $description ?? 'Authentic Islamic learning for Muslim children and families' }}" property="og:description" />
    <meta content="https://tarbiya.me/og-image.jpg" property="og:image" />

    <!-- Twitter -->
    <meta content="summary_large_image" property="twitter:card" />
    <meta content="https://tarbiya.me/" property="twitter:url" />
    <meta content="{{ $title ?? 'Tarbiya - Islamic learning online' }}" property="twitter:title" />
    <meta content="{{ $description ?? 'Authentic Islamic learning for Muslim children and families' }}" property="twitter:description" />
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
                    <a class="hover:text-gray-200" href="{{ route('about') }}">About Us</a>
                    <a class="hover:text-gray-200" href="/#who-we-are">Who We Are</a>
                    <a class="hover:text-gray-200" href="/#pricing">Pricing</a>
                    <a class="hover:text-gray-200" href="/#faq">FAQ</a>
                    <a class="hover:text-gray-200" href="{{ route('contact') }}">Contact</a>
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
                <a class="border-t border-gray-800 py-2 font-medium hover:text-gray-300" href="{{ route('about') }}">About Us</a>
                <a @click="mobileMenuOpen = false" class="border-t border-gray-800 py-2 font-medium hover:text-gray-300" href="/#who-we-are">Who We Are</a>
                <a @click="mobileMenuOpen = false" class="border-t border-gray-800 py-2 font-medium hover:text-gray-300" href="/#pricing">Pricing</a>
                <a @click="mobileMenuOpen = false" class="border-t border-gray-800 py-2 font-medium hover:text-gray-300" href="/#faq">FAQ</a>
                <a class="border-t border-gray-800 py-2 font-medium hover:text-gray-300" href="{{ route('contact') }}">Contact</a>
                <a @click="mobileMenuOpen = false" class="mx-auto mt-2 inline-block rounded-full bg-white px-4 py-2 text-xs font-semibold text-gray-900 transition-colors hover:bg-gray-200" href="/#newsletter-section">Join Waitlist</a>
            </div>
        </div>
    </nav>

    {{ $slot }}

    <!-- Footer -->
    <footer class="mx-auto w-full bg-black px-6 py-10 text-gray-400 md:px-20" x-data="{ currentYear: new Date().getFullYear() }">
        <div class="container mx-auto space-y-8">
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-12">
                <div class="flex flex-col items-start lg:col-span-8">
                    <a class="mb-6" href="/">
                        <img alt="Tarbiyah" class="h-12 w-auto" src="{{ Vite::asset('resources/images/logo.png') }}" />
                    </a>
                    <p class="mb-8 max-w-2xl text-base leading-relaxed text-white/80">Tarbiya.me is an online learning app and website dedicated to imparting authentic Islamic knowledge through a structured, easy-to-follow curriculum. Designed for both children and adults, our platform provides a clear path to understanding the Deen, rooted strictly in the Qur’an, the authentic Sunnah, and the methodology of the Salaf-us-Salih.</p>

                    <div class="space-y-3">
                        <span class="block font-medium text-white">Powered By</span>
                        <div class="flex items-center gap-3">
                            <svg fill="none" height="50" viewBox="0 0 50 50" width="50" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_177_1821)">
                                    <path d="M44.5972 50H5.40276C2.41895 50 0 47.5811 0 44.5972V5.40276C0 2.41895 2.41895 0 5.40276 0H44.5971C47.5811 0 49.9999 2.41895 49.9999 5.40276V44.5971C50 47.5811 47.5811 50 44.5972 50Z" fill="#635BFF"></path>
                                    <path clip-rule="evenodd" d="M44.1467 25.2793C44.1467 22.5604 42.8297 20.4148 40.3124 20.4148C37.7846 20.4148 36.2551 22.5604 36.2551 25.2582C36.2551 28.4551 38.0607 30.0695 40.6523 30.0695C41.9162 30.0695 42.8721 29.7828 43.5944 29.3791V27.255C42.8721 27.6161 42.0437 27.8391 40.9922 27.8391C39.9619 27.8391 39.0484 27.4779 38.9317 26.2247H44.1254C44.1254 26.0866 44.1467 25.5343 44.1467 25.2793ZM38.8998 24.2704C38.8998 23.0702 39.6326 22.571 40.3018 22.571C40.9497 22.571 41.64 23.0702 41.64 24.2704H38.8998ZM32.1552 20.4149C31.1144 20.4149 30.4452 20.9034 30.0735 21.2433L29.9355 20.5848H27.5987V32.9692L30.254 32.4063L30.2647 29.4005C30.647 29.6766 31.2099 30.0696 32.1446 30.0696C34.0459 30.0696 35.7771 28.5402 35.7771 25.1732C35.7665 22.093 34.014 20.4149 32.1552 20.4149ZM31.518 27.7329C30.8914 27.7329 30.5195 27.5098 30.2647 27.2337L30.254 23.2932C30.5302 22.9853 30.9125 22.7728 31.518 22.7728C32.4845 22.7728 33.1537 23.8562 33.1537 25.2475C33.1537 26.6708 32.4952 27.7329 31.518 27.7329ZM23.945 19.7882L26.6109 19.2147V17.0586L23.945 17.6215V19.7882ZM23.945 20.5954H26.6109V29.889H23.945V20.5954ZM21.0879 21.3814L20.918 20.5954H18.6238V29.889H21.2791V23.5906C21.9057 22.7727 22.9678 22.9215 23.2971 23.0383V20.5954C22.9572 20.468 21.7145 20.2343 21.0879 21.3814ZM15.7773 18.2906L13.1857 18.8429L13.1751 27.3506C13.1751 28.9225 14.3541 30.0803 15.926 30.0803C16.7969 30.0803 17.4343 29.9209 17.7847 29.7297V27.5736C17.4449 27.7117 15.7667 28.2002 15.7667 26.6284V22.8578H17.7847V20.5955H15.7667L15.7773 18.2906ZM8.59734 23.2932C8.59734 22.8789 8.93718 22.7196 9.50019 22.7196C10.3074 22.7196 11.327 22.9639 12.1342 23.3994V20.9034C11.2526 20.5529 10.3817 20.4148 9.50019 20.4148C7.34403 20.4148 5.91016 21.5407 5.91016 23.4207C5.91016 26.3521 9.94625 25.8848 9.94625 27.1487C9.94625 27.6373 9.52136 27.7966 8.92665 27.7966C8.04506 27.7966 6.91923 27.4355 6.02701 26.9469V29.4747C7.01482 29.8996 8.01316 30.0802 8.92665 30.0802C11.1358 30.0802 12.6547 28.9861 12.6547 27.085C12.6441 23.9198 8.59734 24.4828 8.59734 23.2932Z" fill-rule="evenodd" fill="white"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_177_1821">
                                        <rect fill="white" height="50" width="50"></rect>
                                    </clipPath>
                                </defs>
                            </svg>

                            <svg fill="none" height="50" viewBox="0 0 50 50" width="50" xmlns="http://www.w3.org/2000/svg">
                                <rect fill="white" height="50" rx="8" width="50"></rect>
                                <path clip-rule="evenodd" d="M20.6353 18.0118L18.3438 32.0946H22.01L24.3018 18.0118H20.6353ZM15.2591 18.0118L11.7636 27.6979L11.3501 25.6121L11.3504 25.6128L11.2593 25.1453C10.8362 24.2336 9.85645 22.5008 8.00635 21.022C7.48866 20.6093 6.94363 20.2322 6.375 19.8932L9.55186 32.0946H13.3718L19.2051 18.0118H15.2591ZM29.5678 21.9215C29.5678 20.3293 33.1384 20.5339 34.7073 21.3984L35.2305 18.3738C35.2305 18.3738 33.6158 17.7598 31.9328 17.7598C30.1133 17.7598 25.7927 18.5555 25.7927 22.4218C25.7927 26.0604 30.8638 26.1057 30.8638 28.016C30.8638 29.9264 26.3155 29.585 24.8145 28.3799L24.269 31.5413C24.269 31.5413 25.9061 32.337 28.4079 32.337C30.9095 32.337 34.6845 31.041 34.6845 27.5157C34.6845 23.8543 29.5678 23.5133 29.5678 21.9215ZM44.5287 18.0118H41.581C40.2198 18.0118 39.8884 19.0613 39.8884 19.0613L34.4208 32.0946H38.2422L39.0066 30.0029H43.6676L44.0976 32.0946H47.464L44.5287 18.0118ZM40.0632 27.113L41.9897 21.8429L43.0735 27.113H40.0632Z" fill-rule="evenodd" fill="#005BAC"></path>
                                <path clip-rule="evenodd" d="M10.1683 19.3374C10.1683 19.3374 10.0165 18.0664 8.39639 18.0664H2.51035L2.44141 18.3053C2.44141 18.3053 5.2707 18.882 7.98506 21.0429C10.579 23.1081 11.4252 25.6825 11.4252 25.6825L10.1683 19.3374Z" fill-rule="evenodd" fill="#F6AC1D"></path>
                            </svg>

                            <svg fill="none" height="50" viewBox="0 0 50 50" width="50" xmlns="http://www.w3.org/2000/svg">
                                <rect fill="white" height="50" rx="8" width="50"></rect>
                                <path d="M17.3125 38.625C24.6648 38.625 30.625 32.6648 30.625 25.3125C30.625 17.9602 24.6648 12 17.3125 12C9.96021 12 4 17.9602 4 25.3125C4 32.6648 9.96021 38.625 17.3125 38.625Z" fill="#F93232"></path>
                                <path d="M33.2871 12C30.2971 12 27.5468 12.9984 25.3262 14.6625H25.2996V14.6811C24.7724 15.0778 24.2879 15.5251 23.8259 15.9937H26.7733C27.1833 16.4104 27.5614 16.8564 27.9115 17.325H22.677C22.3545 17.7504 22.0579 18.195 21.7891 18.6562H28.7968C29.0471 19.0876 29.2827 19.5269 29.4864 19.9875H21.1115C20.9202 20.4218 20.7527 20.8662 20.6096 21.3187H29.9869C30.1254 21.7527 30.2346 22.1987 30.3304 22.65H20.2622C20.173 23.0866 20.0984 23.5286 20.0532 23.9812H30.5447C30.5967 24.4179 30.6246 24.8612 30.6246 25.3125H19.9746C19.9746 25.7638 20.0106 26.2044 20.0545 26.6437H30.5474C30.4968 27.095 30.4236 27.5383 30.3317 27.975H20.2635C20.3553 28.429 20.4738 28.8709 20.6109 29.3062H29.9883C29.8452 29.7588 29.6777 30.2032 29.4864 30.6375H21.1115C21.3125 31.0954 21.5388 31.5401 21.7891 31.9688H28.7968C28.5275 32.4304 28.2301 32.8749 27.9062 33.3H22.677C23.0312 33.7686 23.4132 34.2146 23.8246 34.6312H26.7733C26.3151 35.1045 25.8225 35.5432 25.2996 35.9439C27.5987 37.6842 30.4036 38.6257 33.2871 38.625C40.6396 38.625 46.5996 32.6637 46.5996 25.3125C46.5996 17.9613 40.6396 12 33.2871 12Z" fill="#FED049"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-8 lg:col-span-4">
                    <div>
                        <h3 class="mb-4 font-medium text-white">Company</h3>
                        <ul class="space-y-3 *:text-gray-400 *:transition-colors *:hover:text-white">
                            <li><a href="{{ route('about') }}">About Tarbiya</a></li>
                            <li><a href="#">The Need</a></li>
                            <li><a href="#">Methodology</a></li>
                            <li><a href="/#pricing">Pricing</a></li>
                            <li><a href="/#faq">FAQ</a></li>
                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="mb-4 font-medium text-white">Useful Links</h3>
                        <ul class="cursor-pointer space-y-3 *:text-gray-400 *:transition-colors *:hover:text-white">
                            <li><a @click.prevent="showLegalModal = true; activeLegalTab = 'terms'">Terms of Use</a></li>
                            <li><a @click.prevent="showLegalModal = true; activeLegalTab = 'privacy'">Privacy Policy</a></li>
                            <li><a @click.prevent="showLegalModal = true; activeLegalTab = 'cookies'">Cookie Policy</a></li>
                            <li><a @click.prevent="showLegalModal = true; activeLegalTab = 'takedown'">Takedown Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <hr class="h-px w-full text-gray-600" />

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-4">
                <div class="space-y-3">
                    <h4 class="text-sm font-medium text-white">Tarbiyah Head Office</h4>
                    <div class="text-light-gray/80 text-xs leading-relaxed">
                        <p>Tarbiyah, Inc</p>
                        <p>256 Chapman, Road STE</p>
                        <p>105-4 Delaware City,</p>
                        <p>DE 10702, USA</p>
                    </div>
                </div>

                <div class="space-y-3">
                    <h4 class="text-sm font-medium text-white">Kuwait Office</h4>
                    <div class="text-light-gray/80 text-xs leading-relaxed">
                        <p>Villa 5, Salem Mubarak St.</p>
                        <p>Salmiya, Kuwait.</p>
                    </div>
                </div>

                <div class="space-y-4">
                    <h4 class="text-sm font-medium text-white">Social Media Links</h4>
                    <div class="flex flex-wrap gap-2">
                        <a aria-label="Facebook" class="flex size-10 items-center justify-center rounded-full border-2 border-gray-500 text-white transition-all hover:bg-gray-500 active:scale-95" href="https://www.facebook.com/tarbiya.me" rel="noopener noreferrer" target="_blank">
                            <i class="ri-facebook-fill text-lg"></i>
                        </a>
                        <a aria-label="TikTok" class="flex size-10 items-center justify-center rounded-full border-2 border-gray-500 text-white transition-all hover:bg-gray-500 active:scale-95" href="https://www.tiktok.com/@tarbiya.me" rel="noopener noreferrer" target="_blank">
                            <i class="ri-tiktok-line text-lg"></i>
                        </a>
                        <a aria-label="Instagram" class="flex size-10 items-center justify-center rounded-full border-2 border-gray-500 text-white transition-all hover:bg-gray-500 active:scale-95" href="https://www.instagram.com/tarbiya.me" rel="noopener noreferrer" target="_blank">
                            <i class="ri-instagram-line text-lg"></i>
                        </a>
                        <!-- <a aria-label="LinkedIn" class="flex size-10 items-center justify-center rounded-full border-2 border-gray-500 text-white transition-all hover:bg-gray-500 active:scale-95" href="#" rel="noopener noreferrer" target="_blank">
                <i class="ri-linkedin-fill text-lg"></i>
              </a>
              <a aria-label="WhatsApp" class="flex size-10 items-center justify-center rounded-full border-2 border-gray-500 text-white transition-all hover:bg-gray-500 active:scale-95" href="#" rel="noopener noreferrer" target="_blank">
                <i class="ri-whatsapp-line text-lg"></i>
              </a> -->
                    </div>
                </div>
            </div>

            <hr class="h-px w-full text-gray-600" />

            <div class="text-xs font-normal text-white">
                <p>&copy; Tarbiya <span x-text="currentYear"></span>, All Rights Reserved to Tarbiya, Inc. Use of website constitutes acceptance of Tarbiya's <a @click.prevent="showLegalModal = true; activeLegalTab = 'terms'" class="text-red-100 underline" href="#">Terms Of Use</a> and <a @click.prevent="showLegalModal = true; activeLegalTab = 'privacy'" class="text-red-100 underline" href="#">Privacy Policy</a>.</p>
            </div>
        </div>
    </footer>

    <!-- Advanced Cookie Consent Banner -->
    <div x-data="{
        showCookieBanner: !localStorage.getItem('cookiePreferences'),
        showSettings: false,
        cookiePreferences: JSON.parse(localStorage.getItem('cookiePreferences')) || { essential: true, analytics: false, marketing: false },
    
        savePreferences(type) {
            if (type === 'all') {
                this.cookiePreferences = { essential: true, analytics: true, marketing: true };
            } else if (type === 'necessary') {
                this.cookiePreferences = { essential: true, analytics: false, marketing: false };
            }
            localStorage.setItem('cookiePreferences', JSON.stringify(this.cookiePreferences));
            this.showCookieBanner = false;
            this.showSettings = false;
        }
    }" x-init="$watch('showCookieBanner', value => { if (value) document.body.style.overflow = ''; })">
        <!-- Main Toast Notification -->
        <div class="z-90 fixed bottom-4 left-4 right-4 rounded-3xl border border-gray-100 bg-white p-6 shadow-2xl md:bottom-6 md:left-6 md:right-auto md:max-w-lg" style="display: none" x-show="showCookieBanner && !showSettings" x-transition:enter-end="opacity-100 translate-y-0" x-transition:enter-start="opacity-0 translate-y-10" x-transition:enter="transition ease-out duration-500" x-transition:leave-end="opacity-0 translate-y-10" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-300">
            <div class="flex items-start gap-4">
                <div class="flex h-10 w-10 shrink-0 items-center justify-center rounded-full bg-orange-100">
                    <i class="ri-cookie-line text-xl text-orange-500"></i>
                </div>
                <div class="flex-1 space-y-4">
                    <div class="space-y-1">
                        <h3 class="text-base font-bold text-gray-900">Your Privacy</h3>
                        <p class="text-xs leading-relaxed text-gray-600">We use cookies to personalize content, provide social media features, and analyze our traffic. Please choose your preferences below.</p>
                    </div>
                    <div class="flex flex-col gap-2 sm:flex-row">
                        <button @click="savePreferences('all')" class="flex-1 rounded-full bg-gray-900 px-4 py-2.5 text-center text-xs font-semibold text-white transition-all hover:bg-gray-800">Accept All</button>
                        <button @click="savePreferences('necessary')" class="flex-1 rounded-full bg-gray-100 px-4 py-2.5 text-center text-xs font-semibold text-gray-900 transition-all hover:bg-gray-200">Reject Non-Essential</button>
                    </div>
                    <button @click="showSettings = true" class="block w-full text-center text-xs font-medium text-gray-500 underline transition-colors hover:text-gray-900">Manage Preferences</button>
                </div>
            </div>
        </div>

        <!-- Advanced Settings Modal Overlay -->
        <div class="z-100 fixed inset-0 flex items-center justify-center bg-gray-900/60 p-4 backdrop-blur-sm" style="display: none" x-show="showSettings" x-transition.opacity>
            <div @click.away="showSettings = false" class="no-scrollbar relative max-h-[90vh] w-full max-w-lg overflow-y-auto rounded-3xl bg-white p-6 shadow-2xl md:p-8">
                <button @click="showSettings = false" class="absolute right-6 top-6 text-gray-400 transition-colors hover:text-gray-900">
                    <i class="ri-close-line text-xl"></i>
                </button>

                <div class="mb-6 space-y-2">
                    <h2 class="text-xl font-bold text-gray-900">Cookie Preferences</h2>
                    <p class="text-xs text-gray-600">Manage how we use cookies on your device. Essential cookies cannot be disabled as they are strictly required for the website to function.</p>
                </div>

                <div class="space-y-4 divide-y divide-gray-100">
                    <!-- Essential -->
                    <div class="flex items-start justify-between py-4">
                        <div class="pr-4">
                            <h4 class="flex items-center gap-2 font-semibold text-gray-900">Strictly Necessary <i class="ri-lock-fill text-xs text-gray-400"></i></h4>
                            <p class="mt-1 text-xs text-gray-500">Required for the website to function and cannot be switched off.</p>
                        </div>
                        <div class="relative inline-flex h-6 w-11 shrink-0 cursor-not-allowed items-center rounded-full bg-teal-500">
                            <span class="inline-block h-4 w-4 translate-x-6 rounded-full bg-white"></span>
                        </div>
                    </div>

                    <!-- Analytics -->
                    <div class="flex items-start justify-between py-4">
                        <div class="pr-4">
                            <h4 class="font-semibold text-gray-900">Analytics</h4>
                            <p class="mt-1 text-xs text-gray-500">Helps us understand how visitors interact with the website.</p>
                        </div>
                        <button :class="cookiePreferences.analytics ? 'bg-teal-500' : 'bg-gray-200'" @click="cookiePreferences.analytics = !cookiePreferences.analytics" class="relative inline-flex h-6 w-11 shrink-0 cursor-pointer items-center rounded-full transition-colors focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">
                            <span :class="cookiePreferences.analytics ? 'translate-x-6' : 'translate-x-1'" class="inline-block h-4 w-4 rounded-full bg-white transition-transform"></span>
                        </button>
                    </div>

                    <!-- Marketing -->
                    <div class="flex items-start justify-between py-4">
                        <div class="pr-4">
                            <h4 class="font-semibold text-gray-900">Marketing</h4>
                            <p class="mt-1 text-xs text-gray-500">Used to deliver advertisements relevant to you and your interests.</p>
                        </div>
                        <button :class="cookiePreferences.marketing ? 'bg-teal-500' : 'bg-gray-200'" @click="cookiePreferences.marketing = !cookiePreferences.marketing" class="relative inline-flex h-6 w-11 shrink-0 cursor-pointer items-center rounded-full transition-colors focus:ring-2 focus:ring-teal-500 focus:ring-offset-2">
                            <span :class="cookiePreferences.marketing ? 'translate-x-6' : 'translate-x-1'" class="inline-block h-4 w-4 rounded-full bg-white transition-transform"></span>
                        </button>
                    </div>
                </div>

                <div class="mt-8 flex gap-3">
                    <button @click="savePreferences('custom')" class="flex-1 rounded-full bg-gray-900 px-4 py-3 text-center text-xs font-semibold text-white transition-all hover:bg-gray-800">Save Preferences</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Jump To Top Button -->
    <button aria-label="Jump to top" class="fixed bottom-6 right-6 z-50 hidden size-12 items-center justify-center rounded-full bg-gray-800 text-white shadow-lg transition-all duration-300 hover:scale-110 hover:bg-gray-700" id="jump_to_top">
        <i class="ri-arrow-up-line text-lg"></i>
    </button>

    <!-- Toast Notifications -->
    <div @toast.window="add($event.detail)" class="z-110 fixed right-4 top-20 flex flex-col gap-3 md:right-6 md:top-24" x-data="{
        toasts: [],
        add(detail) {
            const id = Date.now() + Math.random();
            this.toasts.push({ id, type: detail.type || 'success', message: detail.message });
            setTimeout(() => this.remove(id), 45000);
        },
        remove(id) { this.toasts = this.toasts.filter(t => t.id !== id); }
    }">
        <template :key="toast.id" x-for="toast in toasts">
            <div :class="toast.type === 'error' ? 'border-red-200' : 'border-emerald-200'" class="min-w-70 flex max-w-sm items-center gap-3 rounded-2xl border bg-white px-4 py-3 shadow-xl" x-transition:enter-end="opacity-100 translate-x-0" x-transition:enter-start="opacity-0 translate-x-6" x-transition:enter="transition ease-out duration-300" x-transition:leave-end="opacity-0 translate-x-6" x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-200">
                <i :class="toast.type === 'error' ? 'ri-error-warning-fill text-red-500' : 'ri-checkbox-circle-fill text-emerald-500'" class="mt-0.5 text-xl"></i>
                <div class="flex-1 text-sm font-medium text-gray-800" x-text="toast.message"></div>
                <button @click="remove(toast.id)" class="text-gray-400 hover:text-gray-700" type="button"><i class="ri-close-line"></i></button>
            </div>
        </template>
    </div>

    <!-- Legal Modal -->
    <div class="z-100 fixed inset-0 flex items-center justify-center p-4 sm:p-6" style="display: none" x-show="showLegalModal">
        <div @click="showLegalModal = false" class="fixed inset-0 bg-black/60 backdrop-blur-sm" x-show="showLegalModal" x-transition.opacity></div>
        <div class="relative z-10 flex max-h-[90vh] w-full max-w-4xl flex-col overflow-hidden rounded-3xl bg-white shadow-2xl" x-show="showLegalModal" x-transition.scale.95>
            <!-- Modal Header & Tabs -->
            <div class="flex items-center justify-between border-b border-gray-200 px-6 py-4 sm:px-10">
                <div class="*:-mb-4.25 flex space-x-6 *:pb-4 *:text-base *:font-semibold *:transition-colors">
                    <button :class="activeLegalTab === 'terms' ? 'border-b-2 border-gray-900 text-gray-900' : 'text-gray-500 hover:text-gray-700'" @click="activeLegalTab = 'terms'">Terms of Use</button>
                    <button :class="activeLegalTab === 'privacy' ? 'border-b-2 border-gray-900 text-gray-900' : 'text-gray-500 hover:text-gray-700'" @click="activeLegalTab = 'privacy'">Privacy Policy</button>
                    <button :class="activeLegalTab === 'cookies' ? 'border-b-2 border-gray-900 text-gray-900' : 'text-gray-500 hover:text-gray-700'" @click="activeLegalTab = 'cookies'">Cookie Policy</button>
                    <button :class="activeLegalTab === 'takedown' ? 'border-b-2 border-gray-900 text-gray-900' : 'text-gray-500 hover:text-gray-700'" @click="activeLegalTab = 'takedown'">Takedown Policy</button>
                </div>
                <button @click="showLegalModal = false" class="flex size-10 items-center justify-center rounded-full bg-gray-100 text-gray-600 transition-colors hover:bg-gray-200">
                    <i class="ri-close-line text-lg"></i>
                </button>
            </div>

            <!-- Modal Content -->
            <div class="overflow-y-auto p-6 sm:p-10">
                <!-- Terms Content -->
                <div class="prose prose-sm sm:prose-base max-w-none text-gray-600" x-show="activeLegalTab === 'terms'">
                    <h2>TERMS OF USE: TARBIYA.ME</h2>
                    <p><strong>Effective Date: February 2026</strong></p>

                    <p>These Terms of Use ("Terms") constitute a legally binding agreement between you and Tarbiya.me (operated by its parent entity, a Delaware Corporation). By accessing our website or mobile application (collectively, the "Service"), you agree to comply with and be bound by these Terms and the laws of the State of Delaware, USA.</p>

                    <h3>1. THE SERVICE & METHODOLOGY</h3>
                    <p>Tarbiya.me provides an online learning environment dedicated to imparting Islamic knowledge rooted in the Qur’an, the authentic Sunnah, and the methodology of the Salaf-us-Salih.</p>
                    <ul>
                        <li><strong>Educational Purpose:</strong> The Service is intended for educational use. While we strive for absolute accuracy according to the stated methodology, users are encouraged to apply knowledge under the guidance of qualified teachers.</li>
                        <li><strong>Manhaj Integrity:</strong> We reserve the right to remove any user-generated content or commentary that contradicts the methodology of the Salaf-us-Salih.</li>
                    </ul>

                    <h3>2. USER ACCOUNTS & ELIGIBILITY</h3>
                    <ul>
                        <li><strong>Delaware Compliance:</strong> In accordance with the Children's Online Privacy Protection Act (COPPA), users under 13 must have explicit parental consent.</li>
                        <li><strong>Account Responsibility:</strong> You are solely responsible for all activity under your account. You must notify us immediately of any unauthorized use.</li>
                        <li><strong>Account Sharing:</strong> Accounts are for individual or single-household use only. Sharing credentials to bypass subscription levels is a breach of these Terms.</li>
                    </ul>

                    <h3>3. SUBSCRIPTIONS, LEVELS, AND PAYMENTS</h3>
                    <ul>
                        <li><strong>Subscription Model:</strong> Access to the structured curriculum levels is granted via a paid subscription.</li>
                        <li><strong>Auto-Renewal:</strong> Unless canceled, subscriptions automatically renew at the then-current rate.</li>
                        <li><strong>Refund Policy:</strong> To the extent permitted by Delaware law, all sales are final. Since our curriculum is delivered digitally, access to the proprietary "Level-Based" content constitutes a completed service.</li>
                        <li><strong>Taxes:</strong> Users are responsible for any applicable sales or use taxes based on their location.</li>
                    </ul>

                    <h3>4. INTELLECTUAL PROPERTY RIGHTS (PROPRIETARY CONTENT)</h3>
                    <p>Tarbiya.me and its content are protected by United States and international copyright, trademark, and other intellectual property laws.</p>
                    <ul>
                        <li><strong>Ownership:</strong> All lesson plans, video content, quiz modules, and the "Level-Based Progression" algorithm are the exclusive property of Tarbiya.me.</li>
                        <li><strong>Strict Prohibition on Recording:</strong> Users are strictly prohibited from screen-recording, downloading (unless offline viewing is specifically enabled in-app), or redistributing our content.</li>
                        <li><strong>Copyright Infringement:</strong> We actively monitor for unauthorized distribution. Violation will result in immediate termination of access without refund and potential legal action under the DMCA.</li>
                    </ul>

                    <h3>5. PROHIBITED CONDUCT</h3>
                    <p>You agree not to:</p>
                    <ul>
                        <li>Use the Service for any commercial or public teaching purpose without a specific "Institutional License."</li>
                        <li>"Scrape" or use automated systems to extract data or content.</li>
                        <li>Post or transmit content that is sectarian, extremist, or inconsistent with the authentic Sunnah and the way of the Salaf.</li>
                    </ul>

                    <h3>6. DISCLAIMER OF WARRANTIES & LIMITATION OF LIABILITY</h3>
                    <ul>
                        <li><strong>"As Is" Basis:</strong> The Service is provided without warranties of any kind, either express or implied.</li>
                        <li><strong>Limitation of Liability:</strong> To the fullest extent permitted by Delaware law, Tarbiya.me shall not be liable for any indirect, incidental, special, or consequential damages. Our total liability for any claim shall not exceed the amount paid by you for the Service in the 12 months preceding the claim.</li>
                    </ul>

                    <h3>7. INDEMNIFICATION</h3>
                    <p>You agree to indemnify and hold harmless Tarbiya.me and its officers from any claims, damages, or expenses (including attorney's fees) arising from your use of the Service or your violation of these Terms.</p>

                    <h3>8. GOVERNING LAW & DISPUTE RESOLUTION</h3>
                    <ul>
                        <li><strong>Jurisdiction:</strong> These Terms are governed by the laws of the State of Delaware, USA, without regard to its conflict of law principles.</li>
                        <li><strong>Binding Arbitration:</strong> Any dispute arising out of or relating to these Terms shall be settled by binding arbitration in the State of Delaware, rather than in court, except that you may assert claims in small claims court if your claims qualify.</li>
                        <li><strong>Class Action Waiver:</strong> You agree that any dispute resolution will be conducted only on an individual basis and not in a class, consolidated, or representative action.</li>
                    </ul>

                    <h3>9. CHANGES TO TERMS</h3>
                    <p>We reserve the right to modify these Terms at any time. We will notify users of significant changes via the email associated with their account. Continued use of the Service after changes constitutes acceptance of the new Terms.</p>
                </div>

                <!-- Privacy Content -->
                <div class="prose prose-sm sm:prose-base max-w-none text-gray-600" style="display: none" x-show="activeLegalTab === 'privacy'">
                    <h2>PRIVACY POLICY: TARBIYA.ME</h2>
                    <p><strong>Effective Date: February 2026</strong></p>

                    <p>Tarbiya.me (referred to as "we," "us," or "our") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, and safeguard your information when you visit our website, use our mobile application, and interact with our advertising campaigns.</p>

                    <h3>1. INFORMATION WE COLLECT</h3>
                    <p>We collect information that you provide directly to us and information that is collected automatically through your use of the Service.</p>
                    <ul>
                        <li><strong>Personal Information:</strong> Name, email address, age (to determine curriculum level), and payment information (processed via secure third-party gateways).</li>
                        <li><strong>Usage Data:</strong> Your IP address, browser type, device information, and progress within the level-based curriculum.</li>
                        <li><strong>Children’s Data:</strong> We take the privacy of minors seriously. We do not knowingly collect personal data from children under 13 without verifiable parental consent. Parents are the primary account holders for minors.</li>
                    </ul>

                    <h3>2. THIRD-PARTY ADVERTISING & TRACKING</h3>
                    <p>To grow our community and reach new students, we use third-party advertising platforms. These platforms may use cookies, pixels, and web beacons to collect data about your interactions with our Service.</p>
                    <ul>
                        <li><strong>Google Ads & Analytics:</strong> We use Google tags to analyze user behavior and serve "Remarketing" ads. This means if you visit Tarbiya.me, you may see our ads on other Google-affiliated sites.</li>
                        <li><strong>Facebook (Meta) Pixel:</strong> We use the Facebook Pixel to measure the effectiveness of our social media ads and to create "Lookalike Audiences" to find new students interested in authentic Islamic learning.</li>
                        <li><strong>Conversion Tracking:</strong> We track when a user clicks an ad and subsequently signs up for a subscription to optimize our marketing spend.</li>
                    </ul>

                    <h3>3. HOW WE USE YOUR INFORMATION</h3>
                    <p>We use the collected data to:</p>
                    <ul>
                        <li>Deliver the structured curriculum based on your assigned level.</li>
                        <li>Process subscription payments and provide customer support.</li>
                        <li>Send platform updates, new lesson notifications, and newsletters (you may opt-out at any time).</li>
                        <li>Improve our website and app functionality based on user behavior.</li>
                    </ul>

                    <h3>4. DATA SHARING & DISCLOSURE</h3>
                    <p>We do not sell your personal information. We only share data with:</p>
                    <ul>
                        <li><strong>Service Providers:</strong> Cloud hosting (AWS/Google Cloud), payment processors (Stripe/PayPal), and email automation tools.</li>
                        <li><strong>Legal Requirements:</strong> If required by Delaware or Federal law, or to protect the methodology and intellectual property of Tarbiya.me.</li>
                    </ul>

                    <h3>5. YOUR PRIVACY RIGHTS</h3>
                    <p>Depending on your location (e.g., California or the EU), you may have the following rights:</p>
                    <ul>
                        <li><strong>Access & Portability:</strong> Request a copy of the data we hold about you.</li>
                        <li><strong>Correction/Deletion:</strong> Request that we fix or delete your personal information.</li>
                        <li><strong>Opt-Out of Tracking:</strong> You can set your browser to refuse cookies or use "Do Not Track" signals. You can also opt-out of Google’s use of cookies by visiting Google’s Ad Settings.</li>
                    </ul>

                    <h3>6. SECURITY</h3>
                    <p>We implement industry-standard security measures, including SSL encryption and secure database protocols, to protect your data. However, no electronic transmission over the internet is 100% secure; we cannot guarantee absolute security.</p>

                    <h3>7. INTERNATIONAL DATA TRANSFERS</h3>
                    <p>Tarbiya.me is operated in the United States. If you are accessing the Service from outside the USA, please be aware that your information will be transferred to, stored, and processed in the United States.</p>

                    <h3>8. COPPA COMPLIANCE (FOR CHILDREN)</h3>
                    <p>Our Service is designed for family use.</p>
                    <ul>
                        <li>Parents must create the account for any child under the age of 13.</li>
                        <li>We do not display behavioral advertising to users identified as children within the app.</li>
                        <li>Parents have the right to review or delete their child's progress data at any time.</li>
                    </ul>

                    <h3>9. CHANGES TO THIS POLICY</h3>
                    <p>We may update this Privacy Policy periodically. We will notify you of any changes by posting the new policy on this page and updating the "Effective Date."</p>

                    <h3>10. CONTACT US</h3>
                    <p>
                        For any questions regarding this Privacy Policy or your data, please contact:<br />
                        Data Protection Officer<br />
                        Tarbiya.me (Delaware Corp.)<br />
                        Email: <a href="mailto:privacy@tarbiya.me">privacy@tarbiya.me</a>
                    </p>
                </div>

                <!-- Cookie Content -->
                <div class="prose prose-sm sm:prose-base max-w-none text-gray-600" style="display: none" x-show="activeLegalTab === 'cookies'">
                    <h2>COOKIE POLICY: TARBIYA.ME</h2>
                    <p><strong>Effective Date: February 2026</strong></p>

                    <p>This Cookie Policy explains how Tarbiya.me uses cookies and similar technologies to recognize you when you visit our website or use our mobile application. It explains what these technologies are, why we use them, and your rights to control our use of them.</p>

                    <h3>1. WHAT ARE COOKIES?</h3>
                    <p>Cookies are small data files that are placed on your computer or mobile device when you visit a website. Cookies are widely used by website owners in order to make their websites work, or to work more efficiently, as well as to provide reporting information.</p>

                    <h3>2. WHY DO WE USE COOKIES?</h3>
                    <p>We use first-party and third-party cookies for several reasons:</p>
                    <ul>
                        <li><strong>Essential Cookies:</strong> Required for the technical operation of our platform (e.g., to keep you logged into your specific learning level).</li>
                        <li><strong>Performance & Analytics:</strong> To help us understand how students use our app and website so we can improve the user interface.</li>
                        <li><strong>Advertising:</strong> To deliver relevant ads about our Islamic curriculum to you on other platforms (Remarketing).</li>
                    </ul>

                    <h3>3. TYPES OF COOKIES WE USE</h3>
                    <h4>A. Essential Website Cookies</h4>
                    <p>These cookies are strictly necessary to provide you with the services available through our Website and App.</p>
                    <ul>
                        <li><strong>Purpose:</strong> Authenticating your account, preventing fraud, and remembering your curriculum progress.</li>
                        <li><strong>Requirement:</strong> These cannot be turned off as the site will not function without them.</li>
                    </ul>

                    <h4>B. Analytics and Customization Cookies</h4>
                    <p>These cookies collect information in aggregate form to help us understand how effective our marketing campaigns are or to help us customize our Website for you.</p>
                    <ul>
                        <li><strong>Google Analytics:</strong> We use this to track which lessons are most popular and where our users are located.</li>
                    </ul>

                    <h4>C. Advertising and Targeting Cookies</h4>
                    <p>These cookies are used to make advertising messages more relevant to you and your interests in Islamic education.</p>
                    <ul>
                        <li><strong>Google Ads (Remarketing):</strong> These cookies allow us to show Tarbiya.me ads to users who have previously visited our site when they browse other websites.</li>
                        <li><strong>Facebook (Meta) Pixel:</strong> We use this to measure the conversion rate of our Facebook/Instagram ads and to ensure we are reaching families who value the methodology of the Salaf.</li>
                    </ul>

                    <h3>4. OTHER TRACKING TECHNOLOGIES</h3>
                    <p>We may also use "web beacons" or "pixels" in our emails. These allow us to know if an email has been opened or if a link has been clicked. This helps us ensure we aren't sending too many emails and that the content we send (such as new lesson alerts) is useful to our students.</p>

                    <h3>5. YOUR CONTROLS AND CHOICES</h3>
                    <p>You have the right to decide whether to accept or reject cookies.</p>
                    <ul>
                        <li><strong>Cookie Consent Banner:</strong> When you first visit Tarbiya.me, you can choose to "Accept All" or "Manage Settings" to disable non-essential cookies.</li>
                        <li><strong>Browser Settings:</strong> You can set your browser to refuse all cookies. Each browser is different, so check your browser's "Help" menu.</li>
                        <li><strong>Mobile Device Settings:</strong> On your iOS or Android device, you can control whether apps can track your activity for advertising purposes through your privacy settings.</li>
                        <li><strong>Google Opt-Out:</strong> You can opt-out of Google Analytics by installing Google's opt-out browser add-on.</li>
                    </ul>

                    <h3>6. UPDATES TO THIS POLICY</h3>
                    <p>We may update this Cookie Policy from time to time to reflect changes in the technologies we use or for legal reasons. Any changes will be posted here with an updated "Effective Date."</p>

                    <h3>7. CONTACT US</h3>
                    <p>If you have any questions about our use of cookies or other technologies, please email us at: <a href="mailto:legal@tarbiya.me">legal@tarbiya.me</a>.</p>
                </div>

                <!-- Takedown Content -->
                <div class="prose prose-sm sm:prose-base max-w-none text-gray-600" style="display: none" x-show="activeLegalTab === 'takedown'">
                    <h2>TAKEDOWN POLICY (DMCA): TARBIYA.ME</h2>
                    <p><strong>Effective Date: February 2026</strong></p>

                    <p>Tarbiya.me respects the intellectual property rights of others and expects its users to do the same. In accordance with the Digital Millennium Copyright Act of 1998 (DMCA), we will respond expeditiously to claims of copyright infringement committed using the Tarbiya.me service that are reported to our Designated Copyright Agent.</p>

                    <h3>1. REPORTING COPYRIGHT INFRINGEMENT</h3>
                    <p>If you are a copyright owner, or are authorized to act on behalf of one, and you believe that any content on Tarbiya.me infringes upon your copyrights, please submit a notification containing the following information:</p>
                    <ul>
                        <li>A physical or electronic signature of a person authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.</li>
                        <li>Identification of the copyrighted work claimed to have been infringed, or, if multiple copyrighted works at a single online site are covered by a single notification, a representative list of such works at that site.</li>
                        <li>Identification of the material that is claimed to be infringing or to be the subject of infringing activity and that is to be removed or access to which is to be disabled, and information reasonably sufficient to permit us to locate the material (e.g., a specific URL).</li>
                        <li>Information reasonably sufficient to permit us to contact you, such as an address, telephone number, and, if available, an email address.</li>
                        <li>A statement that you have a good faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or the law.</li>
                        <li>A statement that the information in the notification is accurate, and under penalty of perjury, that you are authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.</li>
                    </ul>

                    <h3>2. DESIGNATED COPYRIGHT AGENT</h3>
                    <p>Please send your DMCA notice to our Designated Copyright Agent at:</p>
                    <p>
                        <strong>Copyright Agent</strong><br />
                        Tarbiya.me (Delaware Corp.)<br />
                        Email: <a href="mailto:legal@tarbiya.me">legal@tarbiya.me</a>
                    </p>

                    <h3>3. COUNTER-NOTIFICATION</h3>
                    <p>If you believe that your content that was removed (or to which access was disabled) is not infringing, or that you have the authorization from the copyright owner, the copyright owner's agent, or pursuant to the law, to post and use the material in your content, you may send a counter-notice containing the following information to the Copyright Agent:</p>
                    <ul>
                        <li>Your physical or electronic signature.</li>
                        <li>Identification of the content that has been removed or to which access has been disabled and the location at which the content appeared before it was removed or disabled.</li>
                        <li>A statement that you have a good faith belief that the content was removed or disabled as a result of mistake or a misidentification of the content.</li>
                        <li>Your name, address, telephone number, and email address, a statement that you consent to the jurisdiction of the federal court in Delaware, and a statement that you will accept service of process from the person who provided notification of the alleged infringement.</li>
                    </ul>

                    <h3>4. REPEAT INFRINGERS</h3>
                    <p>In accordance with the DMCA and other applicable law, Tarbiya.me has adopted a policy of terminating, in appropriate circumstances and at our sole discretion, users who are deemed to be repeat infringers. We may also at our sole discretion limit access to the Service and/or terminate the accounts of any users who infringe any intellectual property rights of others, whether or not there is any repeat infringement.</p>
                </div>
            </div>
        </div>
    </div>

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
