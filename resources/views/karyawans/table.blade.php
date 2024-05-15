@section('css')
    @include('layouts.datatables_css')

    <style>

        div.dt-container {
        width: 800px;
        margin: 0 auto;
    }
    .dataTables_scrollHeadInner thead {
    display: none;
}

.dataTables_length select {
    width: auto !important;
    display: inline-block;
}

.dataTables_filter input {
    width: auto !important;
    display: inline-block;
}
.dataTables_scrollHeadInner thead {
    display: none;
}
    </style>
@endsection

{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered display nowrap']) !!}
<!-- Tambahkan tombol lainnya sesuai kebutuhan -->
@push('scripts')
    @include('layouts.datatables_js')
<script src="/vendor/datatables/buttons,server-side.js"></script>
    {!! $dataTable->scripts() !!}

    <script>

        function formatTableColumns() {
            $('#karyawan-table tbody td:nth-child(n+6):nth-child(-n+13)').each(function () {
                var value = $(this).text();
                var numberValue = parseFloat(value.replace(/\./g, '').replace(',', '.'));
                var formattedValue = isNaN(numberValue) ? value : numberValue.toLocaleString('id-ID', { minimumFractionDigits: 0 });
                $(this).text(formattedValue);
            });
        }

        $(document).ready(function() {
            // Initial formatting on table load
            formatTableColumns();

            // Formatting on DataTable redraw
            $('#karyawan-table').on('draw.dt', function () {
                formatTableColumns();
            });
        });
    </script>
@endpush
