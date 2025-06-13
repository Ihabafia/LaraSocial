<?php

namespace App\Policies;

use App\Models\PostAttachment;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostAttachmentPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user): bool
    {

    }

    public function view(User $user, PostAttachment $postAttachment): bool
    {
    }

    public function create(User $user): bool
    {
    }

    public function update(User $user, PostAttachment $postAttachment): bool
    {
    }

    public function delete(User $user, PostAttachment $postAttachment): bool
    {
    }

    public function restore(User $user, PostAttachment $postAttachment): bool
    {
    }

    public function forceDelete(User $user, PostAttachment $postAttachment): bool
    {
    }
}
