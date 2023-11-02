<?php

namespace App\Http\Controllers;

use App\Models\Documents;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Documents::all();
        
        return view('documents.index', compact('documents'));
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
            $request->validate([
                'documents' => 'required|mimes:pdf,docx|max:2048',
            ]);
        
            $document = $request->file('documents')->store('documents');
            // $chemin = $document->store('documents'); 
        $user = getAuth()->id;
            
            Documents::create([
                'user_id' => $user,
                'nom' => $request->nom,
                'documents' => basename($document),
                'rights' => true,
            ]);
            return  redirect()->back()->with('flash_message_success', 'Document ajouté avec succès');
        } 
        catch(\Exception $e) {
            return  redirect()->back()->with('flash_message_error', 'Une Erreur est survenu'.$e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(documents $documents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(documents $documents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, documents $documents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(documents $documents)
    {
        //
    }
}
