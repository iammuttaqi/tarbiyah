<x-layout>
    <x-slot name="title">{{ __('Blog') }}</x-slot>

    <section class="relative min-h-[40vh] overflow-hidden bg-gray-900">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7))"></div>
        <div class="relative z-10 flex h-full min-h-[40vh] items-center justify-center px-4 pb-12 pt-32 text-center text-white sm:px-6">
            <div class="w-full max-w-4xl space-y-4">
                <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl md:text-5xl">Blog</h1>
                <p class="mx-auto max-w-2xl text-base text-white/90 sm:text-lg">Reflections, lessons, and updates from the Tarbiya community.</p>
            </div>
        </div>
    </section>

    <main class="container mx-auto px-4 py-16 sm:px-6 md:py-20">
        @if ($posts->isEmpty())
            <div class="mx-auto max-w-2xl py-20 text-center">
                <i class="ri-quill-pen-line mb-4 text-5xl text-gray-400"></i>
                <h2 class="text-2xl font-semibold text-gray-900">No posts yet</h2>
                <p class="mt-3 text-gray-600">Check back soon for new articles.</p>
            </div>
        @else
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($posts as $post)
                    <article class="group flex flex-col overflow-hidden rounded-2xl border border-gray-200 bg-white shadow-sm transition-all hover:-translate-y-1 hover:shadow-lg">
                        <a class="aspect-16/10 block overflow-hidden bg-gray-100" href="{{ route('blog.show', $post) }}">
                            @if ($post->featured_image_url)
                                <img alt="{{ $post->title }}" class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105" loading="lazy" src="{{ $post->featured_image_url }}" />
                            @else
                                <div class="bg-linear-to-br flex h-full w-full items-center justify-center from-teal-500 to-orange-500 text-white">
                                    <i class="ri-image-line text-5xl opacity-60"></i>
                                </div>
                            @endif
                        </a>
                        <div class="flex flex-1 flex-col p-6">
                            <div class="mb-3 flex items-center gap-2 text-xs text-gray-500">
                                <span>{{ $post->published_at->format('M j, Y') }}</span>
                                @if ($post->author)
                                    <span>·</span>
                                    <span>{{ $post->author->name }}</span>
                                @endif
                            </div>
                            <h2 class="mb-3 text-xl font-semibold text-gray-900 transition-colors group-hover:text-teal-600">
                                <a href="{{ route('blog.show', $post) }}">{{ $post->title }}</a>
                            </h2>
                            @if ($post->excerpt)
                                <p class="mb-4 flex-1 text-sm leading-relaxed text-gray-600">{{ $post->excerpt }}</p>
                            @endif
                            <a class="mt-auto inline-flex items-center text-sm font-medium text-teal-600 hover:text-teal-700" href="{{ route('blog.show', $post) }}">
                                Read more
                                <i class="ri-arrow-right-line ml-1"></i>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>

            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        @endif
    </main>
</x-layout>
