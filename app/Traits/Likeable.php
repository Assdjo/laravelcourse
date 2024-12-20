<?php

namespace App\Traits;

use App\Models\User;

trait Likeable
{
    public function likes() {
    return $this->morphMany(User::class,"likeable")->withTimestamps();
    }

    public function like($user = null) {
        $user = $user? : auth()->user();
        return $this->likes()->attach($user);
    }
}