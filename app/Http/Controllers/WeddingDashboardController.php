<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\About;
use App\Models\Header;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class WeddingDashboardController extends Controller
{
    public function header()
    {
        $data = Header::all();
        return view('dashboard.header.index', compact('data'));
    }
    
    public function headerEdit(string $id)
    {
        $data = Header::find($id);
        return view('dashboard.header.edit', compact('data'));
    }
    
    public function headerUpdate(Request $request, string $id)
    {
        $data = Header::find($id);
        $data->update($request->all());
        return redirect('/headerAdmin')->with('success', 'Data Berhasil Diubah');
    }
    
    public function about()
    {
        $data = About::all();
        return view('dashboard.about.index', compact('data'));
    }

    public function aboutEdit($id){
        $data = About::find($id);
        return view('dashboard.about.edit', compact('data'));
    }

    public function aboutUpdate(Request $request, $id){
        $data = About::find($id);
        foreach (['img1', 'img2', 'img3', 'img4'] as $imageField) {
            if ($request->hasFile($imageField) && $data->$imageField) {
                Storage::delete('public/images/' . $data->$imageField);
            }
        }

        foreach (['img1', 'img2', 'img3', 'img4'] as $imageField) {
            if ($request->hasFile($imageField)) {
                $image = $request->file($imageField);
                $imageName = time() . '_' . $imageField . '.' . $image->getClientOriginalExtension();
                $image->storeAs('public/images/', $imageName);
                $data->$imageField = $imageName;
            }
        }

        $data->content = $request->input('content');

        $data->save();
        return redirect('/aboutAdmin')->with('success', 'Data Berhasil Diubah');

    }

    public function login(){
        return view('login');
    }

    public function loginProses(Request $request){
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/dashboard')->with('success', 'Anda Berhasil Login');
        }else{
            return redirect('/login')->with('fail', 'Email Atau Password Salah');
        }
    }

    public function register(){
        return view('register');
    }

    public function registerProses(Request $request){
        $imageName = 'default.jpg';
        $profession = 'Unknown';

        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            Storage::putFileAs('public/images', $image, $imageName);
        }


        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->img = $imageName;
        $user->remember_token = Str::random(60);
        $user->profesi = $request->profesi ?? $profession; 
        $user->level = 'user';
        $user->save();

        return redirect('/login')->with('success', 'User berhasil didaftarkan.');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
    
}
