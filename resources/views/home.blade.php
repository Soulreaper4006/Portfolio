@extends('layout')

@section('title', __('messages.home') . ' - ' . __('messages.title'))

@section('content')
<div class="text-center py-12 lg:py-24">
    <div class="mb-8">
        <img src="/images/pfp.jpg" alt="Photo de profil" class="w-32 h-32 rounded-full mx-auto border-4 border-purple-500 shadow-lg shadow-purple-500/20">
    </div>
    <h1 class="text-4xl font-extrabold text-white mb-4">{{ __('messages.hello') }} <span class="text-purple-400">{{ __('messages.freelance_dev') }}</span></h1>
    <p class="text-lg text-gray-300 max-w-2xl mx-auto mb-8">
        {{ __('messages.hero_description') }}
    </p>
    <div class="flex justify-center gap-4">
        <a href="{{ route('projects') }}" class="px-6 py-3 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition shadow-lg shadow-purple-600/30">
            {{ __('messages.view_projects') }}
        </a>
        <a href="{{ route('cv') }}" class="px-6 py-3 bg-transparent border border-purple-400 text-purple-300 font-semibold rounded-lg hover:bg-purple-900/30 transition">
            {{ __('messages.my_path') }}
        </a>
    </div>

    <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto text-left">
        <div class="p-6 bg-gray-800/50 backdrop-blur-sm rounded-xl shadow-lg border border-gray-700 hover:border-purple-500/50 transition">
            <h3 class="text-xl font-bold mb-2 text-white">{{ __('messages.backend') }}</h3>
            <p class="text-gray-400">Laravel, Python, PHP, SQL</p>
        </div>
        <div class="p-6 bg-gray-800/50 backdrop-blur-sm rounded-xl shadow-lg border border-gray-700 hover:border-purple-500/50 transition">
            <h3 class="text-xl font-bold mb-2 text-white">{{ __('messages.frontend') }}</h3>
            <p class="text-gray-400">Tailwind CSS, HTML/CSS</p>
        </div>
        <div class="p-6 bg-gray-800/50 backdrop-blur-sm rounded-xl shadow-lg border border-gray-700 hover:border-purple-500/50 transition">
            <h3 class="text-xl font-bold mb-2 text-white">{{ __('messages.tools') }}</h3>
            <p class="text-gray-400">Git, JetBrains, VS Code</p>
        </div>
    </div>
</div>
@endsection
