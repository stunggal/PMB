<?php

namespace App\Http\Controllers;

use App\Models\Participants;
use App\Models\Periodes;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // count participants based on period_id
        $count_participants_graduated = Participants::where('status', '=', 'graduated')->where('period_id', '=', '1')->count();
        // count participants based on status and period_id
        $count_participants_fail = Participants::where('status', '=', 'fail')->where('period_id', '=', '1')->count();
        // count participants based on status and period_id
        $count_participants_matrik = Participants::where('status', '=', 'graduated')->where('period_id', '=', '1')->count();

        // foreach in periodes
        $participant_final_choise = [];
        $recap_graduated = [];
        $recap_fail = [];
        $recap_matrik = [];
        $i = 0;
        $tahun_aktif = Periodes::where('is_active', '=', '1')->first();
        foreach (Periodes::all() as $period) {
            $i++;
            $count_participants_graduated = Participants::where('status', '=', 'graduated')->where('period_id', '=', $i)->count();
            array_push($recap_graduated, $count_participants_graduated);
            $count_participants_fail = Participants::where('status', '=', 'fail')->where('period_id', '=', $i)->count();
            array_push($recap_fail, $count_participants_fail);
            $count_participants_matrik = Participants::where('status', '=', 'graduated')->where('period_id', '=', $i)->count();
            array_push($recap_matrik, $count_participants_matrik);
        }

        // select all periodes ascending
        $periodes = Periodes::orderBy('period', 'asc')->get();

        // select all participants
        $participants = Participants::all();

        // count participants based on final_choice and period_id
        $count_participants_final_choice_pai = Participants::where('final_choice', '=', 'pai')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_pai);
        $count_participants_final_choice_pba = Participants::where('final_choice', '=', 'pba')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_pba);
        $count_participants_final_choice_tbi = Participants::where('final_choice', '=', 'tbi')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_tbi);
        $count_participants_final_choice_saa = Participants::where('final_choice', '=', 'saa')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_saa);
        $count_participants_final_choice_afi = Participants::where('final_choice', '=', 'afi')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_afi);
        $count_participants_final_choice_iqt = Participants::where('final_choice', '=', 'iqt')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_iqt);
        $count_participants_final_choice_pm = Participants::where('final_choice', '=', 'pm')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_pm);
        $count_participants_final_choice_hes = Participants::where('final_choice', '=', 'hes')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_hes);
        $count_participants_final_choice_mnj = Participants::where('final_choice', '=', 'mnj')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_mnj);
        $count_participants_final_choice_ei = Participants::where('final_choice', '=', 'ei')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_ei);
        $count_participants_final_choice_agro = Participants::where('final_choice', '=', 'agro')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_agro);
        $count_participants_final_choice_ti = Participants::where('final_choice', '=', 'ti')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_ti);
        $count_participants_final_choice_tip = Participants::where('final_choice', '=', 'tip')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_tip);
        $count_participants_final_choice_hi = Participants::where('final_choice', '=', 'hi')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_hi);
        $count_participants_final_choice_ilkom = Participants::where('final_choice', '=', 'ilkom')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_ilkom);
        $count_participants_final_choice_farmasi = Participants::where('final_choice', '=', 'farmasi')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_farmasi);
        $count_participants_final_choice_gizi = Participants::where('final_choice', '=', 'gizi')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_gizi);
        $count_participants_final_choice_kkk = Participants::where('final_choice', '=', 'kkk')->where('period_id', '=', $tahun_aktif->id)->count();
        array_push($participant_final_choise, $count_participants_final_choice_kkk);

        // array of prodis
        // $trafic = [
        //     'prodi' = ['pai', 'pba', 'tbi', 'saa', 'afi', 'iqt', 'pm', 'hes', 'mnj', 'ei', 'agro', 'ti', 'tip', 'hi', 'ilkom', 'farmasi', 'gizi'],
        //     'jumlah' = $participant_final_choise
        // ];

        // make array in array
        $trafic_array = [
            'pai' => ['pai', $count_participants_final_choice_pai],
            'pba' => ['pba', $count_participants_final_choice_pba],
            'tbi' => ['tbi', $count_participants_final_choice_tbi],
            'saa' => ['saa', $count_participants_final_choice_saa],
            'afi' => ['afi', $count_participants_final_choice_afi],
            'iqt' => ['iqt', $count_participants_final_choice_iqt],
            'pm' => ['pm', $count_participants_final_choice_pm],
            'hes' => ['hes', $count_participants_final_choice_hes],
            'mnj' => ['mnj', $count_participants_final_choice_mnj],
            'ei' => ['ei', $count_participants_final_choice_ei],
            'agro' => ['agro', $count_participants_final_choice_agro],
            'ti' => ['ti', $count_participants_final_choice_ti],
            'tip' => ['tip', $count_participants_final_choice_tip],
            'hi' => ['hi', $count_participants_final_choice_hi],
            'ilkom' => ['ilkom', $count_participants_final_choice_ilkom],
            'kkk' => ['kkk', $count_participants_final_choice_kkk],
            'farmasi' => ['farmasi', $count_participants_final_choice_farmasi],
            'gizi' => ['gizi', $count_participants_final_choice_gizi]
        ];

        // make prodis inside array
        $trafic = [
            'prodi' => ['pai', 'pba', 'tbi', 'saa', 'afi', 'iqt', 'pm', 'hes', 'mnj', 'ei', 'agro', 'ti', 'tip', 'hi', 'ilkom', 'kkk', 'farmasi', 'gizi'],
            'jumlah' => $participant_final_choise
        ];




        return view('dashboard.index', [
            'title' => 'Dashboard',
            'count_participants_graduated' => $count_participants_graduated,
            'count_participants_fail' => $count_participants_fail,
            'count_participants_matrik' => $count_participants_matrik,
            'periodes' => $periodes,
            'recap_graduated' => $recap_graduated,
            'recap_fail' => $recap_fail,
            'recap_matrik' => $recap_matrik,
            'participants' => $participants,
            'participant_final_choise' => $participant_final_choise,
            'prodis' => $trafic_array,
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
