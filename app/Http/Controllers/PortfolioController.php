<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private function getProjects()
    {
        $locale = app()->getLocale();

        if ($locale === 'en') {
            return [
                [
                    'slug' => 'pac-man',
                    'title' => 'PacMan',
                    'description' => 'A clone of the famous PacMan arcade game. A project recreating the retro experience with ghost management and scoring.',
                    'image' => '/images/pacman.png',
                    'link' => 'https://github.com/Soulreaper4006/PacMan',
                    'tags' => ['Game Dev', 'Java', 'Algorithms'],
                    'content' => "
                        <p class='mb-4'>This project is a faithful reproduction of the classic PacMan arcade game. The main objective was to work on real-time game logic and enemy artificial intelligence.</p>
                        <h3 class='text-xl font-bold text-white mb-2'>Key Features:</h3>
                        <ul class='list-disc list-inside space-y-2 mb-4 text-gray-300'>
                            <li>Smooth character movement</li>
                            <li>Ghost AI (chase and scatter behaviors)</li>
                            <li>Collision and score management</li>
                            <li>Progressive difficulty levels</li>
                        </ul>
                        <p>The source code is available on GitHub for consultation.</p>
                    "
                ],
                [
                    'slug' => 'marathon',
                    'title' => 'Marathon',
                    'description' => 'A project developed in 24h as a team.',
                    'image' => '/images/marathon.png',
                    'link' => 'https://github.com/Soulreaper4006/Marathon',
                    'tags' => ['Development', 'Open Source'],
                    'content' => "
                        <p class='mb-4'>Marathon is a project whose goal is to create and edit articles about bollywoodian films.</p>
                        <h3 class='text-xl font-bold text-white mb-2'>Highlights:</h3>
                        <ul class='list-disc list-inside space-y-2 mb-4 text-gray-300'>
                            <li>Structured software architecture</li>
                            <li>Version control with Git</li>
                            <li>Documented and modular code</li>
                        </ul>
                        <p>Check the repository to dive into technical details and see the project evolution.</p>
                    "
                ],
                [
                    'slug' => 'lensymphony',
                    'title' => 'LenSymphony',
                    'description' => 'A synthesizer capable of reading XML files to play music.',
                    'image' => '/images/lensymphony.png',
                    'link' => 'https://github.com/Soulreaper4006/lensymphony',
                    'tags' => ['Audio', 'XML', 'Synthesizer', 'Java'],
                    'content' => "
                        <p class='mb-4'>The goal of this project was the creation of a complete sound synthesizer in Java.</p>
                        <h3 class='text-xl font-bold text-white mb-2'>Main Features:</h3>
                        <ul class='list-disc list-inside space-y-2 mb-4 text-gray-300'>
                            <li>Development of multiple virtual instruments</li>
                            <li>Sheet music reading system via XML files</li>
                            <li>Real-time sound generation and synthesis</li>
                        </ul>
                    "
                ],
                [
                    'slug' => 'cocktail-quiz',
                    'title' => 'CocktailQuiz',
                    'description' => 'An interactive quiz on cocktails using Flask and an external API.',
                    'image' => '/images/cocktail.png',
                    'link' => 'https://github.com/Soulreaper4006/CocktailQuiz',
                    'tags' => ['Python', 'Flask', 'API', 'Web'],
                    'content' => "
                        <p class='mb-4'>This project is a fun web application developed with Python allowing users to test their cocktail knowledge.</p>
                        <h3 class='text-xl font-bold text-white mb-2'>Technical Points:</h3>
                        <ul class='list-disc list-inside space-y-2 mb-4 text-gray-300'>
                            <li><b>Flask Backend:</b> Use of Python micro-framework to manage server logic.</li>
                            <li><b>API Integration:</b> Connection to an online API to dynamically retrieve cocktail data.</li>
                            <li><b>Dynamic Quiz:</b> Random cocktail retrieval and session storage.</li>
                        </ul>
                    "
                ],
                [
                    'slug' => 'rollaball',
                    'title' => 'Rollaball',
                    'description' => 'A 3D arcade mini-game developed on Unity.',
                    'image' => '/images/rollaball.png',
                    'link' => '#',
                    'tags' => ['Unity', 'Game Dev', 'C#'],
                    'content' => "
                        <p class='mb-4'>This project is a physics-based 3D game made with the Unity engine. The player embodies a ball and must navigate in an interactive environment.</p>
                        <h3 class='text-xl font-bold text-white mb-2'>Game Mechanics:</h3>
                        <ul class='list-disc list-inside space-y-2 mb-4 text-gray-300'>
                            <li><b>Pursuit:</b> An enemy tracks the player constantly.</li>
                            <li><b>Score:</b> Collection of yellow cubes to increase score.</li>
                            <li><b>Physics:</b> Interaction with pink obstacles that the ball can push.</li>
                        </ul>
                    "
                ],
                [
                    'slug' => 'roadrage',
                    'title' => 'RoadRage',
                    'description' => 'A multiplayer arcade racing game where chaos and speed meet.',
                    'image' => '/images/roadrage.png',
                    'link' => '#',
                    'tags' => ['Unity', 'Game Dev', 'C#', 'Multiplayer'],
                    'content' => "
                        <p class='mb-4'>RoadRage is a competitive two-player game where the goal is to survive on a dangerous road.</p>
                        <h3 class='text-xl font-bold text-white mb-2'>Game Details:</h3>
                        <ul class='list-disc list-inside space-y-2 mb-4 text-gray-300'>
                            <li><b>Vehicles:</b> Choice between controlling a sturdy truck or an agile plane.</li>
                            <li><b>Obstacles:</b> Reflex dodging of oncoming buses.</li>
                            <li><b>Destruction:</b> Fun physics allowing to knock over stacks of crates with style.</li>
                            <li><b>Objective:</b> Reach the end of the track before the opponent (or survive the longest).</li>
                        </ul>
                    "
                ]
            ];
        }

        // Default to French
        return [
            [
                'slug' => 'pac-man',
                'title' => 'PacMan',
                'description' => 'Un clone du célèbre jeu d\'arcade PacMan. Un projet recréant l\'expérience rétro avec gestion des fantômes et du score.',
                'image' => '/images/pacman.png',
                'link' => 'https://github.com/Soulreaper4006/PacMan',
                'tags' => ['Game Dev', 'Java', 'Algorithmie'], // Assuming detailed stack
                'content' => "
                    <p class='mb-4'>Ce projet est une reproduction du jeu d'arcade classique PacMan. L'objectif principal était de travailler sur la logique de jeu en temps réel et l'intelligence artificielle des ennemis.</p>
                    <h3 class='text-xl font-bold text-white mb-2'>Fonctionnalités clés :</h3>
                    <ul class='list-disc list-inside space-y-2 mb-4 text-gray-300'>
                        <li>Déplacement fluide du personnage</li>
                        <li>IA des fantômes (comportements de chasse et de fuite)</li>
                        <li>Gestion des collisions et du score</li>
                        <li>Niveaux de difficulté progressifs</li>
                    </ul>
                    <p>Le code source est disponible sur GitHub pour consultation.</p>
                "
            ],
            [
                'slug' => 'marathon',
                'title' => 'Marathon',
                'description' => 'Un projet développé en 24h en équipe',
                'image' => '/images/marathon.png',
                'link' => 'https://github.com/Soulreaper4006/Marathon',
                'tags' => ['Développement', 'Open Source'],
                'content' => "
                    <p class='mb-4'>Marathon est un projet dont le but est de permettre à l'utilisateur d'écrire ou modifier des articles sur des films bollywoodiens.</p>
                    <h3 class='text-xl font-bold text-white mb-2'>Points forts :</h3>
                    <ul class='list-disc list-inside space-y-2 mb-4 text-gray-300'>
                        <li>Architecture logicielle structurée</li>
                        <li>Gestion de versions avec Git</li>
                        <li>Code documenté et modulaire</li>
                    </ul>
                    <p>Consultez le dépôt pour plonger dans les détails techniques et voir l'évolution du projet.</p>
                "
            ],
            [
                'slug' => 'lensymphony',
                'title' => 'LenSymphony',
                'description' => 'Un synthétiseur capable de lire des fichiers XML pour jouer la musique.',
                'image' => '/images/lensymphony.png',
                'link' => 'https://github.com/Soulreaper4006/lensymphony',
                'tags' => ['Audio', 'XML', 'Synthétiseur', 'Java'],
                'content' => "
                    <p class='mb-4'>Ce projet avait pour objectif la création d'un synthétiseur de son complet en java.</p>
                    <h3 class='text-xl font-bold text-white mb-2'>Fonctionnalités principales :</h3>
                    <ul class='list-disc list-inside space-y-2 mb-4 text-gray-300'>
                        <li>Développement de plusieurs instruments virtuels</li>
                        <li>Système de lecture de partitions via fichiers XML</li>
                        <li>Génération et synthèse de sons en temps réel</li>
                    </ul>
                "
            ],
            [
                'slug' => 'cocktail-quiz',
                'title' => 'CocktailQuiz',
                'description' => 'Un quiz interactif sur les cocktails utilisant Flask et une API externe.',
                'image' => '/images/cocktail.png',
                'link' => 'https://github.com/Soulreaper4006/CocktailQuiz',
                'tags' => ['Python', 'Flask', 'API', 'Web'],
                'content' => "
                    <p class='mb-4'>Ce projet est une application web ludique développée avec Python permettant de tester ses connaissances sur les cocktails.</p>
                    <h3 class='text-xl font-bold text-white mb-2'>Points techniques :</h3>
                    <ul class='list-disc list-inside space-y-2 mb-4 text-gray-300'>
                        <li><b>Backend Flask :</b> Utilisation du micro-framework Python pour gérer la logique serveur.</li>
                        <li><b>Intégration d'API :</b> Connexion à une API en ligne pour récupérer dynamiquement les données des cocktails.</li>
                        <li><b>Quiz dynamique :</b> Récupération de cocktail aléatoire et savegarde sur la session</li>
                    </ul>
                "
            ],
            [
                'slug' => 'rollaball',
                'title' => 'Rollaball',
                'description' => 'Un mini jeu d\'arcade en 3D développé sur Unity.',
                'image' => '/images/rollaball.png',
                'link' => '#',
                'tags' => ['Unity', 'Game Dev', 'C#'],
                'content' => "
                    <p class='mb-4'>Ce projet est un jeu 3D basé sur la physique réalisé avec le moteur Unity. Le joueur incarne une balle et doit naviguer dans un environnement interactif.</p>
                    <h3 class='text-xl font-bold text-white mb-2'>Mécaniques de jeu :</h3>
                    <ul class='list-disc list-inside space-y-2 mb-4 text-gray-300'>
                        <li><b>Poursuite :</b> Un ennemi traque le joueur en permanence.</li>
                        <li><b>Score :</b> Collecte de cubes jaunes pour augmenter le score.</li>
                        <li><b>Physique :</b> Interaction avec des obstacles roses que la balle peut pousser.</li>
                    </ul>
                "
            ],
            [
                'slug' => 'roadrage',
                'title' => 'RoadRage',
                'description' => 'Un jeu multijoueur où chaos et vitesse se rencontrent.',
                'image' => '/images/roadrage.png',
                'link' => '#',
                'tags' => ['Unity', 'Game Dev', 'C#', 'Multijoueur'],
                'content' => "
                    <p class='mb-4'>RoadRage est un jeu à deux joueurs où l'objectif est de survivre sur une route dangereuse.</p>
                    <h3 class='text-xl font-bold text-white mb-2'>Détails du jeu :</h3>
                    <ul class='list-disc list-inside space-y-2 mb-4 text-gray-300'>
                        <li><b>Véhicules :</b> Choix entre contrôler un camion robuste ou un avion agile.</li>
                        <li><b>Obstacles :</b> Esquive réflexe de bus arrivant en sens inverse.</li>
                        <li><b>Destruction :</b> Physique amusante permettant de renverser des piles de caisses avec style.</li>
                        <li><b>Objectif :</b> Atteindre la fin du parcours avant son adversaire (ou survivre le plus longtemps).</li>
                    </ul>
                "
            ]

        ];
    }

    public function home()
    {
        return view('home');
    }

    public function projects()
    {
        $projects = $this->getProjects();
        return view('projects', compact('projects'));
    }

    public function show($slug)
    {
        $projects = $this->getProjects();
        $project = collect($projects)->firstWhere('slug', $slug);

        if (!$project) {
            abort(404);
        }

        return view('project_show', compact('project'));
    }

    public function cv()
    {
        return view('cv');
    }

    public function contact()
    {
        return view('contact');
    }
}
