<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('testimonials')
                    ->leftJoin('users', 'testimonials.id_user', '=', 'users.id')
                    ->select('testimonials.*', 'users.name', 'users.img', 'users.profesi', 'users.email')
                    ->paginate(5);
        return view('dashboard.testimonial.index', compact('data'));
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
        Testimonial::create($request->all());
        return redirect('/')->with('success', 'Komentar Anda Sudah Terkirim!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Testimonial::find($id);
        return view('dashboard.testimonial.show', compact('data'));
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
    public function destroy(string $id)
    {
        $data = Testimonial::find($id);
        $data->delete();
        return redirect('/testiAdmin')->with('success', 'Comment Berhasil Dihapus!!');
    }

    public function comment(){
        return view('comment');
    }
}
