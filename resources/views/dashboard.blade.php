@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Dashboard</h3>
                <h6 class="font-weight-normal mb-0">
                    Selamat datang dihalaman Dashboard
                </h6>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 grid-margin transparent">
        <div class="row">
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body">
                        <p class="mb-4">Jumlah Kelas</p>
                        <p class="fs-30 mb-2">40</p>
                        <p>Kelas</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4 stretch-card transparent">
                <div class="card card-dark-blue">
                    <div class="card-body">
                        <p class="mb-4">Jumlah Siswa</p>
                        <p class="fs-30 mb-2">1000</p>
                        <p>Orang</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                <div class="card card-light-blue">
                    <div class="card-body">
                        <p class="mb-4">Jumlah Guru</p>
                        <p class="fs-30 mb-2">100</p>
                        <p>Orang</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 stretch-card transparent">
                <div class="card card-light-danger">
                    <div class="card-body">
                        <p class="mb-4">Jumlah Pelanggaran</p>
                        <p class="fs-30 mb-2">47033</p>
                        <p>Pelanggaran</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
        <div class="card tale-bg">
            <div class="card-people mt-auto">
                <img src="assets/images/dashboard/people.svg" alt="people" />
                <div class="weather-info">
                    <div class="d-flex">
                        <div>
                            <h2 class="mb-0 font-weight-normal">
                                <i class="icon-sun me-2"></i>31<sup>C</sup>
                            </h2>
                        </div>
                        <div class="ms-2">
                            <h4 class="location font-weight-normal">Limboto</h4>
                            <h6 class="font-weight-normal">Gorontalo</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection