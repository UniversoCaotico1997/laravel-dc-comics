<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(config('comics.comics'));
        //$comics = config('comics.comics');

        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        // validazione dei vari campi
        $val_data = $request->validate([
            'title' => 'required|min:10|max:50',
            'description' => 'nullable|max:255',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|max:6',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|max:15',
            'type' => 'nullable|max:20',
        ]);

        // dd($val_data);
        $val_data = $this->validation($request->all());

        $comic = Comic::create($val_data);

        //save new all date in database
        // $comic = new Comic();
        // $comic->title = $request['title'];
        // $comic->description = $request['description'];
        // $comic->thumb = $request['thumb'];
        // $comic->price = $request['price'];
        // $comic->series = $request['series'];
        // $comic->sale_date = $request['sale_date'];
        // $comic->type = $request['type'];
        // $comic->save();

        //redirect 
        return to_route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic   $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic   $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic   $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        // dd($request->all());

        //  $comic->update($request->all()); -> QUESTO METODO CREA CONFLITTO CON IL TOKEN 

        // $data = [
        //     'title' => $request['title'],
        //     'description' => $request['description'],
        //     'thumb' => $request['thumb'],
        //     'price' => $request['price'],
        //     'series' => $request['series'],
        //     'sale_date' => $request['sale_date'],
        //     'type' => $request['type']
        // ];

        $val_data = $request->validate([
            'title' => 'required|min:10|max:50',
            'description' => 'nullable|max:255',
            'thumb' => 'nullable|max:255',
            'price' => 'nullable|max:6',
            'series' => 'nullable|max:50',
            'sale_date' => 'nullable|max:15',
            'type' => 'nullable|max:20',
        ]);

        $comic->update($val_data);

        return to_route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('comics.destroy');
    }
}
