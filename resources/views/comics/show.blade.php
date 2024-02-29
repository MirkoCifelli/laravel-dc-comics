@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
    <h1>
        {{ $comic->title }}
    </h1>

    <div class="row">
        <div class="col">
            <div class="mb-4">
                <a href="{{ route('comics.index') }}" class="btn btn-primary">
                    Torna all'index dei Comics
                </a>
            </div>

            <div class="card">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="card-img-top">

                <div class="card-body">
                    <ul>
                        <li>
                            Titolo: {{ $comic->title }}
                        </li>
                        <li>
                            Descrione:{{ $comic->description }}
                        </li>
                        <li>
                            Prezzo: {{ $comic->price }}
                        </li>
                        <li>
                            Serie:{{ $comic->series }}
                        </li>
                        <li>
                            Vendita:{{ $comic->sale_date }}
                        </li>
                        <li>
                            Tipo : {{ $comic->type }}
                        </li>
                        <li>
                            Artists : {{ $comic->artists }}
                        </li>
                        <li>
                            Writers : {{ $comic->writers }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
