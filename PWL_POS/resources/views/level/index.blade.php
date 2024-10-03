@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('level/create') }}">Tambah</a>
                <button onclick="modalAction('{{url('level.create_ajax')}}')" class="btn btn-sm btn-success mt-1">Tambah Ajax</button>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <table class="table table-bordered table-striped table-hover table-sm" id="table_level">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode Level</th>
                        <th>Nama Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection

@push('css')
@endpush

@push('js')
    <script>
        $(document).ready(function() {
            var dataLevel = $('#table_level').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    "url": "{{ route('level.list') }}",
                    "dataType": "json",
                    "type": "POST",
                    data: function(d) {
                        d._token = "{{ csrf_token() }}";
                    },
                    error: function(xhr, error, thrown) {
                        console.error('DataTables Ajax Error:', error);
                        alert('An error occurred while loading data. Please check the console for more information.');
                    }
                },
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'level_kode', name: 'level_kode' },
                    { data: 'level_nama', name: 'level_nama' },
                    { data: 'aksi', name: 'aksi', orderable: false, searchable: false }
                ]
            });
        });
    </script>
@endpush
