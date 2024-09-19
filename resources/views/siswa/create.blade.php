@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Data Siswa</h3>
                <h6 class="font-weight-normal mb-0">
                    Halaman pengelolaan data siswa
                </h6>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-12">
                        <form class="forms-sample" action="{{ route('siswa.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIS</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nis" class="form-control" id="exampleInputUsername2" placeholder="NIS">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Siswa</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail2" placeholder="Nama Lengkap Siswa">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <input type="text" name="jk" class="form-control" id="exampleInputMobile" placeholder="L/P">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tempatLahir" class="form-control" id="exampleInputPassword2" placeholder="Kota Kelahiran">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9">
                                    <input type="date" name="tanggalLahir" class="form-control" id="exampleInputConfirmPassword2" placeholder="tanggal">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Tahun Masuk</label>
                                <div class="col-sm-9">
                                    <input type="text" name="tahunMasuk" class="form-control" id="exampleInputPassword2" placeholder="Tahun Masuk">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Nomor Telpon</label>
                                <div class="col-sm-9">
                                    <input type="text" name="telp" class="form-control" id="exampleInputPassword2" placeholder="Nomor Telepon">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Foto</label>
                                <div class="col-sm-9">
                                    <input type="file" name="foto" class="form-control" id="exampleInputPassword2" placeholder="Foto" accept=".gif,.jpg,.jpeg,.png">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                            <button type="reset" class="btn btn-light">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection