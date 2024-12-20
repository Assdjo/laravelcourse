@extends('layouts.master')

{{--@section('title', 'Lire l\'article' . $article->title)--}}

@section('content')
<form action="{{url('articles/' . $article->id . '/edit')}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('patch')
    @include('partials.article-form')
</form>
<form action="/articles/{{ $article->id }}/delete" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Effacer l'article">
</form>
@endsection