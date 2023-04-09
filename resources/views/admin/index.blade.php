@extends('layouts.admin')

@section('post')

{{-- ALERT TAMBAH PENGUNJUNG --}}
<div class="col-12">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fa fa-exclamation-circle me-2"></i>{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
</div>

<div class="col-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">DATA PENDAFTARAN PASIEN</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">NIK</th>
                      <th scope="col">NAMA</th>
                      <th scope="col">ALAMAT</th>
                      <th scope="col">TELEPON</th>
                      <th scope="col">JENIS POLI</th>
                      <th scope="col">TANGGAL</th>
                      <th scope="col">AKSI</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($datas as $d)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $d->nik }}</td>
                  <td>{{ $d->nama }}</td>
                  <td>{{ $d->alamat }}</td>
                  <td>{{ $d->telepon }}</td>
                  <td>{{ $d->poli->nama }}</td>
                  <td>{{ $d->tgl_kunjung }}</td>
                  <td>
                    <form action="{{ route('data.destroy', $d->id) }}" method="POST">
                        <a href="{{ route('data.edit', $d->id) }}" class="btn btn-sm btn-primary" title="Edit Data"><i class="fa fa-edit"></i></a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Konfirmasi untuk Hapus Data')" title="Hapus Data"><i class="fa fa-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>

@endsection<!-- End #section -->