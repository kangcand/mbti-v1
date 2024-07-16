@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex align-items-center">
                    <h3 class="mb-0">{{ __('Dashboard') }}</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="jumbotron bg-light p-5 rounded">
                        <h1 class="display-4">Selamat Datang!</h1>
                        <p class="lead">Selamat datang di sistem kami! Mulailah dengan mengambil tes MBTI untuk
                            mengetahui tipe kepribadian Anda.</p>
                        <hr class="my-4">
                        <p>Setelah menyelesaikan tes, Anda akan mendapatkan hasil yang dapat membantu Anda memahami diri
                            Anda lebih baik dan merencanakan karir yang sesuai.</p>
                        <a class="btn btn-primary btn-lg" href="{{ url('mbti') }}" role="button">Mulai Tes MBTI</a>
                    </div>

                    <div class="mt-4">
                        <h4>Langkah-langkah untuk memulai:</h4>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">1. Klik tombol "Mulai Tes MBTI" di atas.</li>
                            <li class="list-group-item">2. Jawab semua pertanyaan dengan jujur.</li>
                            <li class="list-group-item">3. Lihat hasil tes dan deskripsi tipe kepribadian Anda.</li>
                            <li class="list-group-item">4. Gunakan informasi ini untuk merencanakan langkah selanjutnya
                                dalam pendidikan dan karir Anda.</li>
                        </ul>
                    </div>
                </div>

                <div class="card-footer text-muted">
                    <p class="mb-0">Hubungi kami jika Anda memiliki pertanyaan atau membutuhkan bantuan lebih lanjut.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection