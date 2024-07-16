@extends('layouts.app')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Daftar Pengguna</span>
                    <a href="{{ route('users.create') }}" class="btn btn-primary">Tambah Pengguna</a>
                </div>

                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="tahun_ajaran_id" class="form-label">Filter Tahun Ajaran</label>
                            <select class="form-select" id="tahun_ajaran_id" name="tahun_ajaran_id">
                                <option value="">Semua Tahun Ajaran</option>
                                @foreach ($tahunAjaran as $item)
                                <option value="{{ $item->id }}">{{ $item->tahun }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="kelas_id" class="form-label">Filter Kelas</label>
                            <select class="form-select" id="kelas_id" name="kelas_id" disabled>
                                <option value="">Semua Kelas</option>
                                <!-- Options akan diisi melalui AJAX -->
                            </select>
                        </div>
                        <div class="col-md-2 align-self-end">
                            <button type="button" class="btn btn-primary" id="filterButton">Filter</button>
                        </div>
                    </div>

                    <div id="userTableContainer">
                        <!-- Tabel akan diisi melalui AJAX -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    $(document).ready(function() {
        $('#tahun_ajaran_id').change(function() {
            var tahunAjaranId = $(this).val();
            if (tahunAjaranId) {
                $.ajax({
                    url: "{{ route('kelas.getByTahunAjaran') }}",
                    type: "GET",
                    data: { tahun_ajaran_id: tahunAjaranId },
                    success: function(data) {
                        $('#kelas_id').empty().append('<option value="">Semua Kelas</option>');
                        $.each(data, function(key, value) {
                            $('#kelas_id').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                        $('#kelas_id').removeAttr('disabled');
                    }
                });
            } else {
                $('#kelas_id').empty().append('<option value="">Semua Kelas</option>').attr('disabled', 'disabled');
            }
        });

        $('#filterButton').click(function() {
            var tahunAjaranId = $('#tahun_ajaran_id').val();
            var kelasId = $('#kelas_id').val();
            $.ajax({
                url: "{{ route('users.filter') }}",
                type: "GET",
                data: {
                    tahun_ajaran_id: tahunAjaranId,
                    kelas_id: kelasId
                },
                success: function(data) {
                    $('#userTableContainer').html(data);
                    new DataTable('#example');
                }
            });
        });
    });
</script>
@endpush