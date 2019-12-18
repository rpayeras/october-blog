<?php namespace Blog\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBlogBlogCategories extends Migration
{
    public function up()
    {
        Schema::rename('blog_blog_category', 'blog_blog_categories');
    }
    
    public function down()
    {
        Schema::rename('blog_blog_categories', 'blog_blog_category');
    }
}
