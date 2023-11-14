@extends('layout.navigation')
@section('contenu')
<div class="container my-4">
    <div class="row justify-content-center align-items-center">
        @foreach ($eleves as $eleve)
        <div class="card m-4 my-2" style="width: 22rem; background-color: #ffffff;">
            <div class="card-body">
                <h5 class="card-title">Prénom de l'élève: <strong>{{ $eleve->prenom }}</strong></h5>
                <p class="card-text">Nom de l'élève: <strong>{{ $eleve->nom }}</strong></p>
                <p class="card-text">Date de naissance: <strong>{{ $eleve->dateNaissance }}</strong></p>
                <p class="card-text">Classe: <strong>{{ $eleve->classe }}</strong></p>
                <p class="card-text">Sexe: <strong>{{ $eleve->sexe }}</strong></p>
                <div style="display: flex; flex-direction: row; justify-content: space-between;">
                    <a href="{{ route('getOne',['eleve'=>$eleve->id]) }}" class="btn btn-info mr-2 font-weight-bold text-dark">Modifier</a>
                        <button type="submit" class="btn btn-warning font-weight-bold text-dark">Supprimer</button>
                       <a type="submit" href="/notes/{{$eleve->id}}" class="btn btn-danger">Voir plus</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
@endsection()