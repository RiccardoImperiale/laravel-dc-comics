<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $comics = Comic::all();
        $comics = Comic::orderByDesc('id')->paginate(5);
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
        // $data = $request->all();

        $val_data = $request->validate([
            'title' => 'required|min:3|max:25',
            'description' => 'required|min:10|max:200',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|max:10',
            'series' => 'nullable|max:25',
            'sale_date' => 'required|max:25',
            'type' => 'nullable|max:25',
        ]);

        Comic::create($val_data);

        return to_route('comics.index');
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
        // $data = $request->all();
        $val_data = $request->validate([
            'title' => 'required|min:3|max:25',
            'description' => 'required|min:10|max:200',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|max:10',
            'series' => 'nullable|max:25',
            'sale_date' => 'required|max:25',
            'type' => 'nullable|max:25',
        ]);

        $comic->update($val_data);

        return to_route('comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index');
    }
}
