<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhgiahvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('danhgiahv')) {
            Schema::create('danhgiahv', function (Blueprint $table) {
                $table->bigIncrements('dghv_id');
                $table->bigInteger('hd_id')->unsigned()->index();
                $table->integer('dghv_sodiem')->unsigned();
                $table->string('dghv_noidung')->nullable();

                $table->foreign('hd_id')->references('hd_id')->on('hopdong')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('danhgiahv');
    }
}
