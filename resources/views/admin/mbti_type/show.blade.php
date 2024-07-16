@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Detail MBTI</span>
                    <a href="{{ route('mbti-types.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                    <h1>MBTI Type: {{ $mbtiType->type }}</h1>
                    <p>Description: {{ $mbtiType->description }}</p>
                    <p>Pekerjaan yang Cocok: {{ $mbtiType->suitable_jobs }}</p>
                    <p>Saran Pendidikan: {{ $mbtiType->suitable_education }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection