<?php namespace Blog\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBlogBlogPosts8 extends Migration
{
    public function up()
    {
        Schema::table('blog_blog_posts', function($table)
        {
            $table->dropColumn('publication_at');
            $table->dropColumn('created_at');
            $table->dropColumn('last_modified');
        });
    }
    
    public function down()
    {
        Schema::table('blog_blog_posts', function($table)
        {
            $table->dateTime('publication_at')->nullable();
            $table->timestamp('created_at');
            $table->dateTime('last_modified');
        });
    }
}
