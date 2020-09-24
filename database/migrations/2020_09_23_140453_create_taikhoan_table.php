<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaikhoanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('taikhoan')) {
            Schema::create('taikhoan', function (Blueprint $table) {
                $table->bigIncrements('tk_id');
                $table->string('username')->index();
                $table->string('password')->index();
                $table->string('tk_quyen')->index()->default('GiaSu');
                $table->rememberToken();
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
        // Schema::dropIfExists('taikhoan');
    }
}
