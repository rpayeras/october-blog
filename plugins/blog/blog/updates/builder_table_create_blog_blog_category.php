<?php namespace Blog\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBlogBlogCategory extends Migration
{
    public function up()
    {
        Schema::create('blog_blog_category', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->boolean('public');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('blog_blog_category');
    }
}
