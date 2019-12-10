<?php namespace Blog\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBlogBlogPosts extends Migration
{
    public function up()
    {
        Schema::create('blog_blog_posts', function($table)
        {
            $table->engine = 'InnoDB';
            $table->string('title');
            $table->text('resume');
            $table->text('content');
            $table->integer('category_id');
            $table->dateTime('publication_at');
            $table->boolean('publico');
            $table->timestamp('created_at');
            $table->dateTime('last_modified');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('blog_blog_posts');
    }
}
