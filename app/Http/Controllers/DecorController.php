<?php

namespace App\Http\Controllers;

use App\Models\Decor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DecorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Decor::paginate(5);
        return view('dashboard.decor.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.decor.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Decor();
        $gambar = $request->file('img');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $gambar->storeAs('public/images/', $nama_gambar);

        // Update kolom gambar pada database
        $data->img = $nama_gambar;
        $data->title = $request->input('title');
        $data->label = $request->input('label');
        $data->rate = $request->input('rate');
        $data->description = $request->input('description');
        $data->save();
        return redirect('/decorAdmin')->with('success', 'Data Berhasil Ditambahkan');
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
        $data = Decor::find($id);
        return view('dashboard.decor.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Decor::findOrFail($id);

    // Update input teks
    $data->title = $request->input('title');
    $data->label = $request->input('label');
    $data->rate = $request->input('rate');
    $data->description = $request->input('description');

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
    return redirect('/decorAdmin')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Decor::find($id);
        $data->delete();
        return redirect('/decorAdmin')->with('success', 'Data Berhasil Dihapus');
    }
}
