<?php

namespace App\Http\Controllers;

use App\Models\Pinjam;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
    public function index()
    {
        $pinjam = Pinjam::all();
        return view('dashboard_petugas',compact('pinjam'));
    }
}
