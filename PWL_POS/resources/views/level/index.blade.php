@extends('layouts.template')
@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
            {{-- <a class="btn btn-sm btn-primary mt-1" href="{{ url('level/create') }}">Tambah</a> --}}
            <button onclick="modalAction('{{ url('/level/import') }}')" class="btn btn-info">Import Level</button>
            <a href="{{ url('/level/export_pdf') }}" class="btn btn-warning"><i class="fa fa-file-pdf"></i> Export Level</a>
            <button onclick="modalAction('{{url('level/create_ajax')}}')" class="btn btn-sm btn-success mt-1">Tambah Ajax</button>
        </div>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{session('success')}}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
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

<!-- Modal -->
<div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" data-width="75%" aria-hidden="true"></div>
@endsection

@push('js')
<script>
    // Fungsi untuk memuat konten AJAX ke dalam modal
    function modalAction(url = '') {
        $('#myModal').load(url, function() {
            $('#myModal').modal('show');
        });
    }

    $(document).ready(function() {
        // Inisialisasi DataTables
        $('#table_level').DataTable({
            serverSide: true,
            ajax: {
                "url": "{{ url('level/list') }}",
                "dataType": "json",
                "type": "POST",
            },
            columns: [
                { data: "level_id", orderable: true, searchable: true },
                { data: "level_kode", orderable: true, searchable: true },
                { data: "level_nama", orderable: true, searchable: true },
                {
                    data: "aksi",
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                        <button onclick="modalAction('{{ url('level') }}/` + row.level_id + `/show_ajax')" class="btn btn-sm btn-info">Detail</button>

                            <button onclick="modalAction('{{ url('level') }}/` + row.level_id + `/edit_ajax')" class="btn btn-sm btn-warning">Edit</button>
                            <button onclick="modalAction('{{ url('level') }}/` + row.level_id + `/delete_ajax')" class="btn btn-sm btn-danger">Hapus</button>
                        `;
                    }
                }
            ]
        });
    });
</script>
@endpush
