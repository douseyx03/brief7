
    <form action="/updateNote" style="display:flex; flex-direction:row;justify-content:space-around;" method="post">
        @csrf
        <label for="exampleInputEmail1" class="form-label">Note</label>
        <input type="float" name="note" class="row-md-8" id="exampleInputEmail1" aria-describedby="emailHelp"
            value="{{ $note->note }}">
        <label for="exampleSelect1" class="form-label">Matières</label>
        <select class="row-md-8" name="matiere"  id="exampleSelect1">
            <option value="{{ $note->matiere }}" selected hidden>{{ $note->matiere }}</option>
            @for ($i = 0; $i < count($note1); $i++)
                <option value="{{ $note1[$i] }}">{{ $note1[$i] }}</option>
            @endfor
        </select>
        <input type="hidden" class="row-md-1" name="eleve_id" value="{{ $note->eleve_id }}">
        <input type="hidden" name="id" value="{{ $note->id }}">
        <button type="submit" class="row-md-5 btn btn-primary">Modifier</button><br>
    </form>
