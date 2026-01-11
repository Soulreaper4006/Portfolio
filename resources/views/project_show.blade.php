@extends('layout')

@section('title', $project['title'] . ' - Mes Projets')

@section('content')
<div class="max-w-4xl mx-auto">
    <div class="mb-6">
        <a href="{{ route('projects') }}" class="text-purple-400 hover:text-purple-300 transition flex items-center">
            &larr; <span class="ml-2">Retour aux projets</span>
        </a>
    </div>

    <div class="bg-gray-800 rounded-xl shadow-2xl overflow-hidden border border-gray-700">
        {{-- Hero Image --}}
        <div class="relative h-64 md:h-96 w-full">
            <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-gray-900 via-transparent to-transparent"></div>
            <div class="absolute bottom-0 left-0 p-8">
                <h1 class="text-4xl md:text-5xl font-bold text-white mb-2">{{ $project['title'] }}</h1>
                <div class="flex flex-wrap gap-2">
                    @if(isset($project['tags']))
                        @foreach($project['tags'] as $tag)
                            <span class="px-3 py-1 bg-purple-600/80 text-white rounded-full text-xs font-semibold backdrop-blur-sm">
                                {{ $tag }}
                            </span>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="p-8">
            <div class="flex flex-col md:flex-row gap-8">
                {{-- Main Content --}}
                <div class="flex-grow text-gray-300 leading-relaxed text-lg">
                    {!! $project['content'] ?? $project['description'] !!}
                </div>

                {{-- Sidebar / Actions --}}
                <div class="md:w-1/3 shrink-0">
                    <div class="bg-gray-900/50 p-6 rounded-xl border border-gray-700 sticky top-24">
                        <h3 class="text-white font-bold text-lg mb-4">Liens du projet</h3>
                        @if(!empty($project['link']) && $project['link'] !== '#')
                            <a href="{{ $project['link'] }}" target="_blank" class="block w-full text-center px-4 py-3 bg-white text-gray-900 font-bold rounded-lg hover:bg-gray-200 transition mb-3">
                                <span class="flex items-center justify-center gap-2">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path></svg>
                                    Voir sur GitHub
                                </span>
                            </a>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

