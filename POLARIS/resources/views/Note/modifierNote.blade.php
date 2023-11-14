<form action="/eleve/updateNoter/{{ $note->id }}" method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Note</label>
            <input type="float" name="note" class="form-control" id="exampleInputEmail1" value="{{$note->note}}" aria-describedby="emailHelp" >
        </div>
        <div class="form-group">
            <label for="exampleSelect1" class="form-label mt-4">{{$note->matiere}}</label>
            <select class="form-select" name="matiere" id="exampleSelect1">
                @foreach ($notes as $note)
                <option value="{{ $note->id }}">{{ $note->matiere }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">
            Modifier
        </button>
        <br>
    </form>
</div>