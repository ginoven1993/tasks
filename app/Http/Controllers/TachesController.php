<?php

namespace App\Http\Controllers;

use App\Http\Requests\TacheStoreRequest;
use App\Models\Taches;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TachesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $taches = DB::table('taches')->join('projets', 'taches.projet_id', '=', 'projets.id')->select('taches.id as id',
        'taches.status as status',
        'taches.nom_tache as nom_tache',
        'projets.id as uid',
        'projets.nom_projet as nom_projet',
        'projets.date_debut as date_debut',
        'projets.date_fin as date_fin',
        'projets.status as projet_statut')->orderBy('taches.created_at', 'desc')->get(); 
        return view('taches.index', compact('taches'));
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

                Taches::create([
                    'nom_tache' => $request->nom_tache,
                    'description' => $request->description,
                    'duree' => $request->duree,
                    'temps' => $request->temps, 
                    'status' => $request->status,
                    'projet_id' => $request->projet_id,
                ]);

                return  redirect()->back()->with('flash_message_success', 'La tache crée avec succès');
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
    public function show(Taches $taches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Taches $taches)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Taches $taches)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Taches $taches)
    {
        //
    }
}
