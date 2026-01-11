<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private function getProjects()
    {
        return [
            [
                'slug' => 'pac-man',
                'title' => 'PacMan',
                'description' => 'Un clone du célèbre jeu d\'arcade PacMan. Un projet recréant l\'expérience rétro avec gestion des fantômes et du score.',
                'image' => 'https://via.placeholder.com/600x400?text=PacMan',
                'link' => 'https://github.com/Soulreaper4006/PacMan',
                'tags' => ['Game Dev', 'C++/Java', 'Algorithmie'], // Assuming detailed stack
                'content' => "
                    <p class='mb-4'>Ce projet est une reproduction fidèle du jeu d'arcade classique PacMan. L'objectif principal était de travailler sur la logique de jeu en temps réel et l'intelligence artificielle des ennemis.</p>
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
                'slug' => 'mon-premier-projet',
                'title' => 'Mon premier projet',
                'description' => 'Un super site web réalisé avec Laravel.',
                'image' => 'https://via.placeholder.com/300',
                'link' => '#',
                'tags' => ['Laravel', 'PHP'],
                'content' => 'Description détaillée de mon premier projet...'
            ],
            [
                'slug' => 'app-mobile',
                'title' => 'Application Mobile',
                'description' => 'Une application React Native.',
                'image' => 'https://via.placeholder.com/300',
                'link' => '#',
                'tags' => ['React Native', 'Mobile'],
                'content' => 'Description détaillée de l\'app mobile...'
            ],
            [
                'slug' => 'api-rest',
                'title' => 'API REST',
                'description' => 'Une API robuste avec Node.js.',
                'image' => 'https://via.placeholder.com/300',
                'link' => '#',
                'tags' => ['Node.js', 'API'],
                'content' => 'Description détaillée de l\'API...'
            ],
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
}
