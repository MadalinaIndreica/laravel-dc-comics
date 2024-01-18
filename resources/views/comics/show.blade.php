@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $comic->title }}</h1>
        <img class="w-25" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">

        <hr>
        <p>{{ $comic->description }}</p>

        <ul>
            <li>
                <strong>Tipologia: </strong>
                {{ $comic->type }}
            </li>
            <li>
                <strong>Prezzo:</strong>
                {{ $comic->price }}
            </li>
            <li>
                <strong>Serie:</strong>
                {{ $comic->series }}
            </li>
        </ul>
    </div>    
@endsection