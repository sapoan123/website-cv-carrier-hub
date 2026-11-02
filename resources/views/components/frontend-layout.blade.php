<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $seo?->meta_title ?? config('app.name', 'CVHub Career') }}</title>
    <meta name="description" content="{{ $seo?->meta_description ?? '' }}">
    <meta name="keywords" content="{{ $seo?->meta_keywords ?? '' }}">

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
    <style>
        .animate-section {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 0.7s ease-out, transform 0.7s ease-out;
        }
        .animate-section.visible {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>
<body class="bg-near-black text-text-base">
    {{ $slot }}

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(e => {
                    if (e.isIntersecting) {
                        e.target.classList.add('visible');
                        observer.unobserve(e.target);
                    }
                });
            }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
            document.querySelectorAll('.animate-section').forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>
