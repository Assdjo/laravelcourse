@extends('layouts.master')

@section('title')
ajouter un article
@endsection
@section('content')
    <form method="POST" action="articles/create" enctype="multipart/form-data">
        @csrf
        @include('partials.article-form')
    </form>
@endsection