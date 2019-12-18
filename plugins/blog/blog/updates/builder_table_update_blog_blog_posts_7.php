<?php namespace Blog\Blog\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBlogBlogPosts7 extends Migration
{
    public function up()
    {
        Schema::table('blog_blog_posts', function($table)
        {
            $table->text('body')->nullable();
            $table->renameColumn('title', 'name');
            $table->renameColumn('publico', 'public');
            $table->dropColumn('summary');
            $table->dropColumn('content');
            $table->dropColumn('category_id');
        });
    }
    
    public function down()
    {
        Schema::table('blog_blog_posts', function($table)
        {
            $table->dropColumn('body');
            $table->renameColumn('name', 'title');
            $table->renameColumn('public', 'publico');
            $table->text('summary')->nullable();
            $table->text('content')->nullable();
            $table->integer('category_id')->nullable();
        });
    }
}
