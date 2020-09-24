<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHocvienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('hocvien')) {
            Schema::create('hocvien', function (Blueprint $table) {
                $table->bigIncrements('hv_id');
                $table->string('hv_hinhdaidien')->default('')->nullable();
                $table->string('hv_hoten');
                $table->string('hv_gioitinh')->nullable();
                $table->string('hv_trinhdo')->nullable()->index();
                $table->string('hv_hocluc')->nullable()->index();
                $table->string('hv_tentruong')->nullable();
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
        // Schema::dropIfExists('hocvien');
    }
}
