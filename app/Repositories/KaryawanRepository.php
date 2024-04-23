<?php

namespace App\Repositories;

use App\Models\Karyawan;
use App\Repositories\BaseRepository;

/**
 * Class KaryawanRepository
 * @package App\Repositories
 * @version April 23, 2024, 5:45 am UTC
*/

class KaryawanRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nama_karyawan',
        'nomor_rekening'
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
