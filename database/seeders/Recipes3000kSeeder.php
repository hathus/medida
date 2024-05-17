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

        $menu04_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Huevos revueltos con jitomate y cebolla', 'quant' => '3 huevos, 50g jitomate, 30g cebolla', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Plátano con yogurt natural', 'quant' => '1 plátano, 200g yogurt natural', 'calories' => 250],
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
                    ['id' => 1, 'desc' => 'Pollo asado con arroz y ensalada verde', 'quant' => '200g pollo asado, 150g arroz cocido, 100g ensalada verde', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Mango fresco', 'quant' => '1 mango', 'calories' => 200],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Pechuga de pollo a la plancha con espárragos', 'quant' => '200g pechuga de pollo, 100g espárragos', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Manzana asada con canela', 'quant' => '1 manzana, canela al gusto', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Yogurt griego con almendras', 'quant' => '100g yogurt griego, 30g almendras', 'calories' => 150],
                ]
            ],
        ];

        $menu05_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Smoothie (batido) verde con espinacas, piña y pepino', 'quant' => '1 taza de espinacas, 1 taza de piña, 1/2 pepino, 200ml agua de coco', 'calories' => 250],
                    ['id' => 2, 'desc' => 'Tostadas de aguacate con tomate y queso fresco', 'quant' => '2 rebanadas de pan integral tostado, 50g aguacate, 50g tomate, 30g queso fresco', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Almendras y manzana', 'quant' => '30g almendras, 1 manzana', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa (amaranto) con aguacate, pepino y lentejas', 'quant' => '100g quinoa cocida, 50g aguacate, 50g pepino, 50g lentejas cocidas', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Zumo de zanahoria, naranja y jengibre', 'quant' => '1 zanahoria, 2 naranjas, 1 cucharadita de jengibre', 'calories' => 200],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de salmón al horno con espárragos', 'quant' => '200g salmón, 100g espárragos', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Infusión de hierbas y semillas de chía', 'quant' => '1 taza de infusión de hierbas, 1 cucharada de semillas de chía', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Yogurt griego con miel y almendras', 'quant' => '200g yogurt griego, 1 cucharada de miel, 30g almendras', 'calories' => 350],
                ]
            ],
        ];

        $menu06_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Tostadas de aguacate con tomate y queso fresco', 'quant' => '2 rebanadas de pan integral tostado, 50g aguacate, 50g tomate, 30g queso fresco', 'calories' => 350],
                    ['id' => 2, 'desc' => 'Avena cocida con almendras y miel', 'quant' => '50g avena, 30g almendras, 1 cucharada de miel', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Manzana con yogur griego', 'quant' => '1 manzana, 200g yogur griego', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Sopa de verduras con pollo y caldo de huesos', 'quant' => '200g pollo, 100g caldo de huesos, verduras mixtas', 'calories' => 500],
                    ['id' => 2, 'desc' => 'Zumo de zanahoria, naranja y jengibre', 'quant' => '1 zanahoria, 2 naranjas, 1 cucharadita de jengibre', 'calories' => 200],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Pescado al horno con espárragos y batata asada', 'quant' => '200g filete de pescado, 100g espárragos, 150g batata asada', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Infusión de hierbas con semillas de chía', 'quant' => '1 taza de infusión de hierbas, 1 cucharada de semillas de chía', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Yogur natural con frutas rojas y almendras', 'quant' => '200g yogur natural, 50g frutas rojas, 30g almendras', 'calories' => 350],
                ]
            ],
        ];

        $menu07_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Pan tostado con aguacate y huevo pochado', 'quant' => '2 rebanadas, 50g aguacate, 1 huevo pochado', 'calories' => 350],
                    ['id' => 2, 'desc' => 'Licuado de plátano, fresas y almendras', 'quant' => '1 plátano, 100g fresas, 30g almendras', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogurt natural con nueces', 'quant' => '200g yogurt natural, 30g nueces', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de atún con garbanzos y aguacate', 'quant' => '100g atún enlatado, 50g garbanzos cocidos, 50g aguacate', 'calories' => 500],
                    ['id' => 2, 'desc' => 'Batido de espinacas, piña y jengibre', 'quant' => '1 taza de espinacas, 1 taza de piña, 1 cucharadita de jengibre', 'calories' => 200],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de salmón al horno con espárragos y batata asada', 'quant' => '200g salmón, 100g espárragos, 150g batata asada', 'calories' => 750],
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

        DB::table('recipes')->insert([
            'name' => 'Menu 04',
            'total_cal' => '2800', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu04_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 05',
            'total_cal' => '2750', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu05_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 06',
            'total_cal' => '2700', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu06_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 07',
            'total_cal' => '2750', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu07_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
