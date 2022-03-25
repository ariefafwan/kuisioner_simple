<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use App\Models\Pertanyaan;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $dosen = Dosen::all();
        $pertanyaan = Pertanyaan::all()->where('task', '1');
        $user = Auth::user();
        $page = "Kuisioner";
        return view('layouts.wait', compact('user', 'page', 'dosen', 'pertanyaan'));
    }

    public function task2()
    {
        $dosen = Dosen::all();
        $pertanyaan = Pertanyaan::all()->where('task', '2');
        $user = Auth::user();
        $page = "Kuisioner";
        return view('layouts.task2', compact('user', 'page', 'dosen', 'pertanyaan'));
    }

    public function task3()
    {
        $dosen = Dosen::all();
        $pertanyaan = Pertanyaan::all()->where('task', '3');
        $user = Auth::user();
        $page = "Kuisioner";
        return view('layouts.task2', compact('user', 'page', 'dosen', 'pertanyaan'));
    }
}
