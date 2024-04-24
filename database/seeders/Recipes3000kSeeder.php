<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Recipes3000kSeeder extends Seeder
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
                    ['id' => 1, 'desc' => 'Omelette de espinacas y champiñones', 'quant' => '2 huevos, espinacas y champiñones al gusto', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '2 rebanadas, 1/2 aguacate', 'calories' => 250],
                    ['id' => 3, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de frutas con yogurt griego', 'quant' => '1 taza de frutas, 1 envase de yogurt griego sin azúcar', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Tacos de pollo a la parrilla con guacamole', 'quant' => '3 tacos, pollo, guacamole al gusto', 'calories' => 500],
                    ['id' => 2, 'desc' => 'Arroz integral cocido', 'quant' => '1 taza', 'calories' => 200],
                    ['id' => 3, 'desc' => 'Ensalada de queso de cabra y nueces', 'quant' => '1 taza de lechuga, queso de cabra, nueces y aderezo ligero', 'calories' => 400],
                    ['id' => 4, 'desc' => 'Agua de horchata sin azúcar', 'quant' => '1 vaso', 'calories' => 150],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de salmón a la parrilla con espárragos', 'quant' => '100g de salmón, 1/2 taza de espárragos', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Parfait de yogur griego con frutos rojos', 'quant' => '1 envase de yogur griego, frutos rojos al gusto', 'calories' => 400],
                ]
            ],
        ];

        $menu02_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Taza de leche descremada', 'quant' => '1 taza', 'calories' => 80],
                    ['id' => 2, 'desc' => 'Fruta fresca (por ejemplo, mango o piña)', 'quant' => '1 taza', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Café negro o té verde sin azúcar', 'quant' => '1 taza', 'calories' => 0],
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
                    ['id' => 1, 'desc' => 'Enchiladas verdes de pollo con frijoles refritos', 'quant' => '3 enchiladas, pollo desmenuzado, frijoles refritos al gusto', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Ensalada de espinacas, fresas y nueces', 'quant' => '1 taza de espinacas, fresas, nueces y aderezo ligero', 'calories' => 350],
                    ['id' => 3, 'desc' => 'Agua de Jamaica sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de ternera a la parrilla con espárragos', 'quant' => '200g de ternera, 1 taza de espárragos', 'calories' => 700],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y almendras', 'quant' => '1 taza de leche descremada, 1 plátano, 30g de almendras', 'calories' => 400],
                ]
            ],
        ];

        $menu03_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Taza de leche descremada', 'quant' => '1 taza', 'calories' => 80],
                    ['id' => 2, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '2 rebanadas, 1/2 aguacate', 'calories' => 300],
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
                    ['id' => 1, 'desc' => 'Ensalada de arroz, aguacate y camarones', 'quant' => '1 taza de quinoa cocida, aguacate, camarones al gusto', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de salmón al horno con espárragos', 'quant' => '200g de salmón, 1 taza de espárragos', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Puré de camote', 'quant' => '1/2 taza', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y almendras', 'quant' => '1 taza de leche descremada, 1 plátano, 30g de almendras', 'calories' => 400],
                ]
            ],
        ];

        // Menu 01
        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '2950', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '2730', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu02_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '2930', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu03_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
