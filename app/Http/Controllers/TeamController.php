<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Team::all();
        return view('dashboard.team.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.team.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Team();
        $gambar = $request->file('img');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $gambar->storeAs('public/images/', $nama_gambar);

        // Update kolom gambar pada database
        $data->img = $nama_gambar;
        $data->name = $request->input('name');
        $data->job = $request->input('job');
        $data->save();
        return redirect('/teamAdmin')->with('success', 'Data Berhasil Ditambahkan');
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
        $data = Team::find($id);
        return view('dashboard.team.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Team::findOrFail($id);

        // Update input teks
        $data->name = $request->input('name');
        $data->job = $request->input('job');
    
        // Update gambar jika ada yang diunggah
        if ($request->hasFile('img')) {
            // Hapus gambar lama jika ada
            if ($data->img) {
                Storage::delete('public/images/' . $data->gambar);
            }
    
            // Simpan gambar baru
            $gambar = $request->file('img');
            $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
            $gambar->storeAs('public/images/', $nama_gambar);
    
            // Update kolom gambar pada database
            $data->img = $nama_gambar;
        }
    
        // Simpan perubahan pada data
        $data->save();
        return redirect('/teamAdmin')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Team::find($id);
        $data->delete();
        return redirect('/teamAdmin')->with('success', 'Data Berhasil Dihapus!!!');
    }
}
