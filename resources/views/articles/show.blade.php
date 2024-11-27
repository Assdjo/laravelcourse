
<p>titre : {{ $article->title }}</p>
<p>details : {{ $article->body }}</p>
@foreach($article->comments as $comment)
    <p><strong>{{ $comment->user->name }}</strong> a réagi :</p>
    <p>{{ $comment->comment }}</p>
    <p><small>{{ $comment->created_at->diffForHumans() }}</small></p>
@endforeach
<a href="/articles/{{ $article->id }}/edit">Éditer l'article</a>


