@extends('layout.main-layout')
@section('content')

<div class="col-sm-6 col-xl-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Tambah Data Karyawan</h6>
        <form action="/karyawan/{{ $karyawanlist->id_karyawan }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama Karyawan</label>
                <input type="text" class="form-control" name="nama_petugas" id="nama" value="{{ $karyawanlist-> nama_petugas }}" required>
            </div>

            <div class="form-floating mb-3 mt-3">
                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                    <option value="{{ $karyawanlist->jenis_kelamin }}">{{ $karyawanlist->jenis_kelamin}}</option>
                    @if ($karyawanlist->jenis_kelamin=='Laki-Laki')
                        <option value="Perempuan">Perempuan</option>
                    @else
                        <option value="Laki-Laki">Laki-Laki</option>
                    @endif
                </select>
                <label for="floatingSelect">Jenis Kelamin</label>
            </div>

            <div class="form-floating mb-3 mt-3">
                <select class="form-select" name="jabatan" id="jabatan"
                    aria-label="Floating label select example" required>
                    <option value="{{ $karyawanlist->jabatan }}">{{ $karyawanlist->jabatan}}</option>
                    @if ($karyawanlist->jabatan=='Supervisor')
                        <option value="Koordinator">Koordinator</option>
                        <option value="Karyawan">Karyawan</option>
                    @elseif($karyawanlist->jabatan=='Koordinator')
                        <option value="Supervisor">Supervisor</option>
                        <option value="Karyawan">Karyawan</option>
                    @else
                        <option value="Supervisor">Supervisor</option>
                        <option value="Koordinator">Koordinator</option>
                    @endif    
                </select>
                <label for="floatingSelect">Jabatan</label>
            </div>

            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $karyawanlist-> alamat }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" name="no_hp" id="no_hp" value="{{ $karyawanlist-> no_hp }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="{{ $karyawanlist-> email }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>

@endsection