<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengunjung;
use App\Models\Poli;
use App\Models\User;
use Carbon\Carbon;


class PengunjungController extends Controller
{

    public function index()
    {
        $hari = Carbon::today();
        $besok = Carbon::today()->addDay();
        $pengunjung = Pengunjung::whereDate('tgl_kunjung', $hari)->count();
        $pengunjungbesok = Pengunjung::whereDate('tgl_kunjung', $besok)->count();
        $semuapengunjung = Pengunjung::count();

        return view('pengunjung.index', [
            "title" => "Beranda"], compact('pengunjung', 'pengunjungbesok', 'semuapengunjung'));
    }


    public function create()
    {
        $polis = Poli::all();
        return view('pengunjung.pendaftaran', [
            "title" => "Pendaftaran Pasien"] , compact('polis'));
    }


    public function store(Request $request)
    {
        $request ->validate([
            'nik' => 'required|digits:16|unique:pengunjungs|numeric',
            'nama' => 'required',
            'telepon' => 'required|numeric',
            'alamat' => 'required',
            'tgl_kunjung' => 'required|date',
            'poli_id' => 'required',
        ]);

        Pengunjung::create($request->all());

        
        return redirect()->route('pengunjung.create')->with('success', 'Pendaftaran Berhasil!');
    }


    public function about()
    {
        return view('pengunjung.about', [
            "title" => "Tentang Kami"]);
    }

    public function service()
    {
        return view('pengunjung.service', [
            "title" => "Layanan Kami"]);
    }

    public function dokter()
    {
        return view('pengunjung.dokter', [
            "title" => "Tenaga Medis Kami"]);
    }

    public function contact()
    {
        return view('pengunjung.contact', [
            "title" => "Hubungi Kami"]);
    }

}
