<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Recipes6200kSeeder extends Seeder
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
                    ['id' => 1, 'desc' => 'Batido de proteínas con frutas y avena', 'quant' => '1 taza de leche descremada, 2 plátanos, 50g de avena, 30g de almendras', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Tostadas integrales con aguacate y huevo revuelto', 'quant' => '2 rebanadas, 1/2 aguacate, 2 huevos', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur griego con frutas y nueces', 'quant' => '1 envase, frutas al gusto, 30g de nueces', 'calories' => 600],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Pasta integral con pollo al pesto (El ajo, los piñones, el aceite de oliva)', 'quant' => '300g de pasta integral, 300g de pechuga de pollo, salsa pesto', 'calories' => 1000],
                    ['id' => 2, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y almendras', 'quant' => '1 taza de leche descremada, 2 plátanos, 30g de almendras', 'calories' => 600],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de res a la parrilla con puré de papa', 'quant' => '200g de filete de res, 1 taza de puré de papa', 'calories' => 1200],
                    ['id' => 2, 'desc' => 'Ensalada mixta con aderezo de vinagreta', 'quant' => 'Lechuga, tomate, cebolla, aderezo de vinagreta', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Batido de proteínas con frutos rojos', 'quant' => '1 taza de leche descremada, frutos rojos al gusto', 'calories' => 800],
                ]
            ],
        ];

        // Menu 01
        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '6050', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
