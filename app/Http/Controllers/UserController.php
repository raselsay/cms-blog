<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(User $user,Role $role,Request $request)
    {
        $user->assingRole($role->name);

        return 'create role';
    }
}
