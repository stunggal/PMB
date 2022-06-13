<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
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

        // fixed value
        $min = 4;
        $matrik = 3;
        $fail = 2;

        // kondisi prodi
        $dirasah_islamiyah = $validatedData[('dirasah_islamiyah')];
        $tbi = $validatedData[('tbi')];
        $pengetahuan_umum = $validatedData[('pengetahuan_umum')];
        $exact = ($validatedData[('pengetahuan_umum')] + $validatedData[('mtk')] + $validatedData[('fisika')] + $validatedData[('kimia')] + $validatedData[('biologi')]) / 5;

        // kondisi 
        function menentukanRumus($choose, $dirasah_islamiyah, $tbi, $pengetahuan_umum, $exact)
        {
            if ($choose == 'pai' || $choose == 'pba' || $choose == 'saa' || $choose == 'afi' || $choose == 'iqt' || $choose == 'pm') {
                $beban_prodi = $dirasah_islamiyah;
            } else if ($choose == 'tbi') {
                $beban_prodi = $tbi;
            } else if ($choose == 'hes' || $choose == 'mnj' || $choose == 'ei' || $choose == 'hi' || $choose == 'ilkom') {
                $beban_prodi = $pengetahuan_umum;
            } else if ($choose == 'agro' || $choose == 'ti' || $choose == 'tip' || $choose == 'kkk' || $choose == 'farmasi' || $choose == 'gizi') {
                $beban_prodi = $exact;
            }
            return $beban_prodi;
        }

        // nilai wajib
        $inggris_lisan = $validatedData[('inggris_lisan')];
        $arab_lisan = $validatedData[('arab_lisan')];
        $alquran = $validatedData[('alquran')];
        $ibadah = $validatedData[('ibadah')];
        $arab_tulis = $validatedData[('arab_tulis')];
        $inggris_tulis = $validatedData[('inggris_tulis')];

        // nilai beban prodi
        $prodi_pertama = menentukanRumus($validatedData[('first_choice')], $dirasah_islamiyah, $tbi, $pengetahuan_umum, $exact);
        $prodi_kedua = menentukanRumus($validatedData[('second_choice')], $dirasah_islamiyah, $tbi, $pengetahuan_umum, $exact);
        $prodi_ketiga = menentukanRumus($validatedData[('third_choice')], $dirasah_islamiyah, $tbi, $pengetahuan_umum, $exact);

        //alternatif / kriteria |inggris lisan|arab lisan|alquran|ibadah|enggris tulis|arab tulis|beban prodi|
        $bobot = Bobot::where('id', 1)->first();

        // total bobot
        $total_bobot = $bobot->inggris_lisan + $bobot->arab_lisan + $bobot->alquran + $bobot->ibadah + $bobot->inggris_tulis + $bobot->arab_tulis + $bobot->beban_prodi;

        // nilai alternatif
        $alternatif_inggris_lisan = $bobot->inggris_lisan / $total_bobot;
        $alternatif_arab_lisan = $bobot->arab_lisan / $total_bobot;
        $alternatif_alquran = $bobot->alquran / $total_bobot;
        $alternatif_ibadah = $bobot->ibadah / $total_bobot;
        $alternatif_inggris_tulis = $bobot->inggris_tulis / $total_bobot;
        $alternatif_arab_tulis = $bobot->arab_tulis / $total_bobot;
        $alternatif_beban_prodi = $bobot->beban_prodi / $total_bobot;

        // nilai prodi pertama
        $prodi_pertama_inggris_lisan = $inggris_lisan;
        $prodi_pertama_arab_lisan = $arab_lisan;
        $prodi_pertama_alquran = $alquran;
        $prodi_pertama_ibadah = $ibadah;
        $prodi_pertama_inggris_tulis = $inggris_tulis;
        $prodi_pertama_arab_tulis = $arab_tulis;
        $prodi_pertama_beban_prodi = $prodi_pertama;

        // nilai prodi kedua
        $prodi_kedua_inggris_lisan = $inggris_lisan;
        $prodi_kedua_arab_lisan = $arab_lisan;
        $prodi_kedua_alquran = $alquran;
        $prodi_kedua_ibadah = $ibadah;
        $prodi_kedua_inggris_tulis = $inggris_tulis;
        $prodi_kedua_arab_tulis = $arab_tulis;
        $prodi_kedua_beban_prodi = $prodi_kedua;

        // nilai prodi ketiga
        $prodi_ketiga_inggris_lisan = $inggris_lisan;
        $prodi_ketiga_arab_lisan = $arab_lisan;
        $prodi_ketiga_alquran = $alquran;
        $prodi_ketiga_ibadah = $ibadah;
        $prodi_ketiga_inggris_tulis = $inggris_tulis;
        $prodi_ketiga_arab_tulis = $arab_tulis;
        $prodi_ketiga_beban_prodi = $prodi_ketiga;

        // nilai matrik
        $matrik_inggris_lisan = $matrik;
        $matrik_arab_lisan = $matrik;
        $matrik_alquran = $matrik;
        $matrik_ibadah = $matrik;
        $matrik_inggris_tulis = $matrik;
        $matrik_arab_tulis = $matrik;
        $matrik_beban_prodi = $matrik;

        // nilai fail
        $fail_inggris_lisan = $fail;
        $fail_arab_lisan = $fail;
        $fail_alquran = $fail;
        $fail_ibadah = $fail;
        $fail_inggris_tulis = $fail;
        $fail_arab_tulis = $fail;
        $fail_beban_prodi = $fail;

        // nilai pembagi
        $pembagi_inggris_lisan = max($prodi_pertama_inggris_lisan, $prodi_kedua_inggris_lisan, $prodi_ketiga_inggris_lisan, $matrik_inggris_lisan, $fail_inggris_lisan);
        $pembagi_arab_lisan = max($prodi_pertama_arab_lisan, $prodi_kedua_arab_lisan, $prodi_ketiga_arab_lisan, $matrik_arab_lisan, $fail_arab_lisan);
        $pembagi_alquran = max($prodi_pertama_alquran, $prodi_kedua_alquran, $prodi_ketiga_alquran, $matrik_alquran, $fail_alquran);
        $pembagi_ibadah = max($prodi_pertama_ibadah, $prodi_kedua_ibadah, $prodi_ketiga_ibadah, $matrik_ibadah, $fail_ibadah);
        $pembagi_inggris_tulis = max($prodi_pertama_inggris_tulis, $prodi_kedua_inggris_tulis, $prodi_ketiga_inggris_tulis, $matrik_inggris_tulis, $fail_inggris_tulis);
        $pembagi_arab_tulis = max($prodi_pertama_arab_tulis, $prodi_kedua_arab_tulis, $prodi_ketiga_arab_tulis, $matrik_arab_tulis, $fail_arab_tulis);
        $pembagi_beban_prodi = max($prodi_pertama_beban_prodi, $prodi_kedua_beban_prodi, $prodi_ketiga_beban_prodi, $matrik_beban_prodi, $fail_beban_prodi);

        // nilai normalisasi prodi pertama
        $normalisasi_prodi_pertama_inggris_lisan = $prodi_pertama_inggris_lisan / $pembagi_inggris_lisan;
        $normalisasi_prodi_pertama_arab_lisan = $prodi_pertama_arab_lisan / $pembagi_arab_lisan;
        $normalisasi_prodi_pertama_alquran = $prodi_pertama_alquran / $pembagi_alquran;
        $normalisasi_prodi_pertama_ibadah = $prodi_pertama_ibadah / $pembagi_ibadah;
        $normalisasi_prodi_pertama_inggris_tulis = $prodi_pertama_inggris_tulis / $pembagi_inggris_tulis;
        $normalisasi_prodi_pertama_arab_tulis = $prodi_pertama_arab_tulis / $pembagi_arab_tulis;
        $normalisasi_prodi_pertama_beban_prodi = $prodi_pertama_beban_prodi / $pembagi_beban_prodi;

        // nilai normalisasi prodi kedua
        $normalisasi_prodi_kedua_inggris_lisan = $prodi_kedua_inggris_lisan / $pembagi_inggris_lisan;
        $normalisasi_prodi_kedua_arab_lisan = $prodi_kedua_arab_lisan / $pembagi_arab_lisan;
        $normalisasi_prodi_kedua_alquran = $prodi_kedua_alquran / $pembagi_alquran;
        $normalisasi_prodi_kedua_ibadah = $prodi_kedua_ibadah / $pembagi_ibadah;
        $normalisasi_prodi_kedua_inggris_tulis = $prodi_kedua_inggris_tulis / $pembagi_inggris_tulis;
        $normalisasi_prodi_kedua_arab_tulis = $prodi_kedua_arab_tulis / $pembagi_arab_tulis;
        $normalisasi_prodi_kedua_beban_prodi = $prodi_kedua_beban_prodi / $pembagi_beban_prodi;

        // nilai normalisasi prodi ketiga
        $normalisasi_prodi_ketiga_inggris_lisan = $prodi_ketiga_inggris_lisan / $pembagi_inggris_lisan;
        $normalisasi_prodi_ketiga_arab_lisan = $prodi_ketiga_arab_lisan / $pembagi_arab_lisan;
        $normalisasi_prodi_ketiga_alquran = $prodi_ketiga_alquran / $pembagi_alquran;
        $normalisasi_prodi_ketiga_ibadah = $prodi_ketiga_ibadah / $pembagi_ibadah;
        $normalisasi_prodi_ketiga_inggris_tulis = $prodi_ketiga_inggris_tulis / $pembagi_inggris_tulis;
        $normalisasi_prodi_ketiga_arab_tulis = $prodi_ketiga_arab_tulis / $pembagi_arab_tulis;
        $normalisasi_prodi_ketiga_beban_prodi = $prodi_ketiga_beban_prodi / $pembagi_beban_prodi;

        // nilai normalisasi matrik
        $normalisasi_matrik_inggris_lisan = $matrik_inggris_lisan / $pembagi_inggris_lisan;
        $normalisasi_matrik_arab_lisan = $matrik_arab_lisan / $pembagi_arab_lisan;
        $normalisasi_matrik_alquran = $matrik_alquran / $pembagi_alquran;
        $normalisasi_matrik_ibadah = $matrik_ibadah / $pembagi_ibadah;
        $normalisasi_matrik_inggris_tulis = $matrik_inggris_tulis / $pembagi_inggris_tulis;
        $normalisasi_matrik_arab_tulis = $matrik_arab_tulis / $pembagi_arab_tulis;
        $normalisasi_matrik_beban_prodi = $matrik_beban_prodi / $pembagi_beban_prodi;

        // nilai normalisasi fail
        $normalisasi_fail_inggris_lisan = $fail_inggris_lisan / $pembagi_inggris_lisan;
        $normalisasi_fail_arab_lisan = $fail_arab_lisan / $pembagi_arab_lisan;
        $normalisasi_fail_alquran = $fail_alquran / $pembagi_alquran;
        $normalisasi_fail_ibadah = $fail_ibadah / $pembagi_ibadah;
        $normalisasi_fail_inggris_tulis = $fail_inggris_tulis / $pembagi_inggris_tulis;
        $normalisasi_fail_arab_tulis = $fail_arab_tulis / $pembagi_arab_tulis;
        $normalisasi_fail_beban_prodi = $fail_beban_prodi / $pembagi_beban_prodi;

        // hasil 
        $hasil_prodi_pertama = ($alternatif_inggris_lisan * $normalisasi_prodi_pertama_inggris_lisan) + ($alternatif_arab_lisan * $normalisasi_prodi_pertama_arab_lisan) + ($alternatif_alquran * $normalisasi_prodi_pertama_alquran) + ($alternatif_ibadah * $normalisasi_prodi_pertama_ibadah) + ($alternatif_inggris_tulis * $normalisasi_prodi_pertama_inggris_tulis) + ($alternatif_arab_tulis * $normalisasi_prodi_pertama_arab_tulis) + ($alternatif_beban_prodi * $normalisasi_prodi_pertama_beban_prodi);
        $hasil_prodi_kedua = ($alternatif_inggris_lisan * $normalisasi_prodi_kedua_inggris_lisan) + ($alternatif_arab_lisan * $normalisasi_prodi_kedua_arab_lisan) + ($alternatif_alquran * $normalisasi_prodi_kedua_alquran) + ($alternatif_ibadah * $normalisasi_prodi_kedua_ibadah) + ($alternatif_inggris_tulis * $normalisasi_prodi_kedua_inggris_tulis) + ($alternatif_arab_tulis * $normalisasi_prodi_kedua_arab_tulis) + ($alternatif_beban_prodi * $normalisasi_prodi_kedua_beban_prodi);
        $hasil_prodi_ketiga = ($alternatif_inggris_lisan * $normalisasi_prodi_ketiga_inggris_lisan) + ($alternatif_arab_lisan * $normalisasi_prodi_ketiga_arab_lisan) + ($alternatif_alquran * $normalisasi_prodi_ketiga_alquran) + ($alternatif_ibadah * $normalisasi_prodi_ketiga_ibadah) + ($alternatif_inggris_tulis * $normalisasi_prodi_ketiga_inggris_tulis) + ($alternatif_arab_tulis * $normalisasi_prodi_ketiga_arab_tulis) + ($alternatif_beban_prodi * $normalisasi_prodi_ketiga_beban_prodi);
        $hasil_matrik = ($alternatif_inggris_lisan * $normalisasi_matrik_inggris_lisan) + ($alternatif_arab_lisan * $normalisasi_matrik_arab_lisan) + ($alternatif_alquran * $normalisasi_matrik_alquran) + ($alternatif_ibadah * $normalisasi_matrik_ibadah) + ($alternatif_inggris_tulis * $normalisasi_matrik_inggris_tulis) + ($alternatif_arab_tulis * $normalisasi_matrik_arab_tulis) + ($alternatif_beban_prodi * $normalisasi_matrik_beban_prodi);
        $hasil_fail = ($alternatif_inggris_lisan * $normalisasi_fail_inggris_lisan) + ($alternatif_arab_lisan * $normalisasi_fail_arab_lisan) + ($alternatif_alquran * $normalisasi_fail_alquran) + ($alternatif_ibadah * $normalisasi_fail_ibadah) + ($alternatif_inggris_tulis * $normalisasi_fail_inggris_tulis) + ($alternatif_arab_tulis * $normalisasi_fail_arab_tulis) + ($alternatif_beban_prodi * $normalisasi_fail_beban_prodi);

        // make array
        $array = ([
            'prodi_pertama' => $hasil_prodi_pertama,
            'prodi_kedua' => $hasil_prodi_kedua,
            'prodi_ketiga' => $hasil_prodi_ketiga,
            'matrik' => $hasil_matrik,
            'fail' => $hasil_fail,
        ]);

        return $array;
        $rank_1 = max($ranked);

        // short array
        $array = collect($array)->sortBy('nilai')->reverse()->toArray();

        foreach ($array as $array) {
            $i = 0;
            $i++;
        }

        return array_column($array, 'judul');


        return $array[0]['judul'];
        // ranking
        foreach ($array as $array) {
            $i = 0;
        }
        $ranking = $array[0];







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
