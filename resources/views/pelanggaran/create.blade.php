@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Data Pelanggaran</h3>
                <h6 class="font-weight-normal mb-0">
                    Halaman pengelolaan data pelanggaran
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
                        <form class="forms-sample" action="{{ route('pelanggaran.store') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Nama Pelanggaran</label>
                                <div class="col-sm-9">
                                    <input type="text" name="nama" class="form-control" id="exampleInputEmail2" placeholder="Nama Pelanggaran">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputMobile" class="col-sm-3 col-form-label">Poin Pelanggaran</label>
                                <div class="col-sm-9">
                                    <input type="number" name="poin" class="form-control" id="exampleInputMobile" placeholder="Poin Pelanggaran">
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