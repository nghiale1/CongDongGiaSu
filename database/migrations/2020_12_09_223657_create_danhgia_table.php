<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDanhgiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('danhgia')) {
        Schema::create('danhgia', function (Blueprint $table) {
            $table->bigIncrements('dg_id');
            $table->bigInteger('hv_id')->unsigned()->index();
            $table->bigInteger('l_id')->unsigned()->index();
            $table->integer('dg_xephang');
            $table->string('dg_noidung');
            $table->timestamp('dg_ngaytao')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('dg_ngaysua')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
            $table->timestamp('dg_ngayxoa')->nullable();

            $table->foreign('hv_id')->references('hv_id')->on('hocvien')->onDelete('cascade');
            $table->foreign('l_id')->references('l_id')->on('lop')->onDelete('cascade');


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
        // Schema::dropIfExists('danhgia');
    }
}
