<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'home'])->name('home');
Route::get('/projects', [PortfolioController::class, 'projects'])->name('projects');
Route::get('/projects/{slug}', [PortfolioController::class, 'show'])->name('projects.show');
Route::get('/cv', [PortfolioController::class, 'cv'])->name('cv');

Route::get('/language/{locale}', function ($locale) {
    if (in_array($locale, ['fr', 'en'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('switch-language');
