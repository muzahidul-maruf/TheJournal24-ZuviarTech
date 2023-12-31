<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');

            $table->foreignId('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('set null');

            $table->foreignId('subcategory_id')->nullable()->comment('subcategories');
            $table->foreign('subcategory_id')->references('id')->on('subcategories')->onDelete('set null');

            $table->string('image')->nullable();
            $table->string('writter')->nullable();
            $table->longText('description')->nullable();
            $table->tinyInteger('status')->default(1)->comment('0:In Active, 1:Active');
            $table->tinyInteger('is_hero')->default(0)->comment('0: No, 1:Yes ');
            $table->integer('read_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
