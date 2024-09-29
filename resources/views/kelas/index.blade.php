@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Data Siswa</h3>
                <h6 class="font-weight-normal mb-0">
                    Halaman pengelolaan data Kelas
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
                        <a href="{{ route('siswa.create')}}" class="btn btn-md btn-success" style="padding-bottom: 5px;">Tambah Data</a>
                        <div class="table-responsive">
                            <table id="example" class="display expandable-table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Kelas</th>
                                        <th>Jumlah Siswa Terdaftar</th>
                                        <th>Detail</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                    <tr>
                                        <td>{{$d->id}}</td>
                                        <td>{{$d->nama}}</td>
                                        <td>{{count($d->siswa)}}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('siswa.listToAdd',$d->id) }}" class="btn btn-sm btn-success">Pemetaan Siswa di Kelas</a>
                                                <a href="{{ route('siswa.listed',$d->id) }}" class="btn btn-sm btn-primary">Lihat Daftar Siswa</a>
                                            </div>
                                        </td>
                                        <td>      
                                        <form action="{{ route('siswa.destroy')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$d->id}}">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <a href="{{ route('siswa.edit', $d->id) }}" class="btn btn-sm btn-warning">Update Nama Kelas</a>
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Anda yakin menghapus?')">Hapus Kelas</button>
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