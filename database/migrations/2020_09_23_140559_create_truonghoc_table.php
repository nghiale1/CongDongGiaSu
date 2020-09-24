<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTruonghocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('truonghoc')) {
            Schema::create('truonghoc', function (Blueprint $table) {
                $table->bigIncrements('th_id');
                $table->bigInteger('gs_id')->unsigned()->index();
                $table->string('th_ten');
                $table->string('th_chucdanh')->default('Từng học');

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
        // Schema::dropIfExists('truonghoc');
    }
}
