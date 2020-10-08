<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('lop')) {
            Schema::create('lop', function (Blueprint $table) {
                $table->bigIncrements('l_id');
                $table->string('l_malop')->index();
                $table->string('l_ten')->index();
                $table->string('l_gioithieu');
                $table->integer('l_hocphi')->unsigned()->index();
                $table->integer('l_soluong')->default(1)->unsigned()->index();
                $table->date('l_ngaybatdau')->index();
                $table->date('l_ngayketthuc')->index();
                $table->integer('l_sobuoi')->unsigned()->index();
                $table->string('l_diachi');
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
        // Schema::dropIfExists('lop');
    }
}
