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
            return redirect()->route('admin.index');
        } else if ($role == "2") {
            return redirect()->route('dosen.index');
        } else if ($role == "3") {
            return redirect()->route('mahasiswa.index');
        } else if ($role == "4") {
            return redirect()->route('user');
        } else {
            return redirect()->to('logout');
        }
    }
}