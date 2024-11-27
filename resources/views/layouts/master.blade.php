<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
    </head>
    <body>
        <h1>Laravel 101</h1>

        <a href="/contact-us">Contactez-nous</a>
        @yield('content')


        <a href="/articles">Afficher tout les articles</a>

        @yield('article')

        <a href="/createarticle">Créer un article</a>

        @include('messages.allMessages')
    </body>
</html>