<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Mon Portfolio')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0f172a; /* Fallback */
            background-image: radial-gradient(at 0% 0%, hsla(253,16%,7%,1) 0, transparent 50%), radial-gradient(at 50% 0%, hsla(225,39%,30%,1) 0, transparent 50%), radial-gradient(at 100% 0%, hsla(339,49%,30%,1) 0, transparent 50%);
            background-attachment: fixed;
        }
    </style>
</head>
<body class="bg-gray-900 text-gray-100 flex flex-col min-h-screen">
    <nav class="fixed top-0 w-full z-50 bg-gray-900/80 backdrop-blur-md border-b border-gray-800 transition-all duration-300">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-purple-400 hover:text-purple-300 transition">Mon Portfolio</a>
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="transition hover:text-purple-400 {{ request()->routeIs('home') ? 'text-purple-400 font-semibold' : 'text-gray-300' }}">Accueil</a>
                <a href="{{ route('projects') }}" class="transition hover:text-purple-400 {{ request()->routeIs('projects') ? 'text-purple-400 font-semibold' : 'text-gray-300' }}">Projets</a>
                <a href="{{ route('cv') }}" class="transition hover:text-purple-400 {{ request()->routeIs('cv') ? 'text-purple-400 font-semibold' : 'text-gray-300' }}">CV</a>
            </div>
        </div>
    </nav>

    <main class="flex-grow container mx-auto px-4 py-8 mt-20">
        @yield('content')
    </main>

    <footer class="bg-gray-900/50 border-t border-gray-800 py-6 mt-8">
        <div class="container mx-auto px-4 text-center text-gray-500">
            &copy; {{ date('Y') }} Mon Portfolio. Tous droits réservés.
        </div>
    </footer>
</body>
</html>
