<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Recipes4600kSeeder extends Seeder
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
                    ['id' => 1, 'desc' => 'Smoothie de frutas y espinacas', 'quant' => '1 plátano, 1 taza de espinacas, 1/2 taza de fresas, 200ml de leche de almendras', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Tostadas de aguacate con huevo revuelto', 'quant' => '2 rebanadas de pan integral, 100g de aguacate, 2 huevos revueltos', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Avena con almendras y miel', 'quant' => '1 taza de avena cocida, 30g de almendras, 1 cucharada de miel', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con nueces y frutas', 'quant' => '200g de yogur griego, 30g de nueces, 1/2 taza de frutas mixtas', 'calories' => 300],                
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa y vegetales asados', 'quant' => '100g de quinoa cocida, 100g de vegetales asados (pimientos, calabacín, cebolla), aderezo ligero', 'calories' => 450],
                    ['id' => 2, 'desc' => 'Pechuga de pollo a la parrilla con batata', 'quant' => '150g de pechuga de pollo a la parrilla, 150g de batata al horno, ensalada verde', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Sopa de verduras y garbanzos', 'quant' => 'Caldo de verduras, mix de verduras frescas, 1/2 taza de garbanzos cocidos', 'calories' => 350],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón al horno con espárragos', 'quant' => '200g de filete de salmón al horno, 100g de espárragos asados, limón y hierbas', 'calories' => 500],
                    ['id' => 2, 'desc' => 'Ensalada de queso de cabra y nueces', 'quant' => '100g de queso de cabra, 30g de nueces, mix de hojas verdes', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Tacos vegetarianos con guacamole', 'quant' => 'Tortillas de maíz, relleno de frijoles, verduras salteadas, guacamole casero', 'calories' => 450],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con frutas', 'quant' => '1 scoop de proteína en polvo, 1 taza de frutas frescas, agua o leche según preferencia', 'calories' => 250],
                ]
            ],
        ];

        $menu02_g1 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Bowl de avena con frutas y nueces', 'quant' => '1 taza de avena cocida, 1/2 taza de frutas frescas, 30g nueces', 'calories' => 350],
                    ['id' => 2, 'desc' => 'Tostadas integrales con aguacate y huevo revuelto', 'quant' => '2 rebanadas de pan integral, 100g aguacate, 2 huevos revueltos', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Smoothie verde con espinacas, piña y leche de almendras', 'quant' => '1 taza de espinacas, 1 taza de piña, 200ml leche de almendras', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano', 'quant' => '1 scoop de proteína, 1 plátano, agua o leche según preferencia', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa, aguacate y camarones', 'quant' => '100g quinoa cocida, 1 aguacate, 100g camarones, verduras frescas', 'calories' => 500],
                    ['id' => 2, 'desc' => 'Pechuga de pollo a la parrilla con batatas asadas', 'quant' => '150g pechuga de pollo, 200g batatas asadas, verduras al vapor', 'calories' => 550],
                    ['id' => 3, 'desc' => 'Sopa de verduras con lentejas', 'quant' => 'Caldo de verduras, mix de verduras frescas, 1 taza de lentejas cocidas', 'calories' => 350],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Filete de salmón al horno con espárragos', 'quant' => '200g filete de salmón, 100g espárragos, limón y hierbas', 'calories' => 600],
                    ['id' => 2, 'desc' => 'Ensalada de garbanzos y aguacate', 'quant' => '100g garbanzos cocidos, 1 aguacate, mix de verduras frescas', 'calories' => 450],
                    ['id' => 3, 'desc' => 'Tacos vegetarianos con guacamole', 'quant' => 'Tortillas de maíz, relleno de frijoles, verduras, guacamole', 'calories' => 500],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Yogur griego con frutas y almendras', 'quant' => '200g yogur griego, 1/2 taza de frutas frescas, 30g almendras', 'calories' => 300],
                ]
            ],
        ];

        $menu03_g1 = [
           [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Bowl de avena con frutas y semillas', 'quant' => '1 taza de avena cocida, 1/2 taza de fresas, 1 cucharada de semillas de chía', 'calories' => 350],
                    ['id' => 2, 'desc' => 'Tostadas de salmón ahumado y aguacate', 'quant' => '2 rebanadas de pan integral, 100g salmón ahumado, 1/2 aguacate', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Smoothie verde con kiwi y espinacas', 'quant' => '1 kiwi, 1 taza de espinacas, 200ml leche de almendras', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Puñado de nueces y frutos secos', 'quant' => '30g nueces, 30g almendras, 30g pasas', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa y aguacate', 'quant' => '100g quinoa cocida, 1 aguacate, mezcla de hojas verdes', 'calories' => 450],
                    ['id' => 2, 'desc' => 'Filete de pescado al horno con batatas', 'quant' => '200g filete de pescado blanco, 150g batatas asadas, verduras al vapor', 'calories' => 550],
                    ['id' => 3, 'desc' => 'Sopa de garbanzos y espinacas', 'quant' => '1 taza de garbanzos cocidos, 1 taza de espinacas, caldo de verduras', 'calories' => 350],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Brochetas de pollo y vegetales a la parrilla', 'quant' => '150g pechuga de pollo, 100g pimientos, cebolla y calabacín, marinados y asados', 'calories' => 500],
                    ['id' => 2, 'desc' => 'Ensalada de berros y frutos secos', 'quant' => '100g berros, 30g nueces, 30g arándanos secos, aderezo ligero', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Tacos vegetarianos de champiñones', 'quant' => 'Tortillas de maíz, relleno de champiñones salteados, guacamole', 'calories' => 500],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Yogur griego con almendras y miel', 'quant' => '200g yogur griego, 30g almendras, 1 cucharada de miel', 'calories' => 300],
                ]
            ],
        ];

         $menu04_g1 = [
           [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Batido de frutas y yogur', 'quant' => '1 plátano, 1 taza de fresas, 200ml yogur natural, 1 cucharada de miel', 'calories' => 350],
                    ['id' => 2, 'desc' => 'Tostadas de aguacate con huevo escalfado (pasar por agua caliente)', 'quant' => '2 rebanadas de pan integral, 100g aguacate, 2 huevos escalfados', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Omelette de espinacas y champiñones', 'quant' => '2 huevos, 50g espinacas, 50g champiñones, 30g queso rallado', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano', 'quant' => '1 scoop de proteína en polvo, 1 plátano, agua o leche según preferencia', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de lentejas y vegetales', 'quant' => '1 taza de lentejas cocidas, mix de vegetales crudos, aderezo ligero', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Pollo al curry con arroz integral', 'quant' => '150g pechuga de pollo en cubos, salsa de curry casera, 100g arroz integral', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Sopa de verduras y quinoa', 'quant' => 'Caldo de verduras, mix de verduras cocidas, 1/2 taza de quinoa cocida', 'calories' => 350],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Pescado al horno con espárragos', 'quant' => '200g filete de pescado blanco, 100g espárragos, limón y hierbas', 'calories' => 450],
                    ['id' => 2, 'desc' => 'Ensalada de garbanzos y aguacate', 'quant' => '100g garbanzos cocidos, 1 aguacate, mix de hojas verdes', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Tacos de carne asada con guacamole', 'quant' => 'Tortillas de maíz, carne asada en tiras, guacamole casero', 'calories' => 500],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Yogur griego con frutas y nueces', 'quant' => '200g yogur griego, 1/2 taza de frutas frescas, 30g nueces', 'calories' => 300],
                ]
            ],
        ];

         $menu05_g1 = [
           [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Smoothie de frutas y espinacas', 'quant' => '1 plátano, 1 taza de espinacas, 1/2 taza de fresas, 200ml de leche de almendras', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Tostadas de aguacate con huevo revuelto', 'quant' => '2 rebanadas de pan integral, 100g de aguacate, 2 huevos revueltos', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Avena con almendras y miel', 'quant' => '1 taza de avena cocida, 30g de almendras, 1 cucharada de miel', 'calories' => 350],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con nueces y frutas', 'quant' => '200g de yogur griego, 30g de nueces, 1/2 taza de frutas mixtas', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa y vegetales asados', 'quant' => '100g de quinoa cocida, 100g de vegetales asados (pimientos, calabacín, cebolla), aderezo ligero', 'calories' => 450],
                    ['id' => 2, 'desc' => 'Pechuga de pollo a la parrilla con batata', 'quant' => '150g de pechuga de pollo a la parrilla, 150g de batata al horno, ensalada verde', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Sopa de verduras y garbanzos', 'quant' => 'Caldo de verduras, mix de verduras frescas, 1/2 taza de garbanzos cocidos', 'calories' => 350],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón al horno con espárragos', 'quant' => '200g de filete de salmón al horno, 100g de espárragos asados, limón y hierbas', 'calories' => 500],
                    ['id' => 2, 'desc' => 'Ensalada de queso de cabra y nueces', 'quant' => '100g de queso de cabra, 30g de nueces, mix de hojas verdes', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Tacos vegetarianos con guacamole', 'quant' => 'Tortillas de maíz, relleno de frijoles, verduras salteadas, guacamole casero', 'calories' => 450],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con frutas', 'quant' => '1 scoop de proteína en polvo, 1 taza de frutas frescas, agua o leche según preferencia', 'calories' => 250],
                ]
            ],
        ];

         $menu06_g1 = [
           [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Omelette de espinacas y champiñones', 'quant' => '2 huevos, 50g espinacas, 50g champiñones', 'calories' => 350],
                    ['id' => 2, 'desc' => 'Batido de plátano y almendras', 'quant' => '1 plátano, 30g almendras, 200ml leche de almendras', 'calories' => 300],
                    ['id' => 3, 'desc' => 'Tostadas de aguacate y tomate', 'quant' => '2 rebanadas de pan integral, 100g aguacate, 1 tomate en rodajas', 'calories' => 400],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego con bayas y semillas', 'quant' => '200g yogur griego, 1/2 taza de bayas mixtas, 1 cucharada de semillas de chía', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de quinoa, atún y vegetales', 'quant' => '100g quinoa cocida, 1 lata de atún en agua, mix de vegetales crudos', 'calories' => 450],
                    ['id' => 2, 'desc' => 'Pollo al horno con puré de batata', 'quant' => '150g pechuga de pollo al horno, 150g puré de batata, ensalada verde', 'calories' => 500],
                    ['id' => 3, 'desc' => 'Sopa de lentejas y verduras', 'quant' => '1 taza de lentejas cocidas, mix de verduras cocidas, caldo de verduras', 'calories' => 350],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón a la parrilla con espárragos', 'quant' => '200g filete de salmón a la parrilla, 100g espárragos asados, limón', 'calories' => 550],
                    ['id' => 2, 'desc' => 'Ensalada de garbanzos, tomate y pepino', 'quant' => '1 taza de garbanzos cocidos, 1 tomate en cubos, 1/2 pepino en rodajas', 'calories' => 400],
                    ['id' => 3, 'desc' => 'Tacos vegetarianos con guacamole', 'quant' => 'Tortillas de maíz, relleno de frijoles y verduras, guacamole casero', 'calories' => 450],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Batido de proteínas con frutas', 'quant' => '1 scoop de proteína en polvo, 1 taza de frutas frescas, agua o leche', 'calories' => 250],
                ]
            ],
        ];

         $menu07_g1 = [
           [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Tostadas de frijoles refritos y aguacate', 'quant' => '2 tostadas, 200g frijoles refritos sin grasa, 100g aguacate', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Ensalada de frutas con yogur griego', 'quant' => '1 taza de frutas variadas, 200g de yogur griego sin azúcar', 'calories' => 350],
                    ['id' => 3, 'desc' => 'Chilaquiles verdes con pollo deshebrado', 'quant' => '100g totopos horneados, salsa verde sin aceite, 100g pechuga de pollo deshebrada', 'calories' => 450],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Batido de proteínas con plátano', 'quant' => '1 scoop de proteína en polvo, 1 plátano, agua o leche según preferencia', 'calories' => 300],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Tacos de tinga de zanahoria y aguacate', 'quant' => 'Tortillas de maíz, zanahoria en tiras estilo tinga, aguacate', 'calories' => 500],
                    ['id' => 2, 'desc' => 'Ensalada de espinacas con aderezo balsámico', 'quant' => '2 tazas de espinacas frescas, aderezo balsámico light, nueces picadas', 'calories' => 350],
                    ['id' => 3, 'desc' => 'Tamales de pollo con salsa verde', 'quant' => '2 tamales de pollo al vapor, salsa verde casera sin aceite', 'calories' => 500],

                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Quesadillas de champiñones y queso panela', 'quant' => 'Tortillas de maíz, champiñones salteados sin aceite, queso panela', 'calories' => 450],
                    ['id' => 2, 'desc' => 'Sopa de verduras con albóndigas de lentejas', 'quant' => 'Caldo de verduras, mix de verduras cocidas, albóndigas de lentejas', 'calories' => 350],
                    ['id' => 3, 'desc' => 'Tostadas de ceviche de camarón', 'quant' => '2 tostadas de maíz, ceviche de camarón sin aceite, aguacate en cubos', 'calories' => 450],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Yogur griego con frutas y semillas', 'quant' => '200g de yogur griego, 1/2 taza de frutas frescas, 1 cucharada de semillas de chía', 'calories' => 300],
                ]
            ],
        ];

        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '4350', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu01_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '4550', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu02_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '4400', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu03_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 04',
            'total_cal' => '4300', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu04_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 05',
            'total_cal' => '4250', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu05_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 06',
            'total_cal' => '4600', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu06_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Menu 07',
            'total_cal' => '4400', // Este campo corresponde al total de la tabla de excel
            'group_id' => '1',
            'tempos' => json_encode($menu07_g1),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
