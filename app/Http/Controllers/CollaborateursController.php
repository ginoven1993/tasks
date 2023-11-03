<?php

namespace App\Http\Controllers;

use App\Http\Requests\CollaborateurStoreRequest;
use App\Http\Requests\CollaborateurUpdateRequest;
use App\Models\Collaborateurs;
use App\Models\Projets;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class CollaborateursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collabs = User::where('role', 'collaborateur')->get();
        $roles = Role::all();

        return view('collaborateurs.index', compact('collabs', 'roles'));
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
    public function store(CollaborateurStoreRequest $request)
    {
        try{

            if ($request->hasFile('avatar')) {
                $image = $request->avatar;
                $name =  uniqid() . '.' . $image->getClientOriginalExtension();
                $image->move('assets2/avatars/', $name);
            }
            // $imagePath = $request->file('avatar')->store('avatars');

            $pass = $request->password;
            $c_pass = $request->c_password;

            if( $pass == $c_pass){
                User::create([
                    'name' => $request->name,
                    'avatar' => $name,
                    'designation' => $request->designation,
                    'email' => $request->email,
                    'numero' => $request->numero,
                    'adresse' => $request->adresse,
                    'password' => bcrypt($pass),
                    'c_password' => bcrypt($c_pass),
                    'role' => $request->role,
                ]);

                return redirect()->back()->with('flash_message_success', 'Collaborateur crée avec succès');

            } else {
                return redirect()->back()->with('flash_message_error', 'Mot de passe différent!');
            }
            

        } catch (\Exception $e) {
            return  redirect()->back()->with('flash_message_error', 'Une Erreur s\'est produite');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Collaborateurs $collaborateurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Collaborateurs $collaborateurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        try{
            // $data = $request->all();

            User::where(['id' => $user])->update([
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => bcrypt($request->password),
                'status' => $request->status,
            ]);
            return redirect()->back()->with('flash_message_success', 'Collaborateur modifié avec succès');
        } catch (\Exception $e) {
            return  redirect()->back()->with('flash_message_error', 'Une Erreur est survenu'.$e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collaborateurs $collaborateurs)
    {
        //
    }
}
