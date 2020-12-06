<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGiaodichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('giaodich')) {
            Schema::create('giaodich', function (Blueprint $table) {
                $table->bigIncrements('gd_id');
                $table->bigInteger('tk_id')->unsigned()->index();
                $table->bigInteger('l_id')->unsigned()->index();
                $table->integer('gd_tongtien')->unsigned()->default(0);
                $table->integer('gd_trangthai')->unsigned()->default(0);
                $table->timestamp('gd_ngaytao')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('gd_ngaysua')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
                $table->timestamp('gd_ngayxoa')->nullable();


                $table->foreign('tk_id')->references('tk_id')->on('taikhoan')->onDelete('cascade');
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
        // Schema::dropIfExists('giaodich');
    }
}
