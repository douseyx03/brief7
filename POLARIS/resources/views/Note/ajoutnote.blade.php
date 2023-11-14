<form action="/ajouterNote" style="display:flex; flex-direction:row;justify-content:space-around;" method="post">
    @csrf
        <label for="exampleInputEmail1" class="form-label">Note</label>
        <input type="float" name="note" class="row-md-9"  id="note" aria-describedby="emailHelp" placeholder="la note">
        @error('note')
        <div class="row-md-1 alert alert-danger">{{ $message }}</div>
        @enderror
        <input type="hidden" name="eleve" class="row-md-1" value="{{$eleves->id}}">
        <label for="exampleSelect1" class="form-label">Matières</label>
        <select class="row-md-9" name="matiere" id="exampleSelect1">
            @for ($i = 0; $i < count($note1); $i++)                   
            <option value="{{$note1[$i]}}">{{$note1[$i]}}</option>
            @endfor                              
        </select>
    <button type="submit"  class="row-md-6 btn btn-primary">Ajouter la note</button><br>
</form>