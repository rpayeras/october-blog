<?php namespace Blog\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBlogBlogPosts3 extends Migration
{
    public function up()
    {
        Schema::table('blog_blog_posts', function($table)
        {
            $table->string('slug');
        });
    }
    
    public function down()
    {
        Schema::table('blog_blog_posts', function($table)
        {
            $table->dropColumn('slug');
        });
    }
}
