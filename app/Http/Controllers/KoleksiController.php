<?php

namespace App\Http\Controllers;

use App\Models\Koleksi;
use Illuminate\Http\Request;

class KoleksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $koleksi = Koleksi::where('user_id', auth()->user()->user_id)->orderBy('created_at', 'DESC')->get();

        return view('koleksi.index', compact('koleksi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Koleksi::create($request->all());

        return redirect()->route('koleksi')->with('success', 'Buku berhasil ditambah ke koleksi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $koleksi_id)
    {
        $koleksi = Koleksi::findOrFail($koleksi_id);

        $koleksi->delete();

        return redirect()->route('koleksi')->with('success', 'Koleksi berhasil dihapus');
    }
}
