<?php namespace Blog\Blog\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'blog_blog_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
