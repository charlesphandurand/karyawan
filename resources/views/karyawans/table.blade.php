@section('css')
    @include('layouts.datatables_css')
@endsection

{!! $dataTable->table(['width' => '100%', 'class' => 'table table-striped table-bordered']) !!}
@push('scripts')
    @include('layouts.datatables_js')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css"> --}}
{{-- <script src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script> --}}
{{-- <script src="/vendor/datatables/buttons.server-side.js"></script> --}}
    {!! $dataTable->scripts() !!}
    {{-- <script>
        $(document).ready(function() {
            $('#karyawan-table').on('init.dt', function () {
                // Ubah format angka di kolom sisa_gaji
                $('#karyawan-table tbody td:nth-child(13)').each(function () {
                    var value = $(this).text();
                    var formattedValue = parseFloat(value).toLocaleString('id-ID');
                    $(this).text(formattedValue);
                });
            });
        });
    </script> --}}
    <script>
        $(document).ready(function() {
            $('#karyawan-table').on('init.dt', function () {
                // Ubah format angka di kolom urutan 6 sampai 12
                for (var i = 6; i <= 13; i++) {
                    $('#karyawan-table tbody td:nth-child(' + i + ')').each(function () {
                        var value = $(this).text();
                        var formattedValue = parseFloat(value).toLocaleString('id-ID');
                        $(this).text(formattedValue);
                    });
                }
            });
        });
    </script>
@endpush
