<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Recipes4600kSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu03_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Taza de leche descremada', 'quant' => '1 taza', 'calories' => 80],
                    ['id' => 2, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '2 rebanadas, 1/2 aguacate', 'calories' => 300],
                    ['id' => 3, 'desc' => 'Revuelto de queso tofu con espinacas y champiñones', 'quant' => '200g tofu, espinacas, champiñones al gusto', 'calories' => 400],
                    ['id' => 4, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
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
                    ['id' => 1, 'desc' => 'Ensalada de lentejas, aguacate y tomate', 'quant' => '1 taza de lentejas cocidas, aguacate, tomate al gusto', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Agua de limón sin azúcar', 'quant' => '2 vasos', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y nueces', 'quant' => '1 taza de leche descremada, 1 plátano, 30g de nueces', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de pescado blanco a la parrilla con espárragos', 'quant' => '200g de pescado blanco, 1 taza de espárragos', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Puré de camote', 'quant' => '1 taza', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Taza de almendras y pistachos', 'quant' => '1 taza', 'calories' => 600],
                ]
            ],
        ];

        $menu01_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '2 rebanadas, 1/2 aguacate', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Omelette de espinacas, champiñones y queso de cabra', 'quant' => '2 huevos, espinacas, champiñones, 30g queso de cabra', 'calories' => 400],
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
                    ['id' => 1, 'desc' => 'Ensalada de garbanzos, aguacate y tomate', 'quant' => '1 taza de garbanzos cocidos, aguacate, tomate al gusto', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Pechuga de pollo a la parrilla con vegetales', 'quant' => '200g pechuga de pollo, 1 taza de vegetales mixtos', 'calories' => 700],
                    ['id' => 3, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y nueces', 'quant' => '1 taza de leche descremada, 1 plátano, 30g de nueces', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de res a la parrilla con espárragos', 'quant' => '200g de filete de res, 1 taza de espárragos', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Taza de almendras y pistaches', 'quant' => '1 taza', 'calories' => 600],
                ]
            ],
        ];

        // Menu 01
        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '4180', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu03_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Menu 01
        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '4350', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
