<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\models\House;
use Illuminate\Support\Facades\Log;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // recupero l'elenco delle case e lo stampo in pagina

        //
        Log::debug('sono entrato nell index');
        $houses = House::all();
        return view('houses.index', compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $newHouse = House::all();
        return view('houses.create', compact('newHouse'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'dimensione' => 'required|max:255',
            'descrizione' => 'required',
            'prezzo' => 'required|numeric',
            'classe_energetica' => 'required|max:255',
            'indirizzo' => 'required|max:255',
            'piani' => 'required|max:255',
            'proprietario' => 'required|max:255',
            'numero_di_stanze' => 'required|max:255',
            'data_di_costruzione' => 'required|date',
            'garage' => 'required|max:255',
        ]);
        $form = $request->all();
        $house = new House();
        $house->fill($form);
        $house->save();

        return redirect()->route('houses.show', $house->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $house = House::find($id);
        return view('houses.show', compact('house'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house)
    {
        //
        return view('houses.edit', compact('house'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $house)
    {
        //
        $request->validate([
            'dimensione' => 'required|max:255',
            'descrizione' => 'required',
            'prezzo' => 'required|numeric',
            'classe_energetica' => 'required|max:255',
            'indirizzo' => 'required|max:255',
            'piani' => 'required|max:255',
            'proprietario' => 'required|max:255',
            'numero_di_stanze' => 'required|max:255',
            'data_di_costruzione' => 'required|date',
            'garage' => 'required|max:255',
        ]);
        $form = $request->all();
        $house->update($form);

        return redirect()->route('houses.show', $house->id);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house)
    {
        //
        $house->delete();

        return redirect()->route('houses.index');
    }
}
