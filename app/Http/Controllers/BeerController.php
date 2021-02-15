<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class BeerController extends Controller
{
    private $beerValidation = [
        'marca' => 'required|max:25',
        'nome' => 'required|max:35',
        'gradazione' => 'required|numeric',
        'cl' => 'required|numeric',
        'prezzo' => 'required|numeric'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();
        return view("beers.index", compact("beers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("beers.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate($this->beerValidation);

        $beer = new Beer();
        $beer->fill($data); 
        $result = $beer->save();

        return redirect()
            ->route('beers.index')
            ->with('message', 'Birra ' .$beer->marca . $beer->nome . ' creata correttamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
        return view("beers.show", compact("beer"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
       return view("beers.edit", compact('beer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $data = $request->all();

        $request->validate($this->beerValidation);

        $beer->update($data);

        return redirect()
            ->route('beers.index')
            ->with('message', 'Birra ' .$beer->marca . $beer->nome . ' modificata correttamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        $beer->delete();

        return redirect()
        ->route('beers.index')
        ->with('message', 'Birra ' .$beer->marca . $beer->nome . ' eliminata correttamente');
    }
}
