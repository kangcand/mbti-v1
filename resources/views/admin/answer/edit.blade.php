@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Answer</div>

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

                    <form action="{{ route('answer.update', $answer->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="question_id" class="form-label">Question</label>
                            <select class="form-select" id="question_id" name="question_id" required>
                                <option value="">Select Question</option>
                                @foreach ($questions as $question)
                                <option value="{{ $question->id }}" {{ $question->id == $answer->question_id ?
                                    'selected' : '' }}>{{ $question->text }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Answer Text</label>
                            <input type="text" class="form-control" id="text" name="text" value="{{ $answer->text }}"
                                required>
                        </div>
                        <div class="mb-3">
                            <label for="value" class="form-label">Value</label>
                            <input type="number" class="form-control" id="value" name="value"
                                value="{{ $answer->value }}" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Answer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection