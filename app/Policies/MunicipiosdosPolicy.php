<?php

namespace App\Policies;

use App\Models\User;
use App\Models\municipiosdos;
use Illuminate\Auth\Access\HandlesAuthorization;

class MunicipiosdosPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\municipiosdos  $municipiosdos
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, municipiosdos $municipiosdos)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\municipiosdos  $municipiosdos
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, municipiosdos $municipiosdos)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\municipiosdos  $municipiosdos
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, municipiosdos $municipiosdos)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\municipiosdos  $municipiosdos
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, municipiosdos $municipiosdos)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\municipiosdos  $municipiosdos
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, municipiosdos $municipiosdos)
    {
        //
    }
}
