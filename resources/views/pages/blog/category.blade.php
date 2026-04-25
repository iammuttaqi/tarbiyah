<x-layout>
    <x-slot name="title">{{ $category->name }} — {{ __('Blog') }}</x-slot>

    <section class="relative min-h-[40vh] overflow-hidden bg-gray-900">
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7))"></div>
        <div class="relative z-10 flex h-full min-h-[40vh] items-center justify-center px-4 pb-12 pt-32 text-center text-white sm:px-6">
            <div class="w-full max-w-4xl space-y-4">
                <a class="inline-flex items-center text-sm text-white/80 transition-colors hover:text-white" href="{{ route('blog.index') }}">
                    <i class="ri-arrow-left-line mr-1"></i>
                    Back to blog
                </a>
                <p class="text-sm uppercase tracking-widest text-teal-300">Category</p>
                <h1 class="text-3xl font-bold tracking-tight text-white sm:text-4xl md:text-5xl">{{ $category->name }}</h1>
            </div>
        </div>
    </section>

    <main class="container mx-auto px-4 py-16 sm:px-6 md:py-20">
        @if ($posts->isEmpty())
            <div class="mx-auto max-w-2xl py-20 text-center">
                <i class="ri-quill-pen-line mb-4 text-5xl text-gray-400"></i>
                <h2 class="text-2xl font-semibold text-gray-900">No posts in this category yet</h2>
                <p class="mt-3 text-gray-600">Check back soon for new articles.</p>
            </div>
        @else
            <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @foreach ($posts as $post)
                    @include('pages.blog.partials.post-card', ['post' => $post])
                @endforeach
            </div>

            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        @endif
    </main>
</x-layout>
