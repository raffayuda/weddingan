<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NormUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::where('level', 'user')->paginate(5);
        return view('dashboard.normUser.index', compact('data'));
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
        //
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
        $data = User::findOrFail($id);

        // Update input teks
        $data->name = $request->input('name');
        $data->email = $request->input('email');
    
        // Update gambar jika ada yang diunggah
        if ($request->hasFile('image')) {
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
        return redirect('/users')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('/users')->with('success', 'Data Berhasil Dihapus');
    }
}
