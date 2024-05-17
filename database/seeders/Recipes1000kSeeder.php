<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Recipes1000kSeeder extends Seeder
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
                    ['id' => 1, 'desc' => 'Avena con frutas', 'quant' => '1/4 taza de avena cocida, frutas al gusto (plátano, fresas)', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Leche descremada', 'quant' => '1/2 taza', 'calories' => 50],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur natural bajo en grasa', 'quant' => '1/2 envase', 'calories' => 40],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Pechuga de pollo a la plancha', 'quant' => '50g', 'calories' => 100],
                    ['id' => 2, 'desc' => 'Ensalada mixta', 'quant' => 'Vegetales al gusto (lechuga, gitomate, pepino) con vinagreta ligera', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Colación Tarde',
                'items' => [
                    ['id' => 1, 'desc' => 'Frutas frescas', 'quant' => 'Al gusto', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Pescado al horno', 'quant' => '50g', 'calories' => 100],
                    ['id' => 2, 'desc' => 'Espárragos al vapor', 'quant' => '1/2 taza', 'calories' => 30],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Almendras', 'quant' => '10 unidades', 'calories' => 60],
                ]
            ],
        ];

        $menu02 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur natural bajo en grasa', 'quant' => '1 envase', 'calories' => 50],
                    ['id' => 2, 'desc' => 'Pan integral tostado', 'quant' => '1 rebanada', 'calories' => 60],
                    ['id' => 3, 'desc' => 'Mermelada de frutas sin azúcar', 'quant' => '1 cucharada', 'calories' => 30],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Fruta fresca (manzana, pera)', 'quant' => '1 pieza mediana', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Ensalada verde con pollo a la plancha', 'quant' => '1 plato', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Tortilla de maíz', 'quant' => '1 pieza', 'calories' => 60],
                    ['id' => 3, 'desc' => 'Aguacate', 'quant' => '1/4 pieza', 'calories' => 70],
                ]
            ],
            [
                'name' => 'Colación Tarde',
                'items' => [
                    ['id' => 1, 'desc' => 'Almendras o nueces', 'quant' => '10 unidades', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Pescado al horno', 'quant' => '100g', 'calories' => 100],
                    ['id' => 2, 'desc' => 'Brócoli al vapor', 'quant' => '1/2 taza', 'calories' => 30],
                    ['id' => 3, 'desc' => 'Arroz integral', 'quant' => '1/2 taza', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Leche descremada', 'quant' => '1 vaso', 'calories' => 100],
                ]
            ],
        ];

        $menu03 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Avena integral cocida', 'quant' => '1/2 taza', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Leche descremada', 'quant' => '1 vaso', 'calories' => 60],
                    ['id' => 3, 'desc' => 'Plátano', 'quant' => '1 pieza', 'calories' => 70],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur natural bajo en grasa', 'quant' => '1 envase', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Pechuga de pollo a la plancha', 'quant' => '100g', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Arroz integral', 'quant' => '1/2 taza', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Ensalada verde (lechuga, jitomate)', 'quant' => '1 plato', 'calories' => 30],
                ]
            ],
            [
                'name' => 'Colación Tarde',
                'items' => [
                    ['id' => 1, 'desc' => 'Fruta fresca (manzana, pera)', 'quant' => '1 pieza mediana', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Salmón al horno', 'quant' => '100g', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Espárragos al vapor', 'quant' => '1/2 taza', 'calories' => 20],
                    ['id' => 3, 'desc' => 'Amaranto cocido', 'quant' => '1/2 taza', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Almendras o nueces', 'quant' => '10 unidades', 'calories' => 50],
                ]
            ],
        ];

        $menu04 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Pan integral', 'quant' => '1 rebanada', 'calories' => 70],
                    ['id' => 2, 'desc' => 'Jamón de pavo bajo en grasa', 'quant' => '2 rebanadas', 'calories' => 50],
                    ['id' => 3, 'desc' => 'Queso fresco bajo en grasa', 'quant' => '30g', 'calories' => 40],
                    ['id' => 4, 'desc' => 'Zumo de naranja natural', 'quant' => '1 vaso', 'calories' => 80],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur natural bajo en grasa', 'quant' => '1 envase', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Lentejas cocidas', 'quant' => '1/2 taza', 'calories' => 120],
                    ['id' => 2, 'desc' => 'Pechuga de pollo a la plancha', 'quant' => '100g', 'calories' => 150],
                    ['id' => 3, 'desc' => 'Ensalada mixta (lechuga, jitomate, pepino)', 'quant' => '1 plato', 'calories' => 30],
                    ['id' => 4, 'desc' => 'Aceite de oliva (para aliñar ensalada)', 'quant' => '1 cucharadita', 'calories' => 30],
                ]
            ],
            [
                'name' => 'Colación Tarde',
                'items' => [
                    ['id' => 1, 'desc' => 'Manzana', 'quant' => '1 pieza mediana', 'calories' => 70],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Pescado blanco a la plancha', 'quant' => '100g', 'calories' => 120],
                    ['id' => 2, 'desc' => 'Brócoli al vapor', 'quant' => '1/2 taza', 'calories' => 30],
                    ['id' => 3, 'desc' => 'Puré de papas', 'quant' => '1/2 taza', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Almendras o nueces', 'quant' => '10 unidades', 'calories' => 50],
                ]
            ],
        ];

        $menu05 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Avena con leche descremada', 'quant' => '1 taza', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Plátano', 'quant' => '1 unidad pequeña', 'calories' => 90],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur natural sin azúcar', 'quant' => '1 envase pequeño', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Ensalada mixta (lechuga, jitomate, pepino) con aderezo de vinagre', 'quant' => '1 plato mediano', 'calories' => 100],
                    ['id' => 2, 'desc' => 'Pechuga de pollo a la plancha', 'quant' => '100 g', 'calories' => 150],
                    ['id' => 3, 'desc' => 'Arroz integral cocido', 'quant' => '1/2 taza', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Sopa de verduras (caldo de pollo con zanahoria, calabacín, cebolla)', 'quant' => '1 taza', 'calories' => 80],
                    ['id' => 2, 'desc' => 'Tortilla de maíz', 'quant' => '1 pieza pequeña', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Manzana', 'quant' => '1 unidad pequeña', 'calories' => 80],
                ]
            ],
        ];

        $menu06 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Licuado de fresas con leche descremada y avena', 'quant' => '1 vaso', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '1 rebanada', 'calories' => 100],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Zanahorias', 'quant' => '1 taza', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de pescado a la plancha', 'quant' => '100 g', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Puré de papas', 'quant' => '1/2 taza', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Espárragos al vapor', 'quant' => '1 porción pequeña', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Ensalada de espinacas, jitomate y nueces', 'quant' => '1 plato mediano', 'calories' => 80],
                    ['id' => 2, 'desc' => 'Tortilla de harina integral', 'quant' => '1 pieza', 'calories' => 80],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Kiwi', 'quant' => '1 unidad pequeña', 'calories' => 50],
                ]
            ],
        ];

        $menu07 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Avena con leche descremada', 'quant' => '1/2 taza', 'calories' => 75],
                    ['id' => 2, 'desc' => 'Plátano', 'quant' => '1/2 unidad', 'calories' => 50],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur natural sin azúcar', 'quant' => '1 envase', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Ensalada de lechuga, jitomate y pepino', 'quant' => '1 taza', 'calories' => 70],
                    ['id' => 2, 'desc' => 'Pechuga de pollo a la plancha', 'quant' => '50 g', 'calories' => 75],
                    ['id' => 3, 'desc' => 'Puré de calabaza', 'quant' => '1/2 taza', 'calories' => 60],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Sopa de verduras (caldo de pollo)', 'quant' => '1 taza', 'calories' => 60],
                    ['id' => 2, 'desc' => 'Pescado a la plancha', 'quant' => '100 g', 'calories' => 150],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Manzana', 'quant' => '1/2 unidad', 'calories' => 50],
                ]
            ],
        ];

        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '630', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '850', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu02),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '980', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu03),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 04',
            'total_cal' => '990', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu04),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 05',
            'total_cal' => '850', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu05),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 06',
            'total_cal' => '810', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu06),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 07',
            'total_cal' => '630', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu07),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
