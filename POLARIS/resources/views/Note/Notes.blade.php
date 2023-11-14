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
                                        <a href="#" class="btn btn-info mr-2 font-weight-bold text-dark">Modifier</a>
                                        <form action="#" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Supprimer</button>
                                        </form>
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
