@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Pertanyaan</div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('question.update', $question->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="text" class="form-label">Question</label>
                            <textarea class="form-control" id="text" name="text"
                                rows="3">{{ old('text', $question->text) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="question_type_id" class="form-label">Question Type</label>
                            <select class="form-control" id="question_type_id" name="question_type_id">
                                @foreach($questionTypes as $type)
                                <option value="{{ $type->id }}" {{ old('question_type_id', $question->question_type_id)
                                    == $type->id ? 'selected' : '' }}>
                                    {{ $type->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection