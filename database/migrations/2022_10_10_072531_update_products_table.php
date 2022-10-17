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
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('type_id');
                $table->foreign('type_id')
                ->references('id')->on('product_types')
                ->onDelete('cascade');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('publisher_id');
                $table->foreign('publisher_id')
                ->references('id')->on('publishers')
                ->onDelete('cascade');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('author_id');
                $table->foreign('author_id')
                ->references('id')->on('authors')
                ->onDelete('cascade');
        });
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('artist_id')->nullable();
                $table->foreign('artist_id')
                ->references('id')->on('artists')
                ->onDelete('cascade');
                
        });
        Schema::table('products', function (Blueprint $table) {
            $table->unsignedBigInteger('series_id');
                $table->foreign('series_id')
                ->references('id')->on('series')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
