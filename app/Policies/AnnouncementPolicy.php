<?php

namespace App\Policies;

use App\Models\Announcement;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AnnouncementPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Post $post)
    {
        return true;
    }

    public function create(User $user)
    {
        return $user->level >= User::AUTHOR_LEVEL;
    }

    
    public function update(User $user)
    {
        return $user->level >= User::AUTHOR_LEVEL;
    }

    
    public function delete(User $user)
    {
        return $user->level >= User::AUTHOR_LEVEL;
    }


    public function restore(User $user, Post $post)
    {
        //
    }

    
    public function forceDelete(User $user, Post $post)
    {
        //
    }
}