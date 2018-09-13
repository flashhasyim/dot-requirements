<?php

use Illuminate\Database\Seeder;
use App\Library\Rajaongkir;
use App\Models\Province as ProvinceModel;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('city')->delete();
        DB::statement("ALTER TABLE city AUTO_INCREMENT = 1");

        $province   = ProvinceModel::get();

        foreach($province as $result){

            $city   = Rajaongkir::getCity($result->id);

            foreach($city as $value){

                DB::table('city')->insert([
                    'id'            => $value->city_id,
                    'province_id'	=> $result->id,
                    'type'          => $value->type,
                    'name'          => $value->city_name,
                    'postal_code'   => $value->postal_code,
                    'created_at' 	=> date('Y-m-d h:i:s'),
                    'updated_at' 	=> date('Y-m-d h:i:s')
                ]);

            }
        }
    }
}
