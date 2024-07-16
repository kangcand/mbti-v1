<!DOCTYPE html>
<html>

<head>
    <title>Hasil Tes MBTI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 100%;
            padding: 20px;
            box-sizing: border-box;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .header img {
            max-width: 150px;
        }

        .content h4 {
            margin-bottom: 5px;
        }

        .content p {
            margin: 0 0 15px 0;
        }

        .chart-container {
            width: 100%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Hasil Tes MBTI</h2>
            {{-- <img src="{{ public_path('images/mbti_icons/' . $mbtiResult->mbtiType->code . '.png') }}"
                alt="{{ $mbtiResult->mbtiType->code }}"> --}}
        </div>
        <div class="content">
            <h4><strong>Nama:</strong></h4>
            <p>{{ Auth::user()->name }}</p>

            <h4><strong>Email:</strong></h4>
            <p>{{ Auth::user()->email }}</p>

            <h4><strong>Kelas:</strong></h4>
            <p>{{ $mbtiResult->kelas->name }}</p>

            <h4><strong>Hasil MBTI:</strong></h4>
            <p>{{ $mbtiResult->mbtiType->type }}</p>

            <h4><strong>Deskripsi:</strong></h4>
            <p>{{ $mbtiResult->mbtiType->description }}</p>

            <h4><strong>Pekerjaan yang Cocok:</strong></h4>
            <p>{{ $mbtiResult->mbtiType->suitable_jobs }}</p>

            <h4><strong>Saran Pendidikan:</strong></h4>
            <p>{{ $mbtiResult->mbtiType->suitable_education }}</p>
        </div>
        <div class="chart-container">
            <canvas id="radarChart" width="400" height="400"></canvas>
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
</body>

</html>