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
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Taza de leche descremada', 'quant' => '1 taza', 'calories' => 80],
                    ['id' => 2, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '2 rebanadas, 1/2 aguacate', 'calories' => 300],
                    ['id' => 3, 'desc' => 'Revuelto de queso tofu con espinacas y champiñones', 'quant' => '200g tofu, espinacas, champiñones al gusto', 'calories' => 400],
                    ['id' => 4, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
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
                    ['id' => 1, 'desc' => 'Ensalada de lentejas, aguacate y tomate', 'quant' => '1 taza de lentejas cocidas, aguacate, tomate al gusto', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Agua de limón sin azúcar', 'quant' => '2 vasos', 'calories' => 100],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de pescado blanco a la parrilla con espárragos', 'quant' => '200g de pescado blanco, 1 taza de espárragos', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Puré de camote', 'quant' => '1 taza', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Taza de almendras y pistachos', 'quant' => '1 taza', 'calories' => 600],
                ]
            ],
        ];

        $menu02_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Tostada de aguacate con huevo', 'quant' => '1 rebanada de pan integral, 50g aguacate, 1 huevo', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Batido de frutas tropicales con espinacas', 'quant' => '1 taza de frutas tropicales, 1 taza de espinacas, 200ml leche de coco', 'calories' => 250],
                    ['id' => 3, 'desc' => 'Yogur griego con granola y miel', 'quant' => '200g yogur griego, 30g granola, 1 cucharada de miel', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Batido de proteínas con leche de almendras', 'quant' => '1 scoop proteína, 250ml leche de almendras', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de nopales con pollo a la parrilla', 'quant' => '100g nopales cocidos, 100g pechuga de pollo a la parrilla, verduras mixtas', 'calories' => 500],
                    ['id' => 2, 'desc' => 'Tacos de jícama con ceviche de pescado', 'quant' => '3 tacos de jícama, ceviche de pescado, limón y salsa', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Sopa de verduras con calabacitas y elote', 'quant' => 'Caldo de verduras, calabacitas, elote, hierbas frescas', 'calories' => 350],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Pechuga de pollo al horno con espárragos y batata', 'quant' => '200g pechuga de pollo, 100g espárragos, 150g batata al vapor', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Ensalada de espinacas, fresas y queso panela', 'quant' => '100g espinacas, 1 taza de fresas, 30g queso panela, nueces', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Tacos de camarón al chipotle con aguacate', 'quant' => '3 tacos de camarón al chipotle, aguacate, cilantro y cebolla', 'calories' => 500],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Yogur griego con nueces y miel', 'quant' => '200g yogur griego, 30g nueces, 1 cucharada de miel', 'calories' => 250],
                ]
            ],
        ];

        $menu03_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Taza de leche descremada', 'quant' => '1 taza', 'calories' => 80],
                    ['id' => 2, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '2 rebanadas, 1/2 aguacate', 'calories' => 300],
                    ['id' => 3, 'desc' => 'Omelette de espinacas, champiñones y queso', 'quant' => '2 huevos, espinacas, champiñones y queso al gusto', 'calories' => 400],
                    ['id' => 4, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
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
                    ['id' => 1, 'desc' => 'Ensalada de quinoa, aguacate y camarones', 'quant' => '1 taza de quinoa cocida, aguacate, camarones al gusto', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Tacos de pollo a la parrilla con guacamole', 'quant' => '3 tacos de pollo, guacamole al gusto', 'calories' => 700],
                    ['id' => 3, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de salmón al horno con espárragos', 'quant' => '200g de salmón, 1 taza de espárragos', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Puré de camote', 'quant' => '1/2 taza', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano y almendras', 'quant' => '1 taza de leche descremada, 1 plátano, 30g de almendras', 'calories' => 400],
                ]
            ],
        ];

        $menu04_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '2 rebanadas, 1/2 aguacate', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '2 rebanadas, 1/2 aguacate', 'calories' => 100],
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
                    ['id' => 1, 'desc' => 'Ensalada de quinoa, aguacate y camarones', 'quant' => '1 taza de quinoa cocida, aguacate, camarones al gusto', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Tacos de pescado a la parrilla con guacamole', 'quant' => '3 tacos de pescado, guacamole al gusto', 'calories' => 700],
                    ['id' => 3, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de salmón a la parrilla con espárragos', 'quant' => '200g de salmón, 1 taza de espárragos', 'calories' => 800],
                    ['id' => 2, 'desc' => 'Puré de calabaza asada', 'quant' => '1/2 taza', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Taza de nueces y almendras', 'quant' => '1/2 taza', 'calories' => 300],
                ]
            ],
        ];

        $menu05_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Tostada de frijoles refritos con aguacate', 'quant' => '1 tostada de maíz, 50g frijoles refritos, 50g aguacate', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Batido de kiwi, espinacas y leche de almendras', 'quant' => '2 kiwis, 1 taza de espinacas, 200ml leche de almendras', 'calories' => 250],
                    ['id' => 3, 'desc' => 'Yogur griego con frutos rojos y granola', 'quant' => '200g yogur griego, 1 taza de frutos rojos, 30g granola', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Puñado de almendras', 'quant' => '30g almendras', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa con verduras asadas', 'quant' => '100g quinoa cocida, 100g verduras asadas (pimientos, calabacín, cebolla), aderezo ligero', 'calories' => 500],
                    ['id' => 2, 'desc' => 'Pechuga de pollo a la parrilla con espárragos', 'quant' => '150g pechuga de pollo, 100g espárragos, limón y hierbas', 'calories' => 450],
                    ['id' => 3, 'desc' => 'Sopa de lentejas con espinacas', 'quant' => '1 taza de lentejas cocidas, 1 taza de espinacas, caldo de verduras', 'calories' => 350],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón al horno con espárragos y puré de coliflor', 'quant' => '200g filete de salmón, 100g espárragos, 150g puré de coliflor', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Ensalada de tomate, pepino y queso feta', 'quant' => '2 tomates, 1 pepino, 50g queso feta, aceite de oliva y vinagre balsámico', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Tacos de tinga de pollo con guacamole', 'quant' => '3 tacos de tinga de pollo, guacamole, cilantro y cebolla', 'calories' => 500],
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
                    ['id' => 1, 'desc' => 'Omelette de champiñones y espinacas', 'quant' => '2 huevos, 50g champiñones, 1 taza de espinacas', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Smoothie de mango, plátano y leche de coco', 'quant' => '1 mango, 1 plátano, 200ml leche de coco', 'calories' => 250],
                    ['id' => 3, 'desc' => 'Tostadas de aguacate con tomate cherry', 'quant' => '2 rebanadas de pan integral, 50g aguacate, tomates cherry', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Puñado de nueces mixtas', 'quant' => '30g nueces mixtas', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de garbanzos con pepino y pimiento', 'quant' => '100g garbanzos cocidos, 1 pepino, 1 pimiento, aderezo ligero', 'calories' => 450],
                    ['id' => 2, 'desc' => 'Salmón a la parrilla con espárragos', 'quant' => '150g filete de salmón, 100g espárragos, limón y hierbas', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Sopa de calabaza y zanahoria', 'quant' => 'Caldo de verduras, calabaza, zanahoria, hierbas frescas', 'calories' => 350],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Pechuga de pollo al limón con quinoa', 'quant' => '200g pechuga de pollo, 100g quinoa cocida, limón y especias', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Ensalada de espinacas, fresas y queso de cabra', 'quant' => '100g espinacas, 1 taza de fresas, 30g queso de cabra, nueces', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Tacos de camarón con aguacate y salsa picante', 'quant' => '3 tacos de camarón, aguacate, salsa picante, cilantro', 'calories' => 500],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Yogur griego con miel y almendras', 'quant' => '200g yogur griego, 1 cucharada de miel, 30g almendras', 'calories' => 250],
                ]
            ],
        ];

        $menu07_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Bowl de yogur con frutas y granola', 'quant' => '200g yogur natural, 1/2 taza de frutas mixtas, 30g granola', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Tostadas de aguacate con huevo hervido', 'quant' => '2 rebanadas de pan integral, 100g aguacate, 2 huevos hervidos', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Puñado de almendras y uvas', 'quant' => '30g almendras, 1 taza de uvas', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa y vegetales asados', 'quant' => '100g quinoa cocida, 100g vegetales asados (pimientos, calabacín, cebolla), aderezo ligero', 'calories' => 450],
                    ['id' => 2, 'desc' => 'Pollo al horno con batata y espárragos', 'quant' => '150g pechuga de pollo, 150g batata al horno, 100g espárragos', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Sopa de lentejas con verduras', 'quant' => '1 taza de lentejas cocidas, verduras mixtas, caldo de verduras', 'calories' => 350],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón a la parrilla con ensalada de aguacate', 'quant' => '200g filete de salmón, 100g aguacate, mezcla de hojas verdes', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Ensalada de queso de cabra y nueces', 'quant' => '100g queso de cabra, 30g nueces, mezcla de hojas verdes', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Tacos de carne asada con guacamole', 'quant' => '3 tacos de carne asada, guacamole, cilantro y cebolla', 'calories' => 500],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Yogur griego con miel y almendras', 'quant' => '200g yogur griego, 1 cucharada de miel, 30g almendras', 'calories' => 250],
                ]
            ],
        ];

        
        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '4180', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '4000', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu02_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '4030', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu03_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 04',
            'total_cal' => '3850', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu04_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 05',
            'total_cal' => '4100', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu05_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 06',
            'total_cal' => '4150', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu06_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 07',
            'total_cal' => '4000', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu07_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
