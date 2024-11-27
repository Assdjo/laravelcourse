<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //ajout
    /** 
     * @use HasFactory<\Database\Factories\ArticleFactory>
     */
    use HasFactory;
   

    // Un profil n'a qu'un utilisateur
public function user()
{
    return $this->hasOne(User::class);
}

}
