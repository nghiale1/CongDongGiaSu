<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHopdongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('hopdong')) {
            Schema::create('hopdong', function (Blueprint $table) {
                $table->bigIncrements('hd_id');
                $table->bigInteger('hv_id')->unsigned()->index();
                $table->bigInteger('l_id')->unsigned()->index();
                $table->date('hd_ngayky');
                $table->string('hd_camketdiem');
                $table->date('hd_hieuluctu');
                $table->date('hd_hieulucden');

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
        // Schema::dropIfExists('hopdong');
    }
}
