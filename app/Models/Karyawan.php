<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Karyawan
 * @package App\Models
 * @version April 23, 2024, 5:45 am UTC
 *
 * @property string $nama_karyawan
 * @property string $nomor_rekening
 */
class Karyawan extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'karyawans';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_karyawan',
        'nomor_rekening'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_karyawan' => 'string',
        'nomor_rekening' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nama_karyawan' => 'required'
    ];

    
}
