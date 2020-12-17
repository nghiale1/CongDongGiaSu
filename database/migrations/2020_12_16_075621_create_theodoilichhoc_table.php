<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTheodoilichhocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('theodoilichhoc')) {
            Schema::create('theodoilichhoc', function (Blueprint $table) {
                $table->bigIncrements('tdlh_id');
                $table->bigInteger('hv_id')->unsigned()->index();
                $table->bigInteger('l_id')->unsigned()->index();
                $table->integer('tdlh_trangthai');
                $table->string('tdlh_noidung');
                $table->timestamp('tdlh_ngaytao')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('tdlh_ngaysua')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
                $table->timestamp('tdlh_ngayxoa')->nullable();

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
        // Schema::dropIfExists('theodoilichhoc');
    }
}
