
<p>{{ $article['title'] }}</p>

<p>auteur de l'article : {{$article->getAuthorAtribute()}}</p>
<a href="/articles/{{ $article->id}}">
    <p>{{ $article->title }}</p>
</a>

