<x-layout>
    <!-- Hero Section -->
    <section class="relative min-h-screen overflow-hidden">
        <!-- Hero Swiper -->
        <div class="hero-swiper absolute inset-0">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="h-full w-full bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(&quot;{{ Vite::asset('resources/images/slider-1.jpg') }}&quot;)"></div>
                </div>
                <div class="swiper-slide">
                    <div class="h-full w-full bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(&quot;{{ Vite::asset('resources/images/slider-2.jpg') }}&quot;)"></div>
                </div>
                <div class="swiper-slide">
                    <div class="h-full w-full bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(&quot;{{ Vite::asset('resources/images/slider-3.jpg') }}&quot;)"></div>
                </div>
            </div>
            <!-- Navigation -->
            <div class="swiper-button-prev z-20! text-white! max-md:scale-50"></div>
            <div class="swiper-button-next z-20! text-white! max-md:scale-50"></div>
            <!-- Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <!-- Hero Content Overlay -->
        <div class="z-5 absolute inset-0" id="tsparticles"></div>
        <div class="relative z-10 flex min-h-screen items-center justify-center px-4 pb-10 pt-20 text-center sm:px-6">
            <div class="w-full max-w-7xl space-y-8">
                <div class="inline-flex items-center gap-1 rounded-full bg-white px-4 py-1 text-xs text-black">
                    <i class="ri-arrow-right-circle-fill text-lg"></i>
                    <span>Coming Soon</span>
                </div>

                <h1 class="heading-1 leading-normal text-white">A structured learning platform on authentic Islamic knowledge for all levels.</h1>
                <p class="text-body-lg font-sora mx-auto text-white/90">Tarbiya is a structured learning platform on everything about Islam based on Quran, Sunnah and the methodology of the salaf.</p>

                <a class="group relative inline-flex items-center justify-center rounded-full text-xs font-semibold transition-all duration-300 hover:scale-105 active:scale-95 md:text-sm" href="#newsletter-section">
                    <!-- Outer Glow -->
                    <div class="bg-linear-to-r absolute inset-0 rounded-full from-yellow-400 to-orange-500 opacity-0 blur-xl transition-opacity duration-500 group-hover:opacity-60"></div>

                    <!-- Rotating radar beam -->
                    <div class="absolute inset-px overflow-hidden rounded-full bg-black/20 backdrop-blur-lg transition-colors duration-300 group-hover:bg-black/40">
                        <div class="absolute left-1/2 top-1/2 h-[500%] w-[500%] -translate-x-1/2 -translate-y-1/2 animate-spin bg-[conic-gradient(from_90deg_at_50%_50%,rgba(246,172,29,0)_0%,rgba(246,172,29,0.7)_50%,rgba(246,172,29,0)_100%)] opacity-50 transition-opacity duration-500 group-hover:opacity-100" style="animation-duration: 4s"></div>
                    </div>

                    <!-- Border Lines -->
                    <div class="absolute inset-0 rounded-full border border-white/20 transition-colors duration-300 group-hover:border-white/40"></div>
                    <!-- Inner Border for 3D effect -->
                    <div class="absolute inset-px rounded-full border border-white/10"></div>

                    <!-- Content -->
                    <div class="relative z-10 flex items-center gap-2 px-2 py-2">
                        <span class="px-2 font-medium tracking-wide text-white drop-shadow-md md:px-4">Join the Waiting List</span>
                        <div class="bg-linear-to-br flex size-10 items-center justify-center rounded-full from-yellow-300 via-orange-500 to-red-500 shadow-[0_0_15px_rgba(246,172,29,0.5)] transition-all duration-300 group-hover:translate-x-1 group-hover:shadow-[0_0_25px_rgba(246,172,29,0.8)] md:size-11">
                            <i class="ri-arrow-right-line text-lg text-white md:text-xl"></i>
                        </div>
                    </div>

                    <!-- Sheen effect over the button -->
                    <div class="pointer-events-none absolute inset-0 z-20 overflow-hidden rounded-full">
                        <div class="bg-linear-to-r absolute -left-full top-0 h-full w-[50%] skew-x-[-20deg] from-transparent via-white/20 to-transparent transition-all duration-700 ease-in-out group-hover:left-[150%]"></div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <main class="relative bg-yellow-100/10">
        <!-- Background 3D Objects & Patterns for the entire main area -->
        <div class="pointer-events-none absolute inset-0 z-0 overflow-hidden">
            <!-- Main subtle grid pattern -->
            <div class="mask-[radial-gradient(ellipse_60%_50%_at_50%_50%,#000_70%,transparent_100%)] bg-size-[4rem_4rem] absolute inset-0 bg-[linear-gradient(to_right,#f0f0f0_1px,transparent_1px),linear-gradient(to_bottom,#f0f0f0_1px,transparent_1px)] opacity-30"></div>

            <!-- Animated gradient blobs -->
            <div class="h-125 w-125 absolute left-[-10%] top-[5%] animate-[float-slow_15s_ease-in-out_infinite_alternate] rounded-full bg-amber-300 opacity-20 mix-blend-multiply blur-[100px] filter"></div>
            <div class="h-150 w-150 absolute right-[-20%] top-[40%] animate-[float-fast_12s_ease-in-out_infinite_alternate-reverse] rounded-full bg-orange-300 opacity-20 mix-blend-multiply blur-[120px] filter delay-700"></div>
            <div class="h-100 w-100 absolute left-[20%] top-[75%] animate-[float-slow_20s_ease-in-out_infinite_alternate] rounded-full bg-yellow-200 opacity-30 mix-blend-multiply blur-[90px] filter delay-1000"></div>

            <!-- Floating abstract rings -->
            <div class="absolute left-[15%] top-[60%] animate-[float-fast_8s_ease-in-out_infinite_alternate]">
                <div class="h-16 w-16 rounded-full border-4 border-amber-500/20"></div>
            </div>
            <div class="absolute right-[25%] top-[85%] animate-[float-slow_10s_ease-in-out_infinite_alternate-reverse] delay-300">
                <div class="h-24 w-24 rounded-full border-2 border-orange-500/10"></div>
            </div>

            <!-- 3D SVGs -->
            <!-- Floating 3D Sphere -->
            <div class="float-3d absolute -left-20 top-[2%] opacity-30" style="animation-duration: 20s">
                <svg height="300" viewBox="0 0 200 200" width="300" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <radialGradient cx="30%" cy="30%" id="sphereGrad1" r="70%">
                            <stop offset="0%" stop-color="#FCD34D" />
                            <stop offset="50%" stop-color="#F59E0B" />
                            <stop offset="100%" stop-color="#B45309" />
                        </radialGradient>
                        <filter height="140%" id="shadow1" width="140%" x="-20%" y="-20%">
                            <feDropShadow dx="15" dy="20" flood-opacity="0.3" stdDeviation="15" />
                        </filter>
                    </defs>
                    <circle cx="100" cy="100" fill="url(#sphereGrad1)" filter="url(#shadow1)" r="70" />
                </svg>
            </div>

            <!-- Spinning 3D Torus -->
            <div class="spin-3d absolute right-[-5%] top-[20%] opacity-20" style="animation-duration: 30s">
                <svg height="400" viewBox="0 0 200 200" width="400" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="torusGrad" x1="0%" x2="100%" y1="0%" y2="100%">
                            <stop offset="0%" stop-color="#60A5FA" />
                            <stop offset="50%" stop-color="#2563EB" />
                            <stop offset="100%" stop-color="#1E3A8A" />
                        </linearGradient>
                        <filter height="140%" id="shadow2" width="140%" x="-20%" y="-20%">
                            <feDropShadow dx="20" dy="25" flood-opacity="0.4" stdDeviation="18" />
                        </filter>
                    </defs>
                    <path d="M100 20C55.8 20 20 55.8 20 100s35.8 80 80 80 80-35.8 80-80-35.8-80-80-80zm0 120c-22.1 0-40-17.9-40-40s17.9-40 40-40 40 17.9 40 40-17.9 40-40 40z" fill="url(#torusGrad)" filter="url(#shadow2)" />
                    <path d="M100 30c38.7 0 70 31.3 70 70 0 9.8-2 19.1-5.6 27.6-5.8-31.2-33-55.6-66.4-56.9-1.3-.1-2.7-.1-4-.1C60.6 70.6 33.4 95 27.6 126.2 24.1 117.7 22 108.4 22 98.6 22 59.9 53.3 28.6 92 28.6h8z" fill="white" opacity="0.3" />
                </svg>
            </div>

            <!-- Floating Isometric Cube -->
            <div class="float-3d absolute right-[10%] top-[40%] opacity-15" style="animation-duration: 18s; animation-direction: reverse">
                <svg height="250" viewBox="0 0 200 200" width="250" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="cubeTop" x1="0%" x2="100%" y1="0%" y2="100%">
                            <stop offset="0%" stop-color="#FCA5A5" />
                            <stop offset="100%" stop-color="#EF4444" />
                        </linearGradient>
                        <linearGradient id="cubeLeft" x1="0%" x2="0%" y1="0%" y2="100%">
                            <stop offset="0%" stop-color="#DC2626" />
                            <stop offset="100%" stop-color="#991B1B" />
                        </linearGradient>
                        <linearGradient id="cubeRight" x1="0%" x2="0%" y1="0%" y2="100%">
                            <stop offset="0%" stop-color="#B91C1C" />
                            <stop offset="100%" stop-color="#7F1D1D" />
                        </linearGradient>
                        <filter height="140%" id="shadow3" width="140%" x="-20%" y="-20%">
                            <feDropShadow dx="12" dy="18" flood-opacity="0.3" stdDeviation="12" />
                        </filter>
                    </defs>
                    <g filter="url(#shadow3)">
                        <polygon fill="url(#cubeTop)" points="100,20 160,55 100,90 40,55" />
                        <polygon fill="url(#cubeLeft)" points="40,55 100,90 100,160 40,125" />
                        <polygon fill="url(#cubeRight)" points="100,90 160,55 160,125 100,160" />
                        <polygon fill="none" points="100,22 158,55 100,88 42,55" stroke-opacity="0.5" stroke-width="1.5" stroke="white" />
                        <polygon fill="none" points="42,56 99,89 99,158 42,125" stroke-opacity="0.3" stroke-width="1.5" stroke="white" />
                        <polygon fill="none" points="101,89 158,56 158,125 101,158" stroke-opacity="0.2" stroke-width="1.5" stroke="white" />
                    </g>
                </svg>
            </div>

            <!-- Spinning 3D Cylinder -->
            <div class="spin-3d absolute left-[-5%] top-[65%] opacity-20" style="animation-duration: 25s; transform-origin: center">
                <svg height="250" viewBox="0 0 200 200" width="250" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="cylTube" x1="0%" x2="100%" y1="0%" y2="0%">
                            <stop offset="0%" stop-color="#047857" />
                            <stop offset="20%" stop-color="#34D399" />
                            <stop offset="50%" stop-color="#059669" />
                            <stop offset="80%" stop-color="#064E3B" />
                            <stop offset="100%" stop-color="#022C22" />
                        </linearGradient>
                        <linearGradient id="cylTop" x1="0%" x2="100%" y1="0%" y2="100%">
                            <stop offset="0%" stop-color="#6EE7B7" />
                            <stop offset="100%" stop-color="#10B981" />
                        </linearGradient>
                        <filter height="140%" id="shadow4" width="140%" x="-20%" y="-20%">
                            <feDropShadow dx="15" dy="22" flood-opacity="0.25" stdDeviation="15" />
                        </filter>
                    </defs>
                    <g filter="url(#shadow4)">
                        <path d="M50,70 v80 a50,20 0 0,0 100,0 v-80 a50,20 0 0,1 -100,0" fill="url(#cylTube)" />
                        <ellipse cx="100" cy="150" fill="#022c22" opacity="0.6" rx="50" ry="20" />
                        <ellipse cx="100" cy="70" fill="url(#cylTop)" rx="50" ry="20" />
                        <ellipse cx="100" cy="70" fill="none" rx="46" ry="17" stroke-opacity="0.4" stroke-width="2" stroke="white" />
                    </g>
                </svg>
            </div>

            <!-- Floating 3D Pyramid -->
            <div class="float-3d absolute right-[-5%] top-[85%] opacity-[0.15]" style="animation-duration: 16s">
                <svg height="350" viewBox="0 0 200 200" width="350" xmlns="http://www.w3.org/2000/svg">
                    <defs>
                        <linearGradient id="pyrLeft" x1="0%" x2="100%" y1="0%" y2="100%">
                            <stop offset="0%" stop-color="#8B5CF6" />
                            <stop offset="100%" stop-color="#5B21B6" />
                        </linearGradient>
                        <linearGradient id="pyrRight" x1="0%" x2="100%" y1="0%" y2="100%">
                            <stop offset="0%" stop-color="#4C1D95" />
                            <stop offset="100%" stop-color="#2E1065" />
                        </linearGradient>
                        <filter height="140%" id="shadow5" width="140%" x="-20%" y="-20%">
                            <feDropShadow dx="-10" dy="25" flood-opacity="0.4" stdDeviation="15" />
                        </filter>
                    </defs>
                    <g filter="url(#shadow5)">
                        <polygon fill="url(#pyrLeft)" points="100,30 40,140 100,160" />
                        <polygon fill="url(#pyrRight)" points="100,30 100,160 160,130" />
                        <polyline fill="none" points="100,30 40,140 100,160 160,130 100,30" stroke-opacity="0.4" stroke-width="1.5" stroke="white" />
                        <line stroke-opacity="0.6" stroke-width="1.5" stroke="white" x1="100" x2="100" y1="30" y2="160" />
                    </g>
                </svg>
            </div>
        </div>

        <div class="container mx-auto overflow-hidden">
            <!-- Who Tarbiya Is For -->
            <section class="section-padding relative mx-auto px-4 sm:px-6">
                <div class="relative z-10 grid items-center gap-6 md:grid-cols-5 md:gap-12">
                    <div class="rounded-4xl overflow-hidden shadow-xl md:col-span-2" data-aos="fade-right" data-tilt data-tilt-glare data-tilt-max-glare="0.2" data-tilt-max="5" data-tilt-speed="400">
                        <img alt="Peaceful doorway" class="aspect-square w-full" src="{{ Vite::asset('resources/images/2.jpg') }}" />
                    </div>
                    <div class="space-y-4 md:col-span-3 md:space-y-6" data-aos="fade-left">
                        <h2 class="heading-2">What is Tarbiya?</h2>
                        <p class="text-body-lg">Tarbiya is a comprehensive online learning app and website designed to impart authentic Islamic knowledge in a structured, easy-to-follow format. Built for both children and adults, the platform serves as a digital gateway to learning the Deen based strictly on the Qur’an, the authentic Sunnah, and the methodology of the Salaf.</p>
                        <p class="text-body-lg">We recognize that every student begins their journey at a different point. Therefore, Tarbiya is organized into levels of understanding, allowing users to progress from foundational principles to more detailed studies at a pace that suits them.</p>
                    </div>
                </div>
            </section>

            <!-- Why Tarbiya Exists -->
            <section class="py-10 md:py-16 lg:py-16">
                <div class="mx-auto space-y-6 px-4 sm:px-6 md:space-y-8" data-aos="fade-up">
                    <h2 class="text-center text-xl font-semibold text-gray-900 sm:text-2xl md:text-4xl">Why Tarbiya?</h2>
                    <p class="mx-auto text-base leading-relaxed text-gray-500 sm:text-lg md:text-xl">When it was time for my children to start learning Islam, I was lost. I did not know where to start, and how to approach educating my children on Islam. My search for a basic, structured course on authentic Quran and Sunnah that my children could do for even 15 minutes a day. And, like most parents, I did not want my children being raised on Youtube and social media.</p>
                    <p class="mx-auto text-base leading-relaxed text-gray-500 sm:text-lg md:text-xl">So, I built the Tarbiya platform. It aims to educate Muslims (not just children) on everything about Islam based on your level no matter your age or background. What I love for my children, I want for every Muslim child in the world too.</p>
                </div>
            </section>

            <!-- What You Will Learn -->
            <section class="section-padding relative mx-auto overflow-hidden rounded-3xl px-4 py-12 sm:px-6" x-data="{
                active_tab: 0,
                categories: [{
                        title: 'Aqeedah',
                        description: 'Learn the firm and unwavering beliefs of Islam, centered on Tawheed, belief in Allah, His Names and Attributes as affirmed in revelation, without distortion or philosophical interpretation.'
                    },
                    {
                        title: 'Manhaj',
                        description: 'The correct methodology for understanding and practicing Islam, based on following the Quran and Sunnah upon the understanding of the Salaf, with clarity in belief, worship, behavior, and dealing with trials and differences.'
                    },
                    {
                        title: 'Quran',
                        description: 'Study the Quran gradually with detailed explanation from the most authentic tafseer.'
                    },
                    {
                        title: 'Sunnah',
                        description: 'Discover the authentic Sunnah explained with clarity and all your questions answered.'
                    },
                    {
                        title: 'Ibaadah',
                        description: 'Understand how to worhship Allah with inward and outward actions and statements that Allah loves and is pleased with, performed with sincerity for His Sake alone and in accordance with the Sunnah.'
                    },
                    {
                        title: 'Akhlaaq',
                        description: 'Emulate and build noble character and conduct rooted in faith, such as honesty, patience, humility, mercy, and justice, shaped by obedience to Allah and the example of the Prophet صلى الله عليه وسلم.'
                    },
                    {
                        title: 'Seerah',
                        description: 'The life and biography of the Prophet Muhammad صلى الله عليه وسلم, studied to understand his character, leadership, patience, worship, and application of Islam in real life.'
                    },
                    {
                        title: 'Fiqh',
                        description: 'Learn the understanding of Islamic rulings derived from the Quran and authentic Sunnah, as understood by the early scholars, governing acts of worship and daily transactions.'
                    },
                    {
                        title: 'Tareekh',
                        description: 'Study Islamic history with authenticity and balance, focusing on lessons, preservation of truth, and honoring the Companions and early generations without exaggeration or distortion.'
                    },
                    {
                        title: 'Family & Society',
                        description: 'Islamic guidance on marriage, parenting, rights, responsibilities, and social conduct, built on justice, mercy, modesty, and obedience to Allah.'
                    },
                    {
                        title: 'Arabic Language',
                        description: 'Learn the language of the final revelation step by step, and build your knowledge to correctly understand Islamic texts, and the meanings intended by Allah and His Messenger صلى الله عليه وسلم.'
                    },
                    {
                        title: 'Everyday Life',
                        description: 'Applying Islam in daily affairs such as work, behavior, intentions, and interactions, ensuring actions align with correct belief, lawful conduct, and good character.'
                    }
                ]
            }">
                <div class="flex flex-col space-y-8 md:space-y-12">
                    <h2 class="text-center text-xl font-semibold text-gray-900 sm:text-2xl md:text-3xl lg:text-4xl" data-aos="fade-up">What You Will Learn</h2>

                    <div class="max-w-250 mx-auto flex flex-wrap justify-center gap-2 text-sm font-light sm:gap-3 sm:text-base md:gap-4 md:text-lg lg:text-xl">
                        <template :key="index" x-for="(category, index) in categories">
                            <button :class="active_tab === index ? 'bg-gray-900 text-white' : 'border border-gray-400 text-gray-700 hover:border-gray-600'" :data-aos-delay="index * 50" @click="active_tab = index" class="rounded-full px-4 py-2 transition-all duration-500 md:px-6" data-aos="zoom-in" type="button" x-text="category.title"></button>
                        </template>
                    </div>

                    <div class="mx-auto rounded-2xl p-4 text-center md:p-8">
                        <template :key="index" x-for="(category, index) in categories">
                            <p class="text-base text-gray-600 sm:text-lg md:text-xl" x-show="active_tab === index" x-text="category.description" x-transition:enter-end="opacity-100 blur-0 scale-100" x-transition:enter-start="opacity-0 blur-sm scale-95" x-transition:enter="transition ease-out duration-1000"></p>
                        </template>
                    </div>
                </div>
            </section>

            <!-- How Knowledge is Approached -->
            <section class="section-padding relative">
                <div class="relative z-10">
                    <h2 class="heading-2 mb-8 px-4 text-center md:mb-12 lg:mb-16" data-aos="fade-up">Our Learning Methodology</h2>

                    <div class="grid gap-8 px-8 md:grid-cols-3 md:gap-8">
                        <div data-aos-delay="100" data-aos="fade-up">
                            <div class="transform-style-3d shadow-xs relative z-10 space-y-3 rounded-2xl border border-gray-100 bg-white p-6 transition-shadow hover:shadow-md md:p-8" data-tilt data-tilt-glare="true" data-tilt-max-glare="0.1" data-tilt-max="5" data-tilt-speed="400">
                                <div class="icon-pulse mx-auto flex h-12 w-12 items-center justify-center rounded-full border border-gray-300 bg-gray-900 shadow-lg md:h-16 md:w-16" style="transform: translateZ(30px)">
                                    <i class="ri-book-line text-xl text-white"></i>
                                </div>
                                <h3 class="heading-4" style="transform: translateZ(20px)">Rooted in revelation</h3>
                                <p class="text-body" style="transform: translateZ(10px)">Every lesson is drawn from authentic Islamic sources and classical scholarship.</p>
                            </div>
                        </div>

                        <div data-aos-delay="200" data-aos="fade-up">
                            <div class="transform-style-3d shadow-xs relative z-10 space-y-3 rounded-2xl border border-gray-100 bg-white p-6 transition-shadow hover:shadow-md md:p-8" data-tilt data-tilt-glare="true" data-tilt-max-glare="0.1" data-tilt-max="5" data-tilt-speed="400">
                                <div class="icon-pulse mx-auto flex h-12 w-12 items-center justify-center rounded-full border border-gray-300 bg-gray-900 shadow-lg md:h-16 md:w-16" style="animation-delay: 1s; transform: translateZ(30px)">
                                    <i class="ri-list-check-3 text-xl text-white"></i>
                                </div>
                                <h3 class="heading-4" style="transform: translateZ(20px)">Structured, not scattered</h3>
                                <p class="text-body" style="transform: translateZ(10px)">Topics are taught in a deliberate sequence, guiding learners step by step.</p>
                            </div>
                        </div>

                        <div data-aos-delay="300" data-aos="fade-up">
                            <div class="transform-style-3d shadow-xs relative z-10 space-y-3 rounded-2xl border border-gray-100 bg-white p-6 transition-shadow hover:shadow-md md:p-8" data-tilt data-tilt-glare="true" data-tilt-max-glare="0.1" data-tilt-max="5" data-tilt-speed="400">
                                <div class="icon-pulse mx-auto flex h-12 w-12 items-center justify-center rounded-full border border-gray-300 bg-gray-900 shadow-lg md:h-16 md:w-16" style="animation-delay: 2s; transform: translateZ(30px)">
                                    <i class="ri-graduation-cap-line text-xl text-white"></i>
                                </div>
                                <h3 class="heading-4" style="transform: translateZ(20px)">Knowledge with practice</h3>
                                <p class="text-body" style="transform: translateZ(10px)">Learning is tied to reflection and action, not memorization alone.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Who We Are Section -->
            <section class="section-padding relative mx-auto px-4 sm:px-6" id="who-we-are">
                <div class="relative z-10 grid items-center gap-10 md:grid-cols-2 md:gap-16 lg:gap-24">
                    <div class="order-2 space-y-4 md:order-1 md:space-y-6" data-aos="fade-right">
                        <div class="inline-flex items-center justify-center rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-800">Who We Are</div>
                        <h2 class="heading-2 text-gray-900">Raising Children Upon <span class="bg-linear-to-r from-amber-500 to-orange-500 bg-clip-text text-transparent">Goodness</span></h2>

                        <div class="text-body-lg space-y-5">
                            <p>When it was time for my children to start learning Islam, I was lost. I did not know where to start, and how to approach educating my children on Islam. My search for a basic, structured course on authentic Quran and Sunnah that my children could do for even 15 minutes a day came up empty.</p>
                            <p>And, like most parents, I did not want my children being raised on Youtube and social media. So, I built the Tarbiya platform. It aims to educate Muslims (not just children) on everything about Islam based on your level no matter your age or background.</p>
                            <p>Tarbiya was founded with a singular mission: to make authentic, structured Islamic knowledge accessible to Muslim families everywhere.</p>
                        </div>

                        <div class="mt-8 flex items-center gap-4">
                            <a class="group inline-flex items-center gap-2 rounded-full bg-gray-900 px-6 py-3 font-semibold text-white transition-all hover:bg-gray-800 hover:shadow-lg active:scale-95" href="/about.html">
                                <span>Our Story</span>
                                <i class="ri-arrow-right-line transition-transform group-hover:translate-x-1"></i>
                            </a>
                        </div>
                    </div>

                    <div class="order-1 md:order-2" data-aos="fade-left">
                        <!-- 3D Image Wrapper -->
                        <div class="transform-style-3d relative mx-auto max-w-md md:max-w-full" data-tilt data-tilt-glare data-tilt-max-glare="0.2" data-tilt-max="5" data-tilt-perspective="1000" data-tilt-speed="400">
                            <!-- Decorative background blob -->
                            <div class="bg-linear-to-tr absolute -inset-4 z-0 rounded-3xl from-amber-200 to-orange-100 opacity-50 blur-2xl"></div>

                            <div class="rounded-4xl relative z-10 overflow-hidden shadow-2xl transition-transform duration-500 hover:scale-[1.02]">
                                <img alt="Who We Are" class="w-full object-cover transition-transform duration-700 hover:scale-110" onerror="this.src = 'https://images.unsplash.com/photo-1542816417-0983c9c9ad53?q=80&w=1000&auto=format&fit=crop'" src="{{ Vite::asset('resources/images/5.jpg') }}" />

                                <!-- Overlay gradient -->
                                <div class="bg-linear-to-t pointer-events-none absolute inset-0 from-gray-900/60 via-transparent to-transparent"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Learning That Feels Simple and Engaging -->
            <section class="section-padding relative mx-auto px-4 sm:px-6">
                <div class="relative z-10 grid items-center gap-6 md:grid-cols-5 md:gap-12">
                    <div class="order-2 space-y-4 md:order-1 md:col-span-3 md:space-y-6" data-aos="fade-right">
                        <h2 class="heading-2">Engaged Learning</h2>
                        <p class="text-body-lg">Tarbiya is an innovative learning platform which Muslim children cannot get enough of. From bite sized learning, self check quizzes, fun puzzles, engaging media and Islamic scroll content, I hope my children and yours will spend the best of their day learning the beauty of Islam and sharing it with their friends.</p>
                        <p class="text-body-lg">And with our invite only leaderboard, learners can add their friends and family to a family group leaderboard and compete with each other in righteousness.</p>
                        <p class="text-body-lg font-semibold text-amber-600">Let's give the best of Tarbiya because they deserve better.</p>
                    </div>
                    <div class="order-1 md:order-2 md:col-span-2" data-aos="fade-left">
                        <div class="lg:size-140 relative mx-auto mt-6 w-full max-w-sm md:mt-0 md:max-w-full" x-data="{ currentSlide: 0, slides: ['{{ Vite::asset('resources/images/carousel-1.jpg') }}', '{{ Vite::asset('resources/images/carousel-2.jpg') }}'] }">
                            <div class="rounded-4xl group relative aspect-square w-full overflow-hidden shadow-xl transition-transform duration-500 hover:-translate-y-1 hover:shadow-2xl">
                                <template :key="index" x-for="(slide, index) in slides">
                                    <img :class="currentSlide === index ? 'opacity-100 scale-100' : 'opacity-0 scale-105'" :src="slide" alt="App Screenshot" class="pointer-events-none absolute inset-0 h-full w-full object-cover transition-all duration-1000 ease-in-out" />
                                </template>

                                <!-- Gradient overlay for indicators -->
                                <div class="pointer-events-none absolute inset-x-0 bottom-0 h-1/3"></div>

                                <!-- Prev / Next Navigation Arrows -->
                                <button @click="currentSlide = currentSlide === 0 ? slides.length - 1 : currentSlide - 1" class="absolute left-3 top-1/2 size-12 -translate-y-1/2 rounded-full bg-white/50 p-2 text-gray-800 shadow-md backdrop-blur-sm transition-all hover:bg-white md:left-4 md:opacity-0 md:group-hover:opacity-100">
                                    <i class="ri-arrow-left-s-line text-xl"></i>
                                </button>
                                <button @click="currentSlide = currentSlide === slides.length - 1 ? 0 : currentSlide + 1" class="absolute right-3 top-1/2 size-12 -translate-y-1/2 rounded-full bg-white/50 p-2 text-gray-800 shadow-md backdrop-blur-sm transition-all hover:bg-white md:right-4 md:opacity-0 md:group-hover:opacity-100">
                                    <i class="ri-arrow-right-s-line text-xl"></i>
                                </button>

                                <!-- Navigation Indicators -->
                                <div class="absolute bottom-6 left-0 right-0 z-10 flex cursor-pointer justify-center gap-2">
                                    <template :key="index" x-for="(slide, index) in slides">
                                        <div :class="currentSlide === index ? 'w-8 bg-gray-900' : 'w-2 bg-gray-900/50 hover:bg-gray-900/80'" @click="currentSlide = index" class="h-2 rounded-full transition-all duration-500"></div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Pricing Section -->
            <section class="section-padding relative" id="pricing">
                <div class="container relative z-10 mx-auto px-4 sm:px-6">
                    <div class="mx-auto mb-10 max-w-3xl space-y-4 text-center md:mb-16" data-aos="fade-up">
                        <div class="inline-flex items-center justify-center rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-800">Pricing</div>
                        <h2 class="heading-2">Fair Pricing</h2>
                        <p class="text-body-lg">It is my aim to deliver the best in Islamic education to every child around the world. And I want this to be affordable always.</p>
                    </div>

                    <div class="relative mx-auto mt-12 grid max-w-7xl items-center gap-8 md:grid-cols-12 md:gap-12 lg:mb-12">
                        <!-- Left Side Floating Elements -->
                        <div class="hidden flex-col items-center justify-center space-y-12 md:col-span-3 md:flex lg:col-span-4" data-aos-delay="200" data-aos="fade-right">
                            <div class="transform-style-3d relative flex items-center gap-4 rounded-3xl border border-white/20 bg-white/40 p-5 shadow-xl backdrop-blur-xl" data-tilt data-tilt-glare data-tilt-max-glare="0.3" data-tilt-max="15" data-tilt-perspective="1000" data-tilt-speed="400" style="animation: float-slow 8s ease-in-out infinite">
                                <div class="bg-linear-to-br flex size-14 items-center justify-center rounded-2xl from-yellow-400 to-amber-500 shadow-lg" style="transform: translateZ(30px)">
                                    <i class="ri-rocket-2-fill text-xl text-white"></i>
                                </div>
                                <div style="transform: translateZ(20px)">
                                    <p class="font-sora text-xs font-bold text-gray-900">Accelerated</p>
                                    <p class="text-xs text-gray-600">Learning Path</p>
                                </div>
                            </div>

                            <div class="transform-style-3d relative ml-12 flex items-center gap-4 rounded-3xl border border-white/20 bg-white/40 p-5 shadow-xl backdrop-blur-xl" data-tilt data-tilt-glare data-tilt-max-glare="0.3" data-tilt-max="15" data-tilt-perspective="1000" data-tilt-speed="400" style="animation: float-fast 6s ease-in-out infinite">
                                <div class="bg-linear-to-br flex size-14 items-center justify-center rounded-2xl from-amber-400 to-orange-500 shadow-lg" style="transform: translateZ(30px)">
                                    <i class="ri-medal-fill text-xl text-white"></i>
                                </div>
                                <div style="transform: translateZ(20px)">
                                    <p class="font-sora text-xs font-bold text-gray-900">Gamified</p>
                                    <p class="text-xs text-gray-600">Puzzles & Quizzes</p>
                                </div>
                            </div>
                        </div>

                        <!-- Center Pricing Table -->
                        <!-- <div class="z-20 md:col-span-6 lg:col-span-4" data-tilt data-tilt-glare data-tilt-max-glare="0.1" data-tilt-max="5" data-tilt-perspective="1000" data-tilt-speed="400"> -->
                        <div class="z-20 md:col-span-6 lg:col-span-4" data-aos-delay="100" data-aos="zoom-in">
                            <div class="relative overflow-hidden rounded-[2.5rem] border border-gray-100 bg-white p-px shadow-2xl transition-transform duration-300">
                                <div class="bg-linear-to-br absolute inset-0 from-[#FDFBF7] via-white to-[#F5F5ED] opacity-100"></div>

                                <div class="relative z-10 flex flex-col p-8 md:p-10">
                                    <div class="mb-6 flex items-center justify-between border-b border-gray-200 pb-6">
                                        <div>
                                            <h3 class="font-sora text-xl font-bold text-gray-900">Full Access</h3>
                                            <p class="mt-1 text-xs text-gray-500">Everything in Tarbiya</p>
                                        </div>
                                        <div class="text-right">
                                            <span class="block text-5xl font-extrabold text-gray-900"><span class="mr-1 text-xl text-amber-500">$</span>6</span>
                                            <span class="text-xs font-semibold uppercase tracking-wider text-gray-500">/ month</span>
                                        </div>
                                    </div>

                                    <ul class="mb-8 space-y-4 text-sm font-medium text-gray-700">
                                        <li class="flex items-center">
                                            <i class="ri-checkbox-circle-fill mr-3 text-lg text-amber-500"></i>
                                            <span>Full access to all 6 levels</span>
                                        </li>
                                        <li class="flex items-center">
                                            <i class="ri-checkbox-circle-fill mr-3 text-lg text-amber-500"></i>
                                            <span>Over 2000+ hours of learning</span>
                                        </li>
                                        <li class="flex items-center">
                                            <i class="ri-checkbox-circle-fill mr-3 text-lg text-amber-500"></i>
                                            <span>Interactive quizzes and puzzles</span>
                                        </li>
                                        <li class="flex items-center">
                                            <i class="ri-checkbox-circle-fill mr-3 text-lg text-amber-500"></i>
                                            <span>Progress check and self test</span>
                                        </li>
                                        <li class="flex items-center">
                                            <i class="ri-checkbox-circle-fill mr-3 text-lg text-amber-500"></i>
                                            <span>Real time analytics & tracking</span>
                                        </li>
                                        <li class="flex items-center">
                                            <i class="ri-checkbox-circle-fill mr-3 text-lg text-amber-500"></i>
                                            <span>Parent-child talking points</span>
                                        </li>
                                        <li class="flex items-center">
                                            <i class="ri-checkbox-circle-fill mr-3 text-lg text-amber-500"></i>
                                            <span>Monthly new courses addition</span>
                                        </li>
                                        <li class="flex items-center">
                                            <i class="ri-checkbox-circle-fill mr-3 text-lg text-amber-500"></i>
                                            <span>Structured daily learning plan</span>
                                        </li>
                                    </ul>

                                    <button class="group relative mt-auto flex w-full cursor-not-allowed items-center justify-center overflow-hidden rounded-full border border-amber-500/20 bg-amber-50/60 py-4 font-semibold text-gray-400 shadow-sm transition-all" disabled>
                                        <span class="relative z-10">Get Started Today</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Right Side Floating Elements -->
                        <div class="hidden flex-col items-center justify-center space-y-12 md:col-span-3 md:flex lg:col-span-4" data-aos-delay="300" data-aos="fade-left">
                            <div class="transform-style-3d relative flex items-center gap-4 rounded-3xl border border-white/20 bg-white/40 p-5 shadow-xl backdrop-blur-xl" data-tilt data-tilt-glare data-tilt-max-glare="0.3" data-tilt-max="15" data-tilt-perspective="1000" data-tilt-speed="400" style="animation: float-fast 7s ease-in-out infinite; animation-delay: 1s">
                                <div class="bg-linear-to-br flex size-14 items-center justify-center rounded-2xl from-yellow-400 to-amber-500 shadow-lg" style="transform: translateZ(30px)">
                                    <i class="ri-parent-fill text-xl text-white"></i>
                                </div>
                                <div style="transform: translateZ(20px)">
                                    <p class="font-sora text-xs font-bold text-gray-900">Family Box</p>
                                    <p class="text-xs text-gray-600">Guided Discussion</p>
                                </div>
                            </div>

                            <div class="transform-style-3d relative mr-12 flex items-center gap-4 rounded-3xl border border-white/20 bg-white/40 p-5 shadow-xl backdrop-blur-xl" data-tilt data-tilt-glare data-tilt-max-glare="0.3" data-tilt-max="15" data-tilt-perspective="1000" data-tilt-speed="400" style="animation: float-slow 9s ease-in-out infinite; animation-delay: 2s">
                                <div class="bg-linear-to-br flex size-14 items-center justify-center rounded-2xl from-amber-500 to-orange-600 shadow-lg" style="transform: translateZ(30px)">
                                    <i class="ri-line-chart-fill text-xl text-white"></i>
                                </div>
                                <div style="transform: translateZ(20px)">
                                    <p class="font-sora text-xs font-bold text-gray-900">Analytics</p>
                                    <p class="text-xs text-gray-600">Real-time stats</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- FAQ Section -->
            <section class="section-padding relative px-4 sm:px-6" id="faq">
                <div class="relative z-10 mx-auto max-w-3xl">
                    <div class="mb-10 space-y-4 text-center md:mb-16" data-aos="fade-up">
                        <div class="inline-flex items-center justify-center rounded-full bg-amber-100 px-3 py-1 text-xs font-semibold text-amber-800">FAQ</div>
                        <h2 class="heading-2">FAQs</h2>
                        <p class="text-body-lg">Got questions? We've got answers insha'allah. If you don't see your question below, feel free to <a class="font-medium text-amber-600 hover:underline" href="/contact.html">contact us</a>.</p>
                    </div>

                    <div class="space-y-4" x-data="{ active: null }">
                        <!-- FAQ 1 -->
                        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm" data-aos-delay="100" data-aos="fade-up">
                            <button @click="active !== 1 ? active = 1 : active = null" class="flex w-full items-center justify-between px-6 py-5 text-left transition-colors hover:bg-gray-50 focus:outline-none">
                                <span class="font-sora text-sm font-bold text-gray-900 md:text-base">What is Tarbiya?</span>
                                <i :class="{ 'rotate-180': active === 1 }" class="ri-arrow-down-s-line text-xl text-gray-500 transition-transform duration-300"></i>
                            </button>
                            <div x-collapse x-show="active === 1">
                                <div class="px-6 pb-5 text-sm text-gray-600 md:text-base">Tarbiya is an Islamic online learning platform for Muslim children, parents, reverts and basically anyone who wants to learn everything about Islam at their own pace and level.</div>
                            </div>
                        </div>

                        <!-- FAQ 2 -->
                        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm" data-aos-delay="150" data-aos="fade-up">
                            <button @click="active !== 2 ? active = 2 : active = null" class="flex w-full items-center justify-between px-6 py-5 text-left transition-colors hover:bg-gray-50 focus:outline-none">
                                <span class="font-sora text-sm font-bold text-gray-900 md:text-base">What does it contain?</span>
                                <i :class="{ 'rotate-180': active === 2 }" class="ri-arrow-down-s-line text-xl text-gray-500 transition-transform duration-300"></i>
                            </button>
                            <div x-collapse x-show="active === 2">
                                <div class="px-6 pb-5 text-sm text-gray-600 md:text-base">Tarbiya consists of 8 levels starting from basic foundation all the way to student of knowledge level.</div>
                            </div>
                        </div>

                        <!-- FAQ 3 -->
                        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm" data-aos-delay="200" data-aos="fade-up">
                            <button @click="active !== 3 ? active = 3 : active = null" class="flex w-full items-center justify-between px-6 py-5 text-left transition-colors hover:bg-gray-50 focus:outline-none">
                                <span class="font-sora text-sm font-bold text-gray-900 md:text-base">Why was Tarbiya made?</span>
                                <i :class="{ 'rotate-180': active === 3 }" class="ri-arrow-down-s-line text-xl text-gray-500 transition-transform duration-300"></i>
                            </button>
                            <div x-collapse x-show="active === 3">
                                <div class="px-6 pb-5 text-sm text-gray-600 md:text-base">I wanted my children to learn about Islam in a controlled, structured way where it becomes a part of their daily habit. I didn't find a learning eco-system that gave my children an engaging, fun and interactive platform to learn Islam from the start. And this is why I created it for them, and the rest of the ummah.</div>
                            </div>
                        </div>

                        <!-- FAQ 4 -->
                        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm" data-aos-delay="250" data-aos="fade-up">
                            <button @click="active !== 4 ? active = 4 : active = null" class="flex w-full items-center justify-between px-6 py-5 text-left transition-colors hover:bg-gray-50 focus:outline-none">
                                <span class="font-sora text-sm font-bold text-gray-900 md:text-base">What is the source of Islamic knowledge?</span>
                                <i :class="{ 'rotate-180': active === 4 }" class="ri-arrow-down-s-line text-xl text-gray-500 transition-transform duration-300"></i>
                            </button>
                            <div x-collapse x-show="active === 4">
                                <div class="px-6 pb-5 text-sm text-gray-600 md:text-base">Every chapter, line and story is based on the glorious Qur'an, authentic Sunnah and the methodology of the first three generations of Islam known for their excellence.</div>
                            </div>
                        </div>

                        <!-- FAQ 5 -->
                        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm" data-aos-delay="300" data-aos="fade-up">
                            <button @click="active !== 5 ? active = 5 : active = null" class="flex w-full items-center justify-between px-6 py-5 text-left transition-colors hover:bg-gray-50 focus:outline-none">
                                <span class="font-sora text-sm font-bold text-gray-900 md:text-base">Do I need any prior Islamic knowledge to start?</span>
                                <i :class="{ 'rotate-180': active === 5 }" class="ri-arrow-down-s-line text-xl text-gray-500 transition-transform duration-300"></i>
                            </button>
                            <div x-collapse x-show="active === 5">
                                <div class="px-6 pb-5 text-sm text-gray-600 md:text-base">Absolutely not. Tarbiya is intentionally structured for absolute beginners while offering depth for those seeking it. You can start with the foundational Level 1 basics and progress step-by-step at your own pace.</div>
                            </div>
                        </div>

                        <!-- FAQ 6 -->
                        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm" data-aos-delay="350" data-aos="fade-up">
                            <button @click="active !== 6 ? active = 6 : active = null" class="flex w-full items-center justify-between px-6 py-5 text-left transition-colors hover:bg-gray-50 focus:outline-none">
                                <span class="font-sora text-sm font-bold text-gray-900 md:text-base">How many hours do I or my child need to spend on Tarbiya?</span>
                                <i :class="{ 'rotate-180': active === 6 }" class="ri-arrow-down-s-line text-xl text-gray-500 transition-transform duration-300"></i>
                            </button>
                            <div x-collapse x-show="active === 6">
                                <div class="px-6 pb-5 text-sm text-gray-600 md:text-base">As little as 20 minutes a day. They can read, listen to audio, watch videos, solve puzzles, answer quizzes and compete with their siblings on a closed leaderboard.</div>
                            </div>
                        </div>

                        <!-- FAQ 7 -->
                        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm" data-aos-delay="400" data-aos="fade-up">
                            <button @click="active !== 7 ? active = 7 : active = null" class="flex w-full items-center justify-between px-6 py-5 text-left transition-colors hover:bg-gray-50 focus:outline-none">
                                <span class="font-sora text-sm font-bold text-gray-900 md:text-base">Can adults use Tarbiya?</span>
                                <i :class="{ 'rotate-180': active === 7 }" class="ri-arrow-down-s-line text-xl text-gray-500 transition-transform duration-300"></i>
                            </button>
                            <div x-collapse x-show="active === 7">
                                <div class="px-6 pb-5 text-sm text-gray-600 md:text-base">Of course! You can select the level you feel comfortable with and start right away. Your puzzles will be much more challenging though.</div>
                            </div>
                        </div>

                        <!-- FAQ 8 -->
                        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm" data-aos-delay="450" data-aos="fade-up">
                            <button @click="active !== 8 ? active = 8 : active = null" class="flex w-full items-center justify-between px-6 py-5 text-left transition-colors hover:bg-gray-50 focus:outline-none">
                                <span class="font-sora text-sm font-bold text-gray-900 md:text-base">Why does it cost only $6 for full access?</span>
                                <i :class="{ 'rotate-180': active === 8 }" class="ri-arrow-down-s-line text-xl text-gray-500 transition-transform duration-300"></i>
                            </button>
                            <div x-collapse x-show="active === 8">
                                <div class="px-6 pb-5 text-sm text-gray-600 md:text-base">Tarbiya's goal is to be exceptionally affordable. Full access to the platform, including all courses, analytics, and interactive activities, is only $6/month. We believe authentic education should not be a financial burden.</div>
                            </div>
                        </div>

                        <!-- FAQ 9 -->
                        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm" data-aos-delay="500" data-aos="fade-up">
                            <button @click="active !== 9 ? active = 9 : active = null" class="flex w-full items-center justify-between px-6 py-5 text-left transition-colors hover:bg-gray-50 focus:outline-none">
                                <span class="font-sora text-sm font-bold text-gray-900 md:text-base">What if I have more than one child?</span>
                                <i :class="{ 'rotate-180': active === 9 }" class="ri-arrow-down-s-line text-xl text-gray-500 transition-transform duration-300"></i>
                            </button>
                            <div x-collapse x-show="active === 9">
                                <div class="px-6 pb-5 text-sm text-gray-600 md:text-base">Then its $4 for each additional account.</div>
                            </div>
                        </div>

                        <!-- FAQ 10 -->
                        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm" data-aos-delay="550" data-aos="fade-up">
                            <button @click="active !== 10 ? active = 10 : active = null" class="flex w-full items-center justify-between px-6 py-5 text-left transition-colors hover:bg-gray-50 focus:outline-none">
                                <span class="font-sora text-sm font-bold text-gray-900 md:text-base">Can I change my subscription at any time?</span>
                                <i :class="{ 'rotate-180': active === 10 }" class="ri-arrow-down-s-line text-xl text-gray-500 transition-transform duration-300"></i>
                            </button>
                            <div x-collapse x-show="active === 10">
                                <div class="px-6 pb-5 text-sm text-gray-600 md:text-base">Yes, you can add additional accounts or even cancel your subscription at any time.</div>
                            </div>
                        </div>

                        <!-- FAQ 11 -->
                        <div class="overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm" data-aos-delay="600" data-aos="fade-up">
                            <button @click="active !== 11 ? active = 11 : active = null" class="flex w-full items-center justify-between px-6 py-5 text-left transition-colors hover:bg-gray-50 focus:outline-none">
                                <span class="font-sora text-sm font-bold text-gray-900 md:text-base">Can I use Tarbiya on my phone or tablet?</span>
                                <i :class="{ 'rotate-180': active === 11 }" class="ri-arrow-down-s-line text-xl text-gray-500 transition-transform duration-300"></i>
                            </button>
                            <div x-collapse x-show="active === 11">
                                <div class="px-6 pb-5 text-sm text-gray-600 md:text-base">Yes! Tarbiya is fully mobile-responsive and accessible via any modern web browser on your phone, tablet, or desktop computer. We also plan to release dedicated mobile apps in the near future.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Newsletter Section -->
            <section class="relative mx-auto px-4 py-10 sm:px-6 md:py-16" id="newsletter-section">
                <div class="relative z-10 grid items-center gap-8 md:grid-cols-2 md:gap-12">
                    <div class="max-w-xl space-y-4 md:space-y-6" data-aos="fade-right">
                        <h2 class="heading-2">Be the first to know</h2>
                        <p class="text-body-lg">Join our growing community of parents who want to raise their children with Tarbiya</p>

                        <form @submit.prevent="submit" class="space-y-3 md:space-y-4" x-data="{
                            name: '',
                            email: '',
                            confirmEmail: '',
                            submitClicked: false,
                            loading: false,
                            async submit() {
                                this.submitClicked = true;
                                if (this.email !== this.confirmEmail) return;
                                this.loading = true;
                                try {
                                    const res = await fetch('{{ route('index.post') }}', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'Accept': 'application/json',
                                            'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').getAttribute('content'),
                                            'X-Requested-With': 'XMLHttpRequest',
                                        },
                                        body: JSON.stringify({ name: this.name, email: this.email }),
                                    });
                                    const data = await res.json().catch(() => ({}));
                                    if (!res.ok) {
                                        const msg = data.errors
                                            ? Object.values(data.errors).flat()[0]
                                            : (data.message || 'Something went wrong.');
                                        window.dispatchEvent(new CustomEvent('toast', { detail: { type: 'error', message: msg } }));
                                        return;
                                    }
                                    window.dispatchEvent(new CustomEvent('toast', { detail: { type: 'success', message: data.message } }));
                                    this.name = ''; this.email = ''; this.confirmEmail = ''; this.submitClicked = false;
                                } catch (e) {
                                    window.dispatchEvent(new CustomEvent('toast', { detail: { type: 'error', message: 'Network error. Please try again.' } }));
                                } finally {
                                    this.loading = false;
                                }
                            }
                        }">
                            <div class="flex items-center rounded-full border border-gray-300 px-3 py-2 md:px-4">
                                <i class="ri-user-3-line me-2 text-lg text-gray-400"></i>
                                <input class="flex-1 bg-transparent text-xs outline-none md:text-sm" name="name" placeholder="Full Name" required type="text" x-model="name" />
                            </div>

                            <div class="flex items-center rounded-full border border-gray-300 px-4 py-2">
                                <i class="ri-mail-line me-2 text-lg text-gray-400"></i>
                                <input class="flex-1 bg-transparent text-xs outline-none md:text-sm" name="email" placeholder="Email Address" required type="email" x-model="email" />
                            </div>

                            <div class="flex flex-col space-y-1">
                                <div :class="{ 'border-red-500': submitClicked && email !== confirmEmail }" class="flex items-center rounded-full border border-gray-300 px-4 py-2">
                                    <i :class="{ 'text-red-500': submitClicked && email !== confirmEmail }" class="ri-mail-check-line me-2 text-lg text-gray-400"></i>
                                    <input @paste.prevent class="flex-1 bg-transparent text-xs outline-none md:text-sm" placeholder="Confirm Email Address" required type="email" x-model="confirmEmail" />
                                </div>
                                <span class="ms-4 text-xs font-medium text-red-500" x-cloak x-show="submitClicked && email !== confirmEmail">Emails do not match</span>
                            </div>

                            <button :disabled="loading" class="btn-primary w-full disabled:cursor-not-allowed disabled:opacity-60" type="submit">
                                <span class="px-2 md:px-4" x-text="loading ? 'Joining...' : 'Join Now'"></span>
                                <i :class="loading ? 'ri-loader-4-line animate-spin' : 'ri-arrow-right-line'" class="flex size-10 items-center justify-center rounded-full border border-gray-500 p-2 text-xl"></i>
                            </button>
                        </form>

                        <div class="mb-3 flex items-center space-x-2 md:mb-4">
                            <div class="flex -space-x-2">
                                <div class="size-6 rounded-full border-2 border-white bg-gray-300 md:size-8"></div>
                                <div class="size-6 rounded-full border-2 border-white bg-gray-400 md:size-8"></div>
                                <div class="size-6 rounded-full border-2 border-white bg-gray-500 md:size-8"></div>
                            </div>
                            <span class="text-xs text-gray-600 md:text-xs">100+ people have joined</span>
                        </div>

                        <p class="text-xs text-gray-500 md:text-xs">
                            By joining, you agree to the
                            <a @click.prevent="showLegalModal = true; activeLegalTab = 'terms'" class="underline" href="#">Terms & Conditions</a> and <a @click.prevent="showLegalModal = true; activeLegalTab = 'privacy'" class="underline" href="#">Privacy Policy</a>.
                        </p>
                    </div>

                    <div data-aos="fade-left">
                        <div class="overflow-hidden rounded-3xl" data-tilt data-tilt-glare data-tilt-max-glare="0.2" data-tilt-max="5" data-tilt-speed="400">
                            <img alt="Decorative archway" class="md:w-148 ms-auto aspect-square w-full" src="{{ Vite::asset('resources/images/4.png') }}" />
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-layout>
