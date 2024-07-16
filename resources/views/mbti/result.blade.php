@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white text-center">
                    <h2>Hasil Tes MBTI</h2>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('images/mbti_icons/' . $mbtiResult->mbtiType->code . '.png') }}"
                            alt="{{ $mbtiResult->mbtiType->code }}" class="img-fluid" style="max-width: 150px;">
                    </div>
                    <div class="mb-3">
                        <h4><strong>Nama:</strong></h4>
                        <p>{{ Auth::user()->name }}</p>
                    </div>
                    <div class="mb-3">
                        <h4><strong>Email:</strong></h4>
                        <p>{{ Auth::user()->email }}</p>
                    </div>
                    <div class="mb-3">
                        <h4><strong>Kelas:</strong></h4>
                        <p>{{ $mbtiResult->kelas->name }}</p>
                    </div>
                    <div class="mb-3">
                        <h4><strong>Hasil MBTI:</strong></h4>
                        <p>{{ $mbtiResult->mbtiType->type }}</p>
                    </div>
                    <div class="mb-3">
                        <h4><strong>Deskripsi:</strong></h4>
                        <p>{{ $mbtiResult->mbtiType->description }}</p>
                    </div>
                    <div class="mb-3">
                        <h4><strong>Pekerjaan yang Cocok:</strong></h4>
                        <p>{{ $mbtiResult->mbtiType->suitable_jobs }}</p>
                    </div>
                    <div class="mb-3">
                        <h4><strong>Saran Pendidikan:</strong></h4>
                        <p>{{ $mbtiResult->mbtiType->suitable_education }}</p>
                    </div>
                </div>
                <div class="card-footer text-center">
                    <a href="{{ route('mbti.form') }}" class="btn btn-primary">Kembali ke Tes</a>
                    <a href="{{ route('mbti.result.pdf', $mbtiResult->id) }}" class="btn btn-danger">Unduh PDF</a>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card shadow-lg">
                <div class="card-header bg-success text-white text-center">
                    <h2>Diagram Kepribadian</h2>
                </div>
                <div class="card-body">
                    <canvas id="radarChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var ctx = document.getElementById('radarChart').getContext('2d');
        var radarChart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: ['E', 'I', 'S', 'N', 'T', 'F', 'J', 'P'],
                datasets: [{
                    label: 'Hasil MBTI',
                    data: [
                        {{ $counts['E'] }},
                        {{ $counts['I'] }},
                        {{ $counts['S'] }},
                        {{ $counts['N'] }},
                        {{ $counts['T'] }},
                        {{ $counts['F'] }},
                        {{ $counts['J'] }},
                        {{ $counts['P'] }}
                    ],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scale: {
                    ticks: {
                        beginAtZero: true,
                        max: 10
                    }
                }
            }
        });
    });
</script>
@endsection