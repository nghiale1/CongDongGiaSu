<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBangcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('bangcap')) {
            Schema::create('bangcap', function (Blueprint $table) {
                $table->bigIncrements('bc_id');
                $table->bigInteger('gs_id')->unsigned()->index();
                $table->string('bc_tenbangcap');
                $table->string('bc_ngaycap')->nullable();
                $table->string('bc_hinhanh')->nullable();
                $table->string('bc_trangthai')->default('Chưa xác thực')->nullable();

                $table->foreign('gs_id')->references('gs_id')->on('giasu')->onDelete('cascade');
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
        // Schema::dropIfExists('bangcap');
    }
}
