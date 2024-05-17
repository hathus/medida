<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Recipes1400kSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $menu01 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Avena con leche descremada y frutas frescas', 'quant' => '1 taza de avena, 1 taza de leche, frutas al gusto', 'calories' => 300],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur natural sin azúcar y nueces', 'quant' => '1 envase de yogur, 30g de nueces', 'calories' => 150],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Ensalada de pollo a la parrilla con verduras', 'quant' => '100g de pechuga de pollo, lechuga, tomate, pepino, aderezo ligero', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Salmón al horno con espárragos', 'quant' => '100g de salmón, 1 taza de espárragos', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Rodajas de piña', 'quant' => '1 taza', 'calories' => 100],
                ]
            ],
        ];

        $menu02 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Taza de leche descremada', 'quant' => '1 taza', 'calories' => 80],
                    ['id' => 2, 'desc' => 'Pan integral', 'quant' => '1 rebanada', 'calories' => 70],
                    ['id' => 3, 'desc' => 'Huevo revuelto', 'quant' => '1 huevo', 'calories' => 70],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur natural sin azúcar', 'quant' => '1 envase', 'calories' => 100],
                    ['id' => 2, 'desc' => 'Puñado de nueces', 'quant' => '30 g', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de pollo a la parrilla con verduras', 'quant' => '100g de pechuga de pollo, lechuga, tomate, pepino, aderezo ligero', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Arroz integral cocido', 'quant' => '1/2 taza', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Agua de Jamaica sin azúcar', 'quant' => '1 vaso', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de pescado al horno con espárragos', 'quant' => '100g de pescado, 1/2 taza de espárragos', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Rodajas de piña', 'quant' => '1 taza', 'calories' => 100],
                ]
            ],
        ];

        $menu03 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Yogur natural bajo en grasa', 'quant' => '150g', 'calories' => 85],
                    ['id' => 2, 'desc' => 'Fruta fresca (manzana, pera)', 'quant' => '1 pieza mediana', 'calories' => 80],
                    ['id' => 3, 'desc' => 'Pan integral', 'quant' => '1 rebanada', 'calories' => 70],
                    ['id' => 4, 'desc' => 'Aceite de oliva', 'quant' => '1 cucharadita', 'calories' => 40],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Almendras', 'quant' => '10 unidades', 'calories' => 70],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de espinacas y jitomate', 'quant' => '1 taza', 'calories' => 50],
                    ['id' => 2, 'desc' => 'Pechuga de pollo a la plancha', 'quant' => '100g', 'calories' => 150],
                    ['id' => 3, 'desc' => 'Arroz integral cocido', 'quant' => '1/2 taza', 'calories' => 100],
                    ['id' => 4, 'desc' => 'Frijoles negros cocidos', 'quant' => '1/2 taza', 'calories' => 80],
                    ['id' => 5, 'desc' => 'Aceite de oliva', 'quant' => '1 cucharadita', 'calories' => 40],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón al horno', 'quant' => '100g', 'calories' => 180],
                    ['id' => 2, 'desc' => 'Brócoli al vapor', 'quant' => '1 taza', 'calories' => 30],
                    ['id' => 3, 'desc' => 'Aceite de oliva', 'quant' => '1 cucharadita', 'calories' => 40],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Yogur natural bajo en grasa', 'quant' => '150g', 'calories' => 85],
                ]
            ],
        ];

        $menu04 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Avena con leche descremada y frutas', 'quant' => '1 taza', 'calories' => 250],
                    ['id' => 2, 'desc' => 'Rebanadas de piña', 'quant' => '2 rebanadas', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Té verde', 'quant' => '1 taza', 'calories' => 0],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur natural descremado con almendras', 'quant' => '1 envase', 'calories' => 150],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de pollo y vegetales', 'quant' => '1 plato', 'calories' => 350],
                    ['id' => 2, 'desc' => 'Arroz integral', 'quant' => '1/2 taza', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Jugo de naranja natural', 'quant' => '1 vaso', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Pechuga de pollo a la plancha', 'quant' => '100 g', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Puré de papa', 'quant' => '1/2 taza', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Manzana', 'quant' => '1 unidad', 'calories' => 80],
                ]
            ],
        ];

        $menu05 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Avena con leche de almendras', 'quant' => '1 taza', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Plátano', 'quant' => '1 unidad', 'calories' => 105],
                    ['id' => 3, 'desc' => 'Té verde sin azúcar', 'quant' => '1 taza', 'calories' => 0],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur natural sin azúcar', 'quant' => '1 taza', 'calories' => 120],
                    ['id' => 2, 'desc' => 'Fresas', 'quant' => '1 taza', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de pollo', 'quant' => '1 porción', 'calories' => 350],
                    ['id' => 2, 'desc' => 'Arroz integral cocido', 'quant' => '1/2 taza', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Zanahorias', 'quant' => '1 unidad', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón a la parrilla', 'quant' => '100g', 'calories' => 200],
                    ['id' => 2, 'desc' => 'Brócoli al vapor', 'quant' => '1 taza', 'calories' => 55],
                    ['id' => 3, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 0],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Manzana', 'quant' => '1 unidad', 'calories' => 95],
                    ['id' => 2, 'desc' => 'Almendras', 'quant' => '15 unidades', 'calories' => 105],
                ]
            ],
        ];

        $menu06 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Avena cocida con leche', 'quant' => '1 taza', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Plátano', 'quant' => '1 mediano', 'calories' => 105],
                    ['id' => 3, 'desc' => 'Nueces', 'quant' => '1 puñado', 'calories' => 90],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur natural', 'quant' => '1 taza', 'calories' => 120],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de pollo', 'quant' => '1 porción', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Tortillas de maíz', 'quant' => '2 unidades', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Frijoles refritos', 'quant' => '1/2 taza', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de pescado a la plancha', 'quant' => '100g', 'calories' => 120],
                    ['id' => 2, 'desc' => 'Arroz integral', 'quant' => '1/2 taza', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Verduras al vapor', 'quant' => '1 taza', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Zanahorias baby', 'quant' => '1/2 taza', 'calories' => 30],
                ]
            ],
        ];

        $menu07 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Omelette de champiñones', 'quant' => '1 pieza', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Jugo de naranja natural', 'quant' => '1 vaso', 'calories' => 120],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Manzana', 'quant' => '1 pieza', 'calories' => 80],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de atún', 'quant' => '1 plato', 'calories' => 250],
                    ['id' => 2, 'desc' => 'Arroz integral cocido', 'quant' => '1/2 taza', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Sopa de verduras', 'quant' => '1 plato', 'calories' => 200],
                    ['id' => 2, 'desc' => 'Pechuga de pollo asada', 'quant' => '100g', 'calories' => 150],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Yogur griego natural', 'quant' => '1 taza', 'calories' => 120],
                ]
            ],
        ];


        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '1250', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '1370', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu02),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '1100', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu03),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 04',
            'total_cal' => '1380', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu04),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 05',
            'total_cal' => '1380', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu05),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 06',
            'total_cal' => '1265', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu06),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 07',
            'total_cal' => '1320', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu07),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
