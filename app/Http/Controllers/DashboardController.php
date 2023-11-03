<?php

namespace App\Http\Controllers;

use App\Models\Projets;
use App\Models\Taches;
use App\Models\tickets;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets = Projets::all()->count();
        $taches = Taches::all()->count();
        $collabs = User::where('role','collaborateur')->count();
        $tickets = tickets::all()->count();

        // $projs = DB::table('projets')
        // ->join('users', function ($join) {
        //     $join->on('users.id', '=', DB::raw("SUBSTRING_INDEX(SUBSTRING_INDEX(projets.collab_id, ',', numbers.n), ',', -1)"))
        //         ->join(DB::raw("(SELECT 1 n UNION ALL SELECT 2 UNION ALL SELECT 3 UNION ALL SELECT 4) numbers"), function ($join) {
        //         });
        // })->select('projets.nom_projet as nom_projet',
        //  'users.name as collab_name',
        //  'projets.date_debut as date_debut',
        //  'projets.date_fin as date_fin')->get();

        $projs = Projets::all()->first();      
        $uses = explode(' ', $projs->collab_id); 
        $details = DB::table('users')->select('users.id as uid', 
        'users.avatar as collab_avatar',
        'users.name as collab_name')->whereIn('users.id', $uses)->orderBy('users.created_at', 'desc')->get();

        $debut = Carbon::createFromDate($projs->date_debut);
         $fin = Carbon::createFromDate($projs->date_fin);
        $dure = $debut->diffInDays($fin);

        return view('index', compact('projets','taches','collabs','tickets','projs','dure','details'));
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

    public function logout(Request $request)
    {
        $id = session('id');
        if ($id != null) {
            // Journals::create([
            //     'action' => "Déconnexion de la plateforme",
            //     'user_id' => $id,
            // ]);
        }
        $locale = app()->getLocale();
      //  ContractsSessionSession::flush();
        return redirect('/login')->with('flash_message_success', 'Deconnexion Réussie ');
    }

    public function profile($id)
    {
        $user = User::where('id', $id)->first();
        return view('Auth.profile', compact('user'));
    }
}
