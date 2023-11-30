<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application as FoundationApp;

class HomeController extends Controller
{
    function viewMaintenance(): View|Factory|Application|FoundationApp
    {
        return view('maintenance');
    }

    function viewHomeDetail(): View|Factory|Application|FoundationApp
    {
        return \view('home-detail');
    }
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
    public function laporan() {
        return view('laporan');
    }
    public function infoberkala() {
        return view('infoberkala');
    }
    public function infosetiapsaat() {
        return view('infosetiapsaat');
    }
    public function infosertamerta() {
        return view('infosertamerta');
    }
    public function alurlayanan() {
        return view('alurlayanan');
    }
    public function alurkeberatan() {
        return view('alurkeberatan');
    }
    public function maklumat() {
        return view('maklumat');
    }
    public function regulasi() {
        return view('regulasi');
    }
    public function sop() {
        return view('sop');
    }
    public function jadwal() {
        return view('jadwal');
    }
    public function fasilitas() {
        return view('fasilitas');
    }
    public function biaya() {
        return view('biaya');
    }
    public function panduan() {
        return view('panduan');
    }
    public function alurpengajuan() {
        return view('alurpengajuan');
    }
    public function tatacara() {
        return view('tatacara');
    }
    public function mediaonline() {
        return view('mediaonline');
    }
    public function mediacetak() {
        return view('mediacetak');
    }
    public function dokumen() {
        return view('dokumen');
    }
}
