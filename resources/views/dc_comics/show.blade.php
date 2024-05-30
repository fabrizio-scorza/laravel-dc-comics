@extends('layouts.app')

@section('title','Comic')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col">
            <img src="{{ $comic->thumb }}" alt="" class="d-inline-block">
        </div>        
        <div class="col">
            <h2 class="pb-5">{{ $comic->title }}</h2>
            <h4 class="pb-5">{{ $comic->series }}</h4>
            <p>{{ $comic->description }}</p>
            <div  class="d-flex justify-content-between align-items-center">
                <a href="{{ route('dc_comics.edit', $comic) }}">Modifica</a>
                <form action="{{ route('dc_comics.destroy', $comic) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    
                    <button type="submit" class="btn btn-secondary">Elimina</button>
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection