@extends('layouts.main')

@section('post')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Pendaftaran</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">

        {{-- ALERT BERHASIL DAFTAR --}}
        @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        <div class="row g-4">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded p-5">
                    <p class="d-inline-block border rounded-pill py-1 px-4">Pendaftaran Pasien</p>
                    <h1 class="mb-4">Silahkan Mengisi Form Pendaftaran Berikut</h1>

                    {{-- FORM PENDAFTARAN --}}
                    <form action="{{ route('pengunjung.store') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="Nomor Induk Kependudukan" required minlength="16" maxlength="16" pattern="\d{16}" value="{{ old('nik') }}">
                                    <label for="nik">Nomor Induk Kependudukan</label>
                                    @error('nik')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Anda" value="{{ old('nama') }}" required>
                                    <label for="nama">Nama Anda</label>
                                    @error('nama')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control @error('nik') is-invalid @enderror" placeholder="Alamat Lengkap Anda" id="alamat" name="alamat" style="height: 100px" required>{{ old('alamat') }}</textarea>
                                    <label for="alamat">Alamat</label>
                                    @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="telepon" name="telepon" placeholder="Telepon" value="{{ old('telepon') }}" required>
                                    <label for="telepon">Telepon</label>
                                    @error('telepon')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <div class="date" id="tgl_kunjung" data-target-input="nearest">
                                        <input type="date" class="form-control @error('nik') is-invalid @enderror" id="tgl_kunjung" name="tgl_kunjung" placeholder="Tanggal Kunjungan"style="height: 43px;" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" value="{{ old('tgl_kunjung') }}" required>
                                        @error('tgl_kunjung')
                                        <span class="invalid-feedback" role="alert">
                                            {{ $message }}
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <select name="poli_id" id="poli_id" class="form-select border-0 @error('nik') is-invalid @enderror" style="height: 55px;" required>
                                        <option selected>Pilih Poli</option>
                                        @foreach ($polis as $p)
                                        <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('poli_id')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Daftar Sekarang</button>
                            </div>
                        </div>
                    </form>
                    {{-- TUTUP FORM PENDAFTARAN --}}

                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="h-100" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('home/img/feature.jpg') }}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

@endsection