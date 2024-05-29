@extends('layouts.app')

@section('title','DC-Comics')

@section('content')

<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1>Fumetti DC</h1>
        <a href="{{ route('dc_comics.create') }}" class="btn btn-secondary">Nuovo Fumetto</a>
    </div>    
</div>
<div class="container">
    <div class="row row-cols-4">
        @foreach ($comics as $comic)
            <div class="col">
                <div class="card">
                    <img src="{{ $comic->thumb }}" height="350" width="250" alt="" class="card-img-top">
                    <div class="card-body">
                        <a href="{{ route('dc_comics.show', $comic) }}">
                            <h5 class="card-title">Titolo: {{ $comic->title }}</h5>
                        </a>
                        <h5 class="card-subtitle">Serie: {{ $comic->series }}</h5>
                        <p class="card-text">
                            <span>Prezzo: {{ $comic->price }}</span>
                            <span>Venduto il: {{ $comic->sale_date }}</span>
                        </p>
                    </div>
                </div>
            </div>  
        @endforeach
        
    </div>
</div>
    
@endsection
    
