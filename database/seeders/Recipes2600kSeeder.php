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
                'items' => [
                    ['id' => 1, 'desc' => 'Taza de leche descremada', 'quant' => '1 taza', 'calories' => 80],
                    ['id' => 2, 'desc' => 'Pan integral', 'quant' => '2 rebanadas', 'calories' => 140],
                    ['id' => 3, 'desc' => 'Huevo revuelto', 'quant' => '2 huevos', 'calories' => 140],
                    ['id' => 4, 'desc' => 'Fruta fresca (por ejemplo, fresas o piña)', 'quant' => '1 taza', 'calories' => 50],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur griego natural sin azúcar', 'quant' => '1 envase', 'calories' => 120],
                    ['id' => 2, 'desc' => 'Puñado de almendras', 'quant' => '30g', 'calories' => 180],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Ensalada de quinoa con vegetales asados', 'quant' => '1 taza de quinoa cocida, vegetales asados al gusto', 'calories' => 350],
                    ['id' => 2, 'desc' => 'Pechuga de pollo a la parrilla', 'quant' => '150g', 'calories' => 250],
                    ['id' => 3, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de salmón al horno', 'quant' => '150g', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Puré de camote', 'quant' => '1/2 taza', 'calories' => 150],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Rodajas de piña', 'quant' => '1 taza', 'calories' => 100],
                    ['id' => 2, 'desc' => 'Puñado de nueces', 'quant' => '30g', 'calories' => 200],
                ]
            ],
        ];



        // Menu 01
        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '2210', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
