<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNhatuyendungTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhatuyendung', function (Blueprint $table) {
            //
            $table->string('tk_id');
            $table->foreign('tk_id')->references('email')->on('taikhoan')->onUpdate('cascade');
            $table->string('ten')->nullable();
            $table->string('diachi')->nullable();
            $table->string('tennguoilienhe')->nullable();
            $table->string('sdt')->nullable();
            $table->string('tinhthanhpho')->nullable();
            $table->longText('vanhoaphucloi')->nullable();
            $table->longText('motacty')->nullable();
            //Ảnh văn phòng
            $table->string('anhvp')->nullable();
            //quy mô dân sự
            $table->string('quymodansu')->nullable();
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
        Schema::create('nhatuyendung', function (Blueprint $table) {
            //
            Schema::dropIfExists('nhatuyendung');
        });
    }
}
