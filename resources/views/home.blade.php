@extends('layout')

@section('title', 'Accueil - Mon Portfolio')

@section('content')
<div class="text-center py-12 lg:py-24">
    <div class="mb-8">
        <img src="https://via.placeholder.com/150" alt="Photo de profil" class="w-32 h-32 rounded-full mx-auto border-4 border-purple-500 shadow-lg shadow-purple-500/20">
    </div>
    <h1 class="text-4xl font-extrabold text-white mb-4">Bonjour, je suis <span class="text-purple-400">Développeur Freelance</span></h1>
    <p class="text-lg text-gray-300 max-w-2xl mx-auto mb-8">
        Passionné par le développement web et la création d'applications modernes.
        J'aime transformer des idées complexes en interfaces simples et intuitives.
    </p>
    <div class="flex justify-center gap-4">
        <a href="{{ route('projects') }}" class="px-6 py-3 bg-purple-600 text-white font-semibold rounded-lg hover:bg-purple-700 transition shadow-lg shadow-purple-600/30">
            Voir mes projets
        </a>
        <a href="{{ route('cv') }}" class="px-6 py-3 bg-transparent border border-purple-400 text-purple-300 font-semibold rounded-lg hover:bg-purple-900/30 transition">
            Mon Parcours
        </a>
    </div>

    <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto text-left">
        <div class="p-6 bg-gray-800/50 backdrop-blur-sm rounded-xl shadow-lg border border-gray-700 hover:border-purple-500/50 transition">
            <h3 class="text-xl font-bold mb-2 text-white">Backend</h3>
            <p class="text-gray-400">Laravel, Node.js, PHP, SQL</p>
        </div>
        <div class="p-6 bg-gray-800/50 backdrop-blur-sm rounded-xl shadow-lg border border-gray-700 hover:border-purple-500/50 transition">
            <h3 class="text-xl font-bold mb-2 text-white">Frontend</h3>
            <p class="text-gray-400">Vue.js, React, Tailwind CSS, HTML/CSS</p>
        </div>
        <div class="p-6 bg-gray-800/50 backdrop-blur-sm rounded-xl shadow-lg border border-gray-700 hover:border-purple-500/50 transition">
            <h3 class="text-xl font-bold mb-2 text-white">Outils</h3>
            <p class="text-gray-400">Git, Docker, VS Code, Figma</p>
        </div>
    </div>
</div>
@endsection
