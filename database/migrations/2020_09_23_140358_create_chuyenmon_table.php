<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChuyenmonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('chuyenmon')) {
            Schema::create('chuyenmon', function (Blueprint $table) {
                $table->increments('cm_id');
                $table->string('cm_ten')->index();
                $table->integer('lv_id')->nullable()->default(null)->unsigned()->index();

                $table->foreign('lv_id')->references('lv_id')->on('linhvuc')->onDelete('cascade');
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
        // Schema::dropIfExists('chuyenmon');
    }
}
