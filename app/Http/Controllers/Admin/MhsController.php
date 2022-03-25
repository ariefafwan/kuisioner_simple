<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Hasil;
use App\Models\Prodi;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::latest()->paginate(5)->where('role_id', '3');
        return view('layouts.admin.mahasiswa', ['page' => 'Daftar Mahasiswa'], compact('user'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
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

        return redirect()->route('task3')->with('success', 'Data Penilaian Berhasil ditambahkan');
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
