@extends('layouts.admin')

@section('post')

<div class="col-12">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">EDIT DATA PENDAFTARAN PASIEN</h6>
            {{-- FORM PENDAFTARAN --}}
                    <form action="{{ route('data.update', $data->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control @error('nik') is-invalid @enderror" id="nik" name="nik" placeholder="Nomor Induk Kependudukan" required minlength="16" maxlength="16" pattern="\d{16}" value="{{ old('nik', $data->nik) }}">
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
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Anda" value="{{ old('nama', $data->nama) }}" required>
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
                                    <textarea class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat Lengkap Anda" id="alamat" name="alamat" style="height: 100px" required>{{ old('nik', $data->alamat) }}</textarea>
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
                                    <input type="text" class="form-control @error('telepon') is-invalid @enderror" id="telepon" name="telepon" placeholder="Telepon" value="{{ old('telepon', $data->telepon) }}" required>
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
                                        <input type="date" class="form-control @error('nik') is-invalid @enderror" id="tgl_kunjung" name="tgl_kunjung" placeholder="Tanggal Kunjungan"style="height: 43px;" value="{{ old('tgl_kunjung', $data->tgl_kunjung) }}" required>
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
                                    <select name="poli_id" id="poli_id" class="form-select border-0 @error('poli_id') is-invalid @enderror" style="height: 55px;" required>
                                        <option selected>Pilih Poli</option>
                                        @foreach ($poli as $p)
                                        <option value="{{ $p->id }}" {{ old('poli_id', $data->poli_id) == $p->id ? 'selected' : '' }}>{{ $p->nama }}</option>
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
                                <button class="btn btn-primary w-100 py-3" type="submit">Update Data</button>
                            </div>
                        </div>
                    </form>
                    {{-- TUTUP FORM PENDAFTARAN --}}
    </div>
</div>
</div>

@endsection<!-- End #section -->