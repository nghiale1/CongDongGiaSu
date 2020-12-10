<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateYeuthichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('yeuthich')) {
            Schema::create('yeuthich', function (Blueprint $table) {
                $table->bigInteger('gs_id')->unsigned()->index();
                $table->bigInteger('tk_id')->unsigned()->index();

                $table->foreign('gs_id')->references('gs_id')->on('giasu')->onDelete('cascade');
                $table->foreign('tk_id')->references('tk_id')->on('taikhoan')->onDelete('cascade');

                $table->primary(['gs_id', 'tk_id']);
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
        // Schema::dropIfExists('yeuthich');
    }
}
