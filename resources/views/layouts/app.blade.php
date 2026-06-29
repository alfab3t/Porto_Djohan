<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Djohan | About Me, Portfolio & Skills</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Portofolio resmi Djohan - Web Developer & Video Editor profesional yang ahli dalam Laravel, ASP.NET Core, Next.js, dan pascaproduksi video kelas industri.">
    <meta name="keywords" content="Djohan, Portofolio, Developer, Video Editor, Laravel, ASP.NET Core, Next.js, DaVinci Resolve">

    <!-- CSS Asset -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="antialiased">

    <!-- Ambient Glow Backgrounds -->
    <div class="ambient-glow-1"></div>
    <div class="ambient-glow-2"></div>

    <!-- Main Yield Content -->
    @yield('content')

    <!-- JS Asset -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
