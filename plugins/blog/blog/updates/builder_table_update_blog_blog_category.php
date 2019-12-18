<?php namespace Blog\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBlogBlogCategory extends Migration
{
    public function up()
    {
        Schema::table('blog_blog_category', function($table)
        {
            $table->dropColumn('public');
        });
    }
    
    public function down()
    {
        Schema::table('blog_blog_category', function($table)
        {
            $table->boolean('public');
        });
    }
}
