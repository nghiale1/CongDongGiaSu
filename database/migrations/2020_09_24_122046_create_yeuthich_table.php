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
                $table->bigInteger('hv_id')->unsigned()->index();

                $table->foreign('gs_id')->references('gs_id')->on('giasu')->onDelete('cascade');
                $table->foreign('hv_id')->references('hv_id')->on('hocvien')->onDelete('cascade');

                $table->primary(['gs_id', 'hv_id']);
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
