<!DOCTYPE html>
<html>

<head>
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }

        p {
            font-size: 10px;
            margin-top: 2rem;
        }
    </style>
    <center>
        <h4>{{$title}}</h4>
    </center>
    <table class='table table-bordered mt-5'>
        <thead>
            <tr style="text-align: center;">
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Buku</th>
                <th>Kelas</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Jatuh Tempo</th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach($data as $data)
            <tr style="text-align: center;">
                <td style="width: 30px;">{{ $i++ }}</td>
                <td>{{ $data->siswa?->nama }}</td>
                <td>{{ $data->buku?->judul_buku }}</td>
                <td>{{ $data->siswa?->kelas }}</td>
                <td>{{ $data->tgl_peminjaman }}</td>
                <td>{{ $data->tgl_jatuh_tempo }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>