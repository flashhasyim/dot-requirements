<?php

use Illuminate\Database\Seeder;
use App\Library\Rajaongkir;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('province')->delete();
        DB::statement("ALTER TABLE province AUTO_INCREMENT = 1");

        $province   = Rajaongkir::getProvince();

        foreach($province as $result){
            DB::table('province')->insert([
                'id'            => $result->province_id,
                'province_id'	=> $result->province_id,
                'province'      => $result->province,
	            'created_at' 	=> date('Y-m-d h:i:s'),
	            'updated_at' 	=> date('Y-m-d h:i:s')
	        ]);
        }
    }
}
