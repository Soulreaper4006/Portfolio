@extends('layout')

@section('title', 'Mon CV - Mon Portfolio')

@section('content')
<div class="max-w-4xl mx-auto bg-gray-800/80 backdrop-blur shadow-2xl rounded-lg p-8 border border-gray-700">
    <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-8 border-b border-gray-700 pb-6">
        <div>
            <h1 class="text-3xl font-bold text-white">Mon Nom</h1>
            <p class="text-xl text-purple-400">Développeur Full Stack</p>
            <p class="text-gray-400 mt-2">email@example.com | 06 00 00 00 00 | Paris, France</p>
        </div>
        <div class="mt-4 md:mt-0">
            {{-- Remarque : Assurez-vous de placer un fichier cv.pdf dans le dossier public --}}
            <a href="#" class="inline-flex items-center px-4 py-2 bg-purple-600 text-white rounded-md hover:bg-purple-700 transition shadow-lg shadow-purple-600/30">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                Télécharger le CV
            </a>
        </div>
    </div>

    <div class="space-y-8">
        <section>
            <h2 class="text-2xl font-bold text-gray-100 mb-4 flex items-center">
                <span class="w-2 h-8 bg-purple-500 mr-3 rounded-full shadow-[0_0_10px_rgba(168,85,247,0.5)]"></span> Expérience Professionnelle
            </h2>
            <div class="space-y-6">
                <!-- Expérience 1 -->
                <div class="pl-5 border-l-2 border-purple-900/50">
                    <div class="flex justify-between items-baseline mb-1">
                        <h3 class="text-lg font-bold text-white">Développeur Senior Laravel</h3>
                        <span class="text-sm text-purple-300">2023 - Présent</span>
                    </div>
                    <p class="font-medium text-gray-300 mb-2">Entreprise Tech, Paris</p>
                    <ul class="list-disc list-inside text-gray-400 space-y-1">
                        <li>Développement d'APIs RESTful performantes</li>
                        <li>Gestion d'équipe de 3 développeurs</li>
                        <li>Optimisation des bases de données</li>
                    </ul>
                </div>

                <!-- Expérience 2 -->
                <div class="pl-5 border-l-2 border-purple-900/50">
                    <div class="flex justify-between items-baseline mb-1">
                        <h3 class="text-lg font-bold text-white">Développeur Junior</h3>
                        <span class="text-sm text-purple-300">2021 - 2023</span>
                    </div>
                    <p class="font-medium text-gray-300 mb-2">Web Agency, Lyon</p>
                    <ul class="list-disc list-inside text-gray-400 space-y-1">
                        <li>Création de sites vitrines WordPress et Laravel</li>
                        <li>Intégration de maquettes Figma</li>
                    </ul>
                </div>
            </div>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-gray-100 mb-4 flex items-center">
                <span class="w-2 h-8 bg-purple-500 mr-3 rounded-full shadow-[0_0_10px_rgba(168,85,247,0.5)]"></span> Formation
            </h2>
            <div class="pl-5 border-l-2 border-purple-900/50">
                <div class="flex justify-between items-baseline mb-1">
                    <h3 class="text-lg font-bold text-white">Master Expert Informatique</h3>
                    <span class="text-sm text-purple-300">2019 - 2021</span>
                </div>
                <p class="text-gray-400">École Supérieure du Numérique</p>
            </div>
        </section>

        <section>
            <h2 class="text-2xl font-bold text-gray-100 mb-4 flex items-center">
                <span class="w-2 h-8 bg-purple-500 mr-3 rounded-full shadow-[0_0_10px_rgba(168,85,247,0.5)]"></span> Compétences
            </h2>
            <div class="flex flex-wrap gap-2">
                <span class="px-3 py-1 bg-gray-700 text-purple-300 border border-purple-500/30 rounded-full text-sm font-medium hover:bg-purple-900/50 transition cursor-default">PHP / Laravel</span>
                <span class="px-3 py-1 bg-gray-700 text-purple-300 border border-purple-500/30 rounded-full text-sm font-medium hover:bg-purple-900/50 transition cursor-default">JavaScript / React</span>
                <span class="px-3 py-1 bg-gray-700 text-purple-300 border border-purple-500/30 rounded-full text-sm font-medium hover:bg-purple-900/50 transition cursor-default">MySQL</span>
                <span class="px-3 py-1 bg-gray-700 text-purple-300 border border-purple-500/30 rounded-full text-sm font-medium hover:bg-purple-900/50 transition cursor-default">Git</span>
                <span class="px-3 py-1 bg-gray-700 text-purple-300 border border-purple-500/30 rounded-full text-sm font-medium hover:bg-purple-900/50 transition cursor-default">Docker</span>
                <span class="px-3 py-1 bg-gray-700 text-purple-300 border border-purple-500/30 rounded-full text-sm font-medium hover:bg-purple-900/50 transition cursor-default">HTML5 / CSS3</span>
            </div>
        </section>
    </div>
</div>
@endsection
