<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Gaji
 * @package App\Models
 * @version April 29, 2024, 8:03 am UTC
 *
 * @property string $jabatan
 * @property number $standar_gaji
 */
class Gaji extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'gajis';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'jabatan',
        'standar_gaji'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'jabatan' => 'string',
        'standar_gaji' => 'double'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
