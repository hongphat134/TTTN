<?php

use Illuminate\Database\Seeder;

class LoaiTaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('loaitaikhoan')->truncate();

       $data = [
        	['ten' => 'Người tìm việc'],
        	['ten' => 'Nhà tuyển dụng']
        ];

        foreach ($data as $v) {
        	DB::table('loaitaikhoan')->insert(
        		[
        			'ten' => $v['ten'],
        			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        			'updated_at' => Carbon\Carbon::now()->toDateTimeString()
        		]
        	);
        }  

        Schema::enableForeignKeyConstraints();
    }
}
