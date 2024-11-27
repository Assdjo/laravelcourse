<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionsController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

// route acceuil
Route::get('/', [PagesController::class, 'index']);

// Route vers la page contact
Route::get('/contact-us', [PagesController::class, 'contact']);

// Route vers la page article
Route::get('/articles', [ArticlesController::class,'index']);

// Route vers un article selectionnée
Route::get('/articles/{article:id}', [ArticlesController::class, 'show']);

// Route vers le formulaire de création d'un article
Route::get('/createarticle', [ArticlesController::class, 'create']);

// Route pour valider le formulaire de création d'articles

Route::post('/articles/create', [ArticlesController::class,'store']);

//Route pour éditer un article
Route::get('articles/{article:id}/edit', [ArticlesController::class,'edit']);

// Route vers la mise à jour de et la méthode du contôller
Route::patch('articles/{article:id}/edit', [ArticlesController::class,'update']);

// Route vers la suppression de l'article que nous souhaitons supprimer
Route::delete('/articles/{article:id}/delete', [ArticlesController::class,'destroy']);


// je suis la route de regiter, c'est ici l'utilisateur crée son compte
Route::get('/register', [RegisterController::class,'index'])->name('register');

// je suis la route de connexion, l'utilisateur se connecte ici 
Route::get('/login', [SessionsController::class,'index'])->name('login');