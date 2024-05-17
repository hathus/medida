<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Recipes5000kSeeder extends Seeder
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
                    ['id' => 1, 'desc' => 'Taza de leche descremada', 'quant' => '1 taza', 'calories' => 80],
                    ['id' => 2, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '2 rebanadas, 1/2 aguacate', 'calories' => 300],
                    ['id' => 3, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego natural con granola y frutos rojos', 'quant' => '1 envase, 30g de granola, frutos rojos al gusto', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa, aguacate y salmón', 'quant' => '1 taza de quinoa cocida, aguacate, 100g de salmón', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Pollo a la parrilla con arroz integral y brócoli', 'quant' => '200g de pollo, 1 taza de arroz integral, 1 taza de brócoli', 'calories' => 800],
                    ['id' => 3, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de res a la parrilla con ensalada de espinacas y tomate', 'quant' => '200g de filete de res, espinacas y tomate al gusto', 'calories' => 900],
                    ['id' => 2, 'desc' => 'Puré de camote', 'quant' => '1 taza', 'calories' => 200],
                    ['id' => 3, 'desc' => 'Taza de nueces y pasas', 'quant' => '1 taza', 'calories' => 800],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y almendras', 'quant' => '1 taza de leche descremada, 1 plátano, 30g de almendras', 'calories' => 400],
                ]
            ],
        ];

        $menu02_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Tacos de huevo con espinacas y aguacate', 'quant' => '5 tacos', 'calories' => 750],
                    ['id' => 2, 'desc' => 'Pan integral tostado con aceite de oliva extra virgen', 'quant' => '2 rebanadas', 'calories' => 200],
                    ['id' => 3, 'desc' => 'Jugo de naranja natural', 'quant' => '1 vaso', 'calories' => 120],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogurt natural', 'quant' => '1 taza', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Almendras', 'quant' => '50 gramos', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa con aguacate, tomate y pepino', 'quant' => '1 porción', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Pechuga de pollo a la plancha', 'quant' => '350 gramos', 'calories' => 525],
                    ['id' => 3, 'desc' => 'Tortillas de maíz', 'quant' => '3 unidades', 'calories' => 300],
                    ['id' => 4, 'desc' => 'Frijoles refritos', 'quant' => '1 taza', 'calories' => 200],
                    ['id' => 5, 'desc' => 'Agua de limón natural', 'quant' => '1 vaso', 'calories' => 100],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón a la parrilla', 'quant' => '400 gramos', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Espárragos al vapor', 'quant' => '1 taza', 'calories' => 50],
                    ['id' => 3, 'desc' => 'Ensalada de espinacas con aceite de oliva extra virgen', 'quant' => '1 porción', 'calories' => 200],
                    ['id' => 4, 'desc' => 'Arroz integral', 'quant' => '1 taza', 'calories' => 200],
                    ['id' => 5, 'desc' => 'Agua de limón natural', 'quant' => '1 vaso', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Guacamole con totopos', 'quant' => '1 porción', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Fruta fresca', 'quant' => '1 taza', 'calories' => 100],
                ]
            ],
        ];

        $menu03_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Tazón de avena con plátano, almendras y miel', 'quant' => '1 tazón', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Batido de espinacas, plátano, leche de almendras y proteína en polvo', 'quant' => '1 vaso', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con granola y frutas', 'quant' => '1 taza', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Filete de salmón a la parrilla con limón y hierbas', 'quant' => '200g', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Ensalada de quinoa, aguacate, tomate y pepino con aderezo de aceite de oliva', 'quant' => '1 plato', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Tortillas de maíz', 'quant' => '4 unidades', 'calories' => 400],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Pechuga de pollo a la parrilla con vegetales al vapor', 'quant' => '300g', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Arroz integral', 'quant' => '2 tazas', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteína de suero con plátano, espinacas y mantequilla de maní', 'quant' => '1 vaso', 'calories' => 600],
                ]
            ],
        ];

        $menu04_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Tazón de yogur griego con granola y frutas frescas', 'quant' => '1 tazón', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Batido de plátano, espinacas, leche de almendras y mantequilla de maní', 'quant' => '1 vaso', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Tortilla de huevo con aguacate y tomate', 'quant' => '3 tortillas', 'calories' => 600],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Filete de ternera a la parrilla con ensalada de espinacas, tomate y pepino', 'quant' => '200g', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Arroz blanco cocido con aceite de oliva', 'quant' => '2 tazas', 'calories' => 600],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón al horno con brócoli y quinoa cocida', 'quant' => '300g', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Ensalada de garbanzos, aguacate y zanahoria rallada con aderezo de limón', 'quant' => '1 plato', 'calories' => 500],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteína de suero con plátano, espinacas y almendras', 'quant' => '1 vaso', 'calories' => 600],
                ]
            ],
        ];

        $menu05_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Tazón de avena con plátano, nueces y miel', 'quant' => '1 tazón', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Jugo de naranja natural', 'quant' => '1 vaso', 'calories' => 120],
                    ['id' => 3, 'desc' => 'Batido de fresas, espinacas, plátano y leche de almendras', 'quant' => '1 vaso', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con granola y frutos secos', 'quant' => '1 taza', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Pechuga de pavo a la plancha con verduras salteadas', 'quant' => '250g', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Ensalada de quinoa, aguacate, tomate y pepino con aderezo de limón y aceite de oliva', 'quant' => '1 plato', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Papas horneadas con romero y aceite de oliva', 'quant' => '2 tazas', 'calories' => 400],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón a la parrilla con espárragos al vapor', 'quant' => '300g', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Arroz integral con brócoli y champiñones salteados', 'quant' => '2 tazas', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteína de suero con plátano, espinacas y almendras', 'quant' => '1 vaso', 'calories' => 600],
                ]
            ],
        ];

        $menu06_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Tazón de yogur griego con granola y frutas', 'quant' => '1 tazón', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Jugo de naranja natural', 'quant' => '1 vaso', 'calories' => 120],
                    ['id' => 3, 'desc' => 'Batido de plátano, espinacas, leche de almendras y proteína en polvo', 'quant' => '1 vaso', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Frutos secos y semillas mixtas', 'quant' => '1 puñado', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Pollo al curry con arroz integral', 'quant' => '300g pollo', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Ensalada de espinacas, aguacate, tomate y pepino con aderezo de aceite de oliva', 'quant' => '1 plato', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Pan integral tostado con aceite de oliva y ajo', 'quant' => '2 rebanadas', 'calories' => 300],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón a la parrilla con espárragos y limón', 'quant' => '300g salmón', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Quinoa cocida con brócoli y champiñones', 'quant' => '2 tazas', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteína de suero con plátano, espinacas y almendras', 'quant' => '1 vaso', 'calories' => 600],
                ]
            ],
        ];

        $menu07_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Tazón de yogurt griego con granola, frutos rojos y miel', 'quant' => '1 tazón', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Batido de plátano, espinacas, leche de almendras y proteína en polvo', 'quant' => '1 vaso', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Tortitas de avena con plátano y mantequilla de almendra', 'quant' => '2 tortitas', 'calories' => 500],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de garbanzos, espinacas, tomate, aguacate y aderezo de limón', 'quant' => '1 plato', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Filete de ternera a la parrilla con espárragos', 'quant' => '250g', 'calories' => 700],
                    ['id' => 3, 'desc' => 'Quinoa cocida con verduras al vapor', 'quant' => '1 taza', 'calories' => 400],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón al horno con brócoli y zanahorias asadas', 'quant' => '300g', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Puré de camote con aceite de oliva', 'quant' => '1 taza', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteína de suero con fresas, espinacas y almendras', 'quant' => '1 vaso', 'calories' => 600],
                ]
            ],
        ];


        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '4730', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '4795', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu02_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '4700', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu03_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 04',
            'total_cal' => '4900', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu04_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 05',
            'total_cal' => '4820', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu05_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 06',
            'total_cal' => '4620', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu06_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 07',
            'total_cal' => '4950', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu07_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
