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

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('comics.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                            name="title" placeholder="Inserisci il titolo..." maxlength="64" 
                            value="{{ old('title') }}">
                        @error('title')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3"
                            placeholder="Inserisci la descrizione...">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="form-label">Thumb</label>
                        <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"
                            placeholder="Inserisci la Thumb..." maxlength="1024" value="{{ old('thumb') }}">
                        @error('thumb')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="price" class="form-label">Price ($x.x)<span class="text-danger">*</span> </label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                            placeholder="Inserisci il prezzo..." maxlength="1024" 
                            value="{{ old('thumb') }}">
                        @error('price')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="series" class="form-label">Series<span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                            placeholder="Inserisci la serie..." maxlength="64" 
                            value="{{ old('series') }}">
                        @error('series')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="form-label">Sale Date (aaaa-mm-gg)</label>
                        <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date"
                            placeholder="Inserisci la serie..." maxlength="64"
                            value="{{ old('sale_date') }}">
                        @error('sale_date')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                            placeholder="Inserisci il tipo..." maxlength="16"
                            value="{{ old('type') }}">
                        @error('type')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="artists" class="form-label">Artist</label>
                        <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists"
                            placeholder="Inserisci gli artisti..." maxlength="1024"
                            value="{{ old('artists') }}">
                        @error('artists')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="writers" class="form-label">Writers</label>
                        <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers"
                        placeholder="Inserisci gli Writers..." maxlength="1024"
                        value="{{ old('writers') }}">
                        @error('writers')
                            <div class="alert alert-danger">
                                {{ $message }}
                            </div>
                        @enderror
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
