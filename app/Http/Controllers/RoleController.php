<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateRoleRequest;
use App\Http\Resources\PermissionResource;
use App\Http\Resources\RoleResource;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\View\View;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $roles = RoleResource::collection(Role::all());
        return view('role.index', compact('roles'));
        // return Inertia::render('Admin/Roles/RoleIndex', [
        //     'roles' => RoleResource::collection(Role::all())
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $permissions = PermissionResource::collection(Permission::all());
        // dd($permissions);
        return view('role.create', compact('permissions'));
        // return Inertia::render('Admin/Roles/Create', [
        //     'permissions' => PermissionResource::collection(Permission::all())
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateRoleRequest $request)
    {
        $role = Role::create(['name' => $request->name]);
        if ($request->has('permissions')) {
            $role->syncPermissions($request->input('permissions.*.name'));
        }
        return to_route('roles.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::findById($id);
        $role->load('permissions');
        $permissions = PermissionResource::collection(Permission::all());
        return view('role.edit', compact('role', 'permissions'));
        // return Inertia::render('Admin/Roles/Edit', [
        //     'role' => new RoleResource($role),
        //     'permissions' => PermissionResource::collection(Permission::all())
        // ]);
    }

    /**
     * Update the specified resource in storage.
     */
    // CreateRoleRequest
    public function update(CreateRoleRequest $request, string $id)
    {
        // dd($request->all());
        $role = Role::findById($id);
        $role->update([
            'name' => $request->name
        ]);
        $role->syncPermissions($request->input('permissions.*'));
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findById($id);
        $role->delete();
        return back();
    }
}
