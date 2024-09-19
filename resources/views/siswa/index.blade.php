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
                        <a href="{{ route('siswa.create')}}" class="btn btn-md btn-success">Tambah Data</a>
                        <div class="table-responsive">
                            <table id="example" class="display expandable-table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>NIS</th>
                                        <th>Nama</th>
                                        <th>JK</th>
                                        <th>TTL</th>
                                        <th>Tahun Masuk</th>
                                        <th>Telp</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                    <tr>
                                        <td>{{$d->nis}}</td>
                                        <td>{{$d->nama}}</td>
                                        <td>{{$d->jk}}</td>
                                        <td>{{$d->tempatLahir}}, {{$d->tanggalLahir}}</td>
                                        <td>{{$d->tahunMasuk}}</td>
                                        <td>{{$d->telp}}</td>
                                        <td>
                                            @if ($d->foto != null) 
                                            <img src="/foto_siswa/{{$d->foto}}" width="100px" style="padding-bottom: 5px;">
                                            @else 
                                            <img src="/no_image.png" width="100px" style="padding-bottom: 5px;">
                                            @endif

                                        </td>
                                        <td>
                                            <a href="{{ route('siswa.edit', $d->id) }}" class="btn btn-sm btn-warning">Update</a>
                                            <form action="{{ route('siswa.destroy')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$d->id}}">
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin menghapus?')">Delete</button>
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