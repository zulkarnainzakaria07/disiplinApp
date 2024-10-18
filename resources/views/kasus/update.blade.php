@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Temuan Kasus</h3>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{route('kasus.storeUpdate')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                <div class="form-group">
                    <label>Data siswa</label>
                    <input class="form-control" ="text" name="siswa_id" value="{{$data->siswa_id}}" readonly>
                </div>
                <div class="form-group">
                    <label>Data Pelanggaran</label>
                    <input class="form-control" type="text" name="pelanggaran_id" value="{{$data->pelanggaran_id}}" readonly>
                </div>
                <div class="form-group">
                    <label>Waktu Kejadian</label>
                    <input type="text" name="waktu" class="form-control" value="{{$data->waktu}}" readonly>
                </div>
                <div class="form-group">
                    <label>Catatan Temuan</label>
                    <textarea name="catatanTemuan" class="form-control" readonly>{{$data->catatanTemuan}}</textarea>
                </div>
                <div class="form-group">
                    <label>Bukti Temuan</label><br>
                    <img src="/foto_kasus/{{$data->foto}}" width="200px" style="padding-bottom: 5px;">
                </div>
                <div class="form-group">
                    <label>Catatan Penanganan</label>
                    <textarea name="catatanPenanganan" class="form-control" rows="5" required>{{$data->catatanPenanganan}}</textarea>
                </div>
                <div class="form-group">
                    <label>Status Penanganan Kasus</label>
                    <select name="status" class="js-example-basic-single w-100 form-control" required>
                        <option value="1" {{ $data->status == 1 ? 'selected' : '' }}>Laporan Temuan Diterima</option>
                        <option value="2" {{ $data->status == 2 ? 'selected' : '' }}>Laporan Sedang Di Proses</option>
                        <option value="3" {{ $data->status == 3 ? 'selected' : '' }}>Penanganan Kasus Selesai</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-warning mr-2">Update Laporan Kasus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection