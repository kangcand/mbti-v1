<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan MBTI dari {{ date('d-M-Y', strtotime($start)) }} sampai {{ date('d-M-Y', strtotime($end)) }}</title>
    <style>
        /* Tambahkan CSS untuk PDF di sini */
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table,
        th,
        td {
            border: 1px solid black;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h2>Laporan MBTI dari {{ date('d-M-Y', strtotime($start)) }} sampai {{ date('d-M-Y', strtotime($end)) }}</h2>

    <p>Total hasil MBTI ditemukan: {{ $total }}</p>

    @if (isset($kelas_id) && $kelas_id)
    <p>Kelas: {{ $mbti->first()->kelas->name }}</p>
    @endif

    @if (isset($tahun_ajaran_id) && $tahun_ajaran_id)
    <p>Tahun Ajaran: {{ $mbti->first()->tahunAjaran->tahun }}</p>
    @endif

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>Kelas</th>
                <th>Tahun Ajaran</th>
                <th>Hasil</th>
                <th>Tanggal Tes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mbti as $index => $data)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->kelas->name }}</td>
                <td>{{ $data->tahunAjaran->tahun }}</td>
                <td>{{ $data->result }}</td>
                <td>{{ date('d-M-Y', strtotime($data->created_at)) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>