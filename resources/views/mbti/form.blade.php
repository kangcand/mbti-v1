@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex align-items-center">
                    <h3 class="mb-0">Tes Kepribadian</h3>
                </div>

                <div class="card-body">

                    <form action="{{ route('mbti.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            @foreach($questions as $question)
                            <div class="mb-4">
                                <p><b>{{$loop->iteration}}. {{ $question->text }}</b></p>
                                @foreach($question->answers as $answer)
                                <div class="form-check">
                                    <input type="radio" class="form-check-input" id="answer_{{ $answer->id }}"
                                        name="answers[{{ $question->id }}]" value="{{ $answer->value }}" required>
                                    <label class="form-check-label" for="answer_{{ $answer->id }}">{{ $answer->text
                                        }}</label>
                                </div>
                                @endforeach
                            </div>
                            <hr>
                            @endforeach
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-muted text-center">
                    <p class="mb-0">Pastikan Anda menjawab semua pertanyaan dengan jujur untuk mendapatkan hasil yang
                        akurat.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection