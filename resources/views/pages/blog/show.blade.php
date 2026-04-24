<x-layout>
    <x-slot name="title">{{ $post->title }}</x-slot>
    <x-slot name="description">{{ $post->excerpt }}</x-slot>
    <x-slot name="keyboards">{{ __('Gymscanner, global gym access, fitness platform, book gym memberships online, personal trainer bookings, flexible fitness options, gym tourist passes') }}</x-slot>

    <article>
        <section class="relative min-h-[50vh] overflow-hidden bg-gray-900">
            @if ($post->featured_image_url)
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)), url('{{ $post->featured_image_url }}')"></div>
            @else
                <div class="bg-linear-to-br absolute inset-0 from-gray-900 via-gray-800 to-teal-900"></div>
            @endif
            <div class="relative z-10 flex h-full min-h-[50vh] items-center justify-center px-4 pb-16 pt-32 text-center text-white sm:px-6">
                <div class="w-full max-w-4xl space-y-6">
                    <a class="inline-flex items-center text-sm text-white/80 transition-colors hover:text-white" href="{{ route('blog.index') }}">
                        <i class="ri-arrow-left-line mr-1"></i>
                        Back to blog
                    </a>
                    <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl md:text-5xl">{{ $post->title }}</h1>
                    <div class="flex items-center justify-center gap-3 text-sm text-white/80">
                        @if ($post->author)
                            <span>{{ $post->author->name }}</span>
                            <span>·</span>
                        @endif
                        <time datetime="{{ $post->published_at->toIso8601String() }}">{{ $post->published_at->format('F j, Y') }}</time>
                    </div>
                </div>
            </div>
        </section>

        <main class="container mx-auto px-4 py-12 sm:px-6 md:py-16">
            <div class="prose prose-lg prose-headings:text-gray-900 prose-a:text-teal-600 prose-a:no-underline hover:prose-a:underline prose-img:rounded-xl mx-auto max-w-3xl">
                {!! $post->body !!}
            </div>

            <div class="mx-auto mt-16 max-w-3xl border-t border-gray-200 pt-8 text-center">
                <a class="inline-flex items-center text-sm font-medium text-teal-600 hover:text-teal-700" href="{{ route('blog.index') }}">
                    <i class="ri-arrow-left-line mr-1"></i>
                    Back to all posts
                </a>
            </div>
        </main>
    </article>
</x-layout>
