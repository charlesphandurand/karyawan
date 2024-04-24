<?php

namespace App\Repositories;

use App\Models\Karyawan;
use App\Repositories\BaseRepository;

/**
 * Class KaryawanRepository
 * @package App\Repositories
 * @version April 24, 2024, 1:47 am UTC
*/

class KaryawanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        'sisa_gaji'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Karyawan::class;
    }
}
