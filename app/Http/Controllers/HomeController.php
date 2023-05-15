<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        // $role = Role::create(['name' => 'Editor']);
        // $Permission = Permission::create(['name' => 'Write Post']);
        // $role = Role::findById(1);
        // $role->givePermissionTo($Permission);

        return User::role('Editor')->get();
    }
}
