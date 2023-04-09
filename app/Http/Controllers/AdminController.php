<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Pengunjung;
use App\Models\Poli;
use App\Models\User;
use Carbon\Carbon;

class AdminController extends Controller
{
    // DATA PENDAFTARAN
    public function index()
    {
        $user = Auth::user();
        $datas = Pengunjung::with('poli')->get();

        return view('admin.index', [
            "title" => "Beranda"], compact('user', 'datas'));
    }

    public function datacreate()
    {
        $user = Auth::user();
        $poli = Poli::all();

        return view('admin.datacreate', [
            "title" => "Data Pasien"], compact('user', 'poli'));
    }

    public function datastore(Request $request)
    {
        $request ->validate([
            'nik' => 'required|digits:16|unique:pengunjungs|numeric',
            'nama' => 'required',
            'telepon' => 'required|numeric',
            'alamat' => 'required',
            'tgl_kunjung' => 'required|date',
            'poli_id' => 'required',
        ]);

        Pengunjung::create([
            'nik' => $request->nik,
            'nama' => $request->nama,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat,
            'tgl_kunjung' => $request->tgl_kunjung,
            'poli_id' => $request->poli_id,
        ]);

        
        return redirect()->route('admin')->with('success', 'Data Pendaftaran Berhasil Ditambahkan!');
    }

    public function dataedit($id)
    {
        $user = Auth::user();
        $data = Pengunjung::find($id);
        $poli = Poli::all();

        return view('admin.dataedit', [
            "title" => "Data Pasien"], compact('user', 'data', 'poli'));
    }

    public function dataupdate(Request $request, $id)
    {
        $request->validate([
            'nik' => 'required|unique:pengunjungs,nik,'.$id.',id',
            'nama' => 'required',
            'alamat' => 'required',
            'telepon' => 'required',
            'poli_id' => 'required',
            'tgl_kunjung' => 'required|date',
        ]);

        $update = Pengunjung::find($id);
        $update->nik = $request->input('nik');
        $update->nama = $request->input('nama');
        $update->alamat = $request->input('alamat');
        $update->telepon = $request->input('telepon');
        $update->poli_id = $request->input('poli_id');
        $update->tgl_kunjung = $request->input('tgl_kunjung');
        $update->save();
        
        return redirect()->route('admin')->with('success', 'Data Pendaftaran Pasien Berhasil Diupdate');
    }

    public function datadestroy($id)
    {
        Pengunjung::destroy($id);

        return redirect()->route('admin')->with('success', 'Data Pendaftaran Pasien Berhasil Dihapus');
    }

    // LAPORAN PENGUNJUNG
    public function laporan()
    {
        $user = Auth::user();

        // PENGUNJUNG BERDASARKAN TANGGAL
        $datatgl = Pengunjung::selectRaw('tgl_kunjung, COUNT(*) as kunjungan_tgl')
        ->groupBy('tgl_kunjung')
        ->orderBy('tgl_kunjung')
        ->get();

        // PENGUNJUNG BERDASARKAN POLI
        $datapoli = Poli::withCount('pengunjung')->get();

        return view('admin.laporan', [
            "title" => "Data Pengunjung"], compact('user', 'datatgl', 'datapoli'));
    }

    public function tgldetail($tgl_kunjung)
    {
        $user = Auth::user();
        $datatgl = Pengunjung::whereDate('tgl_kunjung', '=', $tgl_kunjung)
        ->get();

        return view('admin.laporantglshow', [
            "title" => "Data Pengunjung"] , compact('user', 'datatgl', 'tgl_kunjung'));

    }

    public function polidetail($id)
    {
        $user = Auth::user();
        $datapoli = Poli::findOrFail($id);
        $pengunjung = $datapoli->pengunjung()->get();

        return view('admin.laporanpolishow', [
            "title" => "Data Pengunjung"], compact('user', 'datapoli', 'pengunjung'));

    }

    // PELAYANAN POLI
    public function poliindex()
    {
        $user = Auth::user();
        $poli = Poli::all();

        return view('admin.poli.index', [
            "title" => "Pelayanan Poli"], compact('user', 'poli'));
    }

    public function polistore(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|unique:polis',
        ]);

        Poli::create($validate);

        return redirect('/admin/poli')->with('success', 'Layanan Poli Berhasil Ditambahkan');
    }

    public function poliedit($id)
    {
        $user = Auth::user();
        $poli = Poli::findOrFail($id);

        return view('admin.poli.edit', [
            "title" => "Pelayanan Poli"], compact('user', 'poli'));
    }

    public function poliupdate(Request $request, $id)
    {
        $validate = $request->validate([
            'nama' => 'required|unique:polis',
        ]);

        Poli::whereId($id)->update($validate);

        return redirect('/admin/poli')->with('success', 'Layanan Poli Berhasil Diperbaharui');
    }

    public function polidelete($id)
    {
        $user = Auth::user();
        $poli = Poli::findOrFail($id);
        $poli->delete();

        return redirect('/admin/poli')->with('success', 'Layanan Poli Berhasil Dihapus');
    }

    // USER
    public function userindex()
    {
        $user = Auth::user();
        $admin = User::all();

        return view('admin.user.index', [
            "title" => "Daftar Pengguna"], compact('user', 'admin'));
    }

    public function userstore(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);

        $validate['password'] = bcrypt($validate['password']);

        User::create($validate);

        return redirect('/admin/user')->with('success', 'Admin Berhasil Ditambahkan');
    }

    public function useredit($id)
    {
        $user = Auth::user();
        $admin = User::findOrFail($id);

        return view('admin.user.edit', [
            "title" => "Daftar Pengguna"], compact('user', 'admin'));
    }

    public function userupdate(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,'.$id,
            'password' => 'required',
        ]);

        if (!empty($validate['password'])) {
            $validate['password'] = bcrypt($validate['password']);
        } else {
            unset($validate['password']);
        }

        User::whereId($id)->update($validate);

        return redirect('/admin/user')->with('success', 'Admin Berhasil Diperbaharui');
    }

    public function userdelete($id)
    {
        $user = Auth::user();
        $admin = User::findOrFail($id);
        $admin->delete();

        return redirect('/admin/user')->with('success', 'Admin Berhasil Dihapus');
    }
}
