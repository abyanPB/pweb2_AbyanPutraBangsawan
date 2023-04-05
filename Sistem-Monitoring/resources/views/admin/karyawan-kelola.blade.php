@extends('layout.main-layout')

@section('content')

<div class="col-12">
    <div class="bg-light rounded h-100 p-5">
        <h6 class="mb-3">Tabel Karyawan</h6>
        
        @if(Auth::user()->level=='Koordinator')
            <button onclick="window.location.href='/karyawan-tambah'" type="button" class="btn btn-primary mb-2"><i class="fa fa-plus" style="margin-right:5px"></i> Tambah Data</button>        
        @else

        @endif
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Email</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($karyawanlist as $data)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $data->nama_petugas }}</td>
                        <td>{{ $data->jenis_kelamin }}</td>
                        <td>{{ $data->jabatan }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>{{ $data->no_hp }}</td>
                        <td>{{ $data->email }}</td>
                        <td>
                            @if(Auth::user()->level=='Koordinator')
                                <button onclick="window.location.href='karyawan-edit/{{ $data->id_karyawan }}'" type="button" class="btn btn-info btn-sm mx-1">
                                    <i class="fa fa-pen" style="color:black"></i>
                                </button>

                                <button onclick="window.location.href='karyawan/{{ $data->id_karyawan }}'" type="button" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash" style="color:black" onclick="confirm(Apakah Anda Ingin Menghapus Data)"></i>
                                </button>
                                
                            @elseif(Auth::user()->level=='Karyawan')
                                <button onclick="window.location.href='karyawan-edit/{{ $data->id_karyawan }}'" type="button" class="btn btn-info btn-sm mx-1">
                                    <i class="fa fa-pen" style="color:black"></i>
                                </button>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection