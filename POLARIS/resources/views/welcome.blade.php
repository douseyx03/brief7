@extends('layout.navigation')

@section('contenu')
<div class="div container my-4 ">
    <div class="row d-flex m-4 justify-content-center align-items-center">
    <div >
        @foreach ($eleves as $eleve)
            <div class="row-md-10">
                Prénom de l'élève: {{ $eleve->prenom }}<br>
                Nom de l'eleve : {{ $eleve->nom }} <br>
                Date de naissance :{{ $eleve->dateNaissance }}<br>
                Classe: {{ $eleve->classe }}br
                Sexe: {{ $eleve->sexe }} <br>
                <div style="display: flex;flex-direction:row; margin : 15px 10px 15px 0">
<<<<<<< HEAD
                    <a href="{{ route('getOne',['eleve'=>$eleve->id]) }}" class="btn btn-info">Modifier</a><br>
                    <a href="" class="btn btn-danger">Supprimer</a><br>
=======
                    <a href="" class="btn btn-info">Modifier</a><br>
                    <form action="{{'/eleve/supprimerEleve/'.$eleve->id}}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                      </form>

                    {{-- <a href="" class="btn btn-danger">Supprimer</a><br> --}}
>>>>>>> 7aae65509435ddd4c294b8425b76a8727edec0ec
                </div><br><br>
            </div>
        @endforeach
    </div>
</div>
</div>

@endsection()
