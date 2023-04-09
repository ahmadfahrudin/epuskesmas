@extends('layouts.admin')

@section('post')

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">DATA PENGUNJUNG BERDASARKAN TANGGAL</h6>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Tanggal Kunjungan</th>
                              <th scope="col">Jumlah Pengunjung</th>
                              <th scope="col">Detail</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($datatgl as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->tgl_kunjung }}</td>
                          <td>{{ $item->kunjungan_tgl }} orang</td>
                          <td><a class="btn btn-sm btn-primary" href="{{ route('admin.tgldetail', $item->tgl_kunjung) }}" target="_blank">Lihat</a></td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
          </div>
      </div>
  </div>
</div>
</div>

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">DATA PENGUNJUNG BERDASARKAN JENIS POLI</h6>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama Poli</th>
                              <th scope="col">Jumlah Pengunjung</th>
                              <th scope="col">Detail</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($datapoli as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->nama }}</td>
                          <td>{{ $item->pengunjung_count }} orang</td>
                          <td><a class="btn btn-sm btn-primary" href="{{ url('/laporan/poli/'.$item->id) }}" target="_blank">Lihat</a></td>
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