<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post | All</title>
    <x-head></x-head>
</head>
<body>
    <x-header></x-header>

    <div class="w-full flex justify-center py-6" aria-label="container">
        <div class="flex flex-col min-w-[30%] md:max-w-[50%] gap-4">

            @if(count($posts) > 0)
                <h1 class="text-3xl font-bold text-center">All Posts</h1>
                @foreach($posts as $post)
                    <div class="flex flex-col p-4 border border-gray-300 gap-2">
                        <div class="" aria-label="container-post">
                            <a href="/posts/{{ $post->id }}">
                                <h2 class="text-2xl font-bold hover:text-gray-700 hover:underline">{{ $post->title }}</h2>
                            </a>
                            <p class="">{{ substr(strip_tags($post->content), 0, 200) }}... </p>
                        </div>
                        <p class="text-sm text-gray-500">{{ $post->created_at->format('d-m-Y') }}</p>
                        <a href="/posts/{{ $post->id }}" class="text-sm text-blue-600 hover:text-blue-400">Read more...</a>
                    </div>
                @endforeach

            @else
                <p class="text-xl text-center">No posts found</p>
            @endif
        </div>
    </div>
    


</body>
</html>