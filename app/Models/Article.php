<?php

namespace App\Models;

use App\Traits\Likeable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //ajout
    /** 
     * @use HasFactory<\Database\Factories\ArticleFactory>
     */
    use HasFactory; use Likeable;
    protected $fillable = ['title', 'body', 'user_id', 'image'] ;

    // protected $appends = [
    //     'author'
    // ];

    

    // Un article n'a qu'un auteur
public function user()
{
    return $this->belongsTo(User::class);
}
// Un article peut avoir plusieurs commentaires
public function comments(){
    return $this->hasMany(Comment::class);
}

// Un article peut avoir plusieurs tags
public function tags()
{
    return $this->belongsToMany(Tag::class);
}

public function tag($tag)
{
    return $this->tags()->attach($tag);
}

}
