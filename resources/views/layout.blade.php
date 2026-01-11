<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', __('messages.title'))</title>
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
            <a href="{{ route('home') }}" class="text-xl font-bold text-purple-400 hover:text-purple-300 transition">{{ __('messages.title') }}</a>
            <div class="space-x-4 flex items-center">
                <a href="{{ route('home') }}" class="transition hover:text-purple-400 {{ request()->routeIs('home') ? 'text-purple-400 font-semibold' : 'text-gray-300' }}">{{ __('messages.home') }}</a>
                <a href="{{ route('projects') }}" class="transition hover:text-purple-400 {{ request()->routeIs('projects') ? 'text-purple-400 font-semibold' : 'text-gray-300' }}">{{ __('messages.projects') }}</a>
                <a href="{{ route('cv') }}" class="transition hover:text-purple-400 {{ request()->routeIs('cv') ? 'text-purple-400 font-semibold' : 'text-gray-300' }}">{{ __('messages.cv') }}</a>

                {{-- Language Switcher --}}
                <div class="ml-4 pl-4 border-l border-gray-700">
                    <a href="{{ route('switch-language', ['locale' => 'fr']) }}" class="px-2 py-1 text-sm rounded {{ app()->getLocale() == 'fr' ? 'bg-purple-600 text-white' : 'text-gray-400 hover:text-white' }}">FR</a>
                    <a href="{{ route('switch-language', ['locale' => 'en']) }}" class="px-2 py-1 text-sm rounded {{ app()->getLocale() == 'en' ? 'bg-purple-600 text-white' : 'text-gray-400 hover:text-white' }}">EN</a>
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow container mx-auto px-4 py-8 mt-20">
        @yield('content')
    </main>

    <footer class="bg-gray-900/50 border-t border-gray-800 py-6 mt-8">
        <div class="container mx-auto px-4 text-center text-gray-500">
            &copy; {{ date('Y') }} {{ __('messages.title') }}. {{ __('messages.rights_reserved') }}
        </div>
    </footer>
</body>
</html>
