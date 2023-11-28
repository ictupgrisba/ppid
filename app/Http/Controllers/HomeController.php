<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function home() {
        return view('home');
    }
    public function about() {
        return view('about');
    }
    public function tentang() {
        return view('tentang');
    }
    public function profil() {
        return view('profil');
    }
    public function visimisi() {
        return view('visimisi');
    }
    public function tupok() {
        return view('tupok');
    }
    public function struktur() {
        return view('struktur');
    }
}
