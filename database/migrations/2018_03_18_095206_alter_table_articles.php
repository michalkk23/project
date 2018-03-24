<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableArticles extends Migration
{

    public function up()
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->integer('category_id')
                ->unsigned()
                ->nullable();
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('SET NULL');

        });
    }


    public function down()
    {
        Schema::table('articles', function (Blueprint $table) {

        });
    }
}
