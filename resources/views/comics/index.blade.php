@extends('layouts.app');

@section('content')
    <div class="container py-5">
        <h1>La lista dei fumetti</h1>
        <div class="text-end">
            <a class="btn btn-primary" href="{{ route('comics.create') }}">Aggiungi un fumetto</a>
        </div>

        @if (Session::has('message'))
            <div class="alert alert-danger">
                {{ Session::get('message') }}
            </div>
        @endif

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Tipologia</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comic as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>
                            <a class="btn btn-success" href="{{ route('comics.show', ['comic' => $comic->id]) }}">
                
                                <i class="fa-solid fa-info"></i>
                            </a>
                            <a class="btn btn-warning" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">
                                modifica <i class="fa-solid fa-pen-to-square"></i>
                            </a>
                            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" class="d-inline-block"
                                method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">
                                   
                                    <i class="fa-solid fa-trash"></i>
                                </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
