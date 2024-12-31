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
                <th>Tanggal Pengembalian</th>
                <th>Denda</th>
            </tr>
        </thead>
        <tbody>
            @php $i = 1 @endphp
            @foreach($data as $data)
            <tr style="text-align: center;">
                <td style="width: 30px;">{{ $i++ }}</td>
                <td>{{ $data->peminjaman?->siswa?->nama }}</td>
                <td>{{ $data->peminjaman?->buku?->judul_buku }}</td>
                <td>{{ $data->peminjaman?->siswa?->kelas }}</td>
                <td>{{ $data->peminjaman?->tgl_peminjaman }}</td>
                <td>{{ $data->peminjaman?->tgl_jatuh_tempo }}</td>
                <td>{{ ($data->tanggal_pengembalian) ? $data->tanggal_pengembalian : '-' }}</td>
                <td>Rp. {{number_format($data->denda, 0, ",", ".")}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>