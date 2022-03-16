<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Permohonan;
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
            return view('layouts.admin.dashboard');
        } else if ($role == "2") {
            return view('layouts.dosen.dashboard');
        } else if ($role == "3") {
            return view('layouts.mahasiswa.dashboard');
        } else {
            return redirect()->to('logout');
        }
    }
}