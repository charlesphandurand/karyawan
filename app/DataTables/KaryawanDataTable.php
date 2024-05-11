<?php

namespace App\DataTables;

use App\Models\Karyawan;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\DataTables;

class KaryawanDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */


    // public function dataTable($query)
    // {
    //     $dataTable = new EloquentDataTable($query);
    //     return $dataTable
    //     ->addColumn('action', 'karyawans.datatables_actions')
    //     // return $dataTable->addColumn('action', 'karyawans.datatables_actions');

    //     // fungsi untuk penambahan string lama_kerja = 1 + 'tahun'
    //     ->editColumn('lama_kerja', function ($karyawan) {
    //         return $karyawan->lama_kerja . ' tahun';
    //     });
    // }


// SETELAH REVISI OPERATOR
public function dataTable($query)
{
    $dataTable = new EloquentDataTable($query);

    // Tambahkan kolom sisa gaji
    // $dataTable->addColumn('sisa_gaji', function ($karyawan) {
    //     return $karyawan->uang_transport + $karyawan->uang_makan;
    // });

    // Tambahkan kolom sisa gaji
    $dataTable->editColumn('sisa_gaji', function ($karyawan) {
        // return ($karyawan->sisa_gaji);
        return $karyawan->sisa_gaji;
    });

    // Edit kolom masa_kerja_gaji
    $dataTable->editColumn('masa_kerja_gaji', function ($karyawan) {
        return $karyawan->masa_kerja_gaji;
    });

    // Edit kolom prestasi_gaji
    $dataTable->editColumn('prestasi_gaji', function ($karyawan) {
        return $karyawan->prestasi_gaji;
    });

    // Edit kolom uang_makan
    // $dataTable->editColumn('uang_makan', function ($karyawan) {
    //     return $karyawan->uang_makan;
    // });
    $dataTable->editColumn('uang_makan', function ($karyawan) {
        return $karyawan->uang_makan;
    });

    // Edit kolom uang_transport
    $dataTable->editColumn('uang_transport', function ($karyawan) {
        return $karyawan->uang_transport;
    });

    // Edit kolom pengembalian
    $dataTable->editColumn('pengembalian', function ($karyawan) {
        return $karyawan->pengembalian;
    });

    // Edit kolom tunai_gaji
    $dataTable->editColumn('tunai_gaji', function ($karyawan) {
        return $karyawan->tunai_gaji;
    });

    // Tambahkan kolom action
    $dataTable->addColumn('action', 'karyawans.datatables_actions');

    // Edit kolom lama_kerja
    $dataTable->editColumn('lama_kerja', function ($karyawan) {
        return $karyawan->lama_kerja . ' tahun';
    });

    // Edit kolom mulai_kerja untuk menampilkan tanggal dalam format yang diinginkan
    $dataTable->editColumn('mulai_kerja', function ($karyawan) {
        return date('d-m-Y', strtotime($karyawan->mulai_kerja));
    });

    // Edit kolom nama_jabatan
    $dataTable->editColumn('nama_jabatan', function ($karyawan) {
    // Periksa apakah karyawan memiliki relasi gaji
    if ($karyawan->gaji) {
        return $karyawan->gaji->jabatan;
    } else {
        return 'Tidak ada data jabatan';
    }
    });

    // Edit kolom standart
    $dataTable->editColumn('standart', function ($karyawan) {
        return $karyawan->gaji->standar_gaji;
    });

    return $dataTable;
}


    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Karyawan $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Karyawan $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
        ->setTableId('karyawan-table')
        ->columns($this->getColumns())
        ->minifiedAjax()
        ->addAction(['width' => '100%', 'printable' => false])
        ->parameters([
                'dom'       => 'lBfrtip',   // Menyesuaikan tata letak tombol dengan posisi pagination ke kanan bawah
                // 'scrollX'   => '100%',
                // 'scrollY'   => '400px', // Atur tinggi scroll di sini sesuai kebutuhan Anda
                'responsive' => true,
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner', ],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            'initComplete' => 'function () {
                $("table.dataTable thead").eq(1).remove();
                $(".dataTables_scrollHeadInner").css({"width":"100%"});
                $(".dataTables_scrollHeadInner table").css({"width":"100%"});
                $(window).on("resize", function() {
                    $("table.dataTable thead").eq(1).remove();
                });
            }',
            'drawCallback' => 'function () {
                $("table.dataTable thead").eq(1).remove();
                $(".dataTables_scrollHeadInner").css({"width":"100%"});
                $(".dataTables_scrollHeadInner table").css({"width":"100%"});
            }',
        ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'nama_karyawan',
            'nama_jabatan'=> ['title' => 'Jabatan'],
            'nomor_rekening'=> ['title' => 'No Rek'],
            'mulai_kerja'=> ['title' => 'Mulai'],
            'lama_kerja'=> ['title' => 'Lama Bekerja'],
            'standart',
            'masa_kerja_gaji'=> ['title' => 'Masa Kerja'],
            'prestasi_gaji'=> ['title' => 'Prestasi Sewa'],
            'uang_makan',
            'uang_transport',
            'pengembalian',
            'tunai_gaji'=> ['title' => 'Gaji Tunai'],
            'sisa_gaji'=> ['title' => 'Sisa', 'type' => 'number', 'formatted' => true],
        ];
    }
    // protected $exportColumns = [
    //     ['data' => 'nama_karyawan', 'title' => 'Name'],
    //     ['data' => 'sisa_gaji', 'title' => 'Registered Email', 'formatted' => true, 'columns' => [ // Atur pemformatan untuk setiap kolom yang diekspor
    //         'standart' => '0.000', // Format uang untuk kolom standart
    //     ],],
    //     ['data' => 'uang_makan', 'title' => 'sss', 'formatted' => true, 'columns' => [ // Atur pemformatan untuk setiap kolom yang diekspor
    //         'standart' => '0.000', // Format uang untuk kolom standart
    //     ],],
    // ];
    // protected $exportColumns = [
    //     ['data' => 'nama_karyawan', 'title' => 'Name'],
    //     [
    //         'data' => 'sisa_gaji',
    //         'title' => 'Sisa Gaji',
    //         'formatted' => true,
    //         'columns' => [
    //             'standart' => '0,000',
    //         ]
    //     ],
    //     [
    //         'data' => 'uang_makan',
    //         'title' => 'Uang Makan',
    //         'formatted' => true,
    //         'columns' => [
    //             'standart' => '0,000',
    //         ]
    //     ],
    // ];

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'karyawans_datatable_' . time();
    }
}
