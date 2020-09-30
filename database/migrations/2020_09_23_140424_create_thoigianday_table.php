<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThoigiandayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('thoigianday')) {
            Schema::create('thoigianday', function (Blueprint $table) {
                $table->increments('tgd_id');
                $table->string('tgd_ten')->index();
                $table->string('tgd_ghichu')->nullable();
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
        // Schema::dropIfExists('thoigianday');
    }
}
