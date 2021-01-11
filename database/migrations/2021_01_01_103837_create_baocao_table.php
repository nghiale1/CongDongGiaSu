<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaocaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('baocao')) {
            Schema::create('baocao', function (Blueprint $table) {
                $table->bigIncrements('bc_id');

                $table->string('bc_noidung');
                $table->bigInteger('l_id')->unsigned()->index()->nullable();
                $table->bigInteger('hv_id')->unsigned()->index()->nullable();
                $table->timestamp('bc_ngaytao')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('bc_ngaysua')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
                $table->timestamp('bc_ngayxoa')->nullable();

                $table->foreign('l_id')->references('l_id')->on('lop')->onDelete('cascade');
                $table->foreign('hv_id')->references('hv_id')->on('hocvien')->onDelete('cascade');

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
        // Schema::dropIfExists('baocao');
    }
}
