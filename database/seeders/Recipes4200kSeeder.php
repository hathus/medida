<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Recipes4200kSeeder extends Seeder
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
                    ['id' => 3, 'desc' => 'Omelette de espinacas, champiñones y queso', 'quant' => '2 huevos, espinacas, champiñones y queso al gusto', 'calories' => 400],
                    ['id' => 4, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
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
                    ['id' => 1, 'desc' => 'Ensalada de quinoa, aguacate y camarones', 'quant' => '1 taza de quinoa cocida, aguacate, camarones al gusto', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Tacos de pollo a la parrilla con guacamole', 'quant' => '3 tacos de pollo, guacamole al gusto', 'calories' => 700],
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
                    ['id' => 1, 'desc' => 'Filete de salmón al horno con espárragos', 'quant' => '200g de salmón, 1 taza de espárragos', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Puré de camote', 'quant' => '1/2 taza', 'calories' => 200],
                ]
            ],
        ];

        $menu02_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '2 rebanadas, 1/2 aguacate', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
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
                    ['id' => 1, 'desc' => 'Ensalada de quinoa, aguacate y camarones', 'quant' => '1 taza de quinoa cocida, aguacate, camarones al gusto', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Tacos de pescado a la parrilla con guacamole', 'quant' => '3 tacos de pescado, guacamole al gusto', 'calories' => 700],
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
                    ['id' => 1, 'desc' => 'Filete de salmón a la parrilla con espárragos', 'quant' => '200g de salmón, 1 taza de espárragos', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Puré de calabaza asada', 'quant' => '1/2 taza', 'calories' => 200],
                    ['id' => 3, 'desc' => 'Taza de nueces y almendras', 'quant' => '1/2 taza', 'calories' => 300],
                ]
            ],
        ];

        // Menu 01
        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '4030', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Menu 01
        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '3850', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu02_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
