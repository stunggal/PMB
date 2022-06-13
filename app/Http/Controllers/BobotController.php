<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use Illuminate\Http\Request;

class BobotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('bobot.index', [
            'title' => 'Bobot',
            'bobot' => Bobot::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function show(Bobot $bobot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function edit(Bobot $bobot)
    {
        return view('bobot.edit', [
            'title' => 'Edit Bobot',
            'bobot' => $bobot,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bobot $bobot)
    {
        $validatedData = $request->validate([
            'inggris_lisan' => 'required|numeric|between:0,10',
            'arab_lisan' => 'required|numeric|between:0,10',
            'alquran' => 'required|numeric|between:0,10',
            'ibadah' => 'required|numeric|between:0,10',
            'inggris_tulis' => 'required|numeric|between:0,10',
            'arab_tulis' => 'required|numeric|between:0,10',
            'beban_prodi' => 'required|numeric|between:0,10',
        ]);

        $bobot = Bobot::findOrFail($bobot->id);
        $bobot->update($validatedData);
        return redirect('/bobot')->with('success', 'Bobot has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bobot  $bobot
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bobot $bobot)
    {
        //
    }
}
