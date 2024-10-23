@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
            {{-- <a class="btn btn-sm btn-primary mt-1" href="{{ url('kategori/create') }}">Tambah</a> --}}
            <button onclick="modalAction('{{ url('/kategori/import') }}')" class="btn btn-info">Import Kategori</button>
            <a href="{{ url('/kategori/export_pdf') }}" class="btn btn-warning"><i class="fa fa-file-pdf"></i> Export kategori</a>
            <button onclick="modalAction('{{url('kategori/create_ajax')}}')" class="btn btn-sm btn-success mt-1">Tambah Ajax</button>
        </div>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <!-- Filter -->
        <div class="row">
            <div class="col-md-12">
                <div class="form-group row">
                    <label class="col-1 control-label col-form-label">Filter:</label>
                    <div class="col-3">
                        <input class="form-control" id="kategori_filter" name="kategori_filter" placeholder="Cari Kategori">
                        <small class="form-text text-muted">Filter berdasarkan Kategori</small>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Kategori -->
        <table class="table table-bordered table-striped table-hover table-sm" id="table_kategori">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Kategori</th>
                    <th>Nama Kategori</th>
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
    // Function to load modal content via AJAX
    function modalAction(url = '') {
        $('#myModal').load(url,function() {
            $('#myModal').modal('show');
        });
    }

    var dataKategori;

    $(document).ready(function() {
        // DataTable initialization
        dataKategori = $('#table_kategori').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ url('kategori/list') }}", // Ensure this route exists in your routes file
                dataType: "json",
                type: "POST",
                data: function(d) {
                    d._token = "{{ csrf_token() }}";
                    d.kategori_filter = $('#kategori_filter').val(); // Add search filter to request
                },
                error: function(xhr, error, thrown) {
                    console.error('DataTables Ajax Error:', error);
                    alert('An error occurred while loading data. Please check the console for more information.');
                }
            },
            columns: [
                { data: 'kategori_id', orderable: true, searchable: true },
                { data: 'kategori_kode', orderable: true, searchable: true },
                { data: 'kategori_nama', orderable: true, searchable: true },
                {
                    data: 'aksi',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                            <button class="btn btn-sm btn-info" onclick="modalAction('/kategori/${row.kategori_id}')">Detail</button>
                            <button class="btn btn-sm btn-warning" onclick="modalAction('kategori/${row.kategori_id}/edit_ajax')">Edit</button>
                            <button class="btn btn-sm btn-danger" onclick="modalAction('kategori/${row.kategori_id}/delete_ajax')">Hapus</button>
                        `;
                    }
                }
            ]

        });

        // Trigger table reload when filter changes
        $('#kategori_filter').on('keyup', function() {
            dataKategori.ajax.reload();
        });
    });
</script>
@endpush
