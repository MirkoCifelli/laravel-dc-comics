@extends('layouts.app')

@section('page-title', 'Comic Create')

@section('main-content')
    <h1 class="text-center">
        Comic Create
    </h1>

    <div class="row">
        <div class="col py-4">
            <div class="container">
                <div class="mb-4">
                    <a href="{{ route('comics.index') }}" class="btn btn-primary">
                        Torna all'index del Comic
                    </a>
                </div>

                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title"
                            placeholder="Inserisci il titolo..." maxlength="64" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" rows="3"
                            placeholder="Inserisci la descrizione..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control" id="thumb" name="thumb"
                            placeholder="Inserisci la Thumb..." maxlength="1024">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price ($x.x)<span class="text-danger">*</span> </label>
                        <input type="text" class="form-control" id="price" name="price"
                            placeholder="Inserisci il prezzo..." maxlength="1024">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="series" name="series"
                            placeholder="Inserisci la serie..." maxlength="64" required>
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date (aaaa-mm-gg)</label>
                        <input type="text" class="form-control" id="series" name="series"
                            placeholder="Inserisci la serie..." maxlength="64" required>
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" class="form-control" id="type" name="type"
                            placeholder="Inserisci il tipo..." maxlength="16">
                    </div>

                    <div class="mb-3">
                        <label for="artist" class="form-label">Artist</label>
                        <input type="text" class="form-control" id="artist" name="artist"
                            placeholder="Inserisci gli artisti..." maxlength="1024">
                    </div>

                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers</label>
                        <input type="text" class="form-control" id="Writers" name="Writers"
                            placeholder="Inserisci gli Writers..." maxlength="1024">
                    </div>

                    <div>
                        <button type="submit" class="btn btn-success w-100">
                            Aggiungi
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
