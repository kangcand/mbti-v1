@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Tahun Ajaran</div>

                <div class="card-body">
                    <form action="{{ route('tahun-ajaran.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="tahun" class="form-label">Tahun Ajaran</label>
                            <input type="text" class="form-control @error('tahun') is-invalid @enderror" id="tahun"
                                name="tahun" value="{{ old('tahun') }}">
                            @error('tahun')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('tahun-ajaran.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection