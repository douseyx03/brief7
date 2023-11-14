@extends('layout.navigation')

@section('contenu')


<form action="/ajouterNote" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Note</label>
        <input type="float" name="note" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter le nom">

    </div>

    <div class="form-group">

        <input type="hidden" name="eleve" value="{{$eleves->id}}">

    </div>


    </div>

    <div class="form-group">
        <label for="exampleSelect1" class="form-label mt-4">Matières</label>
        <select class="form-select" name="classe" id="exampleSelect1">
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


@endsection