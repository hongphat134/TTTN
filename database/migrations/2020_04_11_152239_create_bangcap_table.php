<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBangcapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bangcap', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('nguoixinviec_id');
            $table->foreign('nguoixinviec_id')->references('tk_id')->on('nguoitimviec')->onUpdate('cascade');
            $table->integer('loaibangcap_id')->unsigned();
            $table->foreign('loaibangcap_id')->references('id')->on('loaibangcap')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('bangcap', function (Blueprint $table) {
            //
            Schema::dropIfExists('bangcap');
        });
    }
}
