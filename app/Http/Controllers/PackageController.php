<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Package::all();
        return view('dashboard.package.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.package.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Package();
        $gambar = $request->file('img');
        $nama_gambar = time() . '_' . $gambar->getClientOriginalName();
        $gambar->storeAs('public/images/', $nama_gambar);

        // Update kolom gambar pada database
        $data->img = $nama_gambar;
        $data->title = $request->input('title');
        $data->label = $request->input('label');
        $data->rate = $request->input('rate');
        $data->harga = $request->input('harga');
        $data->description = $request->input('description');
        $data->save();
        return redirect('/packageAdmin')->with('success', 'Data Berhasil Ditambahkan');
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
        $data = Package::find($id);
        return view('dashboard.package.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Package::findOrFail($id);

    // Update input teks
    $data->title = $request->input('title');
    $data->label = $request->input('label');
    $data->rate = $request->input('rate');
    $data->harga = $request->input('harga');
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
    return redirect('/packageAdmin')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Package::find($id);
        $data->delete();
        return redirect('/packageAdmin')->with('success', 'Data Berhasil Dihapus');
    }
}
