<?php

namespace App\Http\Controllers;

use App\Models\Catering;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CateringController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Catering::paginate(5);
        return view('dashboard.catering.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.catering.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Catering();
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
        return redirect('/cateringAdmin')->with('success', 'Data Berhasil Ditambahkan');
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
        $data = Catering::find($id);
        return view('dashboard.catering.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Catering::findOrFail($id);

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
        return redirect('/cateringAdmin')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Catering::find($id);
        $data->delete();
        return redirect('/cateringAdmin')->with('success', 'Data Berhasil Dihapus');
    }
}
