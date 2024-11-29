<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ mix('/css/app.css') }}"></script>
    <script src="{{ mix('/js/app.js') }}"></script>
    <title>@yield('title')</title>
</head>

<body>
    <nav>
        @guest
            <a href="{{ route('register') }}">Créer un compte</a>
            <a href="{{ route('login') }}">Login</a>
        @endguest

        @can('create', 'App\Models\Article')
            <a href="/articles/create">Créer un article</a>
        @endcan

        @auth
            <a href="{{ route('profile') }}">Votre profil</a>
            <form action="{{ route('logout') }}" method="POST">
                <input type="submit" value="Se déconnecter">
            </form>
        @endauth
    </nav>
    <h1>Laravel 101</h1>

    <a class="text-red-600" href="/contact-us">Contactez-nous</a>
    <a href="/articles">Afficher tout les articles</a>

    @yield('content', View::make('view.name'))
    
    @include('messages.allMessages')
</body>
</html>