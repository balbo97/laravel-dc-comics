<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comic; 

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('comic.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comic.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //requpero i dati inviati dalla form 
        $form_data = $request->all();

        

        //creo una nuova istanza per inserirla nel database 
        $comic = new Comic;

        //assegno i valori 
        $comic->title = $form_data['title'];
        $comic->price = $form_data['price']; 
        $comic->thumb = $form_data['thumb'];
        $comic->description = $form_data['description'];

        $comic->save();

        return redirect()->route('comic.show', ['comic' => $comic]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comic.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //recupero l'elemento che voglio modificare 
        $comic = Comic::find($id);

        //restituisco la view 
        return view('comic.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form_data = $request->all();

        $comic = Comic::find($id);
        $comic->title = $form_data['title'];
        $comic->price = $form_data['price']; 
        $comic->thumb = $form_data['thumb'];
        $comic->description = $form_data['description'];

        $comic->update();

        return redirect()->route('comic.show', ['comic' => $comic]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
