@extends('layout.navigation')
@section('contenu')
<div class="div container my-4 text-white ">
    <div class="row d-flex m-4 justify-content-center align-items-center">
        <hr>
        <div>
            <div class="row-md-6 text-light">
                <form action="/ajouterNote" method="post">
                    <!-- @method('post') -->
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label mt-4">Note</label>
                        <input type="float" name="note" class="form-control" id="note" aria-describedby="emailHelp" placeholder="la note">
                        @error('note')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="eleve" value="{{$eleves->id}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1" class="form-label mt-4">Matières</label>
                        <select class="form-select" name="matiere" id="exampleSelect1">
                            @foreach ($notes as $note1)                               
                            <option value="{{$note1->matiere}}">{{$note1->matiere}}</option>
                            @endforeach
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Ajouter la note</button><br>
                    <br>

                </form>

                <hr>


            </div>




            <h1>Les Notes de {{ $eleves->nom }} {{ $eleves->prenom }} en classe de {{ $eleves->classe }}</h1>

=========
            
                <h1>Les Notes de {{ $eleves->prenom }} {{ $eleves->nom }} en classe de {{ $eleves->classe }}</h1>
            <hr>
            <div>
                <a href="/ajouternote" class="btn btn-primary">Ajouter une note</a>
            <hr>
                <div class="row-md-8 text-warning">
>>>>>>>>> Temporary merge branch 2
                    <table class="table table-striped ">
                        <thead>
                            <tr>
                                <th>Matieres</th>
                                <th>Notes</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
<<<<<<<<< Temporary merge branch 1
                            @foreach ($notes as $note)
                            @if ($note->eleve_id = $eleve->id)
                            <tr>
                                        <td>{{ $note->matiere != '' ? $note->matiere : 'fr' }}</td>
                                        <td>{{ $note->notes != '' ? $note->notes : '0' }}</td>
                                  
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
=========

                            <tr>
                                @foreach ($notes as $note)
                                    @if ($note->eleve_id = $eleves->id)
                                        <td>{{ $note->matiere != '' ? $note->matiere : 'fr' }}</td>
                                        <td>{{ $note->note != '' ? $note->note : '0' }}</td>
                                        <td> 
                                            <div style="display: flex; flex-direction: row;">
                                            <a class="btn btn-warning " href="/eleve/deleteNote/{{ $note->id }}">Delete</a>
                                            <a class="btn btn-info ms-4" href="/eleve/updateNote/{{ $note->id }}"> Modifier</a>
                                            </div>
                                        </td>
                                    @endif
                            </tr>
>>>>>>>>> Temporary merge branch 2
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection()
