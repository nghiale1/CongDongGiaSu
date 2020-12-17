<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhsachchatlopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('danhsachchatlop')) {
            Schema::create('danhsachchatlop', function (Blueprint $table) {
                $table->bigIncrements('dsc_id');

                $table->string('chatId');
                $table->bigInteger('l_id')->unsigned()->index()->nullable();
                $table->bigInteger('gs_id')->unsigned()->index()->nullable();
                $table->bigInteger('tk_id')->unsigned()->index()->nullable();

                $table->foreign('l_id')->references('l_id')->on('lop')->onDelete('cascade');
                $table->foreign('gs_id')->references('gs_id')->on('giasu')->onDelete('cascade');
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
        Schema::dropIfExists('danhsachchatlop');
    }
}
