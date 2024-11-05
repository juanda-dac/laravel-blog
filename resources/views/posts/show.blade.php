<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <x-head></x-head>
</head>
<body>
    <x-header></x-header>
    <div class="w-full flex justify-center py-6" aria-label="container">
        <div class="flex flex-col min-w-[40%] px-3 md:px-0 max-w-full md:max-w-[800px] gap-4">
            {{-- Title Post --}}
            <div class="">
                <h1 class="text-center text-3xl font-bold">{{ $post->title }}</h1>
                <p class="text-center text-sm text-gray-500">{{ $post->created_at->format('d-m-Y') }}</p>
            </div>
            {{-- Content Post --}}
            <div class="flex flex-col">
                {!! $post->content !!}
            </div>


            {{-- Edit section --}}
            <div class="fixed bottom-10 translate-x-[-100px]">
                <a href="/posts/edit/{{ $post->id }}">
                    <button id="edit-btn" class="rounded-full bg-blue-900 p-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="#FFFFFF" xmlns="http://www.w3.org/2000/svg"> <path d="M15.8911 3.04727C17.2885 1.64967 19.5543 1.6496 20.9519 3.04712C22.3493 4.44453 22.3493 6.71015 20.952 8.10763L20.0606 8.99918C21.3252 10.2688 21.3236 12.3231 20.0559 13.5907L18.2725 15.3741C17.9796 15.667 17.5048 15.667 17.2119 15.3741C16.919 15.0812 16.919 14.6064 17.2119 14.3135L18.9953 12.5301C19.6771 11.8482 19.6787 10.7437 19 10.0599L9.00191 20.0591C8.59546 20.4656 8.08418 20.7514 7.52498 20.8845L2.92373 21.98C2.67037 22.0404 2.40385 21.9649 2.21968 21.7808C2.03552 21.5966 1.96009 21.3301 2.02041 21.0767L3.116 16.4753C3.2491 15.9162 3.5347 15.4051 3.94103 14.9987L15.8911 3.04727Z" fill="#FFFFFF"/> </svg>
                    </button>
                </a>
            </div>
        </div>
    </div>


</body>
</html>