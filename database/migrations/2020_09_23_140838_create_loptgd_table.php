<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoptgdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('loptgd')) {
            Schema::create('loptgd', function (Blueprint $table) {
                $table->bigInteger('l_id')->unsigned()->index();
                $table->Integer('tgd_id')->unsigned()->index();

                $table->foreign('l_id')->references('l_id')->on('lop')->onDelete('cascade');
                $table->foreign('tgd_id')->references('tgd_id')->on('thoigianday')->onDelete('cascade');

                $table->primary(['l_id', 'tgd_id']);
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
        // Schema::dropIfExists('loptgd');
    }
}
