<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThumuclopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('thumuclop')) {
            Schema::create('thumuclop', function (Blueprint $table) {
                $table->bigIncrements('tml_id');
                $table->bigInteger('l_id')->unsigned()->index();
                $table->bigInteger('tml_tmid')->nullable()->unsigned()->default(null)->index();
                $table->string('tml_ten');
                $table->string('tml_slug');
                $table->string('tml_duongdan');

                $table->foreign('l_id')->references('l_id')->on('lop')->onDelete('cascade');
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
        // Schema::dropIfExists('thumuclop');
    }
}
