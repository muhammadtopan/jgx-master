<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PacketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id');

    	for($i = 1; $i <= 20; $i++){

    	      // insert data ke table packet menggunakan Faker
    		DB::table('packets')->insert([
    			'nama_pengirim' => $faker->name,
    			'nohp_pengirim' => $faker->phoneNumber,
    			'alamat_pengirim' => $faker->address,
    			'nama_penerima' => $faker->name,
    			'nohp_penerima' => $faker->phoneNumber,
    			'tujuan_pkt' => 'padang',
    			'alamat_penerima' => $faker->address,
    			'jenis_pkt' => 'makanan',
    			'berat_pkt' => '5',
    			'kemasan_pkt' => 'plastik',
    			'volume_pkt' => '2',
    			'pengiriman_pkt' => 'express',
				'end_pkt' => '2020-07-23 00:00:00',
				'status_pkt' => 'dikiriman',
				'resi_pkt' => 'pdg-17/07/2020',
				'ongkir_pkt' => '20000',
				'id_companies' => '1',
				
    		]);

    	}
    }

}