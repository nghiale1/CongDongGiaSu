<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaptinlopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('taptinlop')) {
            Schema::create('taptinlop', function (Blueprint $table) {
                $table->bigIncrements('ttl_id');
                $table->bigInteger('tml_id')->unsigned()->index();
                $table->string('ttl_ten');
                $table->string('ttl_kichthuoc');
                $table->string('ttl_duongdan');
                $table->timestamp('ttl_ngaytao')->default(DB::raw('CURRENT_TIMESTAMP'));
                $table->timestamp('ttl_ngaysua')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));
                $table->timestamp('ttl_ngayxoa')->nullable();

                $table->foreign('tml_id')->references('tml_id')->on('thumuclop')->onDelete('cascade');
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
        // Schema::dropIfExists('taptinlop');
    }
}
