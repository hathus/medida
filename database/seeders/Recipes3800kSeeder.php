<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Recipes3800kSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu01_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Taza de leche descremada', 'quant' => '1 taza', 'calories' => 80],
                    ['id' => 2, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '2 rebanadas, 1/2 aguacate', 'calories' => 300],
                    ['id' => 3, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur griego natural con granola y frutos rojos', 'quant' => '1 envase, 30g de granola, frutos rojos al gusto', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Tacos de pollo a la parrilla con guacamole', 'quant' => '3 tacos de pollo, guacamole al gusto', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de res a la parrilla con espárragos', 'quant' => '200g de filete de res, 1 taza de espárragos', 'calories' => 800],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Taza de frutos secos variados', 'quant' => '1 taza', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Taza de frutos secos variados', 'quant' => '1 taza', 'calories' => 600],
                ]
            ],
        ];

        // Menu 01
        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '3630', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
