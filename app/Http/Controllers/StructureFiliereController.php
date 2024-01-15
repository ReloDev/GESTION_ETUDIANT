<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Structure;
use App\Models\StructureFiliere;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StructureFiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $structure_filieres = StructureFiliere::all();
        return view('StructureFiliere.index',[
            "structure_filieres" =>$structure_filieres
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $structures =  Structure::all();
        $filieres =  Filiere::all();
        return view('StructureFiliere.create',[
            "filieres" => $filieres,
            "structures" =>$structures
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'id_filiere' => "required",
            "id_structure" => "required"
        ]);
        $structure_filiere = new StructureFiliere();
        $structure_filiere->id_filiere = $request->id_filiere;
        $structure_filiere->id_structure = $request->id_structure;
        $structure_filiere->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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
