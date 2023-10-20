<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('permissions.add');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $id = session('id');
        if ($request->isMethod('post')) {
            $data = $request->all();
            $name = $data['name'];
            $guard_name = $data['guard_name'];
           
        Permission::create([
            'name' => $name,
            'guard_name' => $guard_name
        ]);
      

        return redirect('/permissions')->with('flash_message_success', 'Permission crée avec succès.');
    }
        return view('permissions.index');
    }


    /**
     * Display the specified resource.
     */
    public function show()
    {
        $permissions = Permission::all();
        return view('permissions.index', compact('permissions'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,string $idPermission)
    {
        $id = session('id');
        $permissions = Permission::where(['id' => $idPermission])->first();
        $roles = Role::all();
        if ($request->isMethod('post')) {
            $data = $request->all();
            $name = $data['name'];
             $guard_name = $data['guard_name'];
           
        Permission::where(['id' => $idPermission])->update([
            'name' => $name,
            'guard_name' => $guard_name
        ]);
      

        return redirect('/permissions')->with('flash_message_success', 'Permission modifié avec succès.');
    }
        return view('permissions.edit')->with(compact('permissions','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $idPermission)
    {
        $id = session('id');
        $permissions = Permission::where(['id' => $idPermission])->first();
        Permission::where(['id' => $idPermission])->delete([]);

        return redirect()->back()->with('flash_message_success', 'Permission supprimée avec succès!');
    }

    public function assignRole(Request $request, Permission $permission)
    {
        if ($permission->hasRole($request->role)) {
            return back()->with('flash_message_success', 'Le Role existe.');
        }

        $permission->assignRole($request->role);
        return back()->with('flash_message_success', 'Role assigné.');
    }

    public function removeRole(Permission $permission, Role $role)
    {
        if ($permission->hasRole($role)) {
            $permission->removeRole($role);
            return back()->with('flash_message_success', 'Role retiré.');
        }

        return back()->with('flash_message_success', 'Role inexistant.');
    }
}
