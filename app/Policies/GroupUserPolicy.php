<?php

namespace App\Policies;

use App\Models\GroupUser;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class GroupUserPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, GroupUser $groupUser): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, GroupUser $groupUser): bool
    {
    }

    public function delete(User $user, GroupUser $groupUser): bool
    {
    }

    public function restore(User $user, GroupUser $groupUser): bool
    {
    }

    public function forceDelete(User $user, GroupUser $groupUser): bool
    {
    }
}
