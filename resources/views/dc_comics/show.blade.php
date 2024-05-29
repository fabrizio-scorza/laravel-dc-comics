@extends('layouts.app')

@section('title','Comic')

@section('content')

<div class="container">
    <img src="{{ $comic->thumb }}" alt="">
    <h2>{{ $comic->title }}</h2>
    <h4>{{ $comic->series }}</h4>
    <p>{{ $comic->description }}</p>
</div>
    
@endsection