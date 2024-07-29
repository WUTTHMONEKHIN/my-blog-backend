<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Blog;

class BlogPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function edit(User $user,Blog $blog)
    {
        return $user->id == $blog->user_id;
    }

    public function delete(User $user,Blog $blog)
    {
        return $user->id == $blog->user_id;
    }
}
