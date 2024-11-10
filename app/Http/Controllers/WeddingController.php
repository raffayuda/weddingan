<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\About;
use App\Models\Decor;
use App\Models\Header;
use App\Models\Package;
use App\Models\Service;
use App\Models\Catering;
use App\Models\Contact;
use App\Models\Reservation;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WeddingController extends Controller
{
    public function index(){
        $data = Header::all();
        $data2 = Service::all();
        $data3 = About::all();
        $data4 = Decor::latest()->limit(6)->get();
        $data5 = Catering::latest()->limit(6)->get();
        $data6 = Package::latest()->limit(4)->get();
        $data7 = Team::all();
        $data8 = DB::table('testimonials')
        ->leftJoin('users', 'testimonials.id_user', '=', 'users.id')
        ->select('testimonials.*', 'users.name', 'users.img', 'users.profesi', 'users.email')->latest()->limit(4)
        ->get();
        return view('welcome', compact('data', 'data2', 'data3', 'data4', 'data5', 'data6', 'data7', 'data8'));
    }

    public function about(){
        $data = About::all();
        return view('about', compact('data'));
    }

    public function services(){
        $data = Service::all();
        return view('service', compact('data'));
    }
    public function partner(){
        
        return view('partner');
    }

    public function reservation(){
        $data6 = Package::all();
        return view('reservation', compact('data6'));
    }

    public function menu(){
        $data = Decor::all();
        $data2 = Catering::all();
        $data3 = Package::all();
        return view('menu', compact('data', 'data2', 'data3'));
    }

    public function team(){
        $data = Team::all();
        return view('team', compact('data'));
    }

    public function testimonial(){
        $data = DB::table('testimonials')
        ->leftJoin('users', 'testimonials.id_user', '=', 'users.id')
        ->select('testimonials.*', 'users.name', 'users.img', 'users.profesi', 'users.email')
        ->get();
        return view('testimonial', compact('data'));
    }

    public function contact(){
        return view('contact');
    }
    public function dashboard(){
        $comment = Testimonial::count();
        $reservation = Reservation::count();
        $contact = Contact::count();
        $customer = User::where('level', 'user')->count();
        return view('dashboard.index', compact('comment', 'reservation', 'contact', 'customer'));
    }

    public function showDekor($id){
        $data = Decor::find($id);
        return view('showDekor', compact('data'));
    }
    public function dekorLike($id) {
        $data = Decor::findOrFail($id);
        $data->increment('suka');
        return redirect()->back();
    }
    public function dekorDislike($id) {
        $data = Decor::findOrFail($id);
        $data->increment('dislike');
        return redirect()->back();
    }
    public function caterLike($id) {
        $data = Catering::findOrFail($id);
        $data->increment('suka');
        return redirect()->back();
    }
    public function caterDislike($id) {
        $data = Catering::findOrFail($id);
        $data->increment('dislike');
        return redirect()->back();
    }
    public function showCater($id){
        $data = Catering::find($id);
        return view('showCater', compact('data'));
    }
    public function showPackage($id){
        $data = Package::find($id);
        return view('showPackage', compact('data'));
    }
    public function paketLike($id) {
        $data = Package::findOrFail($id);
        $data->increment('suka');
        return redirect()->back();
    }
    public function paketDislike($id) {
        $data = Package::findOrFail($id);
        $data->increment('dislike');
        return redirect()->back();
    }
}
