<!DOCTYPE html>
<html>

<head>
    <title>PeduliDiri</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Data Catatan Perjalanan - PeduliDiri</h5>
        <br>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Nis</th>
                <th>Kelas</th>
                <th>Tanggal_Masuk</th>
                <th>Jenis_Kelamin</th>
                <th>Jurusan</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach ($presensi as $p)
                <tr>
                    <td>{{ $i++ }}</td>
                    <td>{{ $p->user->name }}</td>
                    <td>{{ $p->nis }}</td>
                    <td>{{ $p->kelas }}</td>
                    <td>{{ $p->tanggal_masuk }}</td>
                    <td>{{ $p->jenis_kelamin }}</td>
                    <td>{{ $p->jurusan }}</td>
                    <td>{{ $p->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>