@extends('layouts.master')
@push('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('Template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endpush
@section('content')

    <body class="hold-transition sidebar-mini" >
        <div class="wrapper" >

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="background-color: #BDD8F3">
                <!-- cntent Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Data Presensi siswa</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{route('auth.dashboard')}}">Home</a></li>
                                    <li class="breadcrumb-item active">DataTables</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title"></h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table id="example2" class="table table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIS</th>
                                                    <th>Nama</th>
                                                    <th>Kelas</th>
                                                    <th>Tanggal Masuk</th>
                                                    <th>Jenis kelamin</th>
                                                    <th>Jurusan</th>
                                                    <th>Keterangan</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($presensis as $key => $values)
                                                    <tr>
                                                        <td>{{ $key + 1 }}</td>
                                                        <td>{{ $values->nis }}</td>
                                                        <td>{{ $values->user->name }}</td>
                                                        <td>{{ $values->kelas }}</td>
                                                        <td>{{ $values->tanggal_masuk }}</td>
                                                        <td>{{ $values->jenis_kelamin }}</td>
                                                        <td>{{ $values->jurusan }}</td>
                                                        <td>{{ $values->keterangan }}</td>
                                                        <td>
                                                            <form action="{{ route('presensi.destroy', $values->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                               @can('isAdmin')
                                                                <a href="{{ route('presensi.show', $values->id) }}"
                                                                    class="btn-sm btn-info">Show</a>
                                                                <a href="{{ route('presensi.edit', $values->id) }}"
                                                                    class="btn-sm btn-warning">Edit</a>
                                                                <button class="btn-sm btn-danger">Delete</button>
                                                                @elsecan('isGuru')
                                                                <a href="{{ route('presensi.show', $values->id) }}"
                                                                    class="btn-sm btn-info">Show</a>
                                                                <a href="{{ route('presensi.edit', $values->id) }}"
                                                                    class="btn-sm btn-warning">Edit</a>
                                                                <button class="btn-sm btn-danger">Delete</button>
                                                                @else
                                                                <a href="{{ route('presensi.show', $values->id) }}"
                                                                     class="btn-sm btn-info">Show</a>
                                                                @endcan
                                                            </form>
                                                            
                                                            
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td>Data masih kosong</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </section>
                <!-- /.content -->
            </div>
    </body>
@endsection
@push('script')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('Template/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('Template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('Template/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('Template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('Template/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('Template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('Template/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('Template/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('Template/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('Template/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('Template/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('Template/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush
