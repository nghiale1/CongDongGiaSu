<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiasuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('giasu')) {
            Schema::create('giasu', function (Blueprint $table) {
                $table->bigIncrements('gs_id');
                $table->string('gs_hinhdaidien')->default('')->nullable();
                $table->string('gs_videogioithieu')->nullable();
                $table->string('gs_motangan')->nullable();
                $table->string('gs_gioithieu')->nullable();
                $table->string('gs_hoten');
                $table->string('gs_gioitinh')->nullable()->index();
                $table->string('gs_namsinh')->nullable()->index();
                $table->string('gs_sdt')->nullable();
                $table->string('gs_diachi')->nullable()->index();
                $table->string('gs_mucluong')->nullable()->index();
                $table->string('gs_giongnoi')->nullable()->index();
                $table->string('gs_vitri')->nullable();
                $table->bigInteger('tk_id')->unsigned()->index();

                $table->foreign('tk_id')->references('tk_id')->on('taikhoan')->onDelete('cascade');
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
        // Schema::dropIfExists('giasu');
    }
}
