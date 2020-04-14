<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNguoitimviecTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguoitimviec', function (Blueprint $table) {
            //
            $table->string('tk_id');
            $table->foreign('tk_id')->references('email')->on('taikhoan')->onUpdate('cascade');
            $table->string('hoten',200)->nullable();
            $table->date('ngaysinh')->nullable();
            $table->string('gioitinh')->nullable();
            $table->string('email')->nullable();
            $table->string('sdt')->nullable();
            $table->string('dctamtru')->nullable();
            $table->string('dcthuongtru')->nullable();
            $table->string('tinhtranghonnhan')->nullable();
            $table->string('muctieunghenghiep')->nullable();
            $table->string('nghanhnghe')->nullable();
            $table->string('trinhdongoaingu')->nullable();
            $table->string('trinhdotinhoc')->nullable();
            //Mô tả sơ lược
            $table->string('motasoluoc')->nullable();
            $table->string('capbac')->nullable();
            $table->integer('mucluong')->nullable();
            $table->integer('sonamkinhnghiem')->nullable();
            $table->timestamp('capnhathoso')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('nguoitimviec', function (Blueprint $table) {
            //
            Schema::dropIfExists('nguoitimviec');
        });
    }
}
