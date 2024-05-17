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
                    ['id' => 3, 'desc' => 'Jugo de naranja natural', 'quant' => '1 vaso', 'calories' => 100],
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
                    ['id' => 1, 'desc' => 'Filete de res a la parrilla con puré de papa', 'quant' => '200g de filete de res, 1 taza de puré de papa', 'calories' => 1200],
                    ['id' => 2, 'desc' => 'Ensalada mixta con aderezo de vinagreta', 'quant' => 'Lechuga, tomate, cebolla, aderezo de vinagreta', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Batido de proteínas con frutos rojos', 'quant' => '1 taza de leche descremada, frutos rojos al gusto', 'calories' => 800],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y almendras', 'quant' => '1 taza de leche descremada, 2 plátanos, 30g de almendras', 'calories' => 600],
                ]
            ],
        ];

        $menu02_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Omelette con aguacate y tostadas integrales', 'quant' => '3 huevos, 100g aguacate, 2 rebanadas de pan integral', 'calories' => 550],
                    ['id' => 2, 'desc' => 'Tostadas de salmón ahumado y queso crema', 'quant' => '2 rebanadas de pan integral, 100g salmón ahumado, 50g queso crema light', 'calories' => 400],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur griego con frutos secos', 'quant' => '200g yogur griego, 30g frutos secos', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Arroz con pollo y verduras', 'quant' => '200g arroz integral cocido, 200g pechuga de pollo, mix de vegetales', 'calories' => 900],
                    ['id' => 2, 'desc' => 'Ensalada de atún con aguacate', 'quant' => '1 lata de atún en agua, aguacate en cubos, mix de vegetales, aderezo ligero', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Tortillas de pescado con guacamole', 'quant' => '150g filete de pescado a la plancha, tortillas de maíz, guacamole casero', 'calories' => 700],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Pastel de carne con puré de papas', 'quant' => '300g pastel de carne, 200g puré de papas, ensalada verde', 'calories' => 1000],
                    ['id' => 2, 'desc' => 'Ensalada César con pollo', 'quant' => '200g pechuga de pollo a la plancha, lechuga, aderezo César light, crutones integrales', 'calories' => 600],
                    ['id' => 3, 'desc' => 'Sushi variado con sopa de miso', 'quant' => 'Rollos de sushi variados, 1 taza de sopa de miso', 'calories' => 700],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteínas con almendras', 'quant' => '1 scoop de proteína en polvo, 30g de almendras, agua o leche', 'calories' => 300],
                ]
            ],
        ];

        $menu03_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Omelette de champiñones con queso fresco', 'quant' => '6 huevos', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '4 rebanadas', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Zumo de naranja natural', 'quant' => '2 vasos', 'calories' => 240],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur natural con frutas y almendras', 'quant' => '2 tazas', 'calories' => 600],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Ensalada de espinacas, aguacate y nueces', 'quant' => '2 platos', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Salmón a la parrilla', 'quant' => '400g', 'calories' => 800],
                    ['id' => 3, 'desc' => 'Quinoa cocida con verduras', 'quant' => '2 tazas', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Sopa de calabaza y zanahoria', 'quant' => '2 platos', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Pechuga de pollo a la plancha con verduras', 'quant' => '400g', 'calories' => 800],
                    ['id' => 3, 'desc' => 'Espárragos al vapor', 'quant' => '2 tazas', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de plátano, espinacas y almendras', 'quant' => '2 vasos', 'calories' => 600],
                ]
            ],
        ];

        $menu04_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Tazón de yogurt griego con granola, frutos rojos y miel', 'quant' => '1 tazón', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Batido de plátano, espinacas, leche de almendras y proteína en polvo', 'quant' => '1 vaso', 'calories' => 400],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Tortitas de avena con plátano y mantequilla de almendra', 'quant' => '2 tortitas', 'calories' => 500],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Ensalada de garbanzos, espinacas, tomate, aguacate y aderezo de limón', 'quant' => '1 plato', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Filete de ternera a la parrilla con espárragos', 'quant' => '250g', 'calories' => 700],
                    ['id' => 3, 'desc' => 'Quinoa cocida con verduras al vapor', 'quant' => '1 taza', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Salmón al horno con brócoli y zanahorias asadas', 'quant' => '300g', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Puré de camote con aceite de oliva', 'quant' => '2 tazas', 'calories' => 500],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteína de suero con fresas, espinacas y almendras', 'quant' => '1 vaso', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Yogur griego con frutos secos y miel', 'quant' => '1 taza', 'calories' => 700],
                ]
            ],
        ];

        $menu05_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Tazón de avena con plátano, almendras, miel y semillas de chía', 'quant' => '1 tazón', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Batido de espinacas, plátano, leche de almendras, proteína en polvo y mantequilla de maní', 'quant' => '1 vaso', 'calories' => 700],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur griego con granola, frutas frescas y nueces', 'quant' => '1 taza', 'calories' => 600],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de salmón al horno con espárragos y quinoa', 'quant' => '300g salmón', 'calories' => 900],
                    ['id' => 2, 'desc' => 'Ensalada de garbanzos, espinacas, aguacate, tomate y aderezo de aceite de oliva', 'quant' => '1 plato', 'calories' => 700],
                    ['id' => 3, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '4 rebanadas', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Arroz integral con verduras al vapor', 'quant' => '2 tazas', 'calories' => 800],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteína de suero con plátano, espinacas, almendras y mantequilla de maní', 'quant' => '1 vaso', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Pechuga de pollo a la parrilla con batatas asadas y brócoli', 'quant' => '200g pollo', 'calories' => 500],
                ]
            ],
        ];

        $menu06_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Tazón de avena con plátano, almendras, miel y semillas de chía', 'quant' => '1 tazón', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Batido de espinacas, plátano, leche de almendras, proteína en polvo y espirulina', 'quant' => '1 vaso', 'calories' => 800],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur griego con granola, bayas y semillas de chía', 'quant' => '1 taza', 'calories' => 700],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de salmón al horno con espárragos y quinoa', 'quant' => '400g salmón', 'calories' => 1000],
                    ['id' => 2, 'desc' => 'Ensalada de espinacas, aguacate, tomate, pepino y aderezo de limón y aceite de oliva', 'quant' => '1 plato', 'calories' => 800],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Ensalada de kale, aguacate, nueces y aderezo de vinagre balsámico', 'quant' => '1 plato', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Batata al horno con aceite de oliva y romero', 'quant' => '2 piezas', 'calories' => 600],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteína de suero con plátano, espinacas, almendras y espirulina', 'quant' => '1 vaso', 'calories' => 800],
                ]
            ],
        ];

        $menu07_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de espinacas, plátano, leche de almendras, proteína en polvo y mantequilla de almendra', 'quant' => '1 vaso', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Jugo de naranja natural', 'quant' => '1 vaso', 'calories' => 100],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur griego con granola, frutos secos y frutas deshidratadas', 'quant' => '1 taza', 'calories' => 800],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de salmón al horno con espárragos y quinoa', 'quant' => '400g salmón', 'calories' => 1200],
                    ['id' => 2, 'desc' => 'Ensalada de lentejas, espinacas, aguacate, tomate, pepino y aderezo de limón', 'quant' => '1 plato', 'calories' => 800],
                    ['id' => 3, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '4 rebanadas', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Arroz integral con champiñones al vapor', 'quant' => '3 tazas', 'calories' => 1200],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteína de suero con plátano, espinacas, almendras y mantequilla de almendra', 'quant' => '1 vaso', 'calories' => 800],
                ]
            ],
        ];


        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '6050', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '6000', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu02_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '5940', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu03_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 04',
            'total_cal' => '5900', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu04_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 05',
            'total_cal' => '6200', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu05_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 06',
            'total_cal' => '6100', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu06_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 07',
            'total_cal' => '6050', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu07_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
