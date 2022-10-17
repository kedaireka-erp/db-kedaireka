<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        return view("permissions.index", [
            "permissions" => Permission::get()
        ]);
    }

    public function store(Request $request)
    {
        $permission = Permission::create([
            "name" => $request->nama
        ]);

        return response()->json([
            "permission" => $permission,
            "message" => "Permission berhasil ditambahkan"
        ], 200);
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();

        return response()->json([
            "message" => "Permission berhasil dihapus"
        ], 200);
    }
}
