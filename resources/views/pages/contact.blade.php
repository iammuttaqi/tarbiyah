<x-layout>
    <!-- Hero Section -->
    <section class="relative flex min-h-[50vh] items-center justify-center overflow-hidden bg-gray-900 px-4 pb-16 pt-32 text-center text-white sm:px-6">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url(&quot;slider-3.jpg&quot;)"></div>
        <div class="z-5 absolute inset-0" id="tsparticles"></div>
        <div class="relative z-10 w-full max-w-4xl space-y-6">
            <h1 class="text-3xl font-bold tracking-tight sm:text-4xl md:text-5xl">Get in Touch</h1>
            <p class="mx-auto max-w-3xl text-base text-white/90 sm:text-lg md:text-xl">Have questions? We'd love to hear from you</p>
        </div>
    </section>

    <main class="container mx-auto">
        <!-- Contact Form -->
        <section class="section-padding relative overflow-hidden px-4 sm:px-6">
            <!-- Floating Animated SVG -->
            <svg class="spin-3d delay-1s pointer-events-none absolute bottom-10 left-10 z-0 opacity-[0.05]" height="300" style="animation-duration: 25s" viewBox="0 0 200 200" width="300" xmlns="http://www.w3.org/2000/svg">
                <path d="M39.6,-66C50.2,-55.3,56.9,-40.6,64.2,-25.9C71.5,-11.2,79.3,3.6,77.5,17.4C75.8,31.2,64.5,44,51.8,53.2C39.1,62.4,24.9,67.9,10.2,70.5C-4.4,73,-19.6,72.6,-32.7,66.6C-45.8,60.6,-56.9,49.1,-65.3,35.5C-73.7,21.9,-79.4,6.2,-78,-8.4C-76.6,-23.1,-68.2,-36.8,-56.7,-47.5C-45.2,-58.2,-30.7,-66,-16.1,-69.1C-1.5,-72.1,13.2,-70.4,26.5,-66Z" fill="#059669" transform="translate(100 100)" />
            </svg>
            <div class="relative z-10 mx-auto max-w-4xl">
                <div class="grid gap-12 md:grid-cols-2">
                    <!-- Form -->
                    <div class="space-y-6">
                        <h2 class="heading-2">Send us a message</h2>
                        <p class="text-body">Fill out the form below and we'll get back to you as soon as possible.</p>

                        <form @submit.prevent="submit" class="space-y-5" x-data="{
                            name: '',
                            email: '',
                            subject: '',
                            message: '',
                            loading: false,
                            async submit() {
                                this.loading = true;
                                try {
                                    const res = await fetch('{{ route('contact.post') }}', {
                                        method: 'POST',
                                        headers: {
                                            'Content-Type': 'application/json',
                                            'Accept': 'application/json',
                                            'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').getAttribute('content'),
                                            'X-Requested-With': 'XMLHttpRequest',
                                        },
                                        body: JSON.stringify({ name: this.name, email: this.email, subject: this.subject, message: this.message }),
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
                                    this.name = ''; this.email = ''; this.subject = ''; this.message = '';
                                } catch (e) {
                                    window.dispatchEvent(new CustomEvent('toast', { detail: { type: 'error', message: 'Network error. Please try again.' } }));
                                } finally {
                                    this.loading = false;
                                }
                            }
                        }">
                            <div class="space-y-2">
                                <label class="block text-xs font-medium text-gray-700" for="name">Full Name</label>
                                <div class="flex items-center rounded-2xl border border-gray-300 px-4 py-3">
                                    <i class="ri-user-3-line mr-3 text-lg text-gray-400"></i>
                                    <input class="flex-1 bg-transparent text-sm outline-none" id="name" name="name" placeholder="Your full name" required type="text" x-model="name" />
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="block text-xs font-medium text-gray-700" for="email">Email Address</label>
                                <div class="flex items-center rounded-2xl border border-gray-300 px-4 py-3">
                                    <i class="ri-mail-line mr-3 text-lg text-gray-400"></i>
                                    <input class="flex-1 bg-transparent text-sm outline-none" id="email" name="email" placeholder="your.email@example.com" required type="email" x-model="email" />
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="block text-xs font-medium text-gray-700" for="subject">Subject</label>
                                <div class="flex items-center rounded-2xl border border-gray-300 px-4 py-3">
                                    <i class="ri-chat-3-line mr-3 text-lg text-gray-400"></i>
                                    <input class="flex-1 bg-transparent text-sm outline-none" id="subject" name="subject" placeholder="How can we help?" required type="text" x-model="subject" />
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label class="block text-xs font-medium text-gray-700" for="message">Message</label>
                                <div class="flex rounded-2xl border border-gray-300 px-4 py-3">
                                    <i class="ri-message-3-line mr-3 pt-1 text-lg text-gray-400"></i>
                                    <textarea class="flex-1 resize-none bg-transparent text-sm outline-none" id="message" name="message" placeholder="Tell us more about your inquiry..." required rows="5" x-model="message"></textarea>
                                </div>
                            </div>

                            <button :disabled="loading" class="btn-primary w-full text-base disabled:cursor-not-allowed disabled:opacity-60" type="submit">
                                <span class="px-2" x-text="loading ? 'Sending...' : 'Send Message'"></span>
                                <i :class="loading ? 'ri-loader-4-line animate-spin' : 'ri-send-plane-fill'" class="ml-2 text-lg"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Contact Info -->
                    <div class="space-y-8">
                        <div class="space-y-6">
                            <h2 class="heading-2">Contact Information</h2>
                            <p class="text-sm text-gray-600 sm:text-base">You can also reach us through any of our global offices</p>
                        </div>

                        <!-- Office Locations -->
                        <div class="space-y-6">
                            <div class="space-y-3 rounded-2xl border border-gray-200 bg-gray-50 p-6">
                                <div class="flex items-center">
                                    <i class="ri-map-pin-line mr-3 text-xl text-teal-600"></i>
                                    <h3 class="heading-4">Tarbiyah Head Office</h3>
                                </div>
                                <p class="ml-9 text-xs leading-relaxed text-gray-600">
                                    Tarbiyah, Inc<br />
                                    256 Chapman, Road STE<br />
                                    105-4 Delaware City,<br />
                                    DE 10702, USA
                                </p>
                            </div>

                            <div class="space-y-3 rounded-2xl border border-gray-200 bg-gray-50 p-6">
                                <div class="flex items-center">
                                    <i class="ri-map-pin-line mr-3 text-xl text-orange-500"></i>
                                    <h3 class="heading-4">Kuwait Office</h3>
                                </div>
                                <p class="ml-9 text-xs leading-relaxed text-gray-600">
                                    Villa 5, Salem Mubarak St.<br />
                                    Salmiya, Kuwait.
                                </p>
                            </div>
                        </div>

                        <!-- Social Links -->
                        <div class="space-y-4">
                            <h3 class="heading-4">Connect With Us</h3>
                            <div class="flex flex-wrap gap-3 *:flex *:size-12 *:items-center *:justify-center *:rounded-full *:border-2 *:border-gray-300 *:text-gray-700 *:transition-all hover:*:border-gray-900 hover:*:bg-gray-900 hover:*:text-white">
                                <a aria-label="Facebook" href="#" target="_blank">
                                    <i class="ri-facebook-fill text-lg"></i>
                                </a>
                                <a aria-label="Twitter" href="#" target="_blank">
                                    <i class="ri-twitter-x-line text-lg"></i>
                                </a>
                                <a aria-label="Instagram" href="#" target="_blank">
                                    <i class="ri-instagram-line text-lg"></i>
                                </a>
                                <a aria-label="LinkedIn" href="#" target="_blank">
                                    <i class="ri-linkedin-fill text-lg"></i>
                                </a>
                                <a aria-label="WhatsApp" href="#" target="_blank">
                                    <i class="ri-whatsapp-line text-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layout>
