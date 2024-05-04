<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Karyawan
 * @package App\Models
 * @version April 24, 2024, 1:47 am UTC
 *
 * @property string $nama_karyawan
 * @property string $nomor_rekening
 * @property string $mulai_kerja
 * @property number $lama_kerja
 * @property number $masa_kerja_gaji
 * @property number $prestasi_gaji
 * @property number $uang_makan
 * @property number $uang_transport
 * @property number $pengembalian
 * @property number $tunai_gaji
 * @property number $sisa_gaji
 */
class Karyawan extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'karyawans';
    protected $dates = ['deleted_at'];



    public $fillable = [
        'nama_karyawan',
        'nomor_rekening',
        'mulai_kerja',
        // 'lama_kerja',
        'masa_kerja_gaji',
        'prestasi_gaji',
        'uang_makan',
        'uang_transport',
        'pengembalian',
        'tunai_gaji',
        // 'sisa_gaji'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nama_karyawan' => 'string',
        'nomor_rekening' => 'string',
        'mulai_kerja' => 'date',
        'lama_kerja' => 'double',
        'masa_kerja_gaji' => 'double',
        'prestasi_gaji' => 'double',
        'uang_makan' => 'double',
        'uang_transport' => 'double',
        'pengembalian' => 'double',
        'tunai_gaji' => 'double',
        'sisa_gaji' => 'double'
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
