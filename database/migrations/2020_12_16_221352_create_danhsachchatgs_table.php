<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDanhsachchatgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('danhsachchatgs')) {
            Schema::create('danhsachchatgs', function (Blueprint $table) {
                $table->bigIncrements('dsc_id');

                $table->string('chatId');
                $table->bigInteger('tk_id')->unsigned()->index()->nullable();
                $table->bigInteger('gs_id')->unsigned()->index()->nullable();

                $table->foreign('tk_id')->references('tk_id')->on('taikhoan')->onDelete('cascade');
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
        Schema::dropIfExists('danhsachchatgs');
    }
}
