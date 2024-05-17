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
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Tortilla de huevo con vegetales', 'quant' => '2 huevos, 1 taza de vegetales (pimiento, cebolla, tomate), 1 cucharadita de aceite de oliva', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con frutas y nueces', 'quant' => '1 envase, frutas al gusto, 30g de nueces', 'calories' => 600],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de arroz con camarones', 'quant' => '1 taza de quinoa cocida, 100g de camarones, vegetales mixtos, aderezo ligero', 'calories' => 1200],
                    ['id' => 2, 'desc' => 'Salmón al horno con espárragos y quinoa', 'quant' => '200g de salmón, 1 taza de espárragos, 1/2 taza de quinoa cocida, limón y especias', 'calories' => 1000],
                    ['id' => 3, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Pollo a la parrilla con vegetales asados', 'quant' => '200g de pechuga de pollo, vegetales asados al gusto', 'calories' => 1000],
                    ['id' => 2, 'desc' => 'Ensalada mixta con aderezo de vinagreta', 'quant' => 'Lechuga, tomate, pepino, aderezo de vinagreta', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Batido de proteínas con frutos rojos', 'quant' => '1/2 taza de leche descremada, frutos rojos al gusto', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y almendras', 'quant' => '1 taza de leche descremada, 2 plátanos, 30g de almendras', 'calories' => 600],
                ]
            ],
        ];

        $menu02_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Taza de leche descremada', 'quant' => '1 taza', 'calories' => 80],
                    ['id' => 2, 'desc' => 'Pan integral con aguacate y huevo revuelto', 'quant' => '2 rebanadas, 1/2 aguacate, 2 huevos', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y almendras', 'quant' => '1 taza de leche descremada, 2 plátanos, 30g de almendras', 'calories' => 600],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa, aguacate y camarones', 'quant' => '1 taza de quinoa cocida, aguacate, 200g de camarones', 'calories' => 1200],
                    ['id' => 2, 'desc' => 'Pollo a la parrilla con arroz integral y verduras', 'quant' => '300g de pollo, 1 taza de arroz integral, verduras al gusto', 'calories' => 800],
                    ['id' => 3, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón al horno con puré de camote', 'quant' => '200g de salmón, 1 taza de puré de camote', 'calories' => 1000],
                    ['id' => 2, 'desc' => 'Ensalada verde con aderezo de yogur', 'quant' => 'Lechuga, espinacas, pepino, aderezo de yogur', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Batido de proteínas con plátano y avena', 'quant' => '1 taza de leche descremada, 2 plátanos, 30g de avena', 'calories' => 600],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Yogur griego con frutas y nueces', 'quant' => '1 envase, frutas al gusto, 30g de nueces', 'calories' => 500],
                ]
            ],
        ];

        $menu03_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y espinacas', 'quant' => '1 taza de leche descremada, 2 plátanos, 50g de espinacas frescas', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con frutas y nueces', 'quant' => '1 envase, frutas al gusto, 30g de nueces', 'calories' => 500],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de arroz, aguacate y camarones', 'quant' => '1 taza de arroz cocido, aguacate, 200g de camarones', 'calories' => 1200],
                    ['id' => 2, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de res a la parrilla con puré de camote', 'quant' => '200g de filete de res, 1 taza de puré de camote', 'calories' => 1200],
                    ['id' => 2, 'desc' => 'Ensalada verde con aderezo de yogur', 'quant' => 'Lechuga, espinacas, pepino, aderezo de yogur', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Taza de nueces y pasas', 'quant' => '1 taza', 'calories' => 800],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y almendras', 'quant' => '1 taza de leche descremada, 2 plátanos, 30g de almendras', 'calories' => 600],
                ]
            ],
        ];


        $menu04_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Huevos revueltos con aguacate', 'quant' => '2 huevos, 100g aguacate', 'calories' => 450],
                    ['id' => 2, 'desc' => 'Batido de plátano y almendras', 'quant' => '1 plátano, 30g almendras, 200ml leche de almendras', 'calories' => 300],
                    ['id' => 3, 'desc' => 'Tostadas de salmón ahumado y queso crema', 'quant' => '2 rebanadas de pan integral, 100g salmón ahumado, 50g queso crema light', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con frutos secos', 'quant' => '200g yogur griego, 30g frutos secos', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Arroz con pollo y verduras', 'quant' => '200g arroz integral cocido, 150g pechuga de pollo, mix de vegetales', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Ensalada de atún con aguacate', 'quant' => '1 lata de atún en agua, aguacate en cubos, mix de vegetales, aderezo ligero', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Tortillas de pescado con guacamole', 'quant' => '100g filete de pescado a la plancha, tortillas de maíz, guacamole casero', 'calories' => 600],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Pastel de carne con puré de papas', 'quant' => '200g pastel de carne, 150g puré de papas, ensalada verde', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Ensalada César con pollo', 'quant' => '150g pechuga de pollo a la plancha, lechuga, aderezo César light, crutones integrales', 'calories' => 600],
                    ['id' => 3, 'desc' => 'Sushi variado con sopa de miso', 'quant' => 'Rollos de sushi variados, 1 taza de sopa de miso', 'calories' => 700],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con almendras', 'quant' => '1 scoop de proteína en polvo, 30g de almendras, agua o leche', 'calories' => 300],
                ]
            ],
        ];

        $menu05_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Chilaquiles verdes con pollo y aguacate', 'quant' => '2 tazas', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Jugo de naranja natural', 'quant' => '2 vasos', 'calories' => 240],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con frutas y almendras', 'quant' => '1 taza', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de espinacas, aguacate y nueces', 'quant' => '2 platos', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Filete de salmón a la parrilla', 'quant' => '400g', 'calories' => 800],
                    ['id' => 3, 'desc' => 'Quinoa cocida con verduras', 'quant' => '2 tazas', 'calories' => 400],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Tacos de camarones al ajillo', 'quant' => '4 tacos', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Ensalada de pepino y jitomate', 'quant' => '2 platos', 'calories' => 800],
                    ['id' => 3, 'desc' => 'Pisto de verduras con aceite de oliva', 'quant' => '2 tazas', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de plátano, espinacas y almendras', 'quant' => '2 vasos', 'calories' => 600],
                ]
            ],
        ];

        $menu06_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Batido de espinacas, plátano, leche de almendras, proteína en polvo y mantequilla de maní', 'quant' => '1 vaso', 'calories' => 700],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con granola, frutos secos y frutas deshidratadas', 'quant' => '1 taza', 'calories' => 600],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Filete de salmón al horno con espárragos y quinoa', 'quant' => '300g salmón', 'calories' => 900],
                    ['id' => 2, 'desc' => 'Ensalada de lentejas, espinacas, aguacate, tomate y aderezo de aceite de oliva', 'quant' => '1 plato', 'calories' => 700],
                    ['id' => 3, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '4 rebanadas', 'calories' => 400],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Pechuga de pollo a la parrilla con batatas asadas y brócoli', 'quant' => '400g pollo', 'calories' => 1000],
                    ['id' => 2, 'desc' => 'Arroz integral con champiñones al vapor', 'quant' => '2 tazas', 'calories' => 800],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteína de suero con plátano, espinacas, almendras y mantequilla de maní', 'quant' => '1 vaso', 'calories' => 700],
                ]
            ],
        ];

        $menu07_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Batido de espinacas, plátano, leche de almendras, proteína en polvo y mantequilla de almendra', 'quant' => '1 vaso', 'calories' => 800],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con granola, frutos secos y frutas deshidratadas', 'quant' => '1 taza', 'calories' => 800],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de garbanzos, espinacas, aguacate, tomate cherry y aderezo de limón', 'quant' => '1 plato', 'calories' => 1000],
                    ['id' => 2, 'desc' => 'Pan integral con aguacate y aceite de oliva extra virgen', 'quant' => '4 rebanadas', 'calories' => 600],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Quinoa cocida con vegetales al vapor y queso feta', 'quant' => '2 tazas', 'calories' => 1200],
                    ['id' => 2, 'desc' => 'Aguacate fresco', 'quant' => '1 pieza', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteína de suero con plátano, espinacas, almendras y mantequilla de almendra', 'quant' => '1 vaso', 'calories' => 800],
                ]
            ],
        ];


        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '5750', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '5730', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu02_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '5450', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu03_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 04',
            'total_cal' => '5700', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu04_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 05',
            'total_cal' => '5440', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu05_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 06',
            'total_cal' => '5800', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu06_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 07',
            'total_cal' => '5600', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu07_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
