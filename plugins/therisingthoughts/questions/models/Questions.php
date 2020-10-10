<?php namespace Therisingthoughts\Questions\Models;

use Model;

/**
 * Model
 */
class Questions extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'therisingthoughts_questions_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $jsonable = [
        'option',
        'answer'
    ];

}
