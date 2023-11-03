<?php

namespace App\Http\Controllers;

use App\Models\Projets;
use App\Models\tickets;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TicketsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticketss = tickets::all();
        $tickets = DB::table('tickets')->join('projets', 'tickets.projet_id', '=', 'projets.id')->select(
        'tickets.id as id',
        'tickets.status as status',
        'tickets.ticket_subject as ticket_subject',
        'tickets.description as description',
        'tickets.nature as nature',
        'tickets.numero as numero',
        'projets.nom_projet as nom_projet')->orderBy('tickets.created_at', 'desc')->get(); 
       
        return view('tickets.index', compact('tickets', 'ticketss'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projets = Projets::all();
        return view('tickets.add', compact('projets'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            if ($request->isMethod('post')) {

                tickets::create([
                    'numero' => $request->numero,
                    'nature' => $request->nature,
                    'description' => $request->description,
                    'ticket_subject' => $request->ticket_subject, 
                    'status' => $request->status,
                    'projet_id' => $request->projet_id,
                ]);

                return  redirect()->back()->with('flash_message_success', 'Le Ticket est crée avec succès');
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
    public function show(tickets $tickets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tickets $tickets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tickets $tickets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tickets $tickets)
    {
        //
    }
}
