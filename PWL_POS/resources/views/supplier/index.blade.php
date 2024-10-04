@extends('layouts.template')

@section('content')
    <div class="card card-outline card-primary">
        <div class="card-header">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a class="btn btn-sm btn-primary mt-1" href="{{ url('supplier/create') }}">Tambah</a>
                <button onclick="modalAction('{{ url('supplier/create_ajax') }}')" class="btn btn-sm btn-success mt-1">Tambah Ajax</button>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
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
                            <input class="form-control" id="supplier_filter" name="supplier_filter" placeholder="Cari Supplier">
                            <small class="form-text text-muted">Filter berdasarkan Supplier</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tabel Supplier -->
            <table class="table table-bordered table-striped table-hover table-sm" id="table_supplier">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode Supplier</th>
                        <th>Nama Supplier</th>
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
        $('#myModal').load(url, function() {
            $('#myModal').modal('show');
        });
    }

    var dataSupplier;

    $(document).ready(function() {
        // DataTable initialization
        dataSupplier = $('#table_supplier').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ url('supplier/list') }}", // Ensure this route exists in your routes file
                dataType: "json",
                type: "POST",
                data: function(d) {
                    d._token = "{{ csrf_token() }}";
                    d.supplier_filter = $('#supplier_filter').val(); // Add search filter to request
                },
                error: function(xhr, error, thrown) {
                    console.error('DataTables Ajax Error:', error);
                    alert('An error occurred while loading data. Please check the console for more information.');
                }
            },
            columns: [
                { data: 'supplier_id', orderable: true, searchable: true },
                { data: 'supplier_kode', orderable: true, searchable: true },
                { data: 'supplier_nama', orderable: true, searchable: true },
                {
                    data: 'aksi',
                    orderable: false,
                    searchable: false,
                    render: function(data, type, row) {
                        return `
                            <button class="btn btn-sm btn-info" onclick="modalAction('/supplier/${row.supplier_id}')">Detail</button>
                            <button class="btn btn-sm btn-warning" onclick="modalAction('/supplier/${row.supplier_id}/edit_ajax')">Edit</button>
                            <button class="btn btn-sm btn-danger" onclick="modalAction('/supplier/${row.supplier_id}/delete_ajax')">Hapus</button>
                        `;
                    }
                }
            ]
        });

        // Trigger table reload when filter changes
        $('#supplier_filter').on('keyup', function() {
            dataSupplier.ajax.reload();
        });
    });
</script>
@endpush
