<?php

namespace App\Http\Controllers;

use App\Models\DcComic;
use Illuminate\Http\Request;

class DcComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //funzione della pagina index

        $comics = DcComic::all();
        return view('dc_comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // funzione create
        return view('dc_comics.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //metodo store
        $create_data = $request->all();
        $dc_comic = new DcComic();

        $dc_comic->title = $create_data['title'];
        $dc_comic->description = $create_data['description'];
        $dc_comic->thumb = $create_data['thumb'];
        $dc_comic->price = trim($create_data['price'], "$");
        $dc_comic->series = $create_data['series'];
        $dc_comic->sale_date = $create_data['sale_date'];
        $dc_comic->type = $create_data['type'];

        $dc_comic->save();

        return to_route('dc_comics.show', $dc_comic);
    }

    /**
     * Display the specified resource.
     */
    public function show(DcComic $comic)
    {
        //metodo show
        return view('dc_comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
