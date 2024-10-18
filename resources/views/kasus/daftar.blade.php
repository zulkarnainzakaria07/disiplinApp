@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Daftar Temuan Kasus Pelanggaran</h3>
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
                        <div class="table-responsive">
                            <table id="example" class="display expandable-table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Waktu</th>
                                        <th>Pelanggar</th>
                                        <th>Jenis Pelanggaran</th>
                                        <th>Catatan Temuan Awal</th>
                                        <th>Bukti Temuan</th>
                                        <th>Status</th>
                                        <th>Catatan Penanganan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                    <tr>
                                        <td>{{$d->waktu}}</td>
                                        <td>{{$d->siswa_id}}</td>
                                        <td>{{$d->pelanggaran_id}}</td>
                                        <td>{{$d->catatanTemuan}}</td>
                                        <td>
                                            @if ($d->foto != null) 
                                            <img src="/foto_kasus/{{$d->foto}}" width="100px" style="padding-bottom: 5px;">
                                            @else 
                                            <img src="/no_image.png" width="100px" style="padding-bottom: 5px;">
                                            @endif
                                        </td>
                                        <td>
                                            @if ($d->status == 1)
                                            [{{$d->status}}] Laporan Temuan Diterima
                                            @elseif ($d->status == 2)
                                            [{{$d->status}}] Laporan Sedang Di Proses
                                            @else
                                            [{{$d->status}}] Penanganan Kasus Selesai
                                            @endif
                                        </td>
                                        <td>{{$d->catatanPenanganan}}</td>
                                        <td>
                                            <form action="{{ route('siswa.destroy')}}" method="post">
                                                @csrf
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('kasus.update', $d->id) }}" class="btn btn-sm btn-warning">Update</a>
                                                    <input type="hidden" name="id" value="{{$d->id}}">
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin menghapus?')">Delete</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection