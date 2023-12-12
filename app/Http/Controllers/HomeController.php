<?php

namespace App\Http\Controllers;

use App\Repositories\HomeRepository;
use App\Repositories\PhotoRepository;
use App\Repositories\PostRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application as FoundationApp;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private HomeRepository $homeRepository;
    private PostRepository $postRepository;
    private PhotoRepository $photoRepository;
    public function __construct(HomeRepository $homeRepository, PostRepository $postRepository, PhotoRepository $photoRepository)
    {
        $this->homeRepository = $homeRepository;
        $this->postRepository = $postRepository;
        $this->photoRepository = $photoRepository;
    }
    function viewMaintenance(): View|Factory|Application|FoundationApp
    {
        return view('maintenance');
    }
    function viewHomeDetail(Request $request, $type): View|Factory|Application|FoundationApp
    {
        return \view('home-detail', [
            "type" => $type,
            "h1" => $request->input('h1'),
            "data" => $request->input('data')
        ]);
    }

    public function viewHome(): View|Factory|Application|FoundationApp {
        $data = [
            "newses" => $this->postRepository->listOfSpotlightPublishedNews(),
            "schedules" => $this->postRepository->listOfPublishedScheduleWith(4),
            "disclaimers" => $this->homeRepository->listOfDisclaimers(),
            "services" => $this->homeRepository->listOfServices(),
            "publicInformations" => $this->homeRepository->listOfPublicInformations(),
            "informations" => $this->homeRepository->listOfInformations(),
            "policy" => $this->homeRepository->dataOfPolicy(),
            "aspirations" => $this->homeRepository->dataOfAspirations(),
            "photos" => $this->photoRepository->listOfUploadedFiles(),
        ];
        return view('home', $data);
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
