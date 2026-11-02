<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $seo->meta_title ?? config('app.name', 'CVHub Career') }}</title>
    <meta name="description" content="{{ $seo->meta_description ?? '' }}">
    <meta name="keywords" content="{{ $seo->meta_keywords ?? '' }}">

    @if($seo?->favicon)
        <link rel="icon" href="{{ asset('storage/' . $seo->favicon) }}">
    @endif

    @if($seo?->og_image)
        <meta property="og:image" content="{{ asset('storage/' . $seo->og_image) }}">
    @endif

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,100..900&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-near-black text-text-base">
    {{ $slot }}
</body>
</body>
</html>
