<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();

        return view('permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('permissions.create');
    }

    public function store(Request $request)
    {
        $permission = new Permission();

        $permission->name = $request->name;
        $permission->guard_name = $request->description;

        $permission->save();

        return redirect()->route('permissions');
    }

    public function edit(Permission $permission)
    {
        return view('permissions.edit', compact('permission'));
    }

    public function update(Request $request, Permission $permission)
    {
        $permission->update($request->all());

        return redirect()->route('permissions');
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();

        return redirect()->route('permissions');
    }
}