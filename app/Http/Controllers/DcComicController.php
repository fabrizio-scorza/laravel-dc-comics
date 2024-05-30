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
        $create_data['price'] = floatval(trim(str_replace(',', '.', $create_data['price']), "$"));

        $dc_comic = DcComic::create($create_data);

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
    public function edit(DcComic $comic)
    {
        //metodo edit 
        return view('dc_comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DcComic $comic)
    {
        //metodo update
        $update_data = $request->all();
        $update_data['price'] = floatval(trim(str_replace(',', '.', $update_data['price']), "$"));
        $comic->fill($update_data);
        $comic->save();

        return to_route('dc_comics.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
