<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index()
    {
        return view('guest/index');
    }

    public function layanan()
    {
        return view('guest.layanan');
    }
    public function tentang()
    {
        return view('guest.tentang');
    }
}
