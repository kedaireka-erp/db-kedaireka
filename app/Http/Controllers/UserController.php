<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index', [
            'users' => User::all(),
            "roles" => Role::all(),
            "title" => "Users",
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "email" => "required|unique:users",
            "password" => "required",
            "gender" => "required",
            "role" => "required",
        ]);

        $user = User::create([
            "name" => $request->nama,
            "email" => $request->email,
            "password" => bcrypt($request->password),
            "gender" => $request->gender,
            "active" => 1
        ]);

        $user->assignRole($request->role);
        return response()->json([
            "user" => $user,
            "request" => $request->all(),
            "message" => "Role berhasil diubah",
        ], 200);
    }

    public function update(Request $request, User $user)
    {
        $user->syncRoles($request->roles);
        return response()->json([
            "user" => $user,
            "request" => $request->roles,
            "message" => "Role berhasil diubah",
        ]);
    }
}
