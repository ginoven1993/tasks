<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthentificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Auth.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            if (User::where(['name' => $data['name']])->first()) {
                $currentAdmin = User::where(['name' => $data['name']])->first();
                if (Hash::check($data['password'], $currentAdmin->password)) {
                    
                session(['id' => $currentAdmin->id,
                        'name' => $currentAdmin->name]); 
                        
                   return redirect('/dashboard')->with('flash_message_success', 'Connecté : '.$currentAdmin->name);

                } else {
                    return redirect()->back()->with('flash_message_error', 'Votre mot de passe est invalide');
                }
            } else {
                return redirect()->back()->with('flash_message_error', 'Identifiant invalide! Veuillez réessayer');
            }
        }
        return view('Auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
