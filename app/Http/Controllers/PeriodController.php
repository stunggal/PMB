<?php

namespace App\Http\Controllers;

use App\Models\Periodes;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $periodes = Periodes::all();

        return view(
            'period.index',
            [
                'periodes' => $periodes,
            ]
        );
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
        $validatedData = $request->validate([
            'period' => 'required|string|max:255|unique:periodes',
        ]);
        Periodes::create($validatedData);

        return redirect('/period')->with('success', 'Period has been created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return true;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view(
            'period.edit',
            [
                'period' => Periodes::find($id),
            ]
        );
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
        $validatedData = $request->validate([
            // period must be 5 digits long
            'period' => 'required|digits:5|integer|unique:periodes,period,' . $id,
            'is_active' => 'required|boolean',
        ]);
        // $participants = Participants::findOrFail($id);
        $period = Periodes::findOrFail($id);
        $period->update($validatedData);
        return redirect('/period')->with('success', 'Period has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // destroy the period
        Periodes::destroy($id);
        return redirect('/period')->with('delete', 'Period has been deleted');
    }
}
