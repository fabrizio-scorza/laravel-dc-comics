@extends('layouts.app')

@section('title','Edit Comic')

@section('content')

<div class="container">
    <h3>Modifica i dati del Fumetto</h3>
    <p>modifica i campi che desideri aggiornare di questo Fumetto</p>
</div>
<div class="container">
    <form action="{{ route('dc_comics.store',$comic) }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="title">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Titolo del fumetto" value="{{ $comic->title }}">
        </div>
        <div class="mb-4">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" rows="5" class="form-control" placeholder="Descrizione del fumetto">
                {{ $comic->description }}
            </textarea>
        </div>
        <div class="mb-4">
            <label for="thumb">Url della copertina</label>
            <input type="url" name="thumb" class="form-control" id="thumb" placeholder="http://...." value="{{ $comic->thumb }}">
        </div>
        <div class="mb-4">
            <label for="price">Prezzo di vendita</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="$xx.xx" value="{{ $comic->price }}">
        </div>
        <div class="mb-4">
            <label for="series">Serie del fumetto</label>
            <input type="text" name="series" class="form-control" id="series" placeholder="Serie del fumetto" value="{{ $comic->title }}">
        </div>
        <div class="mb-4">
            <label for="sale_date">Data di vendita</label>
            <input type="date" name="sale_date" class="form-control" id="sale_date" placeholder="XXXX/YY/ZZ" value="{{ $comic->sale_date }}">
        </div> 
        <div class="mb-4">
            <label for="type">Tipo di articolo</label>
            <input type="text" name="type" class="form-control" id="type" placeholder="comic books" value="{{ $comic->type }}">
        </div>
        <button class="btn btn-secondary">Aggiorna</button>      
    </form>
</div>
    
@endsection