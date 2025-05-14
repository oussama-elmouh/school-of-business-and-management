<?php

namespace App\Http\Controllers;
use App\Models\Eleve;


use App\Models\Filiere;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eleves = Eleve::all();
        return view('eleves.index', compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /*   $filieres = Filiere::all();
          
        return view('eleves.create', compact('filieres')); */
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      /*  $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'filiere_id' => 'required|exists:filieres,id',
        ]);

        Eleve::create($request->all());
        return redirect()->route('eleves.index'); */
    }

    /**
     * Display the specified resource.
     */
    public function show(Eleve $id)
    {
             $eleve = Eleve::findOrFail($id);
    return view('eleves.show', compact('eleve'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Eleve $eleve)
    {
       /*  $filieres = Filiere::all();
        return view('eleves.edit', compact('eleve', 'filieres')); */
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Eleve $eleve)
    {
       /*  $request->validate([
            'nom' => 'required|max:255',
            'prenom' => 'required|max:255',
            'filiere_id' => 'required|exists:filieres,id',
        ]);

        $eleve->update($request->all());
        return redirect()->route('eleves.index'); */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Eleve $eleve)
    {
         /*  $eleve->delete();
        return redirect()->route('eleves.index'); */
    }
}
