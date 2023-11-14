@extends('layout.navigation')
@section('contenu')
    <div class="div container my-4 text-white ">
        <div class="row d-flex m-4 justify-content-center align-items-center">
            <hr>
            <div>
                <a href="/ajouternote" class="btn btn-primary">Ajouter une note</a>
                <hr>
                <div class="row-md-6 text-light">

                    <h1>Les Notes de {{ $eleves->nom }} {{ $eleves->prenom }} en classe de {{ $eleves->classe }}</h1>

                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th>Matieres</th>
                                <th>Notes</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($notes as $note)
                            @if ($note->eleve_id = $eleve->id)
                            <tr>
                                        <td>{{ $note->matiere != '' ? $note->matiere : 'fr' }}</td>
                                        <td>{{ $note->note != '' ? $note->note : '0' }}</td>
                                  
                                        <td> 
                                            <div style="display: flex; flex-direction: row;">
                                            <a class="btn btn-warning " href="/eleve/deleteNote/{{ $note->id }}">Delete</a>
                                            <a class="btn btn-info ms-4" href="/eleve/updateNote/{{ $note->id }}"> Modifier</a>
                                            </div>
                                        </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection()
