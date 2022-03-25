<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use App\Models\Hasil;
use App\Models\Jawaban;
use App\Models\Pertanyaan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $user = Auth::user();
            $dosen = Dosen::all();
            $pertanyaan = Pertanyaan::all();
            $page = "Kuisioner Mahasiswa";
            return view('layouts.mahasiswa.dashboard', compact('user', 'page', 'dosen', 'pertanyaan'));
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
        $data = $request->data;

        $total = array_sum($data);
        $jumlah = count($data);

        $n = ($total / $jumlah);
        $nilai = floatval($n);

        // $idmhs = Auth::user()->id;
        // $idmhs = ::where('user_id', $idusr)->first('id');
        // dd($idmhs);


        Hasil::create([
            'user_id' => $request->user_id,
            // 'dosen_id' => $request->dosen_id,
            'nilai' => $nilai,
            'saran' => $request->saran
        ]);

        return redirect()->route('task2')->with('success', 'Data Penilaian Berhasil ditambahkan');
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
