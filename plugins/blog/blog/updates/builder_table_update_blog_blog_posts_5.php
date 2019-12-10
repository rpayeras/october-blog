<?php namespace Blog\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBlogBlogPosts5 extends Migration
{
    public function up()
    {
        Schema::table('blog_blog_posts', function($table)
        {
            $table->text('summary')->nullable()->change();
            $table->text('content')->nullable()->change();
            $table->integer('category_id')->nullable()->change();
            $table->dateTime('publication_at')->nullable()->unsigned(false)->default(null)->change();
            $table->boolean('publico')->default(false)->change();
        });
    }
    
    public function down()
    {
        Schema::table('blog_blog_posts', function($table)
        {
            $table->text('summary')->nullable(false)->change();
            $table->text('content')->nullable(false)->change();
            $table->integer('category_id')->nullable(false)->change();
            $table->date('publication_at')->nullable(false)->unsigned(false)->default(null)->change();
            $table->boolean('publico')->default(null)->change();
        });
    }
}
