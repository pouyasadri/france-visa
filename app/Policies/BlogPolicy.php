<?php

namespace App\Policies;

use App\Models\Blog;
use App\Models\User;

class BlogPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(?User $user): bool
    {
        return true; // Anyone can view blog list
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(?User $user, Blog $blog): bool
    {
        return true; // Anyone can view a blog post
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user !== null; // Any authenticated user can create
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Blog $blog): bool
    {
        return $user !== null; // Any authenticated user can update
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Blog $blog): bool
    {
        return $user !== null; // Any authenticated user can delete
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user): bool
    {
        return $user !== null; // Any authenticated user can restore
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Blog $blog): bool
    {
        return $user !== null; // Any authenticated user can force delete
    }
}
