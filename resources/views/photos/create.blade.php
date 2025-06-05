<form method="POST" action="{{ route('photos.store')}}">
    @csrf
    <input type="text" name="title" placeholder="Titulo">
    <input type="text" name="url" placeholder="URL de la imagen">
    <label>Etiquetas:</label>
    @foreach($tags as $tag)
    <input type="checkbox" name="tags[]" value="{{ $tag->id }}"> {{ $tags->name }}
    @endforeach
    <button type="submit">Guardar</button></form>
    