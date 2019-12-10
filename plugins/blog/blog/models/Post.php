<?php namespace Blog\Blog\Models;

use Model;

/**
 * Model
 */
class Post extends Model
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
    public $table = 'blog_blog_posts';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
