<?php

namespace App\Policies;

use App\Models\Follower;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class FollowerPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, Follower $follower): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, Follower $follower): bool
    {
    }

    public function delete(User $user, Follower $follower): bool
    {
    }

    public function restore(User $user, Follower $follower): bool
    {
    }

    public function forceDelete(User $user, Follower $follower): bool
    {
    }
}
