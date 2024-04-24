<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Recipes5400kSeeder extends Seeder
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
                    ['id' => 3, 'desc' => 'Omelette de espinacas, champiñones y queso de cabra', 'quant' => '3 huevos, espinacas, champiñones, 30g queso de cabra', 'calories' => 500],
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
                    ['id' => 1, 'desc' => 'Ensalada de quinoa, aguacate y pollo', 'quant' => '1 taza de quinoa cocida, aguacate, 200g de pollo', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Pasta integral con salsa de tomate y verduras', 'quant' => '1 taza de pasta integral, salsa de tomate, verduras al gusto', 'calories' => 800],
                    ['id' => 3, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y almendras', 'quant' => '1 taza de leche descremada, 1 plátano, 30g de almendras', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de salmón a la parrilla con ensalada de espinacas y tomate', 'quant' => '200g de salmón, espinacas y tomate al gusto', 'calories' => 900],
                    ['id' => 2, 'desc' => 'Puré de camote', 'quant' => '1 taza', 'calories' => 200],
                    ['id' => 3, 'desc' => 'Taza de nueces y pasas', 'quant' => '1 taza', 'calories' => 800],
                ]
            ],
        ];

        $menu02_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Pan integral tostado con mermelada de frutas', 'quant' => '1 rebanadas, 1 cucharada de mermelada', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Taza de yogur griego con frutas y frutos secos', 'quant' => '1 taza de yogur griego, frutas al gusto, 30g de frutos secos', 'calories' => 500],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Ensalada de arroz, aguacate y salmón', 'quant' => '1 taza de arroz cocido, aguacate, 200g de salmón', 'calories' => 1000],
                    ['id' => 2, 'desc' => 'Pasta integral con salsa de tomate y verduras', 'quant' => '1 taza de pasta integral, salsa de tomate, verduras al gusto', 'calories' => 800],
                    ['id' => 3, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],
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
                    ['id' => 1, 'desc' => 'Filete de res a la parrilla con ensalada de espinacas y tomate', 'quant' => '300g de filete de res, espinacas y tomate al gusto', 'calories' => 1200],
                    ['id' => 2, 'desc' => 'Taza de nueces y pasas', 'quant' => '1 taza', 'calories' => 800],
                ]
            ],
        ];

        $menu03_g1 = [
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
                    ['id' => 1, 'desc' => 'Ensalada de arroz, aguacate y camarones', 'quant' => '1 taza de arroz cocido, aguacate, 200g de camarones', 'calories' => 1200],
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
                ]
            ],
        ];



        // Menu 01
        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '5130', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '5200', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu02_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '5130', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu03_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
