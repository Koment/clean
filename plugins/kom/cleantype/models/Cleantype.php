<?php namespace Kom\Cleantype\Models;

use Model;

/**
 * Model
 */
class Cleantype extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'kom_cleantype_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    /* Relations */

    public $belongsToMany = [

      'services' => [

        'Kom\Cleantype\Models\Service',

        'table' => 'kom_cleantype_services_pivot',

        'order' => 'name',

      ]

    ];

    public $attachOne = [

      'poster' => 'System\Models\File'

    ];
}
