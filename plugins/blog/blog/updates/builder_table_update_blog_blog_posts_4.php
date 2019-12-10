<?php namespace Blog\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBlogBlogPosts4 extends Migration
{
    public function up()
    {
        Schema::table('blog_blog_posts', function($table)
        {
            $table->date('publication_at')->nullable(false)->unsigned(false)->default(null)->change();
            $table->date('last_modified')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('blog_blog_posts', function($table)
        {
            $table->dateTime('publication_at')->nullable(false)->unsigned(false)->default(null)->change();
            $table->dateTime('last_modified')->nullable(false)->unsigned(false)->default(null)->change();
        });
    }
}
