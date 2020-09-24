<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoituongnguoihocTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('doituongnguoihoc')) {
            Schema::create('doituongnguoihoc', function (Blueprint $table) {
                $table->increments('dtnh_id');
                $table->string('dtnh_ten');
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
        // Schema::dropIfExists('doituongnguoihoc');
    }
}
