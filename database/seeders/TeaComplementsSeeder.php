<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeaComplementsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('food_complements')->insert([
            'name' => 'Té de jengibre sin azúcares',
            'value' => '11 onzas (325 ml)',
            'kcal' => 0,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té de hierbabuena',
            'value' => '11 onzas (325 ml)',
            'kcal' => 0,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té de menta',
            'value' => '11 onzas (325 ml)',
            'kcal' => 0,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té de limón',
            'value' => '11 onzas (325 ml)',
            'kcal' => 0,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té de romero',
            'value' => '11 onzas (325 ml)',
            'kcal' => 0,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té de anís',
            'value' => '11 onzas (325 ml)',
            'kcal' => 0,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té de manzanilla sin azúcares',
            'value' => '11 onzas (325 ml)',
            'kcal' => 5,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té verde sin azúcares',
            'value' => '11 onzas (325 ml)',
            'kcal' => 5,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té de jamaica sin azúcares',
            'value' => '11 onzas (325 ml)',
            'kcal' => 5,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té de frutos rojos sin azúcares',
            'value' => '11 onzas (325 ml)',
            'kcal' => 5,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té de canela',
            'value' => '11 onzas (325 ml)',
            'kcal' => 5,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té de hojas de guayaba',
            'value' => '11 onzas (325 ml)',
            'kcal' => 5,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té de ciruela',
            'value' => '11 onzas (325 ml)',
            'kcal' => 5,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té de insulina',
            'value' => '11 onzas (325 ml)',
            'kcal' => 5,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té de níspero',
            'value' => '11 onzas (325 ml)',
            'kcal' => 5,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té de ruda',
            'value' => '11 onzas (325 ml)',
            'kcal' => 5,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('food_complements')->insert([
            'name' => 'Té de manzanilla endulzado con miel natural',
            'value' => '11 onzas (325 ml)',
            'kcal' => 45,
            'category' => 3,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
