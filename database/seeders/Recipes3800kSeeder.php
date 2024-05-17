<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Recipes3800kSeeder extends Seeder
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
                    ['id' => 1, 'desc' => 'Tacos de pollo a la parrilla con guacamole', 'quant' => '3 tacos de pollo, guacamole al gusto', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de res a la parrilla con espárragos', 'quant' => '200g de filete de res, 1 taza de espárragos', 'calories' => 800],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Taza de frutos secos variados', 'quant' => '1 taza', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Taza de frutos secos variados', 'quant' => '1 taza', 'calories' => 600],
                ]
            ],
        ];

        $menu02_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Licuado de fresas, plátano y espinacas', 'quant' => '1 taza de fresas, 1 plátano, 50g espinacas, 200ml leche de almendras', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Avena cocida con almendras y miel', 'quant' => '50g avena, 30g almendras, 1 cucharada de miel', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con frutos rojos y semillas de chía', 'quant' => '200g yogur griego, 1/2 taza de frutos rojos, 1 cucharada de semillas de chía', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa con aguacate, pepino y lentejas', 'quant' => '100g quinoa cocida, 50g aguacate, 50g pepino, 50g lentejas cocidas', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Sopa de verduras con pollo y caldo de huesos', 'quant' => '200g pollo, 100g caldo de huesos, verduras mixtas', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Batido de espinacas, piña y jengibre', 'quant' => '1 taza de espinacas, 1 taza de piña, 1 cucharadita de jengibre', 'calories' => 200],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de salmón al horno con espárragos y batata asada', 'quant' => '200g filete de salmón, 100g espárragos, 150g batata asada', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Ensalada de garbanzos con aguacate, tomate y nueces', 'quant' => '100g garbanzos cocidos, 50g aguacate, 50g tomate, 30g nueces', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Infusión de hierbas con almendras', 'quant' => '1 taza de infusión de hierbas, 30g almendras', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con leche de almendras', 'quant' => '1 scoop proteína, 250ml leche de almendras', 'calories' => 200],
                ]
            ],
        ];

        $menu03_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Batido de bayas y espinacas', 'quant' => '1 taza de bayas mixtas, 50g espinacas, 200ml leche de almendras', 'calories' => 250],
                    ['id' => 2, 'desc' => 'Tostadas de aguacate con huevo revuelto', 'quant' => '2 rebanadas de pan integral, 50g aguacate, 2 huevos revueltos', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Avena cocida con plátano y almendras', 'quant' => '50g avena, 1 plátano, 30g almendras', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con miel y nueces', 'quant' => '200g yogur griego, 1 cucharada de miel, 30g nueces', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa con aguacate, pepino y garbanzos', 'quant' => '100g quinoa cocida, 50g aguacate, 50g pepino, 50g garbanzos cocidos', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Sopa de verduras con pollo y fideos integrales', 'quant' => '200g pollo, 100g fideos integrales cocidos, verduras mixtas', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Batido de espinacas, piña y jengibre', 'quant' => '1 taza de espinacas, 1 taza de piña, 1 cucharadita de jengibre', 'calories' => 200],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de salmón al horno con espárragos y quinoa', 'quant' => '200g filete de salmón, 100g espárragos, 100g quinoa cocida', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Infusión de té verde con almendras', 'quant' => '1 taza de té verde, 30g almendras', 'calories' => 50],
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
                    ['id' => 1, 'desc' => 'Smoothie de plátano, espinacas y almendras', 'quant' => '1 plátano, 1 taza de espinacas, 30g almendras, 200ml leche de almendras', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Avena cocida con frutas y nueces', 'quant' => '50g avena, 1/2 taza de frutas mixtas, 30g nueces', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con miel y semillas de chía', 'quant' => '200g yogur griego, 1 cucharada de miel, 1 cucharada de semillas de chía', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa con aguacate, pepino y lentejas', 'quant' => '100g quinoa cocida, 50g aguacate, 50g pepino, 50g lentejas cocidas', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Sopa de verduras con pollo y arroz integral', 'quant' => '200g pollo, 100g arroz integral cocido, verduras mixtas', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Batido de zanahoria, naranja y jengibre', 'quant' => '1 zanahoria, 2 naranjas, 1 cucharadita de jengibre', 'calories' => 200],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de pescado al horno con espárragos y batata asada', 'quant' => '200g filete de pescado, 100g espárragos, 150g batata asada', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Ensalada de garbanzos con aguacate, tomate y nueces', 'quant' => '100g garbanzos cocidos, 50g aguacate, 50g tomate, 30g nueces', 'calories' => 400],
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
                    ['id' => 1, 'desc' => 'Smoothie de mango y espinacas', 'quant' => '1 taza de mango, 1 taza de espinacas, 200ml leche de coco', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Tostadas de hummus con tomate y aguacate', 'quant' => '2 rebanadas de pan integral, 50g hummus, 50g tomate, 50g aguacate', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Tortilla de huevo con champiñones y queso fresco', 'quant' => '2 huevos, 50g champiñones, 30g queso fresco', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Batido de frutas tropicales con semillas de chía', 'quant' => '1 taza de frutas tropicales, 1 cucharada de semillas de chía, 200ml leche de almendras', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de aguacate, tomate y quinoa', 'quant' => '50g aguacate, 50g tomate, 100g quinoa cocida', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Tacos de pescado al pastor con salsa de piña', 'quant' => '200g filete de pescado, tortillas de maíz, salsa de piña', 'calories' => 500],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Rollitos de pollo rellenos de espinacas y queso panela', 'quant' => '200g pechuga de pollo, 50g espinacas, 30g queso panela', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Ensalada de garbanzos con pepino, cilantro y aderezo de limón', 'quant' => '100g garbanzos cocidos, 50g pepino, cilantro fresco, aderezo de limón', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Infusión de té de hierbas con almendras', 'quant' => '1 taza de té de hierbas, 30g almendras', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con leche de coco', 'quant' => '1 scoop proteína, 250ml leche de coco', 'calories' => 200],
                ]
            ],
        ];

        $menu06_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Tostadas de aguacate con tomate y germinado de alfalfa', 'quant' => '2 rebanadas de pan integral, 50g aguacate, 50g tomate, germinado de alfalfa', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Avena cocida con plátano, semillas de chía y leche de almendras', 'quant' => '50g avena, 1 plátano, 1 cucharada de semillas de chía, 200ml leche de almendras', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Batido de frutos rojos con espinacas', 'quant' => '1 taza de frutos rojos, 1 taza de espinacas, 200ml agua de coco', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa con aguacate, pepino y brotes de alfalfa', 'quant' => '100g quinoa cocida, 50g aguacate, 50g pepino, brotes de alfalfa', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Sopa de verduras alcalinas con tofu y fideos de arroz', 'quant' => 'Caldo de verduras alcalinas, 100g tofu, fideos de arroz integrales', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Batido verde alcalino con espinacas, pepino y apio', 'quant' => '1 taza de espinacas, 1/2 pepino, 1 tallo de apio, 200ml agua de coco', 'calories' => 200],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Ensalada de garbanzos con aguacate, tomate y cilantro', 'quant' => '100g garbanzos cocidos, 50g aguacate, 50g tomate, cilantro fresco', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Salmón al horno con espárragos y batata al vapor', 'quant' => '200g filete de salmón, 100g espárragos, 150g batata al vapor', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Infusión de té verde con almendras', 'quant' => '1 taza de té verde, 30g almendras', 'calories' => 50],
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
                    ['id' => 1, 'desc' => 'Huevos rancheros con salsa verde', 'quant' => '2 huevos, 2 tortillas de maíz, 50g queso fresco, salsa verde casera', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Batido de fresa y plátano con espinacas', 'quant' => '1 taza de fresas, 1 plátano, 1 taza de espinacas, 200ml leche de almendras', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con granola y miel', 'quant' => '200g yogur griego, 30g granola, 1 cucharada de miel', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Enchiladas verdes de pollo con crema y queso', 'quant' => '3 enchiladas, 200g pollo deshebrado, crema, queso fresco', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Tacos de pescado al pastor con piña y cebolla', 'quant' => '3 tacos de pescado al pastor, piña asada, cebolla morada', 'calories' => 500],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Ensalada de espinacas, fresas y queso de cabra', 'quant' => '100g espinacas, 1 taza de fresas, 30g queso de cabra, nueces', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Tacos dorados de papa con guacamole', 'quant' => '3 tacos dorados de papa, guacamole casero, lechuga y salsa', 'calories' => 600],
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
            'total_cal' => '3630', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '3550', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu02_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '3500', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu03_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 04',
            'total_cal' => '3500', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu04_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 05',
            'total_cal' => '3750', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu05_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 06',
            'total_cal' => '3700', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu06_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 07',
            'total_cal' => '3550', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu07_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
