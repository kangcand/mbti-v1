@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Tambah Kelas</span>
                </div>

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

                    <form id="kelasForm" action="{{ route('kelas.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="tahun_ajaran_id" class="form-label">Tahun Ajaran</label>
                            <select class="form-select" id="tahun_ajaran_id" name="tahun_ajaran_id" required>
                                <option value="">Pilih Tahun Ajaran</option>
                                @foreach ($tahunAjaran as $item)
                                <option value="{{ $item->id }}">{{ $item->tahun }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div id="kelasInputs">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama Kelas</label>
                                <input type="text" class="form-control" name="name[]" required>
                            </div>
                        </div>
                        <br>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <button type="button" class="btn btn-success mb-3" id="addKelas">Tambah Kelas</button>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
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
        document.getElementById('addKelas').addEventListener('click', function () {
            const kelasInputs = document.getElementById('kelasInputs');
            const newInput = document.createElement('div');
            newInput.className = 'mb-3';
            newInput.innerHTML = `
                <label for="name" class="form-label">Nama Kelas</label>
                <input type="text" class="form-control" name="name[]" required>
            `;
            kelasInputs.appendChild(newInput);
        });
    });
</script>
@endpush