<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::orderBy('created_at', 'DESC')->get();

        $user = DB::table('users')->paginate(10);

        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());

        return redirect()->route('user')->with('success', 'User berhasil ditambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $user_id)
    {
        $user = User::findOrFail($user_id);

        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $user_id)
    {
        $user = User::findOrFail($user_id);

        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $user_id)
    {
        $user = User::findOrFail($user_id);

        $user->update($request->all());

        return redirect()->route('user')->with('success', 'User berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $user_id)
    {
        $user = User::findOrFail($user_id);

        $user->delete();

        return redirect()->route('user')->with('success', 'User berhasil dihapus');
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;

        $user = DB::table('users')->where('name', 'like', '%'.$cari.'%')->paginate();
        
        return view('user.index', compact('user'));
    }
}
