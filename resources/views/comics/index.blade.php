
@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
<h1>
   Comics Index
</h1>

<div class="row">
    <div class="col">
        <div class="mb-4">
            <a href="{{ route('comics.create') }}" class="btn btn-success w-100 fs-5">
                + Aggiungi
            </a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">descizione</th>
                    <th scope="col">Thumb</th>
                    <th scope="col">Price</th>
                    <th scope="col">Series</th>
                    <th scope="col">SaleDate</th>
                    <th scope="col">Type</th>
                    <th scope="col">Artist</th>
                    <th scope="col">Writers</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <th scope="row">{{ $comic->id }}</th>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->description }}</td>
                        <td>{{ $comic->thumb }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ $comic->sale_date }}</td>
                        <td>{{ $comic->type }}</td>
                        <td>{{ $comic->artists }}</td>
                        <td>{{ $comic->writers }}g</td>
                        <td>
                            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">
                                Vedi
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection