<?php namespace Blog\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBlogBlogPosts2 extends Migration
{
    public function up()
    {
        Schema::table('blog_blog_posts', function($table)
        {
            $table->renameColumn('resume', 'summary');
        });
    }
    
    public function down()
    {
        Schema::table('blog_blog_posts', function($table)
        {
            $table->renameColumn('summary', 'resume');
        });
    }
}
