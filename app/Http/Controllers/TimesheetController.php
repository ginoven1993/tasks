<?php

namespace App\Http\Controllers;

use App\Models\Timesheets;
use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        try{
            if ($request->isMethod('post')) {

                // $projet = getProjets()->id;
                $user = getAuth()->id;

                Timesheets::create([
                    'sujet' => $request->sujet,
                    'description' => $request->description,
                    'date' => $request->date,
                    'heure_debut' => $request->heure_debut,
                    'heure_fin' => $request->heure_fin, 
                    'projet_id' => $request->projet_id,
                    'tache_id' => $request->tache_id,
                    'user_id' => $user,
                ]);

                return  redirect()->back()->with('flash_message_success', 'Progression ajouté avec succès');
            } else {
                return  redirect()->back()->with('flash_message_error', 'La requete ne passe pas');
            }      
        }
        catch (\Exception $e) {

            return  redirect()->back()->with('flash_message_error', 'Une Erreur est survenu'.$e->getMessage());
        }
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
