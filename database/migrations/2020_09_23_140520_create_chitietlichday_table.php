<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChitietlichdayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('chitietlichday')) {
            Schema::create('chitietlichday', function (Blueprint $table) {
                $table->bigIncrements('ctld_id');
                $table->bigInteger('gs_id')->unsigned()->index();
                $table->Integer('tgd_id')->unsigned()->index();
                $table->string('ctld_trangthai')->default('Ban');

                $table->foreign('gs_id')->references('gs_id')->on('giasu')->onDelete('cascade');
                $table->foreign('tgd_id')->references('tgd_id')->on('thoigianday')->onDelete('cascade');
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
        // Schema::dropIfExists('chitietlichday');
    }
}
