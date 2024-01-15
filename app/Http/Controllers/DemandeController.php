<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $demandes = Demande::all();
        return view('Demande.index',[
            "demandes" =>$demandes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Demande.create');
    }
    public function redirect()
    {
        return view('Demande.redirect');
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $demande = new Demande();
        // $demande->matricule1 = $request->matricule1;
        // $demande->email1 = $request->email1;
        // $demande->matricule1 = $request->matricule1;
        // $demande->email1 = $request->email1;
        // $demande->save();
        // $demandes = Demande::all();

        $val = $request->validate([
            "matricule1" => "required",
            "email1" => "required",
            "matricule2" => "",
            "email2" => "",
        ]);

        Demande::create($val);

        return view('Demande.redirect');

    }

    

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $demande = Demande::find($id);
        return view('Demande.show',[
            "demande" => $demande 
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $demande = Demande::find($id);
        return view('Demande.edit',[
            "demande" => $demande 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $val = $request->validate([
            "matricule1" => "required",
            "email1" => "required",
            "matricule2" => "",
            "email2" => "",
        ]);
        $demande = Demande::whereId($id)->update($val);
        $demandes = Demande::all();
        return view('Demande.index',[
            "demandes" => $demandes
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $demande = Demande::find($id)->delete();
        $demandes = Demande::all();
        return view('Demande.index',[
            "demandes" => $demandes
        ]);
    }
}
