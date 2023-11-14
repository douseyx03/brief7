@extends('layout.navigation')
@section('contenu')
<div class="div container my-4 text-white ">
    <div class="row d-flex m-4 justify-content-center align-items-center">
        <hr>
        @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
     @endif
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
                            @for ($i = 0; $i < count($note1); $i++)                   
                            <option value="{{$note1[$i]}}">{{$note1[$i]}}</option>
                            @endfor                              
                          
                        </select>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Ajouter la note</button><br>
                    <br>

                </form>

                <hr>


            </div>




            <h1>Les Notes de {{ $eleves->nom }} {{ $eleves->prenom }} en classe de {{ $eleves->classe }}</h1>

            <br>


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
                    @if ($note->eleve_id===$eleves->id)
                        
                    <tr>
                        <td>{{ $note->matiere}}</td>
                        <td>{{ $note->note}}</td>

                            <td>
                            <a href="/eleve/updateNote/{{$note->id}}" class="btn btn-info mr-2 font-weight-bold text-dark">Modifier</a>
                            <a href="/eleve/deleteNote/{{$note->id}}" class="btn btn-warning mr-2 font-weight-bold text-dark">Supprimer</a>
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
