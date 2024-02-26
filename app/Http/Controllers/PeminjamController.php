<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('dashboard_peminjam',compact('buku'));
    }
}
