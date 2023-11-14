@extends('layout.navigation')
@section('contenu')
<div class="div container my-4 text-white ">
    <div class="row d-flex m-4 justify-content-center align-items-center">
        <hr>
        <div>
            <a href="/ajoutNote" class="btn btn-primary">Ajouter une note</a>
            <hr>
            <div class="row-md-6 text-light">



                <form action="/ajouterNote" method="post">
                    @method('post')
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label mt-4">Note</label>
                        <input type="float" name="note" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="la note">

                    </div>

                    <div class="form-group">

                        <input type="hidden" name="eleve" value="{{$eleves->id}}">

                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Matières</label>
                        <select class="form-select" name="matiere" id="exampleSelect1">
                            <option value="Français">Français</option>
                            <option value="Anglais">Anglais</option>
                            <option value="Mathematique">Mathematique</option>
                            <option value="SVT">SVT</option>
                            <option value="P/C">P/C</option>


                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Noter</button><br>
                    <br>

                </form>


            </div>




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

                    <tr>
                        <td>{{ $note->matiere}}</td>
                        <td>{{ $note->note}}</td>

                        <td>
                            <a href="#" class="btn btn-info mr-2 font-weight-bold text-dark">Modifier</a>
                            <form action="#" method="">
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
    </div>
</div>
</div>
@endsection()
