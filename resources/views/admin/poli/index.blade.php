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
        <h6 class="mb-4">DAFTAR PELAYANAN POLI</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">NAMA POLI</th>
                      <th scope="col">AKSI</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($poli as $d)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $d->nama }}</td>
                  <td>
                    <form action="{{ route('poli.delete', $d->id) }}" method="POST">
                        <a href="{{ route('poli.edit', $d->id) }}" class="btn btn-sm btn-primary" title="Edit Data"><i class="fa fa-edit"></i></a>
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

<hr>

<div class="col-12">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">TAMBAH DATA PELAYANAN POLI</h6>
            {{-- FORM TAMBAH --}}
            <form action="{{ route('poli.store') }}" method="POST">
                @csrf
                <div class="row g-2">
                    <div class="col-8">
                        <div class="form-floating">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Pelayanan Poli" value="{{ old('nama') }}" required>
                            <label for="nama">Nama Pelayanan Poli</label>
                            @error('nama')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Tambah Poli</button>
                    </div>
                </div>
            </form>
            {{-- TUTUP FORM --}}
        </div>
    </div>
</div>

@endsection<!-- End #section -->