@extends('layout.navigation')
@section('contenu')
    <div class="div container my-4 text-light ">
        <hr>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <div class="row-md-12 text-light">
            @if (!isset($editNote))
                <!-- Formulaire d'ajout -->
                @include('note.ajoutnote')
            @else
                <!-- Formulaire de modification -->
                @include('note.modifierNote')
            @endif
            <hr>
        </div>

        <h1>Les Notes de {{ $eleves->nom }} {{ $eleves->prenom }} en classe de {{ $eleves->classe }}</h1>

        <br>


        <table class="table table-striped text-light ">
            <thead class="text-light ">
                <tr>
                    <th>Matieres</th>
                    <th>Notes</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="text-light ">
                @foreach ($notes as $note)
                    @if ($note->eleve_id === $eleves->id)
                        <tr>
                            <td>{{ $note->matiere }}</td>
                            <td>{{ $note->note }}</td>

                            <td>
                                <div style="display: flex; flex-direction: row; justify-content: space-between;">
                                    <form action="/eleve/updateNote/{{ $note->eleve_id }}" style="margin-right: -250px;"
                                        method="post">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $note->id }}">
                                        <button type="submit" class="btn btn-info mr-2 font-weight-bold text-light"
                                            name="eleve_id" value="{{ $note->eleve_id }}">Modifier</button>
                                    </form>
                                    <a href="/eleve/deleteNote/{{ $note->id }}"
                                        class="btn btn-warning mr-2 font-weight-bold text-light"
                                        style="margin-right: 200px;">Supprimer</a>
                                </div>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection()
