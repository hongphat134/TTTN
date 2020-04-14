<?php

use Illuminate\Database\Seeder;

class TaiKhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Schema::disableForeignKeyConstraints();
        DB::table('taikhoan')->truncate();

       $data = [
        	['email' => 'dylan@abc.com', 'password' => '123456', 'loaitk_id' => 1],
        	['email' => 'phat@abc.com', 'password' => '987654', 'loaitk_id' => 2],
        ];

        foreach ($data as $v) {
        	DB::table('taikhoan')->insert(
        		[
        			'email' => $v['email'],
        			'password' => bcrypt($v['password']),
        			'loaitk_id' => $v['loaitk_id'],
        			'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        			'updated_at' => Carbon\Carbon::now()->toDateTimeString()
        		]
        	);
        }  

        Schema::enableForeignKeyConstraints();
    }
}
