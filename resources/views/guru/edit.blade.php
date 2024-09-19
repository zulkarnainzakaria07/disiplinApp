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
                    <form class="forms-sample" action="{{ route('guru.update') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIK</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nik" value="{{$data->nik}}" class="form-control" id="exampleInputUsername2" placeholder="NIK">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">NIP</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nip" value="{{$data->nip}}" class="form-control" id="exampleInputUsername2" placeholder="NIP">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Guru</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama" value="{{$data->nama}}" class="form-control" id="exampleInputEmail2" placeholder="Nama Lengkap Guru">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-sm-9">
                                    <input type="text" name="jk" value="{{$data->jk}}" class="form-control" id="exampleInputMobile" placeholder="L/P">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" name="email" value="{{$data->email}}" class="form-control" id="exampleInputPassword2" placeholder="email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Nomor Telpon</label>
                                <div class="col-sm-9">
                                    <input type="text" name="telp" value="{{$data->telp}}" class="form-control" id="exampleInputPassword2" placeholder="Nomor Telepon">
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