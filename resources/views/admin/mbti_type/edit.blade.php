@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Edit MBTI</span>
                    <a href="{{ route('mbti-types.index') }}" class="btn btn-primary">Kembali</a>
                </div>
                <div class="card-body">
                    <form action="{{ route('mbti-types.update', $mbtiType->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-2 form-group">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type" value="{{ $mbtiType->type }}"
                                required>
                        </div>
                        <div class="mb-2 form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3"
                                required>{{ $mbtiType->description }}</textarea>
                        </div>
                        <div class="mb-2 form-group">
                            <label for="suitable_jobs">Pekerjaan yang Cocok</label>
                            <textarea class="form-control" id="suitable_jobs" name="suitable_jobs" rows="3"
                                required>{{ $mbtiType->suitable_jobs }}</textarea>
                        </div>
                        <div class="mb-2 form-group">
                            <label for="suitable_education">Saran Pendidikan</label>
                            <textarea class="form-control" id="suitable_education" name="suitable_education" rows="3"
                                required>{{ $mbtiType->suitable_education }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection