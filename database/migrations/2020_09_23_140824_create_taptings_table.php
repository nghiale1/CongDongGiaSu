<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaptingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('taptings')) {
            Schema::create('taptings', function (Blueprint $table) {
                $table->bigIncrements('ttgs_id');
                $table->bigInteger('tmgs_id')->unsigned()->index();
                $table->string('ttgs_ten');
                $table->string('ttgs_kichthuoc');
                $table->string('ttgs_duongdan');
                $table->timestamp('ttgs_ngaytao')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('ttgs_ngaysua')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
                $table->timestamp('ttgs_ngayxoa')->nullable();

                $table->foreign('tmgs_id')->references('tmgs_id')->on('thumucgs')->onDelete('cascade');
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
        // Schema::dropIfExists('taptings');
    }
}
