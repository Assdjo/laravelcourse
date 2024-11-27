@extends('layouts.master')

@section('title')
    Articles
@endsection

@section('article')
    <h2>Articles</h2>
    @if ($articles)
        @foreach ($articles as $article)
        @endforeach
        @each('partials.article', $articles, 'article', 'articles.no-articles') 
    @endif
{{-- 
   ON PEUT UTILISER CETTE METHODE AUSSI :

    @forelse($articles as $article)
    @include('articles.index')
@empty
    @include('articles.no-articles')
@endforelse


D'autre durectives simples que nous pouvons utiliser avec laravel : 

@for ($i = 0; $i < 10; $i++)
    le code ici ...
    @endfor

@while (true)
    le code ici ...
@endwhile
--}}

@endsection