<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //ajout
    /** 
     * @use HasFactory<\Database\Factories\CommentFactory> 
     */
    use HasFactory;
    protected $fillable = ['name'];

    // Un Tags peut être utilisés sur plusieurs commentaires
    public function articles()
    {
        return $this->belongsToMany(Article::class);
    }

}
