<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThumuchvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('thumuchv')) {
            Schema::create('thumuchv', function (Blueprint $table) {
                $table->bigIncrements('tmhv_id');
                $table->bigInteger('hv_id')->unsigned()->index();
                $table->bigInteger('tmhv_tmid')->nullable()->unsigned()->default(null)->index();
                $table->string('tmhv_ten');
                $table->string('tmhv_slug');
                $table->string('tmhv_duongdan');

                $table->foreign('hv_id')->references('hv_id')->on('hocvien')->onDelete('cascade');
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
        // Schema::dropIfExists('thumuchv');
    }
}
