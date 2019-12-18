<?php namespace Blog\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBlogBlogPostsCategories extends Migration
{
    public function up()
    {
        Schema::create('blog_blog_posts_categories', function($table)
        {
            $table->engine = 'InnoDB';
            $table->bigInteger('category_id');
            $table->bigInteger('post_id');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('blog_blog_posts_categories');
    }
}
