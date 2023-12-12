@extends('layouts.master')
@section('title', 'presensi')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Siswa</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('auth.dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Siswa</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Data Siswa</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('presensi.update', $presensi->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nis">NIS</label>
                                    <input type="number" class="form-control @error('nis') is-invalid @enderror" name="nis" id="nis" placeholder="Masukan Kode" value="{{ $presensi->nis }}">
                                </div>
                                @error('nis')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukan nama" value="{{ $presensi->user->name }}">
                                </div>
                                    <input type="hidden" class="form-control " name="nama" id="nama" placeholder="Masukan nama" value="{{ $presensi->user->id }}">  
                                @error('nama')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                 <div class="form-group">
                                    <label>Kelas</label>
                                    <input type="text" class="form-control @error('kelas') is-invalid @enderror" name="kelas" id="kelas" placeholder="Masukkan kelas" value="{{ $presensi->kelas}}">
                                </div>
                                <div class="form-group">
                                    <label for="Tanggal masuk">Tanggal masuk</label>
                                    <input type="date" class="form-control" name="tanggal_masuk" id="kode" placeholder="Masukan Tanggal masuk" value="{{ $presensi->tanggal_masuk }}" >
                                     @error('Tanggal_masuk')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <select class="custom-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin" value="{{ $presensi->jenis_kelamin }}">
                                        <option selected>{{ $presensi->jenis_kelamin}}</option>
                                        <option value="LAKI-LAKI">LAKI-LAKI</option>
                                        <option value="PEREMPUAN">PEREMPUAN</option>
                                    </select>
                                </div>
                                @error('jenis_kelamin')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select class="custom-select @error('jurusan') is-invalid @enderror" name="jurusan" value="{{ $presensi->jurusan}}">
                                        <option selected disabled>Pilih Jurusan</option>
                                        <option selected>{{ $presensi->jurusan }}</option>
                                        <option>RPL</option>
                                        <option>DPIB</option>
                                        <option>TP</option>
                                        <option>TFLM</option>
                                        <option>TEI</option>
                                        <option>TITL</option>
                                        <option>TKJ</option>
                                    </select>
                                </div>
                                 @error('jurusan')
                                 <div class="alert alert-danger mt-1">{{ $message }}</div>
                                 @enderror
                    
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <select class="custom-select @error('keterangan') is-invalid @enderror" name="keterangan" value="{{ $presensi->presensi }}">
                                        <option selected disabled>Pilih Keterangan</option>
                                        <option selected>{{ $presensi->keterangan }}</option>
                                        <option value="HADIR">HADIR</option>
                                        <option value="IJIN">IJIN</option>
                                        <option value="SAKIT">SAKIT</option>
                                        <option value="ALFA">ALFA</option>
                                    </select>
                                </div>
                                @error('keterangan')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('presensi.index') }}" class="btn btn-primary">Back</a>
                                <button type="submit" class="btn btn-warning">Update</button>
                            </div>
                            <!-- /.content -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection