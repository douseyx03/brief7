@extends('layout.navigation')

@section('contenu')

<form action="/update" method="post">
   
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4" hidden>Nom</label>
            <input type="text" value="{{ $eleve->id }}" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter le nom" hidden>

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Nom</label>
            <input type="text" value="{{ $eleve->nom }}" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter le nom">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Prenom</label>
            <input type="text" name="prenom" value="{{ $eleve->prenom }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                placeholder="Enter le prenom">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Date de Naissance</label>
            <input type="date" name="dateNaissance" class="form-control" id="exampleInputEmail1"
                aria-describedby="emailHelp" value="{{ $eleve->dateNaissance }}" placeholder="Enter la date de naissance">

        </div>

        </div>

        <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Classe</label>
            <select class="form-select" name="classe" id="exampleSelect1">
                <option selected value="{{ $eleve->classe }}">{{ $eleve->classe }}</option>
                <option value="6eme">6eme</option>
                <option value="5eme">5eme</option>
                <option value="4eme">4eme</option>
                <option value="3eme">3eme</option>

            </select>
        </div>

        <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">Sexe</label>
            <select class="form-select" name="sexe" id="exampleSelect1">
                <option selected value="{{ $eleve->sexe }}">{{ $eleve->sexe }}</option>
                <option value="Feminin">Feminin</option>
                <option value="Masculin">Masculin</option>

            </select>
        </div>
        <br>
        <br>
        <button type="submit" class="btn btn-primary">Ajouter</button><br>
        <br>

        
    </form>

@endsection