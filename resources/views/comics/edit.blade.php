@extends('layouts.app')

@section('page-title', $comic->title.'Edit')

@section('main-content')
    <h1 class="text-center">
       {{ $comic->title }}
    </h1>

    <div class="row">
        <div class="col py-4">
            <div class="container">
                <div class="mb-4">
                    <a href="{{ route('comics.index') }}" class="btn btn-primary">
                        Torna all'index del Comic
                    </a>
                </div>

                <form action="{{ route('comics.show', ['comic' => $comic->id]) }}" method="POST">

                    @csrf

                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
                        <input 
                        value="{{ $comic->title }}"
                        type="text" class="form-control"         
                        id="title" name="title"
                        placeholder="Inserisci il titolo..." maxlength="64" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" rows="3"
                        placeholder="Inserisci la descrizione...">{{ $comic->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input 
                        value="{{ $comic->thumb }}"
                        type="text" class="form-control" id="thumb" name="thumb"
                        placeholder="Inserisci la Thumb..." maxlength="1024">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price ($x.x)<span class="text-danger">*</span> </label>
                        <input 
                        value="{{ $comic->price }}"
                        type="text" class="form-control" id="price" name="price"
                        placeholder="Inserisci il prezzo..." maxlength="1024">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series<span class="text-danger">*</span></label>
                        <input 
                        value="{{ $comic->series }}"
                        type="text" class="form-control" id="series" name="series"
                        placeholder="Inserisci la serie..." maxlength="64" required>
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date (aaaa-mm-gg)</label>
                        <input 
                        value="{{ $comic->sale_data }}"
                        type="text" class="form-control" id="sale_date" name="sale_date"
                        placeholder="Inserisci la serie..." maxlength="64" required>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input 
                        value="{{ $comic->type }}"
                        type="text" class="form-control" id="type" name="type"
                        placeholder="Inserisci il tipo..." maxlength="16">
                    </div>

                    <div class="mb-3">
                        <label for="artist" class="form-label">Artist</label>
                        <input
                        value="{{ $comic->artists }}" 
                        type="text" class="form-control" id="artists" name="artists"
                        placeholder="Inserisci gli artisti..." maxlength="1024">
                    </div>

                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers</label>
                        <input 
                        value="{{ $comic->writers }}"
                        type="text" class="form-control" id="writers" name="writers"
                        placeholder="Inserisci gli Writers..." maxlength="1024">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-warning w-100">
                            Modifica
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
