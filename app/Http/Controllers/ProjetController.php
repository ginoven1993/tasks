<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjetStoreRequest;
use App\Models\Projets;
use App\Models\Taches;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projets::all();
        $users = User::all();
        $collabs = User::where('role','collaborateur')->get();
        return view('workspace.index', compact('projets','collabs','users'));
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
                $collabIds = array_map('intval', $request->input('collab_id'));
                $collab = implode(', ', $collabIds);
                $user = getAuth()->id;

                Projets::create([
                    'nom_projet' => $request->nom_projet,
                    'description' => $request->description,
                    'categories' => $request->categories,
                    'manager' => $request->manager,
                    'date_debut' => $request->date_debut,
                    'date_fin' => $request->date_fin,
                    'collab_id' => $collab,
                    'status' => 0,
                    'user_id' => $user,
                ]);
            
                return redirect()->back()->with('flash_message_success', 'Projet crée avec succès');
            } else {
                return redirect()->back()->with('flash_message_error', 'Erreur lors de la requete!');
            }

        } catch (\Exception $e) {

            return  redirect()->back()->with('flash_message_error', 'Une Erreur est survenu'.$e->getMessage());

        }
           
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $taches = Taches::where('projet_id', $id)->get();
        $projets = Projets::where('id', $id)->first();      
        $uses = explode(' ', $projets->collab_id); 
        // $tachs = Taches::all();
        $details = DB::table('users')->select('users.id as uid',
        'users.avatar as collab_avatar',
        'users.name as collab_name')->whereIn('users.id', $uses)->orderBy('users.created_at', 'desc')->get(); 
        return view('workspace.show', compact('projets','details','taches')); 
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
