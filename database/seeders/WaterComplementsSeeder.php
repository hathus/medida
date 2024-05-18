<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class WaterComplementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('food_complements')->insert([
            'name' => 'Limón, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 10,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Pepino, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 10,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Jamaica, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 10,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Limón y chía, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 10,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Limón y pepino, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 10,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Sandia, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 40,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Mamey, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 50,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Fresa, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 50,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Kiwi limón, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 50,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Mandarina, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 50,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Arándanos, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 50,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Naranja, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 55,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Piña, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 60,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Guayaba, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 60,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Papaya, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 60,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Melón, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 60,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Horchata, sin endulzantes',
            'value' => '300 ml',
            'kcal' => 60,
            'category' => 2,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
