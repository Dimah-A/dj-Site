<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */

    public function index(User $user){
        return $user->role_id == 1 ;
        return true;

    }



    public function __construct()
    {
        //
    }
}
