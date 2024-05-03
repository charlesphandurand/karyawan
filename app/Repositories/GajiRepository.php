<?php

namespace App\Repositories;

use App\Models\Gaji;
use App\Repositories\BaseRepository;

/**
 * Class GajiRepository
 * @package App\Repositories
 * @version April 29, 2024, 8:03 am UTC
*/

class GajiRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'jabatan',
        'standar_gaji'
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
        return Gaji::class;
    }
}
