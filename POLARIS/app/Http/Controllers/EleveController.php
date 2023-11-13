<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEleveRequest;
use App\Http\Requests\UpdateEleveRequest;
use App\Models\User;


class EleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $list = Eleve::all();
        // return view('Eleve.list', [
        //     'list' => $list
        // ]);

        $eleves= Eleve::all();
        return view('welcome',compact('eleves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEleveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEleveRequest $request)
    {

        if (in_array($request->classe, ['6eme', '5eme', '4eme', '3eme'])) {
            $classe = $request->classe;
        } else {
            echo "Le format de la classe est incorrect";
            die();
        }

        if (in_array($request->sexe, ['Feminin', 'Masculin'])) {
            $sexe = $request->sexe;
        } else {
            echo "Le format du sexe est invalid est incorrect";
            die();
        }


        $eleveReq = $request->validate([

            'nom' => 'required',
            'prenom' => 'required',
            'dateNaissance' => 'required',
            // 'classe' => $classe,
            // 'sexe' => $sexe,

        ]);
        // dd($request);


        $eleve = new Eleve($eleveReq);

        $eleve->nom = $request->nom;

        $eleve->prenom = $request->prenom;

        $eleve->dateNaissance = $request->dateNaissance;

        $eleve->classe = $classe;

        $eleve->sexe = $sexe;

        $eleve->save();

        return back();
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function show(Eleve $eleve)
    {
        $eleve = Eleve::find($eleve->id);


        return view('Eleve.modifier', [
            'eleve' => $eleve
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
    //  * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function edit(Eleve $eleve)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEleveRequest  $request
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEleveRequest $request, Eleve $eleve)
    {
        
        $eleve = Eleve::find($request->id);
    

        $eleve->nom = $request->nom;

        $eleve->prenom = $request->prenom;

        $eleve->dateNaissance = $request->dateNaissance;

        $eleve->classe = $request->classe;

        $eleve->sexe = $request->sexe;

        $eleve->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eleve  $eleve
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Eleve $eleve)
    // {
    //     $eleve = Eleve::find($eleve);
    //     $eleve->destroy();

    //     return redirect('/');
    // }

    public function destroy($id)
    {
        $eleve = Eleve::findOrFail($id);
        $eleve->delete();
        return redirect('/')->with('success', 'Supprimé avec succès');
    }
    
}
