<?php

use Illuminate\Database\Seeder;

class TrilhaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('Track')->insert([
          'id' => 1,
          'name' => 'Expotec',
          'startDay' => '2017-08-09',
          'endDay' => '2017-08-11',
          'selectProduct' => false,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
      ]);
      DB::table('Track')->insert([
          'id' => 2,
          'name' => 'TADS',
          'startDay' => '2017-08-09',
          'endDay' => '2017-08-11',
          'slots' => 200,
          'selectProduct' => true,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
      ]);
      DB::table('Track')->insert([
          'id' => 3,
          'name' => 'TADS - Minicurso 1',
          'startDay' => '2017-08-09',
          'endDay' => '2017-08-11',
          'slots' => 200,
          'selectProduct' => true,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
      ]);
      DB::table('Track')->insert([
          'id' => 4,
          'name' => 'TADS - Minicurso 2',
          'startDay' => '2017-08-09',
          'endDay' => '2017-08-11',
          'slots' => 200,
          'selectProduct' => true,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
      ]);
      DB::table('Track')->insert([
          'id' => 5,
          'name' => 'TADS - Minicurso 3',
          'startDay' => '2017-08-09',
          'endDay' => '2017-08-11',
          'slots' => 200,
          'selectProduct' => true,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
      ]);
      DB::table('Track')->insert([
          'id' => 6,
          'name' => 'TADS - Minicurso 4',
          'startDay' => '2017-08-09',
          'endDay' => '2017-08-11',
          'slots' => 200,
          'selectProduct' => true,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
      ]);
      DB::table('Track')->insert([
          'id' => 7,
          'name' => 'Almoço',
          'startDay' => '2017-08-12',
          'endDay' => '2017-08-12',
          'selectProduct' => false,
          'created_at' => date("Y-m-d H:i:s"),
          'updated_at' => date("Y-m-d H:i:s"),
      ]);
    }
}
