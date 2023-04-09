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
        <h6 class="mb-4">DAFTAR ADMIN</h6>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">NAMA ADMIN</th>
                      <th scope="col">EMAIL</th>
                      <th scope="col">PASSWORD</th>
                      <th scope="col">AKSI</th>
                  </tr>
              </thead>
              <tbody>
                @foreach($admin as $d)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $d->name }}</td>
                  <td>{{ $d->email }}</td>
                  <td>{{ $d->password }}</td>
                  <td>
                    <form action="{{ route('user.delete', $d->id) }}" method="POST">
                        <a href="{{ route('user.edit', $d->id) }}" class="btn btn-sm btn-primary" title="Edit Data"><i class="fa fa-edit"></i></a>
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
            <h6 class="mb-4">TAMBAH ADMIN</h6>
            {{-- FORM TAMBAH --}}
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="row g-3">
                    <div class="col-8">
                        <div class="form-floating">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Nama Admin" value="{{ old('name') }}" required>
                            <label for="name">Nama Admin</label>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Alamat Email" value="{{ old('email') }}" required>
                            <label for="email">Alamat Email</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" value="{{ old('password') }}" required>
                            <label for="password">Password</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Tambah Admin</button>
                    </div>
                </div>
            </form>
            {{-- TUTUP FORM --}}
        </div>
    </div>
</div>

@endsection<!-- End #section -->