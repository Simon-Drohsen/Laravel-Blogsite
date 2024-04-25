<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans antialiased">
    <ul role="list" class="divide-y divide-gray-100 mx-10">
        @foreach($blogs as $blog)
            <li class="flex justify-between gap-x-6 py-5">
                <a href="blog/{{ $blog['id'] }}" class="text-blue-500 hover:underline">{{ $blog['title'] }}</a>

                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <a href="/author/{{ $blog['author_id'] }}" class="text-blue-500 hover:underline">{{ $blog['author_id'] }}</a>
                    <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">{{ $blog['created_at'] }}</time></p>
                </div>
            </li>
        @endforeach
    </ul>
</body>
</html>
