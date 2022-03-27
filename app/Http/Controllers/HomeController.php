<?php

namespace App\Http\Controllers;

use App\Models\Jawaban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Permohonan;
use App\Models\Pertanyaan;
use App\Models\User;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $role = Auth::user()->role_id;
        if ($role == "1") {
            $page = 'Dashboard Admin';
            return view('layouts.admin.dashboard', compact('page'));
        } else if ($role == "2") {
            $page = 'Isilah Kuisioner Berikut';
            $jawaban = Jawaban::all();
            return view('layouts.guest.dashboard', compact('jawaban', 'page'));
        } else {
            return redirect()->to('logout');
        }
    }
}