<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Filiere;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('Etudiant.index',[
            "etudiants"=>$etudiants
        ]);
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
    public function show(Request $request)
    {
        $etudiants = Etudiant::all();
        $filieres = Filiere::all();
        return view('Etudiant.show',[
            "filieres" => $filieres,
            "etudiants"=>$etudiants,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
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

    public function filiere(Request $request,$id){
    //    dd($request->all()['filiere']) ;
    // dd($request);
     $filiere = Filiere::findOrFail($id);
     $etudiants = Etudiant::where('filiere_id', $filiere->id)->get();
     dd($filiere);
     dd($etudiants);
      return view('etudiants.filiere', [
         'etudiants' => $etudiants,
         'filiere' => $filiere
     ]);
     
    }
   //  Programme::whereId($id)->update(['px'=>0]);
//     public function filiere(){
//         $route = 'Etudiant.ig';
//         $etudiants = Etudiant::all()->where('id_filiere',1);
//         $filieres = Filiere::all();
//         return view ('Etudiant.show',[
//             "route" =>$route,
//             "etudiants" =>$etudiants,
//             "filieres" => $filieres
//         ]);
//     }
//     public function gtl(){
//         $filieres = Filiere::all();
//         $route = 'Etudiant.gtl';
//         $etudiants = Etudiant::all()->where('id_filiere',2);
//         return view ('Etudiant.show',[
//             "route" =>$route,
//             "etudiants" =>$etudiants,
//             "filieres" => $filieres
//         ]);
//     }
//     public function gfc(){
//           $filieres = Filiere::all();
//         $route = 'Etudiant.gfc';
//         $etudiants = Etudiant::all()->where('id_filiere',3);
//         return view('Etudiant.show',[
//             "route" =>$route,
//             "etudiants" =>$etudiants,
//             "filieres" => $filieres
//         ]);
//     }
//     public function gc(){
//           $filieres = Filiere::all();
//         $route = 'Etudiant.gc';
//         $etudiants = Etudiant::all()->where('id_filiere',4);
//         return view('Etudiant.show',[
//             "route" =>$route,
//             "etudiants" =>$etudiants,
//             "filieres" => $filieres
//         ]);
//     }
//     public function stat(){
//           $filieres = Filiere::all();
//         $route = 'Etudiant.stat';
//         $etudiants = Etudiant::all()->where('id_filiere',5);
//         return view('Etudiant.show',[
//             "route" =>$route,
//             "etudiants" =>$etudiants,
//             "filieres" => $filieres
//         ]);
//     }
//     public function plan(){
//           $filieres = Filiere::all();
//         $route = 'Etudiant.plan';
//         $etudiants = Etudiant::all()->where('id_filiere',6);
//         return view('Etudiant.show',[
//             "route" =>$route,
//             "etudiants" =>$etudiants,
//             "filieres" => $filieres
//         ]);
//     }
//     public function gba(){
//           $filieres = Filiere::all();
//         $route = 'Etudiant.gba';
//         $etudiants = Etudiant::all()->where('id_filiere',7);
//         return view('Etudiant.show',[
//             "route" =>$route,
//             "etudiants" =>$etudiants,
//             "filieres" => $filieres
//         ]);
//     }
 }
