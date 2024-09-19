@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Data Guru</h3>
                <h6 class="font-weight-normal mb-0">
                    Halaman pengelolaan data guru
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
                        <a href="{{ route('guru.create')}}" class="btn btn-md btn-success">Tambah Data</a>
                        <div class="table-responsive">
                            <table id="example" class="display expandable-table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>NIK</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>JK</th>
                                        <th>Email</th>
                                        <th>Telp</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                    <tr>
                                        <td>{{$d->nik}}</td>
                                        <td>{{$d->nip}}</td>
                                        <td>{{$d->nama}}</td>
                                        <td>{{$d->jk}}</td>
                                        <td>{{$d->email}}</td>
                                        <td>{{$d->telp}}</td>
                                        <td><img src="/foto_guru/{{$d->foto}}" alt="" width="120px"></td>
                                        <td>
                                            <a href="{{ route('guru.edit', $d->id) }}" class="btn btn-sm btn-warning">Update</a>
                                            <form action="{{ route('guru.destroy')}}" method="post">
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