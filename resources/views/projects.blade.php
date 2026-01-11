@extends('layout')

@section('title', 'Mes Projets - Mon Portfolio')

@section('content')
<div class="max-w-6xl mx-auto">
    <h1 class="text-3xl font-bold mb-8 text-center text-white">Mes Projets</h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($projects as $project)
            <div class="bg-gray-800 rounded-xl shadow-lg hover:shadow-purple-500/20 transition duration-300 overflow-hidden border border-gray-700 hover:border-purple-500/50 group">
                <div class="relative overflow-hidden">
                    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-48 object-cover transform group-hover:scale-105 transition duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900 to-transparent opacity-60"></div>
                </div>
                <div class="p-6">
                    <h2 class="text-xl font-bold mb-2 text-white group-hover:text-purple-400 transition">{{ $project['title'] }}</h2>
                    <p class="text-gray-400 mb-4 line-clamp-3">{{ $project['description'] }}</p>
                    <a href="{{ route('projects.show', $project['slug']) }}" class="text-purple-400 font-medium hover:text-purple-300 flex items-center transition">
                        En savoir plus <span class="ml-1 group-hover:translate-x-1 transition">&rarr;</span>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
