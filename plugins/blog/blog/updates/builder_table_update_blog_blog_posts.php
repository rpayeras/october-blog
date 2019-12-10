<?php namespace Blog\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBlogBlogPosts extends Migration
{
    public function up()
    {
        Schema::table('blog_blog_posts', function($table)
        {
            $table->increments('id')->unsigned();
        });
    }
    
    public function down()
    {
        Schema::table('blog_blog_posts', function($table)
        {
            $table->dropColumn('id');
        });
    }
}
