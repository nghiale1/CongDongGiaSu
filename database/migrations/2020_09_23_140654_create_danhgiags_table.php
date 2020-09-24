<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhgiagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('danhgiags')) {
            Schema::create('danhgiags', function (Blueprint $table) {
                $table->bigIncrements('dggs_id');
                $table->bigInteger('hd_id')->unsigned()->index();
                $table->integer('dggs_sodiem')->unsigned();
                $table->string('dggs_noidung')->nullable();

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
        // Schema::dropIfExists('danhgiags');
    }
}
