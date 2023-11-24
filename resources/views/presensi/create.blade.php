@extends('layouts.master')
@section('title', 'presensi')
@section('content')
    <div class="content-wrapper" style="background-color: #2F5B68">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 style="color: white">Siswa</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('presensi.store')}}">Home</a></li>
                            <li class="breadcrumb-item active">Siswa</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header" style="background-color: #BDD8F3">
                    <h3 class="card-title" style="color: black"> Presensi</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="{{ route('presensi.store') }}" method="POST">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="NIS">NIS</label>
                            <input type="number" class="form-control" name="nis" id="NIS" placeholder="Masukkan NIS" >
                        </div>
                        <div class="form-group">
                            <label for="Nama">Nama</label>
                            <input type="hidden" class="form-control" name="user_id" id="Nama" placeholder="Masukkan Nama" value="{{ auth()->user()->id }}">
                            <input type="text" class="form-control" name="" id="Nama" placeholder="Masukkan Nama" value="{{ auth()->user()->name }}">
                        </div>
                        <div class="form-group">
                            <label for="kelas">Kelas</label>
                            <input type="text" class="form-control" name="kelas" id="kelas" placeholder="Masukkan kelas">
                        </div>
                        <div class="form-group">
                            <label for="Tanggal masuk">Tanggal Masuk</label>
                            <input type="date" class="form-control" name="tanggal_masuk" id="tanggal_masuk" placeholder="Masukan Tanggal masuk">
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select class="custom-select" name="jenis_kelamin">
                                <option selected disabled>Pilih Jenis Kelamin</option>
                                <option value="LAKI-LAKI">LAKI-LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jurusan</label>
                            <select class="custom-select" name="jurusan">
                                <option selected disabled>Pilih Jurusan</option>
                                <option value="RPL">RPL</option>
                                <option value="DPIB">DPIB</option>
                                <option value="TP">TP</option>
                                <option value="TFLM">TFLM</option>
                                <option value="TEI">TEI</option>
                                <option value="TITL">TITL</option>
                                <option value="TKJ">TKJ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Keterangan</label>
                            <select class="custom-select" name="keterangan">
                                <option selected disabled>Pilih Ket</option>
                                <option value="HADIR">HADIR</option>
                                <option value="SAKIT">SAKIT</option>
                                <option value="IJIN">IJIN</option>
                                <option value="ALFA">ALFA</option>
                            </select>
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        
@endsection