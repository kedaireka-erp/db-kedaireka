<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        return view("roles.index", [
            "permissions" => Permission::all(),
            "roles" => Role::all()
        ]);
    }

    public function store(Request $request)
    {
        $role = Role::create([
            "name" => $request->nama
        ]);

        $role->syncPermissions($request->permissions);

        return response()->json([
            "role" => $role
        ], 200);
    }

    public function destroy(Role $role)
    {
        $role->syncPermissions([]);
        $role->delete();

        return response()->json([
            "message" => "Role deleted successfully"
        ], 200);
    }
}
