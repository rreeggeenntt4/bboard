<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Bb;

class BbPolicy
{
    use HandlesAuthorization;
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * return true or false
     */
    public function update(User $user, Bb $bb)
    {
        return $bb->user->id === $user->id;
    }


    /**
     * return true or false
     */
    public function destroy(User $user, Bb $bb)
    {
        return $this->update($user, $bb);
    }
}
