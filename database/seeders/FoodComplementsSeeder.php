<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FoodComplementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('food_complements')->insert([
            'name' => 'Uva',
            'value' => '5g',
            'kcal' => 4,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Fresa',
            'value' => '12g',
            'kcal' => 4,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('food_complements')->insert([
            'name' => 'Avellana',
            'value' => '5g',
            'kcal' => 7,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Nuez',
            'value' => '5g',
            'kcal' => 8,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Almendra',
            'value' => '5g',
            'kcal' => 9,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Melón (rebanada)',
            'value' => '100g',
            'kcal' => 30,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Papaya (rebanada)',
            'value' => '100g',
            'kcal' => 30,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Jícama',
            'value' => '100g',
            'kcal' => 40,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Mandarina (pieza mediana)',
            'value' => '50g',
            'kcal' => 40,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Nísperos',
            'value' => '100g',
            'kcal' => 40,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Pepino con limón',
            'value' => '100g',
            'kcal' => 50,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Kiwi',
            'value' => '100g',
            'kcal' => 60,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Mango manila',
            'value' => '100g',
            'kcal' => 60,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Frambuesas',
            'value' => '100g',
            'kcal' => 60,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Pan integral (pieza)',
            'value' => '30g',
            'kcal' => 70,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Tortilla de trigo (pieza)',
            'value' => '30g',
            'kcal' => 70,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Pan integral con linaza (pieza)',
            'value' => '30g',
            'kcal' => 70,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Tortilla de harina (pieza)',
            'value' => '30g',
            'kcal' => 90,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Pera',
            'value' => '150g',
            'kcal' => 95,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Manzana verde',
            'value' => '180g',
            'kcal' => 95,
            'category' => 1,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

    }
}
