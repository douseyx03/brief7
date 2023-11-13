@foreach ($list as $item)
    <h3>{{ $item->nom }}</h3>
    <a href="{{ route('getOne',['eleve'=>$item->id]) }}">Modifier</a>
@endforeach