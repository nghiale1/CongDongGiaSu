<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietchuyenmonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('chitietchuyenmon')) {
            Schema::create('chitietchuyenmon', function (Blueprint $table) {
                $table->bigIncrements('ctcm_id');
                $table->bigInteger('gs_id')->unsigned()->index();
                $table->integer('cm_id')->unsigned()->index();
                $table->integer('dtnh_id')->unsigned()->index();

                $table->foreign('gs_id')->references('gs_id')->on('giasu')->onDelete('cascade');
                $table->foreign('cm_id')->references('cm_id')->on('chuyenmon')->onDelete('cascade');
                $table->foreign('dtnh_id')->references('dtnh_id')->on('doituongnguoihoc')->onDelete('cascade');
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
        // Schema::dropIfExists('chitietchuyenmon');
    }
}
