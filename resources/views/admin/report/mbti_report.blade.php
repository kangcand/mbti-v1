@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Laporan MBTI</div>

                <div class="card-body">
                    @if ($total > 0)
                    <div class="alert alert-success">
                        Total hasil MBTI yang ditemukan: {{ $total }}
                    </div>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Tahun Ajaran</th>
                                <th>Tanggal Tes</th>
                                <th>Hasil MBTI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mbti as $result)
                            <tr>
                                <td>{{ $result->id }}</td>
                                <td>{{ $result->nama }}</td>
                                <td>{{ $result->kelas->name }}</td>
                                <td>{{ $result->tahunAjaran->tahun }}</td>
                                <td>{{ $result->created_at }}</td>
                                <td>{{ $result->result }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @else
                    <div class="alert alert-warning">
                        Tidak ada hasil MBTI yang ditemukan untuk kriteria yang dipilih.
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection