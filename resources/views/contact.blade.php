@extends('layout')

@section('title', __('messages.contact') . ' - ' . __('messages.title'))

@section('content')
<div class="max-w-4xl mx-auto h-full flex flex-col justify-center">
    <div class="text-center mb-12">
        <h1 class="text-4xl font-extrabold text-white mb-4">{{ __('messages.contact_title') }}</h1>
        <p class="text-xl text-gray-300">{{ __('messages.contact_description') }}</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        {{-- Email --}}
        <a href="mailto:ugotrash31@gmail.com" class="p-8 bg-gray-800 rounded-xl shadow-lg border border-gray-700 hover:border-purple-500 hover:bg-gray-750 transition flex flex-col items-center group">
            <div class="w-16 h-16 bg-purple-900/50 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                <svg class="w-8 h-8 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
            </div>
            <h2 class="text-xl font-bold text-white mb-2">{{ __('messages.email') }}</h2>
            <p class="text-gray-400 group-hover:text-purple-300 transition">ugotrash31@gmail.com</p>
        </a>

        {{-- LinkedIn --}}
        <a href="https://www.linkedin.com/in/ugo-dassonville/" target="_blank" class="p-8 bg-gray-800 rounded-xl shadow-lg border border-gray-700 hover:border-purple-500 hover:bg-gray-750 transition flex flex-col items-center group">
            <div class="w-16 h-16 bg-purple-900/50 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                <svg class="w-8 h-8 text-purple-400" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
            </div>
            <h2 class="text-xl font-bold text-white mb-2">{{ __('messages.linkedin') }}</h2>
            <p class="text-gray-400 group-hover:text-purple-300 transition">Mon Profil</p>
        </a>

        {{-- GitHub --}}
        <a href="https://github.com/Soulreaper4006" target="_blank" class="p-8 bg-gray-800 rounded-xl shadow-lg border border-gray-700 hover:border-purple-500 hover:bg-gray-750 transition flex flex-col items-center group">
            <div class="w-16 h-16 bg-purple-900/50 rounded-full flex items-center justify-center mb-4 group-hover:scale-110 transition">
                <svg class="w-8 h-8 text-purple-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
            </div>
            <h2 class="text-xl font-bold text-white mb-2">{{ __('messages.github') }}</h2>
            <p class="text-gray-400 group-hover:text-purple-300 transition">Soulreaper4006</p>
        </a>

        {{-- Discord --}}
        <div class="p-8 bg-gray-800 rounded-xl shadow-lg border border-gray-700 flex flex-col items-center group cursor-default">
            <div class="w-16 h-16 bg-purple-900/50 rounded-full flex items-center justify-center mb-4">
                <svg class="w-8 h-8 text-purple-400" fill="currentColor" viewBox="0 0 24 24"><path d="M20.317 4.37a19.791 19.791 0 0 0-4.885-1.515.074.074 0 0 0-.079.037 14.156 14.156 0 0 0-.649 1.332 18.293 18.293 0 0 0-6.41 0 13.9 13.9 0 0 0-.65-1.331.077.077 0 0 0-.08-.037 19.803 19.803 0 0 0-4.885 1.515.068.068 0 0 0-.031.025C1.65 9.778 1.487 15.043 2.66 20.243a.074.074 0 0 0 .03.056 19.907 19.907 0 0 0 6.096 3.076.077.077 0 0 0 .083-.028 14.195 14.195 0 0 0 1.228-1.99.076.076 0 0 0-.041-.106 13.09 13.09 0 0 1-1.872-.892.077.077 0 0 1-.008-.128 10.236 10.236 0 0 0 .373-.292.073.073 0 0 1 .077-.01c4.148 1.895 8.636 1.895 12.72 0a.076.076 0 0 1 .078.01c.119.098.243.197.371.292a.076.076 0 0 1-.006.128 12.352 12.352 0 0 1-1.873.892.075.075 0 0 0-.04.106 14.1 14.1 0 0 0 1.226 1.99.077.077 0 0 0 .084.028 19.88 19.88 0 0 0 6.095-3.076.075.075 0 0 0 .03-.055c1.332-6.526-.848-11.233-3.601-15.848a.066.066 0 0 0-.03-.025zm-13.23 11.23c-1.39 0-2.52-1.277-2.52-2.842 0-1.564 1.115-2.842 2.52-2.842 1.42 0 2.536 1.278 2.52 2.842 0 1.565-1.115 2.842-2.52 2.842zm7.84 0c-1.39 0-2.52-1.277-2.52-2.842 0-1.564 1.115-2.842 2.52-2.842 1.42 0 2.536 1.278 2.52 2.842 0 1.565-1.114 2.842-2.52 2.842z"/></svg>
            </div>
            <h2 class="text-xl font-bold text-white mb-2">{{ __('messages.discord') }}</h2>
            <p class="text-gray-400 selection:bg-purple-500 selection:text-white">Pseudo: trashinfern0</p>
        </div>
    </div>
</div>
@endsection

