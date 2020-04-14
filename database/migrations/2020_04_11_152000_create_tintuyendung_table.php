<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTintuyendungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintuyendung', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nganhnghe');
            $table->string('kynang');
            $table->string('gioitinh');
            $table->integer('soluong');
            $table->string('bangcap');
            $table->integer('mucluong');
            $table->integer('kinhghiem');
            $table->string('tinhthanhpho');
            $table->string('tinhchatcv');
            $table->string('hinhthuclv');
            $table->integer('tgthuviec');
            $table->timestamp('tgdangtin');
            $table->date('hantuyendung');
            $table->longText('motacv');
            $table->longText('quyenloi');
            $table->longText('ttlienhe');

            $table->string('ntd_id');
            $table->foreign('ntd_id')->references('tk_id')->on('nhatuyendung')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tintuyendung');
    }
}
