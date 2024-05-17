<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Recipes2600kSeeder extends Seeder
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
                    ['id' => 1, 'desc' => 'Tostadas de aguacate y huevo', 'quant' => '1 tostadas, 1 huevos, 50g aguacate', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Barra de granola con almendras', 'quant' => '1 barra, 30g almendras', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Pechuga de pollo a la parrilla con arroz integral', 'quant' => '100g pollo, 80g arroz integral', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Fruta fresca (mango, piña, papaya)', 'quant' => '400g mezcla de frutas', 'calories' => 250],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón al horno con papas asadas', 'quant' => '200g salmón, 150g papas asadas', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Ensalada de espinacas con nueces y queso panela', 'quant' => '100g espinacas, 30g nueces, 50g queso panela', 'calories' => 350],
                    ['id' => 3, 'desc' => 'Infusión de hierbas con galletas integrales', 'quant' => '1 taza de infusión, 4 galletas', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con leche de almendras', 'quant' => '1 scoop proteína, 250ml leche de almendras', 'calories' => 200],
                ]
            ],
        ];

        $menu02_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Pan integral con aguacate y jitomate', 'quant' => '2 rebanadas, 50g aguacate, 50g tomate', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con nueces y miel', 'quant' => '200g yogur, 30g nueces, 15g miel', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Filete de pavo a la parrilla con quinoa', 'quant' => '150g pavo, 100g quinoa cocida', 'calories' => 500],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón al horno con quinoa', 'quant' => '200g salmón, 100g quinoa cocida', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Ensalada de kale con nueces y queso panela', 'quant' => '100g kale, 30g nueces, 50g queso panela', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con leche de almendras', 'quant' => '1 cuchara de proteína, 250ml leche de almendras', 'calories' => 200],
                ]
            ],
        ];

        $menu03_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Pan integral con aguacate y huevo', 'quant' => '2 rebanadas, 1 huevo, 50g aguacate', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Tostadas de garbanzo y pepino', 'quant' => '2 tostadas, 50g grabanzo, 50g pepino', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Pechuga de pollo al horno con quinoa', 'quant' => '200g pollo, 100g quinoa cocida', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Fruta fresca (kiwi, manzana, naranja)', 'quant' => '400g mezcla de frutas', 'calories' => 250],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón a la parrilla con espárragos', 'quant' => '200g salmón, 100g espárragos', 'calories' => 700],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con leche de almendras', 'quant' => '1 scoop proteína, 250ml leche de almendras', 'calories' => 200],
                ]
            ],
        ];

        $menu04_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Pan integral con aguacate y salmón ahumado', 'quant' => '2 rebanadas, 50g aguacate, 50g salmón ahumado', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Barra de granola con almendras', 'quant' => '1 barra, 30g almendras', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Pechuga de pollo al horno con puré de camote', 'quant' => '100g pollo, 80g camote', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Fruta fresca (pera, uvas, kiwi)', 'quant' => '400g mezcla de frutas', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de salmón a la parrilla con brócoli al vapor', 'quant' => '200g salmón, 100g brócoli', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Infusión de hierbas con galletas integrales', 'quant' => '1 taza de infusión, 4 galletas integrales', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con leche de almendras', 'quant' => '1 scoop proteína, 250ml leche de almendras', 'calories' => 200],
                ]
            ],
        ];

        $menu05_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Pan integral con aguacate y queso fresco', 'quant' => '2 rebanadas, 50g aguacate, 30g queso fresco', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Barra de granola con nueces', 'quant' => '1 barra, 30g nueces', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Filete de ternera a la plancha con ensalada de quinoa', 'quant' => '200g ternera, 100g quinoa cocida', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Ensalada de garbanzos con aguacate y pepino', 'quant' => '100g garbanzos cocidos, 50g aguacate, 50g pepino', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Fruta fresca (manzana, pera, naranja)', 'quant' => '400g mezcla de frutas', 'calories' => 250],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón al horno con espárragos', 'quant' => '200g salmón, 100g espárragos', 'calories' => 700],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con leche de almendras', 'quant' => '1 scoop proteína, 250ml leche de almendras', 'calories' => 200],
                ]
            ],
        ];

        $menu06_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Tortilla de claras de huevo con espinacas y tomate', 'quant' => '4 claras de huevo, 50g espinacas, 50g tomate', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur natural con nueces y miel', 'quant' => '100g yogur griego, 30g nueces, 15g miel', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Pollo a la parrilla con arroz integral y brócoli', 'quant' => '100g pechuga de pollo, 80g arroz integral cocido, 100g brócoli', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Fruta fresca (piña, mango, uvas)', 'quant' => '400g mezcla de frutas', 'calories' => 250],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón al horno con espárragos y batata', 'quant' => '200g filete de salmón, 100g espárragos, 150g batata asada', 'calories' => 750],
                    ['id' => 2, 'desc' => 'Ensalada de espinacas con aguacate y almendras', 'quant' => '100g espinacas, 50g aguacate, 30g almendras', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con leche de almendras', 'quant' => '1 scoop proteína, 250ml leche de almendras', 'calories' => 200],
                ]
            ],
        ];

        $menu07_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Pan integral tostado con puré de aguacate y huevo', 'quant' => '2 rebanadas, 50g aguacate, 1 huevo', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Manzana con almendras', 'quant' => '1 manzana, 30g almendras', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Pechuga de pollo al limón con amaranto y ensalada de espinacas', 'quant' => '200g pechuga de pollo, 100g amaranto cocido, 100g espinacas', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Fruta fresca (kiwi, pera, uvas)', 'quant' => '400g mezcla de frutas', 'calories' => 250],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de salmón a la parrilla con espárragos y batata asada', 'quant' => '200g salmón, 100g espárragos, 150g batata asada', 'calories' => 750],
                    ['id' => 2, 'desc' => 'Té verde con galletas integrales', 'quant' => '1 taza de té verde, 4 galletas integrales', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con leche de almendras', 'quant' => '1 scoop proteína, 250ml leche de almendras', 'calories' => 200],
                ]
            ],
        ];

        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '2550', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '2450', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu02_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '2400', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu03_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 04',
            'total_cal' => '2300', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu04_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 05',
            'total_cal' => '2800', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu05_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 06',
            'total_cal' => '2500', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu06_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 07',
            'total_cal' => '2550', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu07_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
