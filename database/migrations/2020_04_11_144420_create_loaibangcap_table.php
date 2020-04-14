<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoaibangcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loaibangcap', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('tenbangcap');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('loaibangcap', function (Blueprint $table) {
            //
            Schema::dropIfExists('loaibangcap');
        });
    }
}
