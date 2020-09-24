<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThumucgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('thumucgs')) {
            Schema::create('thumucgs', function (Blueprint $table) {
                $table->bigIncrements('tmgs_id');
                $table->bigInteger('ctcm_id')->unsigned()->index();
                $table->bigInteger('tmgs_tmid')->nullable()->unsigned()->default(null)->index();
                $table->string('tmgs_ten');
                $table->string('tmgs_slug');
                $table->string('tmgs_duongdan');

                $table->foreign('ctcm_id')->references('ctcm_id')->on('chitietchuyenmon')->onDelete('cascade');
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
        // Schema::dropIfExists('thumucgs');
    }
}
