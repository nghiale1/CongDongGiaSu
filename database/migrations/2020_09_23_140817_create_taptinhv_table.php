<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaptinhvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('taptinhv')) {
            Schema::create('taptinhv', function (Blueprint $table) {
                $table->bigIncrements('tthv_id');
                $table->bigInteger('tmhv_id')->unsigned()->index();
                $table->string('tthv_ten');
                $table->string('tthv_kichthuoc');
                $table->string('tthv_duongdan');
                $table->timestamp('tthv_ngaytao')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('tthv_ngaysua')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
                $table->timestamp('tthv_ngayxoa')->nullable();

                $table->foreign('tmhv_id')->references('tmhv_id')->on('thumuchv')->onDelete('cascade');
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
        // Schema::dropIfExists('taptinhv');
    }
}
