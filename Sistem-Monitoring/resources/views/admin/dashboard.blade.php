@extends('layout.main-layout')

@section('content')

            @if (Auth::user()->level=='Supervisor' || 'Koordinator' )
            
                <br>

                <div class="col-12">
                    <div class="bg-light rounded h-100 p-5">
                        <h6 class="mb-3">Tabel Kebersihan</h6>
                        
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
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Ruang Jaringan</td>
                                        <td>Talitha</td>
                                        <td>09:00</td>
                                        <td>11:00</td>
                                        <td>Selesai</td>
                                        <td>Sudah Dibersihkan</td>
                                        
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Ruang Kelas</td>
                                        <td>Talitha</td>
                                        <td>13:00</td>
                                        <td>17:00</td>
                                        <td>Selesai</td>
                                        <td>Sudah Dibersihkan</td>
                                        
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Widgets Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="row g-4">
                        <div class="col-sm-12 col-md-6 col-xl-4">
                            <div class="h-100 bg-light rounded p-4">
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h6 class="mb-0">Calender</h6>
                                    <a href="">Show All</a>
                                </div>
                                <div id="calender"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Widgets End -->
            


            @else
                
            
            


            


            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-6 col-xl-4">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Widgets End -->
            @endif

@endsection()