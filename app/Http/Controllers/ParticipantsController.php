<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use Illuminate\Http\Request;

class ParticipantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('participants.index', [
            'title' => 'Participants',
            'participants' => Participants::all(),
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'school' => 'required|string|max:255',
            'registration_number' => 'required|integer',
            'inggris_lisan' => 'required|integer|between:1,9',
            'arab_lisan' => 'required|integer|between:1,9',
            'alquran' => 'required|integer|between:1,9',
            'ibadah' => 'required|integer|between:1,9',
            'arab_tulis' => 'required|integer|between:1,9',
            'inggris_tulis' => 'required|integer|between:1,9',
            'dirasah_islamiyah' => 'required|integer|between:1,9',
            'pengetahuan_umum' => 'required|integer|between:1,9',
            'mtk' => 'required|integer|between:1,9',
            'fisika' => 'required|integer|between:1,9',
            'kimia' => 'required|integer|between:1,9',
            'biologi' => 'required|integer|between:1,9',
            'tbi' => 'required|integer|between:1,9',
            'first_choice' => 'required|string|max:255|in:pai,pba,tbi,saa,afi,iqt,pm,hes,mnj,ei,agro,ti,tip,hi,ilkom,kkk,farmasi,gizi',
            'second_choice' => 'required|string|max:255|in:pai,pba,tbi,saa,afi,iqt,pm,hes,mnj,ei,agro,ti,tip,hi,ilkom,kkk,farmasi,gizi',
            'third_choice' => 'required|string|max:255|in:pai,pba,tbi,saa,afi,iqt,pm,hes,mnj,ei,agro,ti,tip,hi,ilkom,kkk,farmasi,gizi',
        ]);
        Participants::create($validatedData);
        return redirect('insertparticipant')->with('success', 'Data have been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('participants.edit', [
            'title' => 'Edit Participants',
            'participants' => Participants::findOrFail($id),
        ]);
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
            'name' => 'required|string|max:255',
            'school' => 'required|string|max:255',
            'registration_number' => 'required|integer',
            'inggris_lisan' => 'required|integer|between:1,9',
            'arab_lisan' => 'required|integer|between:1,9',
            'alquran' => 'required|integer|between:1,9',
            'ibadah' => 'required|integer|between:1,9',
            'arab_tulis' => 'required|integer|between:1,9',
            'inggris_tulis' => 'required|integer|between:1,9',
            'dirasah_islamiyah' => 'required|integer|between:1,9',
            'pengetahuan_umum' => 'required|integer|between:1,9',
            'mtk' => 'required|integer|between:1,9',
            'fisika' => 'required|integer|between:1,9',
            'kimia' => 'required|integer|between:1,9',
            'biologi' => 'required|integer|between:1,9',
            'tbi' => 'required|integer|between:1,9',
            'first_choice' => 'required|string|max:255|in:pai,pba,tbi,saa,afi,iqt,pm,hes,mnj,ei,agro,ti,tip,hi,ilkom,kkk,farmasi,gizi',
            'second_choice' => 'required|string|max:255|in:pai,pba,tbi,saa,afi,iqt,pm,hes,mnj,ei,agro,ti,tip,hi,ilkom,kkk,farmasi,gizi',
            'third_choice' => 'required|string|max:255|in:pai,pba,tbi,saa,afi,iqt,pm,hes,mnj,ei,agro,ti,tip,hi,ilkom,kkk,farmasi,gizi',
            'final_choice' => 'required|string|max:255|in:pai,pba,tbi,saa,afi,iqt,pm,hes,mnj,ei,agro,ti,tip,hi,ilkom,kkk,farmasi,gizi',
            'status' => 'required|string|max:255|in:graduated,fail,matrik',
        ]);
        $participants = Participants::findOrFail($id);
        $participants->update($validatedData);
        return redirect('participants')->with('success', 'Data have been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //destroy participants
        Participants::destroy($id);
        return redirect('participants')->with('success', 'Data have been deleted!');
    }
}
