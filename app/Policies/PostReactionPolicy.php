<?php

namespace App\Policies;

use App\Models\PostReaction;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostReactionPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, PostReaction $postReaction): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, PostReaction $postReaction): bool
    {
    }

    public function delete(User $user, PostReaction $postReaction): bool
    {
    }

    public function restore(User $user, PostReaction $postReaction): bool
    {
    }

    public function forceDelete(User $user, PostReaction $postReaction): bool
    {
    }
}
