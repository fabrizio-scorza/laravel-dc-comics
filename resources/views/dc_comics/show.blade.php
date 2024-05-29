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
        </div>
    </div>    
</div>
    
@endsection