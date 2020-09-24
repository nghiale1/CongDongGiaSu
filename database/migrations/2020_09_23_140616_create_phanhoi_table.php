<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhanhoiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('phanhoi')) {
            Schema::create('phanhoi', function (Blueprint $table) {
                $table->bigIncrements('ph_id');
                $table->bigInteger('tk_id')->unsigned()->index();
                $table->string('ph_trangthai')->default('Chờ duyệt');
                $table->string('ph_noidung');
                $table->timestamp('ph_ngaygui')->default(DB::raw('CURRENT_TIMESTAMP'));;

                $table->foreign('tk_id')->references('tk_id')->on('taikhoan')->onDelete('cascade');
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
        // Schema::dropIfExists('phanhoi');
    }
}
