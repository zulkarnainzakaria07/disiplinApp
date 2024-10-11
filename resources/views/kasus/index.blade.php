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
                <form action="" method="post">
                <div class="form-group">
                    <label>Cari Data siswa</label>
                    <select class="form-control js-example-basic-single w-100" required>
                    <option value=""></option>
                    @foreach($siswa as $s)
                        <option value="{{ $s->id }}">{{ $s->nama }} | 
                            @foreach ($s->kelas as $k)
                                {{$k['nama']}}
                            @endforeach
                        </option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Jenis Pelanggaran</label>
                    <select class="js-example-basic-single w-100 form-control" required>
                    <option value=""></option>
                    @foreach($pelanggaran as $p)
                        <option value="{{ $s->id }}">{{ $p->nama }} | {{ $p->poin }} Poin 
                        </option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Catatan Pelanggaran</label>
                    <input type="text" name="catatan" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Bukti Pelanggaran</label>
                    <input type="file" name="bukti" class="form-control" accept=".gif,.jpg,.jpeg,.png" required>
                </div>
                <button type="submit" class="btn btn-danger mr-2">Kirim Laporan Kasus</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection