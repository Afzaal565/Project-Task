<?php

namespace App\Policies;

use App\Models\Analysis;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AnalysisPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('view-data') ? true : false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Analysis $analysis): bool
    {
        // return $user->hasPermissionTo('create post') ? true : false;
        return $user->hasPermissionTo('view-data') ? true : false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('create-data') ? true : false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Analysis $analysis): bool
    {
        return $user->hasPermissionTo('edit-data') ? true : false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Analysis $analysis): bool
    {
        return $user->hasPermissionTo('delete-data') ? true : false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function reply(User $user, Analysis $analysis): bool
    {
        return $user->hasPermissionTo('create-reply') ? true : false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function changeStatus(User $user, Analysis $analysis): bool
    {
        return $user->hasPermissionTo('change-status') ? true : false;
    }
}
