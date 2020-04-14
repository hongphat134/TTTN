<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHosoxinviecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hosoxinviec', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('hoten',200);
            $table->date('ngaysinh');
            $table->string('gioitinh');
            $table->string('email');
            $table->string('sdt');
            $table->string('dctamtru');
            $table->string('dcthuongtru');
            $table->string('tinhtranghonnhan');
            $table->string('muctieunghenghiep');
            $table->string('nghanhnghe');
            $table->string('bangcap');
            $table->string('trinhdongoaingu');
            $table->string('trinhdotinhoc');
            $table->longText('motasoluoc')->nullable();
            $table->string('capbac')->nullable();
            $table->integer('mucluong')->nullable();
            $table->integer('sonamkinhnghiem')->nullable();

            $table->integer('tintuyendung_id')->unsigned();
            $table->foreign('tintuyendung_id')->references('id')->on('tintuyendung')->onUpdate('cascade');
            $table->timestamp('capnhathoso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('hosoxinviec', function (Blueprint $table) {
            //
            Schema::dropIfExists('hosoxinviec');
        });
    }
}
