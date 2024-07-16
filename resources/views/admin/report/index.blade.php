@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Filter Laporan MBTI</div>

                <div class="card-body">
                    @if (session('danger'))
                    <div class="alert alert-danger">
                        {{ session('danger') }}
                    </div>
                    @endif

                    <form action="{{ route('report.search') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="tanggalAwal" class="form-label">Tanggal Awal</label>
                            <input type="date" class="form-control" id="tanggalAwal" name="tanggalAwal" required>
                        </div>
                        <div class="mb-3">
                            <label for="tanggalAkhir" class="form-label">Tanggal Akhir</label>
                            <input type="date" class="form-control" id="tanggalAkhir" name="tanggalAkhir" required>
                        </div>
                        <div class="mb-3">
                            <label for="tahun_ajaran_id" class="form-label">Tahun Ajaran</label>
                            <select class="form-select" id="tahun_ajaran_id" name="tahun_ajaran_id" required>
                                <option value="">Pilih Tahun Ajaran</option>
                                @foreach ($tahunAjaran as $item)
                                <option value="{{ $item->id }}">{{ $item->tahun }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="kelas_id" class="form-label">Kelas</label>
                            <select class="form-select" id="kelas_id" name="kelas_id" required>
                                <option value="">Pilih Kelas</option>
                                <!-- Kelas akan dimuat di sini dengan Ajax -->
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tahunAjaranSelect = document.getElementById('tahun_ajaran_id');
        const kelasSelect = document.getElementById('kelas_id');

        tahunAjaranSelect.addEventListener('change', function () {
            const tahunAjaranId = this.value;

            fetch(`/admin/get-kelas/${tahunAjaranId}`)
                .then(response => response.json())
                .then(data => {
                    kelasSelect.innerHTML = '<option value="">Pilih Kelas</option>';
                    data.forEach(kelas => {
                        const option = document.createElement('option');
                        option.value = kelas.id;
                        option.textContent = kelas.name;
                        kelasSelect.appendChild(option);
                    });
                });
        });
    });
</script>
@endpush