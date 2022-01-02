<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class CovidAPI
 * @package App\Models
 * @version October 21, 2021, 3:18 am UTC
 *
 * @property string $country
 * @property string $code
 * @property string $confirm
 * @property string $recovered
 * @property string $critical
 * @property string $death
 * @property string $latitude
 * @property string $longitude
 */
class CovidAPI extends Model
{
//    use SoftDeletes;

    use HasFactory;

    public $table = 'covid_api';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'country',
        'code',
        'confirm',
        'recovered',
        'critical',
        'death',
        'latitude',
        'longitude'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'country' => 'string',
        'code' => 'string',
        'confirm' => 'string',
        'recovered' => 'string',
        'critical' => 'string',
        'death' => 'string',
        'latitude' => 'string',
        'longitude' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'country' => 'required|string|max:255',
        'code' => 'required|string|max:255',
        'confirm' => 'required|string|max:255',
        'recovered' => 'required|string|max:255',
        'critical' => 'required|string|max:255',
        'death' => 'required|string|max:255',
        'latitude' => 'required|string|max:255',
        'longitude' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];


}
