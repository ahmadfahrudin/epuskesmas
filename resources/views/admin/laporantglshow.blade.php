@extends('layouts.admin')

@section('post')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">DATA PENGUNJUNG TANGGAL {{ $tgl_kunjung }}</h6>

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
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($datatgl as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->nik }}</td>
                          <td>{{ $item->nama }}</td>
                          <td>{{ $item->alamat }}</td>
                          <td>{{ $item->telepon }}</td>
                          <td>{{ $item->poli->nama }}</td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
</div>

@endsection<!-- End #section -->