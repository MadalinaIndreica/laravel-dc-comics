@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="text-center">Aggiungi un nuovo fumetto</h1>

        <div class="row justify-content-center mt-5">
            <div class="col-6 mb-5">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">serie</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">data di rilascio</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
                    </div>


                    <div class="mb-3">
                        <label for="price" class="form-label">prezzo</label>
                        <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}" >
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" rows="3" name="description">{{ old('description') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipologia</label>
                        <select id="type" class="form-select" name="type">
                            <option selected value="">Seleziona</option>
                            <option @selected(old('type') === 'comic_book') value="comic_book">comic book</option>
                            <option @selected(old('type') === 'graphic_novel') value="graphic_novel">graphic novel </option>

                        </select>
                    </div>

                    <button class="btn btn-success" type="submit">Salva</button>

                </form>
            </div>
        </div>

    </div>
@endsection
