<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return Inertia::render('layouts/Master', [
            'articles'=> $articles
        ]);
    }

    public function show($id)
    {
        // dd($article);
        // ddd($article);
        $article = Article::with([
            'comments' => function ($query) {
                $query->with('user');
            }
        ])->findOrFail($id);

        return Inertia::render('articles.show', [
            'article'=> $article
        ]);
    }

    public function create() {
        $this->authorize('create', Article::class);
        return Inertia::render('articles.show');
    }

    public function store(Request $request)
{
    $this->authorize('create', Article::class);
    $user = User::find(1);
    $request['user_id'] = $user->id;

    $validateData = $request->validate([
        '_token' => 'required|string',
        'title' => 'required|string',
        'body' => 'required|string',
        'user_id' => 'required|numeric|exists:users,id',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

    ]);

    $art = Article::create($validateData);
    return redirect('/articles')->with(['success_message' => 'L\'article a été crée !']);

    
}

public function edit(Article $article) {
    $this->authorize('update', $article);
    return view('articles.edit', compact('article'));
}

public function update(Request $request, Article $article){
    $this->authorize('update', $article);
    $article->update($request->all());
   dd($article);
}

public function destroy(Article $article) {
    $this->authorize('delete', $article);
    $article->delete();
}
}
