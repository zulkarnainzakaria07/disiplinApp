@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
        <div class="row">
            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Data Pelanggaran</h3>
                <h6 class="font-weight-normal mb-0">
                    Halaman pengelolaan data Pelanggaran
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
                        <a href="{{ route('pelanggaran.create')}}" class="btn btn-md btn-success" style="color:white">Tambah Data</a>
                        <p></p>
                        <div class="table-responsive">
                            <table id="example" class="display expandable-table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nama</th>
                                        <th>Poin</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $d)
                                    <tr>
                                        <td>{{$d->id}}</td>
                                        <td>{{$d->nama}}</td>
                                        <td>{{$d->poin}}</td>
                                        <td>
                                            <form action="{{ route('pelanggaran.destroy')}}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{$d->id}}">
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('pelanggaran.edit', $d->id) }}" class="btn btn-sm btn-warning">Update</a>
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