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
    <div class="col-sm-12 col-xl-6">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">EDIT DATA PELAYANAN POLI</h6>
            {{-- FORM TAMBAH --}}
            <form action="{{ route('poli.update', $poli->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row g-2">
                    <div class="col-8">
                        <div class="form-floating">
                            <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" placeholder="Nama Pelayanan Poli" value="{{ $poli->nama }}">
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