<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('roles.add');
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
           
        Role::create([
            'name' => $name,
            'guard_name' => $guard_name
        ]);

        return redirect('/roles')->with('flash_message_success', 'Role crée avec succès.');
    }
        return view('roles.index');
    }

    public function add_permission($idrole)
    {
        $roles = Role::where(['id' => $idrole])->first();
        $permissions = Permission::all();
        return view('roles.permission', compact('roles','permissions'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $idrole)
    {
        $id = session('id');
        $permissions = Permission::all();
        $roles = Role::where(['id' => $idrole])->first();
        if ($request->isMethod('post')) {
            $data = $request->all();
            $name = $data['name'];
            $guard_name = $data['guard_name'];
           
        Role::where(['id' => $idrole])->update([
            'name' => $name,
            'guard_name' => $guard_name
        ]);
        
        return redirect('/roles')->with('flash_message_success', 'Role modifié avec succès.');
    }
        return view('roles.edit')->with(compact('roles','permissions'));
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
    public function destroy(string $idrole)
    {
        $id = session('id');
        $roles = Role::where(['id' => $idrole])->first();
        Role::where(['id' => $idrole])->delete([]);
   
        return redirect()->back()->with('flash_message_success', 'Role supprimée avec succès!');
    }

    public function givePermission(Request $request, Role $role)
    {
        if($role->hasPermissionTo($request->permission)){
            return back()->with('flash_message_success', 'La Permission existe.');
        }
        $role->givePermissionTo($request->permission);
        return back()->with('flash_message_success', 'Permission ajouté.');
    }

    public function revokePermission(Role $role, Permission $permission)
    {
        if($role->hasPermissionTo($permission)){
            $role->revokePermissionTo($permission);
            return back()->with('flash_message_success', 'Permission revoké.');
        }
        return back()->with('flash_message_success', 'Permission nexiste pas.');
    }
}
