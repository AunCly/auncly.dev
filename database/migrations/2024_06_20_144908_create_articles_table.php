<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('excerpt');
            $table->text('content');
            $table->boolean('is_published')->default(false);
            $table->timestamps();
        });

        Schema::create('article_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tag_id');
            $table->unsignedBigInteger('article_id');
            $table->foreign('tag_id')->on('tags')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('article_id')->on('articles')->references('id')->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('article_category', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('article_id');
            $table->foreign('category_id')->on('categories')->references('id')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('article_id')->on('articles')->references('id')->onUpdate('cascade')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('article_tag');
        Schema::dropIfExists('articles');
        Schema::dropIfExists('tags');
    }
};
