@extends('layout.navigation')
@section('contenu')
    <div class="div container my-4 ">
        <div class="row d-flex m-4 justify-content-center align-items-center">
            <h1>Les Notes </h1>
            <hr>
            <div>
                <a href="/ajouternote" class="btn btn-primary">Ajouter une note</a>
                <hr>
                @foreach ($eleves as $eleve)
                    <div class="row-md-10">
                        <table class="table table-striped ">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Classe</th>
                                    <th>Francais</th>
                                    <th>Anglais</th>
                                    <th>Maths</th>
                                    <th>SVT</th>
                                    <th>PC</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>{{ $eleve->id }}</td>
                                    <td>{{ $eleve->prenom }}</td>
                                    <td>{{ $eleve->nom }}</td>
                                    <td>{{ $eleve->classe }}</td>

                                    @foreach ($notes as $note)
                                        <td>{{ $note->francais }}</td>
                                        <td>{{ $note->anglais }}</td>
                                        <td>{{ $note->maths }}</td>
                                        <td>{{ $note->svt }}</td>
                                        <td>{{ $note->pc }}</td>
                                        <td>
                                            <a href="#"
                                                class="btn btn-info mr-2 font-weight-bold text-dark">Modifier</a>
                                            <form action="#" method="post">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger">Supprimer</button>
                                            </form>
                                        </td>
                                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            @endforeach
        </div>
    </div>
    </div>

{{-- Dans le controller  --}}

public function lister_note()
    {   
        $notes = Note::all();
        return view('Note.notes', compact('notes'));
    }

    {{-- Dans Web --}}
Route::get('/notes/{id}', [NoteController::class, 'lister_note']);

@endsection()
