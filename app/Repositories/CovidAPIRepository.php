<?php

namespace App\Repositories;

use App\Models\CovidAPI;
use App\Repositories\BaseRepository;

/**
 * Class CovidAPIRepository
 * @package App\Repositories
 * @version October 21, 2021, 3:18 am UTC
*/

class CovidAPIRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
        return CovidAPI::class;
    }
}
