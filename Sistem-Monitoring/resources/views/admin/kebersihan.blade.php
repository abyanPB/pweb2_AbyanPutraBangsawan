@extends('layout.main-layout')

@section('content')

<div class="col-12">
    <div class="bg-light rounded h-100 p-5">
        <h6 class="mb-3">Tabel Kebersihan</h6>
        <button type="button" class="btn btn-primary mb-2"><i class="fa fa-plus" style="margin-right:5px"></i> Tambah Data</button>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama_Ruangan</th>
                        <th scope="col">Nama Karyawan</th>
                        <th scope="col">Jam Mulai</th>
                        <th scope="col">Jam Selesai</th>
                        <th scope="col">Status</th>
                        <th scope="col">Catatan</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Ruang Komputer</td>
                        <td>Talitha</td>
                        <td>07:00</td>
                        <td>09:00</td>
                        <td>Selesai</td>
                        <td>Sudah Dibersihkan</td>
                        <td>
                        @if (Auth::user()->level=='Koordinator')
                            <button type="button" class="btn btn-info btn-sm mx-1">
                                <i class="fa fa-pen" style="color:black"></i>
                            </button>

                            <button type="button" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash" style="color:black"></i>
                            </button>
                            
                        @else
                            <button type="button" class="btn btn-info btn-sm mx-1">
                                <i class="fa fa-pen" style="color:black"></i>
                            </button>
                        @endif
                            
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Ruang Jaringan</td>
                        <td>Talitha</td>
                        <td>09:00</td>
                        <td>11:00</td>
                        <td>Selesai</td>
                        <td>Sudah Dibersihkan</td>
                        <td>
                        @if (Auth::user()->level=='Koordinator')
                            <button type="button" class="btn btn-info btn-sm mx-1">
                                <i class="fa fa-pen" style="color:black"></i>
                            </button>

                            <button type="button" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash" style="color:black"></i>
                            </button>
                            
                        @else
                            <button type="button" class="btn btn-info btn-sm mx-1">
                                <i class="fa fa-pen" style="color:black"></i>
                            </button>
                        @endif
                            
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Ruang Kelas</td>
                        <td>Talitha</td>
                        <td>13:00</td>
                        <td>17:00</td>
                        <td>Selesai</td>
                        <td>Sudah Dibersihkan</td>
                        <td>
                        @if (Auth::user()->level=='Koordinator')
                            <button type="button" class="btn btn-info btn-sm mx-1">
                                <i class="fa fa-pen" style="color:black"></i>
                            </button>

                            <button type="button" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash" style="color:black"></i>
                            </button>
                            
                        @else
                            <button type="button" class="btn btn-info btn-sm mx-1">
                                <i class="fa fa-pen" style="color:black"></i>
                            </button>
                        @endif
                            
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection