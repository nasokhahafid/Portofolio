<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Portfolio') }}</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-transparent text-slate-300 antialiased font-sans selection:bg-gold-500 selection:text-navy-900">
    <!-- Fixed Background Layer -->
    <div class="fixed inset-0 z-[-2] w-full h-full">
        <!-- Main Background Image -->
        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transform scale-105 transition-transform duration-[20s]"
             style="background-image: url('{{ asset('images/workspace-bg.jpg') }}');">
        </div>

        <!-- Dark Overlay for Readability -->
        <div class="absolute inset-0 bg-navy-900/10 bg-linear-to-b from-navy-900/20 via-transparent to-navy-900/20"></div>

        <!-- Lamp Glow Animation -->
        <div class="absolute top-[25%] right-[20%] md:right-[25%] w-64 h-64 bg-gold-400/20 rounded-full blur-[80px] animate-pulse-slow mix-blend-screen pointer-events-none"></div>
        <div class="absolute top-[28%] right-[22%] md:right-[26%] w-32 h-32 bg-gold-300/30 rounded-full blur-[40px] animate-flicker mix-blend-screen pointer-events-none"></div>
    </div>

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>
