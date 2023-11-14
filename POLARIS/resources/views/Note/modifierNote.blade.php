<form action="/updateNote" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Note</label>
        <input type="float" name="note" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$note->note}}">
    </div>
    </div>
    <div class="form-group">
        <label for="exampleSelect1" class="form-label mt-4"></label>
        <select class="form-select" name="matiere" id="exampleSelect1">
            <option value="{{$note->matiere}}" selected hidden>{{$note->matiere}}</option>
            @foreach ($notes as $note1)
            <option  value="{{$note1->matiere}}" >{{$note1->matiere}}</option>
            @endforeach
        </select>
    </div>
    <input type="hidden" name="eleve_id" value="{{$note->eleve_id}}">
    <input type="hidden" name="id" value="{{$note->id}}">
    <br>
    <button type="submit" class="btn btn-primary" >Modifier</button><br>
    <br>
</form>