<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Eleve;
use App\Models\Note;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index(int $id)
    {
        $notes = Note::all();
        $eleves = Eleve::findOrFail($id);
        return view('Note.notes', compact('notes', 'eleves'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // dd($request);


        $noteReq = $request->validate([
            'note' => 'required',
            'matiere' => 'required',
            'eleve' => 'required'
        ]);

        $note = new Note($noteReq);

        $note->note = $request->note;
        $note->matiere = $request->matiere;
        $note->eleve_id = $request->eleve;


        $note->save();

        
        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notes= Note::all();
        $note = Note::findOrFail($id);


        return view('note.modifierNote', [
            'note' => $note,
            'notes'=>$notes
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        
       $request->validate([
            'note' => 'required',
            'matiere' => 'required',
            'eleve_id' => 'required'
        ]);
        $note =Note::find($request->id);
        $note->note = $request->note;
        $note->matiere = $request->matiere;
        if ($note->save()) {
            return redirect("/notes/$note->eleve_id");
        }else {
            return back()->withInput();
        }
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
