<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Recipes5800kSeeder extends Seeder
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
                    ['id' => 2, 'desc' => 'Pan integral con aguacate y huevo revuelto', 'quant' => '2 rebanadas, 1/2 aguacate, 2 huevos', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y almendras', 'quant' => '1 taza de leche descremada, 2 plátanos, 30g de almendras', 'calories' => 600],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Ensalada de quinoa, aguacate y camarones', 'quant' => '1 taza de quinoa cocida, aguacate, 200g de camarones', 'calories' => 1200],
                    ['id' => 2, 'desc' => 'Pollo a la parrilla con arroz integral y verduras', 'quant' => '300g de pollo, 1 taza de arroz integral, verduras al gusto', 'calories' => 800],
                    ['id' => 3, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur griego con frutas y nueces', 'quant' => '1 envase, frutas al gusto, 30g de nueces', 'calories' => 500],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Salmón al horno con puré de camote', 'quant' => '200g de salmón, 1 taza de puré de camote', 'calories' => 1000],
                    ['id' => 2, 'desc' => 'Ensalada verde con aderezo de yogur', 'quant' => 'Lechuga, espinacas, pepino, aderezo de yogur', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Batido de proteínas con plátano y avena', 'quant' => '1 taza de leche descremada, 2 plátanos, 30g de avena', 'calories' => 600],
                ]
            ],
        ];

        $menu02_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y espinacas', 'quant' => '1 taza de leche descremada, 2 plátanos, 50g de espinacas frescas', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur griego con frutas y nueces', 'quant' => '1 envase, frutas al gusto, 30g de nueces', 'calories' => 500],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Ensalada de arroz, aguacate y camarones', 'quant' => '1 taza de arroz cocido, aguacate, 200g de camarones', 'calories' => 1200],
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
                    ['id' => 1, 'desc' => 'Filete de res a la parrilla con puré de camote', 'quant' => '200g de filete de res, 1 taza de puré de camote', 'calories' => 1200],
                    ['id' => 2, 'desc' => 'Ensalada verde con aderezo de yogur', 'quant' => 'Lechuga, espinacas, pepino, aderezo de yogur', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Taza de nueces y pasas', 'quant' => '1 taza', 'calories' => 800],
                ]
            ],
        ];

        $menu03_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Tortilla de huevo con vegetales', 'quant' => '2 huevos, 1 taza de vegetales (pimiento, cebolla, tomate), 1 cucharadita de aceite de oliva', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
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
                    ['id' => 1, 'desc' => 'Ensalada de arroz con camarones', 'quant' => '1 taza de quinoa cocida, 100g de camarones, vegetales mixtos, aderezo ligero', 'calories' => 1200],
                    ['id' => 2, 'desc' => 'Salmón al horno con espárragos y quinoa', 'quant' => '200g de salmón, 1 taza de espárragos, 1/2 taza de quinoa cocida, limón y especias', 'calories' => 1000],
                    ['id' => 3, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Pollo a la parrilla con vegetales asados', 'quant' => '200g de pechuga de pollo, vegetales asados al gusto', 'calories' => 1000],
                    ['id' => 2, 'desc' => 'Ensalada mixta con aderezo de vinagreta', 'quant' => 'Lechuga, tomate, pepino, aderezo de vinagreta', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Batido de proteínas con frutos rojos', 'quant' => '1/2 taza de leche descremada, frutos rojos al gusto', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y almendras', 'quant' => '1 taza de leche descremada, 2 plátanos, 30g de almendras', 'calories' => 600],
                ]
            ],
        ];



        // Menu 01
        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '5730', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '5450', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu02_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '5750', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu03_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
