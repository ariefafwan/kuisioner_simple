<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Hasil;
use App\Models\Jawaban;

use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function index()
    {
        $jawaban = Jawaban::all();
        $page = 'Isilah Kuisioner Ini';
        return view('layouts.guest.task2', compact('jawaban', 'page'));
    }

    public function task2()
    {
        $jawaban = Jawaban::all();
        $page = 'Isilah Kuisioner Ini';
        return view('layouts.guest.task3', compact('jawaban', 'page'));
    }

    public function task3()
    {
        $jawaban = Jawaban::all();
        $page = 'Isilah Kuisioner Ini';
        return view('layouts.guest.task4', compact('jawaban', 'page'));
    }

    public function dah()
    {
        $jawaban = Jawaban::all();
        $page = 'Isilah Kuisioner Ini';
        return view('layouts.guest.wait', compact('jawaban', 'page'));
    }

    public function jawaban2(Request $request)
    {
        $dtUpload = new Hasil();
        $dtUpload->user_id = $request->user_id;
        $dtUpload-> jawaban1 = $request->jawaban1;
        $dtUpload-> jawaban2 = $request->jawaban2;
        $dtUpload-> jawaban3 = $request->jawaban3;
        $dtUpload-> jawaban4 = $request->jawaban4;
        $dtUpload-> task = $request->task;

        $dtUpload->save();
        return redirect()->route('task2')->with('success', 'Jawaban Berhasil ditambahkan');
    }

    public function jawaban3(Request $request)
    {
        $dtUpload = new Hasil();
        $dtUpload->user_id = $request->user_id;
        $dtUpload-> jawaban1 = $request->jawaban1;
        $dtUpload-> jawaban2 = $request->jawaban2;
        $dtUpload-> jawaban3 = $request->jawaban3;
        $dtUpload-> jawaban4 = $request->jawaban4;
        $dtUpload-> task = $request->task;

        $dtUpload->save();
        return redirect()->route('task3')->with('success', 'Jawaban Berhasil ditambahkan');
    }

    public function jawaban4(Request $request)
    {
        $dtUpload = new Hasil();
        $dtUpload->user_id = $request->user_id;
        $dtUpload-> jawaban1 = $request->jawaban1;
        $dtUpload-> jawaban2 = $request->jawaban2;
        $dtUpload-> jawaban3 = $request->jawaban3;
        $dtUpload-> jawaban4 = $request->jawaban4;
        $dtUpload-> task = $request->task;

        $dtUpload->save();
        return redirect()->route('dah');
    }
}
