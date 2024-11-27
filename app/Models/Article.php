<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //ajout
    /** 
     * @use HasFactory<\Database\Factories\ArticleFactory>
     */
    use HasFactory;
    protected $fillable = ['title', 'body', 'user_id', 'image'] ;

    protected $appends = [
        'author'
    ];

    public function getAuthorAtribute() {
        return $this->user->name;
    }

    // Un article n'a qu'un auteur
public function user()
{
    return $this->belongsTo(User::class);
}
// Un article peut avoir plusieurs commentaires
public function comments(){
    return $this->hasMany(Comment::class);
}
}
