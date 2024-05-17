<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Recipes3400kSeeder extends Seeder
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
                    ['id' => 1, 'desc' => 'Tacos de pollo a la parrilla con guacamole', 'quant' => '3 tacos de pollo, guacamole al gusto', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],,

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de res a la parrilla con espárragos', 'quant' => '200g de filete de res, 1 taza de espárragos', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Puré de papas con mantequilla', 'quant' => '1/2 taza', 'calories' => 300],
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
                    ['id' => 1, 'desc' => 'Omelette de espinacas, champiñones y queso', 'quant' => '2 huevos, espinacas, champiñones y queso al gusto', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Tostadas de pan integral con aguacate', 'quant' => '2 tostadas, 1/2 aguacate', 'calories' => 300],
                    ['id' => 3, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                    ['id' => 4, 'desc' => 'Taza de leche descremada', 'quant' => '1 taza', 'calories' => 80],
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
                    ['id' => 1, 'desc' => 'Tacos de pescado con guacamole', 'quant' => '3 tacos de pescado, guacamole al gusto', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de res a la parrilla con espárragos', 'quant' => '150g de filete de res, 1 taza de espárragos', 'calories' => 650],
                    ['id' => 2, 'desc' => 'Puré de papas con mantequilla', 'quant' => '1/2 taza', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y almendras', 'quant' => '1 taza de leche descremada, 1 plátano, 30g de almendras', 'calories' => 400],
                ]
            ],
        ];

        $menu03_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Batido verde con espinacas, piña y pepino', 'quant' => '1 taza de espinacas, 1 taza de piña, 1/2 pepino, 200ml agua de coco', 'calories' => 250],
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
                    ['id' => 1, 'desc' => 'Ensalada de quinoa con aguacate, pepino y lentejas', 'quant' => '100g quinoa cocida, 50g aguacate, 50g pepino, 50g lentejas cocidas', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Sopa de verduras con pollo y caldo', 'quant' => '200g pollo, 100g caldo de huesos, verduras mixtas', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Zumo de zanahoria, naranja y jengibre', 'quant' => '1 zanahoria, 2 naranjas, 1 cucharadita de jengibre', 'calories' => 200],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Pescado al horno con espárragos y batata asada', 'quant' => '200g filete de pescado, 100g espárragos, 150g batata asada', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Ensalada mixta con aguacate, nueces y vinagreta de limón', 'quant' => '100g lechuga, 50g espinacas, 50g aguacate, 30g nueces, vinagreta de limón', 'calories' => 400],
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
                    ['id' => 1, 'desc' => 'Licuado de plátano, fresas y espinacas', 'quant' => '1 plátano, 100g fresas, 50g espinacas', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Tostadas de aguacate con huevo', 'quant' => '2 rebanadas de pan integral, 50g aguacate, 1 huevo', 'calories' => 350],
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
                    ['id' => 1, 'desc' => 'Pollo a la plancha con puré de camote y espárragos', 'quant' => '200g pechuga de pollo, 150g camote, 100g espárragos', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Jugo verde de espinacas, piña y limón', 'quant' => '1 taza de espinacas, 1 taza de piña, jugo de 1 limón', 'calories' => 200],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón al horno con ensalada de espinacas y tomate', 'quant' => '200g filete de salmón, 100g espinacas, 50g tomate', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Ensalada de lentejas con aguacate, pepino y nueces', 'quant' => '100g lentejas cocidas, 50g aguacate, 50g pepino, 30g nueces', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Infusión de manzanilla con almendras', 'quant' => '1 taza de infusión de manzanilla, 30g almendras', 'calories' => 50],
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
                    ['id' => 1, 'desc' => 'Licuado de mango, piña y espinacas', 'quant' => '1 taza de mango, 1 taza de piña, 50g espinacas', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Tostadas de aguacate con huevo revuelto', 'quant' => '2 rebanadas de pan integral, 50g aguacate, 2 huevos revueltos', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Zanahorias con hummus (garbanzos)', 'quant' => '100g zanahorias, 50g hummus (garbanzos)', 'calories' => 150],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa con aguacate, tomate y garbanzos', 'quant' => '100g quinoa cocida, 50g aguacate, 50g tomate, 50g garbanzos cocidos', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Pollo al curry (gengibre) con arroz integral y brócoli', 'quant' => '200g pechuga de pollo, 100g arroz integral cocido, 100g brócoli', 'calories' => 700],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Pescado a la parrilla con espárragos y puré de camote', 'quant' => '200g filete de pescado, 100g espárragos, 150g camote', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Infusión de té de hierbas con almendras', 'quant' => '1 taza de té de hierbas, 30g almendras', 'calories' => 50],
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
                    ['id' => 1, 'desc' => 'Tostadas de aguacate con tomate y queso fresco', 'quant' => '2 rebanadas de pan integral, 50g aguacate, 50g tomate, 30g queso fresco', 'calories' => 350],
                    ['id' => 2, 'desc' => 'Avena cocida con plátano y almendras', 'quant' => '50g avena, 1 plátano, 30g almendras', 'calories' => 300],
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
                    ['id' => 1, 'desc' => 'Salmón al horno con espárragos y quinoa', 'quant' => '200g filete de salmón, 100g espárragos, 100g quinoa cocida', 'calories' => 700],
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

        $menu07_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Batido de espinacas, piña y pepino', 'quant' => '1 taza de espinacas, 1 taza de piña, 1/2 pepino, 200ml agua de coco', 'calories' => 250],
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
                    ['id' => 1, 'desc' => 'Ensalada de quinoa con aguacate, pepino y lentejas', 'quant' => '100g quinoa cocida, 50g aguacate, 50g pepino, 50g lentejas cocidas', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Sopa de verduras con pollo y caldo', 'quant' => '200g pollo, 100g caldo de huesos, verduras mixtas', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Zumo de zanahoria, naranja y jengibre', 'quant' => '1 zanahoria, 2 naranjas, 1 cucharadita de jengibre', 'calories' => 200],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Pescado al horno con espárragos y batata asada', 'quant' => '200g filete de pescado, 100g espárragos, 150g batata asada', 'calories' => 700],
                    ['id' => 2, 'desc' => 'Ensalada mixta con aguacate, nueces y vinagreta de limón', 'quant' => '100g lechuga, 50g espinacas, 50g aguacate, 30g nueces, vinagreta de limón', 'calories' => 400],
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
            'total_cal' => '3130', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '3380', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu02_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '3400', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu03_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 04',
            'total_cal' => '3100', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu04_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 05',
            'total_cal' => '3100', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu05_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 06',
            'total_cal' => '3150', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu06_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('recipes')->insert([
            'name' => 'Menu 07',
            'total_cal' => '3400', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu07_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
