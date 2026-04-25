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
        @if ($post->categories->isNotEmpty())
            <div class="mb-4 flex flex-wrap gap-2">
                @foreach ($post->categories as $category)
                    <a class="inline-flex items-center rounded-full bg-teal-50 px-3 py-1 text-xs font-medium text-teal-700 transition-colors hover:bg-teal-100" href="{{ route('blog.category', $category) }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </div>
        @endif
        <a class="mt-auto inline-flex items-center text-sm font-medium text-teal-600 hover:text-teal-700" href="{{ route('blog.show', $post) }}">
            Read more
            <i class="ri-arrow-right-line ml-1"></i>
        </a>
    </div>
</article>
