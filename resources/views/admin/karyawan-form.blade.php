@extends('layout.main-layout')
@section('content')

<div class="col-sm-6 col-xl-12">
    <div class="bg-light rounded h-100 p-4">
        <h6 class="mb-4">Tambah Data Karyawan</h6>
        <form action="karyawan" method="post">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama Karyawan</label>
                <input type="text" class="form-control" name="nama_petugas" id="nama" required>
            </div>
            <div class="form-floating mb-3 mt-3">
                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin" required>
                    <option value="" >Select One</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
                <label for="floatingSelect">Jenis Kelamin</label>
            </div>
            <div class="form-floating mb-3 mt-3">
                <select class="form-select" name="jabatan" id="jabatan"
                    aria-label="Floating label select example" required>
                    <option value="" >Select One</option>
                    <option value="Supervisor">Supervisor</option>
                    <option value="Koordinator">Koordinator</option>
                    <option value="Karyawan">Karyawan</option>
                </select>
                <label for="floatingSelect">Jabatan</label>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" name="no_hp" id="no_hp" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>

@endsection