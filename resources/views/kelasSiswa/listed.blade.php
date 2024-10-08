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
                <form action="{{ route('siswa.removeFromKelas') }}" method="POST">
                    @csrf
                    <div class="table-responsive">
                    <table id="example" class="display expandable-table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Pilih</th>
                                <th>NIS</th>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Telp</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $student)
                            <tr>
                                <td>
                                    <input type="checkbox" name="student_ids[]" value="{{ $student->id }}" class="student-checkbox">
                                </td>
                                <td>{{ $student->nis }}</td>
                                <td>{{ $student->nama }}</td>
                                <td>{{ $student->jk }}</td>
                                <td>{{ $student->tempatLahir }}, {{$student->tanggalLahir}}</td>
                                <td>{{ $student->telp }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $students->links() }}
                    <!-- Hidden input untuk menyimpan siswa yang dipilih dari halaman sebelumnya -->
                    <input type="hidden" name="selected_students" id="selected_students" value="">
                    <input type="hidden" name="id_kelas" id="selected_students" value="{{ $id_kelas }}">
                    <p></p>
                    <button type="submit" class="btn btn-md btn-primary">Keluarkan</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection



