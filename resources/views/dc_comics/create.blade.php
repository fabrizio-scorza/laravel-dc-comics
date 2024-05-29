@extends('layouts.app')

@section('title','New Comic')

@section('content')

<div class="container">
    <h3>Crea un nuovo Fumetto</h3>
    <p>inserisci i dati richiesti per creare un nuovo fumetto</p>
</div>
<div class="container">
    <form action="{{ route('dc_comics.store')}}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="title">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Titolo del fumetto">
        </div>
        <div class="mb-4">
            <label for="description">Descrizione</label>
            <textarea name="description" id="description" rows="5" class="form-control" placeholder="Descrizione del fumetto"></textarea>
        </div>
        <div class="mb-4">
            <label for="thumb">Url della copertina</label>
            <input type="url" name="thumb" class="form-control" id="thumb" placeholder="http://....">
        </div>
        <div class="mb-4">
            <label for="price">Prezzo di vendita</label>
            <input type="text" name="price" class="form-control" id="price" placeholder="$xx.xx">
        </div>
        <div class="mb-4">
            <label for="series">Serie del fumetto</label>
            <input type="text" name="series" class="form-control" id="series" placeholder="Serie del fumetto">
        </div>
        <div class="mb-4">
            <label for="sale_date">Data di vendita</label>
            <input type="date" name="sale_date" class="form-control" id="sale_date" placeholder="XXXX/YY/ZZ">
        </div> 
        <div class="mb-4">
            <label for="type">Tipo di articolo</label>
            <input type="text" name="type" class="form-control" id="type" placeholder="comic books">
        </div>
        <button class="btn btn-secondary">Crea</button>      
    </form>
</div>
    
@endsection