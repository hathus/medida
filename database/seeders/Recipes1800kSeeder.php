<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Recipes1800kSeeder extends Seeder
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
                    ['id' => 1, 'desc' => 'Taza de leche descremada', 'quant' => '1 taza', 'calories' => 80],
                    ['id' => 2, 'desc' => 'Pan integral', 'quant' => '1 rebanada', 'calories' => 70],
                    ['id' => 3, 'desc' => 'Huevo revuelto', 'quant' => '1 huevo', 'calories' => 70],
                    ['id' => 4, 'desc' => 'Fruta fresca (por ejemplo, plátano o manzana)', 'quant' => '1 pieza mediana', 'calories' => 80],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur natural sin azúcar', 'quant' => '1 envase de yogur', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Ensalada de pollo a la parrilla con aguacate', 'quant' => '100g de pechuga de pollo, lechuga, tomate, aguacate, aderezo ligero', 'calories' => 100],
                    ['id' => 2, 'desc' => 'Arroz integral cocido', 'quant' => '1/2 taza', 'calories' => 350],
                    ['id' => 3, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de salmón al horno con verduras', 'quant' => '100g de salmón, 1 taza de verduras mixtas', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Puré de camote', 'quant' => '1/2 taza', 'calories' => 150],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur griego natural sin azúcar', 'quant' => '1 envase', 'calories' => 120],
                    ['id' => 2, 'desc' => 'Puñado de frutos secos', 'quant' => '30g', 'calories' => 200],
                ]
            ],
        ];

        $menu02 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Taza de leche descremada', 'quant' => '1 taza', 'calories' => 80],
                    ['id' => 2, 'desc' => 'Pan integral', 'quant' => '1 rebanada', 'calories' => 70],
                    ['id' => 3, 'desc' => 'Fruta fresca (por ejemplo, plátano o manzana)', 'quant' => '1 pieza mediana', 'calories' => 80],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur natural sin azúcar', 'quant' => '1 envase', 'calories' => 100],
                    ['id' => 2, 'desc' => 'Puñado de almendras', 'quant' => '30g', 'calories' => 180],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de pollo a la parrilla con aguacate', 'quant' => '100g de pechuga de pollo, lechuga, tomate, aguacate, aderezo ligero', 'calories' => 350],
                    ['id' => 2, 'desc' => 'Arroz integral cocido', 'quant' => '1/2 taza', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de salmón al horno con verduras', 'quant' => '100g de salmón, 1 taza de verduras mixtas', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Yogur griego natural sin azúcar', 'quant' => '1 envase', 'calories' => 120],
                ]
            ],
        ];

        $menu03 = [
            [
                'name' => 'Desayuno',
                'items' => [ //Desayuno
                    ['id' => 1, 'desc' => 'Avena con leche descremada', 'quant' => '1 taza', 'calories' => 180],
                    ['id' => 2, 'desc' => 'Plátano', 'quant' => '1 unidad', 'calories' => 105],
                    ['id' => 3, 'desc' => 'Almendras', 'quant' => '10 unidades', 'calories' => 70],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogurt natural descremado', 'quant' => '1 envase', 'calories' => 90],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de pollo y vegetales', 'quant' => '1 plato', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Tortilla de maíz', 'quant' => '2 unidades', 'calories' => 200],
                    ['id' => 3, 'desc' => 'Jitomate', 'quant' => '1 unidad', 'calories' => 20],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Pechuga de pollo a la plancha', 'quant' => '150g', 'calories' => 200],
                    ['id' => 2, 'desc' => 'Arroz integral', 'quant' => '1/2 taza', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Espárragos al vapor', 'quant' => '100g', 'calories' => 30],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Yogurt bajo en grasa', 'quant' => '1 envase', 'calories' => 100],
                ]
            ],
        ];

        $menu04 = array(
            [
                'name' => 'Desayuno',
                'items' => [  // Desayuno
                    ['id' => 1, 'desc' => 'Omelette de champiñones y espinacas', 'quant' => '2 huevos, 50g champiñones, 50g espinacas', 'calories' => 250],
                    ['id' => 2, 'desc' => 'Pan integral con aguacate', 'quant' => '2 rebanadas, 50g aguacate', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [  // Colación 1
                    ['id' => 1, 'desc' => 'Batido de proteínas con leche de almendras', 'quant' => '1 scoop proteína, 200ml leche de almendras', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [  // Comida
                    ['id' => 1, 'desc' => 'Ensalada de pollo a la parrilla', 'quant' => '100g pechuga de pollo, lechuga, tomate, pepino', 'calories' => 350],
                    ['id' => 2, 'desc' => 'Sopa de verduras con garbanzos', 'quant' => '150g sopa, 50g garbanzos cocidos', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [  // Cena
                    ['id' => 1, 'desc' => 'Pescado a la plancha con arroz integral', 'quant' => '150g pescado, 100g arroz integral', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [  // Colación 2
                    ['id' => 1, 'desc' => 'Palomitas de maíz caseras', 'quant' => '30g palomitas', 'calories' => 100],
                ]
            ],
        );

        $menu05 = array(
            [
                'name' => 'Desayuno',
                'items' => [  // Desayuno
                    ['id' => 1, 'desc' => 'Tostadas de aguacate y huevo', 'quant' => '2 tostadas, 2 huevos, 100g aguacate', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [  // Colación 1
                    ['id' => 1, 'desc' => 'Galletas integrales con queso cottage', 'quant' => '4 galletas, 50g queso cottage', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [  // Comida
                    ['id' => 1, 'desc' => 'Ensalada de pollo con aderezo de yogurt', 'quant' => '150g pechuga de pollo, lechuga, tomate, pepino', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [  // Cena
                    ['id' => 1, 'desc' => 'Pescado al horno con puré de papas', 'quant' => '200g pescado, 150g puré de papas', 'calories' => 500],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [  // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con leche de almendras', 'quant' => '1 scoop proteína, 250ml leche de almendras', 'calories' => 200],
                ]
            ],
        );

        $menu06 = array(
            [
                'name' => 'Desayuno',
                'items' => [  // Desayuno
                    ['id' => 1, 'desc' => 'Batido de frutas y yogurt', 'quant' => '200g yogurt natural, 1 plátano, 50g fresas', 'calories' => 250],
                    ['id' => 2, 'desc' => 'Jugo de naranja natural', 'quant' => '1 vaso (200ml)', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [  // Colación 1
                    ['id' => 1, 'desc' => 'Galletas integrales con queso cottage', 'quant' => '4 galletas, 50g queso cottage', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [  // Comida
                    ['id' => 1, 'desc' => 'Arroz integral con lentejas y verduras', 'quant' => '150g arroz integral, 100g lentejas, vegetales mixtos', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [  // Cena
                    ['id' => 1, 'desc' => 'Pescado al horno con puré de papas', 'quant' => '200g pescado, 150g puré de papas', 'calories' => 500],
                    ['id' => 2, 'desc' => 'Té verde con nueces', 'quant' => '1 taza té verde, 30g nueces', 'calories' => 150],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [  // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con leche de almendras', 'quant' => '1 scoop proteína, 250ml leche de almendras', 'calories' => 200],
                ]
            ],
        );

        $menu07 = array(
            [
                'name' => 'Desayuno',
                'items' => [  // Desayuno
                    ['id' => 1, 'desc' => 'Batido de frutas y yogurt', 'quant' => '100g yogurt natural, 1 plátano, 50g fresas', 'calories' => 150],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [  // Colación 1
                    ['id' => 1, 'desc' => 'Galletas integrales con mantequilla de cacahuate', 'quant' => '4 galletas, 30g mantequilla de cacahuate', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [  // Comida
                    ['id' => 1, 'desc' => 'Arroz integral con frijoles y guacamole', 'quant' => '100g arroz integral, 80g frijoles, 50g guacamole', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [  // Cena
                    ['id' => 1, 'desc' => 'Pescado al horno con ensalada de quinoa', 'quant' => '150g pescado, 100g quinoa cocida, vegetales mixtos', 'calories' => 500],
                    ['id' => 2, 'desc' => 'Ensalada de espinacas, nueces y queso panela', 'quant' => '100g espinacas, 30g nueces, 50g queso panela', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [  // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con leche de almendras', 'quant' => '1 scoop proteína, 250ml leche de almendras', 'calories' => 200],
                ]
            ],
        );


        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '1770', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '1480', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu02),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '1475', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu03),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 04',
            'total_cal' => '1750', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu04),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 05',
            'total_cal' => '1650', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu05),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 06',
            'total_cal' => '1800', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu06),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 07',
            'total_cal' => '1750', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu07),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
