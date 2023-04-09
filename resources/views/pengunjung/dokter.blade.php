@extends('layouts.main')

@section('post')

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Tenaga Medis</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white">Home</a></li>
                <li class="breadcrumb-item text-primary active" aria-current="page">Dokter</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <p class="d-inline-block border rounded-pill py-1 px-4">Dokter</p>
            <h1>Tenaga Medis Berpengalaman</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('home/img/team-1.jpg') }}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>Fitriani Kusumawati</h5>
                        <p class="text-primary">Departemen Kesehatan Anak</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('home/img/team-2.jpg') }}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>Wijaya Pranata</h5>
                        <p class="text-primary">Departemen Kesehatan Jiwa</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('home/img/team-3.jpg') }}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>Dina Ayuningtyas</h5>
                        <p class="text-primary">Departemen Urologi</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('home/img/team-4.jpg') }}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>Ahmad Setiawan</h5>
                        <p class="text-primary">Departemen Radiologi</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('home/img/team-3.jpg') }}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>Nurul Hidayati</h5>
                        <p class="text-primary">Departemen Kulit dan Kelamin</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('home/img/team-1.jpg') }}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>Rika Wardani</h5>
                        <p class="text-primary">Departemen Bedah Plastik</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('home/img/team-4.jpg') }}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>Bagus Kurniawan</h5>
                        <p class="text-primary">Departemen Jantung</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item position-relative rounded overflow-hidden">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{ asset('home/img/team-2.jpg') }}" alt="">
                    </div>
                    <div class="team-text bg-light text-center p-4">
                        <h5>Surya Pratama</h5>
                        <p class="text-primary">Departemen Penyakit Dalam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

@endsection<!-- End #section -->