<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Models
use App\Models\Comic;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validationData = $request->validate([
                'title' => 'required|max:64',
                'description' => 'nullable|max:4000',
                'thumb' => 'nullable|max:1024|url',
                'price' => 'required',
                'series' => 'required|max:64',
                'sale_date' => 'nullable|date',
                'type' => 'nullable|max:16|in:comic book,graphic novel',
                'artists' => 'nullable',
                'writers' => 'nullable'
            ],
            [
                'title.required' => 'Dato necessario per continuare',
                'price.required' => 'Dato necessario per continuare',
                'series.required' => 'Dato necessario per continuare'
            ]

        );
        // @dd($validationData);
        // $comicData = $request->all();

        $comic = Comic::create($validationData);


        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        
        $comicData = $request->all();

        $comic->update($comicData);

        return redirect()->route('comics.show', ['comic' => $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
