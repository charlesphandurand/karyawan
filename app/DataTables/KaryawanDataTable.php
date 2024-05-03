<?php

namespace App\DataTables;

use App\Models\Karyawan;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

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

    // Edit kolom lama_kerja
    $dataTable->editColumn('lama_kerja', function ($karyawan) {
        return $karyawan->lama_kerja . ' tahun';
    });

    // Tambahkan kolom action
    $dataTable->addColumn('action', 'karyawans.datatables_actions');

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
                'scrollY'   => '400px', // Atur tinggi scroll di sini sesuai kebutuhan Anda
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
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
            'nomor_rekening',
            'mulai_kerja',
            'lama_kerja',
            'masa_kerja_gaji',
            'prestasi_gaji',
            'uang_makan',
            'uang_transport',
            'pengembalian',
            'tunai_gaji',
            'sisa_gaji',
        ];
    }

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
