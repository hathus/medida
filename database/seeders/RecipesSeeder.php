<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesSeeder extends Seeder
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
                    ['id' => 1, 'desc' => 'Omelette de champiñones y espinacas', 'quant' => '2 huevos, champiñones, espinacas', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Tortillas de maíz', 'quant' => '2 unidades', 'calories' => 150],
                    ['id' => 3, 'desc' => 'Frijoles refritos', 'quant' => '1/2 taza', 'calories' => 100],
                    ['id' => 4, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ],
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur natural sin azúcar', 'quant' => '1 envase', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Ensalada de pollo a la parrilla con aguacate', 'quant' => 'Pechuga de pollo, lechuga, tomate, aguacate, aderezo ligero', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Arroz integral', 'quant' => '1/2 taza', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Agua de Jamaica sin azúcar', 'quant' => '1 vaso', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de pescado al horno con limón', 'quant' => '150 g', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Espárragos a la parrilla', 'quant' => '1/2 taza', 'calories' => 50],
                    ['id' => 3, 'desc' => 'Puré de papas con leche descremada', 'quant' => '1/2 taza', 'calories' => 150],
                    ['id' => 4, 'desc' => 'Agua mineral sin gas', 'quant' => '1 vaso', 'calories' => 0],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Rodajas de piña', 'quant' => '1 taza', 'calories' => 100],
                ]
            ],
        ];

        $menu02 = [
            [
                'name' => 'Desayuno',
                'items' => [ // Desayuno
                    ['id' => 1, 'desc' => 'Pan integral tostado con aguacate', 'quant' => '1 rebanada', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Yogur natural bajo en grasa', 'quant' => '1 envase', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Batido de arándanos con yogur griego', 'quant' => '1 vaso', 'calories' => 200],
                    ['id' => 2, 'desc' => 'Puñado de almendras', 'quant' => '30 g', 'calories' => 150],
                    ['id' => 3, 'desc' => 'Manzana verde', 'quant' => '1 pieza', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de atún con lechuga, tomate, pepino y aderezo ligero', 'quant' => '1 lata de atún, tomate, pepino y aderezo ligero', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Quinoa cocida', 'quant' => '1 taza', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón a la parrilla con limón', 'quant' => '150 gramos', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Brocoli al vapor', 'quant' => '2 tazas', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Agua mineral sin gas', 'quant' => '1 vaso', 'calories' => 0],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Rodajas de piña', 'quant' => '1 taza', 'calories' => 100],
                    ['id' => 2, 'desc' => 'Palitos de zanahoria con hummus', 'quant' => '1 taza', 'calories' => 100],
                ]
            ],
        ];

        $menu03 = [
            [
                'name' => 'Desayuno',
                'items' => [ //Desayuno
                    ['id' => 1, 'desc' => 'Tazón de avena con leche descremada y frutas frescas', 'quant' => '1 taza', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Tostadas integrales con aguacate y tomate', 'quant' => '2 rebanadas', 'calories' => 200],
                    ['id' => 3, 'desc' => 'Café negro o té verde sin azúcar', 'quant' => '1 vaso', 'calories' => '0'],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [ // Colación 1
                    ['id' => 1, 'desc' => 'Yogur griego bajo en grasa con frutos rojos', 'quant' => '1 envase', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Puñado de nueces y almendras', 'quant' => '30 g', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [ // Comida
                    ['id' => 1, 'desc' => 'Ensalada de espinacas, fresas y queso feta con aderezo balsámico', 'quant' => 'espinacas, fresas y queso feta', 'calories' => 350],
                    ['id' => 2, 'desc' => 'Pechuga de pollo a la parrilla', 'quant' => '150 gramos', 'calories' => 250],
                    ['id' => 3, 'desc' => 'Agua mineral sin gas', 'quant' => '1 vaso', 'calories' => 0],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [ // Cena
                    ['id' => 1, 'desc' => 'Salmón al horno con limón', 'quant' => '150 gramos', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Espárragos a la parrilla', 'quant' => '1 tazas', 'calories' => 50],
                    ['id' => 3, 'desc' => 'Infusión de hierbas sin azúcar', 'quant' => '1 vaso', 'calories' => 0],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [ // Colación 2
                    ['id' => 1, 'desc' => 'Galletas de arroz integrales con queso cottage', 'quant' => '2 unidades', 'calories' => 100],
                ]
            ],
        ];

        $menu04 = array(
            [
                'name' => 'Desayuno',
                'items' => [  // Desayuno
                    ['id' => 1, 'desc' => 'Avena con leche descremada', 'quant' => '1 taza', 'calories' => 200],
                    ['id' => 2, 'desc' => 'Plátano', 'quant' => '1 pieza', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Almendras', 'quant' => '20 g', 'calories' => 120],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [  // Colación 1
                    ['id' => 1, 'desc' => 'Yogur natural sin azúcar', 'quant' => '1 envase', 'calories' => 100],
                    ['id' => 2, 'desc' => 'Palitos de zanahoria con hummus', 'quant' => '-', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [  // Comida
                    ['id' => 1, 'desc' => 'Pechuga de pollo a la parrilla', 'quant' => '150 g', 'calories' => 250],
                    ['id' => 2, 'desc' => 'Arroz integral cocido', 'quant' => '1 taza', 'calories' => 200],
                    ['id' => 3, 'desc' => 'Ensalada mixta con aguacate y aderezo ligero', 'quant' => '-', 'calories' => 250],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [  // Cena
                    ['id' => 1, 'desc' => 'Salmón al horno con limón', 'quant' => '150 g', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Espárragos al vapor', 'quant' => '1 taza', 'calories' => 50],
                    ['id' => 3, 'desc' => 'Puré de camote con canela', 'quant' => '1/2 taza', 'calories' => 150],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [  // Colación 2
                    ['id' => 1, 'desc' => 'Rodajas de piña', 'quant' => '1 taza', 'calories' => 100],
                    ['id' => 2, 'desc' => 'Té verde sin azúcar', 'quant' => '1 taza', 'calories' => 0],
                ]
            ],
        );

        $menu05 = array(
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Omelette de espinacas, champiñones y queso fresco', 'quant' => '2 huevos, espinacas, champiñones, 30g de queso fresco', 'calories' => 350],
                    ['id' => 2, 'desc' => 'Pan integral', 'quant' => '1 rebanada', 'calories' => 80],
                    ['id' => 3, 'desc' => 'Aguacate', 'quant' => '1/4 pieza', 'calories' => 80],
                    ['id' => 4, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Yogur natural sin azúcar', 'quant' => '1 envase', 'calories' => 100],
                    ['id' => 2, 'desc' => 'Puñado de nueces', 'quant' => '30 g', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Pechuga de pollo a la parrilla', 'quant' => '150 g', 'calories' => 250],
                    ['id' => 2, 'desc' => 'Arroz integral cocido', 'quant' => '1/2 taza', 'calories' => 100],
                    ['id' => 3, 'desc' => 'Ensalada de espinacas, tomate, pepino y aderezo ligero', 'quant' => '-', 'calories' => 150],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de pavo al horno', 'quant' => '150 g', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Puré de camote con canela', 'quant' => '1/2 taza', 'calories' => 0],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Rodajas de piña', 'quant' => '1 taza', 'calories' => 100],
                    ['id' => 2, 'desc' => 'Palitos de zanahoria con hummus', 'quant' => '-', 'calories' => 100],
                ]
            ],
        );

        $menu06 = array(
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Tazón de yogurt natural sin azúcar', 'quant' => '1 tazón', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Pan integral', 'quant' => '1 rebanada', 'calories' => 80],
                    ['id' => 3, 'desc' => 'Jugo de naranja natural sin azúcar', 'quant' => '1 vaso', 'calories' => 100],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Batido de proteínas de suero de leche', 'quant' => '1 vaso', 'calories' => 250],
                    ['id' => 2, 'desc' => 'Puñado de nueces', 'quant' => '30 g', 'calories' => 200],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Ensalada de pollo a la parrilla con aguacate', 'quant' => 'Pechuga de pollo, lechuga, tomate, aguacate, aderezo ligero', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Agua de Jamaica sin azúcar', 'quant' => '1 vaso', 'calories' => 50],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Filete de pescado al horno', 'quant' => '150 g', 'calories' => 300],
                    ['id' => 2, 'desc' => 'Puré de camote con canela', 'quant' => '1/2 taza', 'calories' => 150],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Rodajas de piña', 'quant' => '1 taza', 'calories' => 100],
                    ['id' => 2, 'desc' => 'Palitos de zanahoria con hummus', 'quant' => '-', 'calories' => 100],
                ]
            ],
        );

        $menu07 = array(
            [
                'name' => 'Desayuno',
                'items' => [
                    ['id' => 1, 'desc' => 'Tamales de pollo con salsa verde', 'quant' => '1 piezas', 'calories' => 200],
                    ['id' => 2, 'desc' => 'Agua de horchata sin azúcar', 'quant' => '1 vaso', 'calories' => 150],
                    ['id' => 3, 'desc' => 'Plátano macho asado', 'quant' => '1 pieza', 'calories' => 150],
                ]
            ],
            [
                'name' => 'Colación Mañana',
                'items' => [
                    ['id' => 1, 'desc' => 'Barrita de granola', 'quant' => '1 unidad', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Té de hierbabuena sin azúcar', 'quant' => '1 taza', 'calories' => 0],
                ]
            ],
            [
                'name' => 'Comida',
                'items' => [
                    ['id' => 1, 'desc' => 'Tacos de pescado a la parrilla con guacamole', 'quant' => '2 tacos', 'calories' => 330],
                    ['id' => 2, 'desc' => 'Arroz rojo con verduras', 'quant' => '1/2 taza', 'calories' => 200],
                    ['id' => 3, 'desc' => 'Agua de limón sin azúcar', 'quant' => '1 vaso', 'calories' => 0],
                ]
            ],
            [
                'name' => 'Cena',
                'items' => [
                    ['id' => 1, 'desc' => 'Enchiladas verdes de pollo', 'quant' => '2 piezas', 'calories' => 400],
                    ['id' => 2, 'desc' => 'Frijoles refritos', 'quant' => '1/2 taza', 'calories' => 150],
                ]
            ],
            [
                'name' => 'Colación Noche',
                'items' => [
                    ['id' => 1, 'desc' => 'Fruta picada (papaya, piña, sandía)', 'quant' => '1 taza', 'calories' => 150],
                    ['id' => 2, 'desc' => 'Agua de Jamaica sin azúcar', 'quant' => '1 vaso', 'calories' => 0],
                ]
            ],);

        
        // Menu 01
        DB::table('recipes')->insert([
            'name' => 'Menu 01',
            'total_cal' => '1900', // Este campo corresponde al total de la tabla de excel
            'tempos' => json_encode($menu01),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Menu 02
        DB::table('recipes')->insert([
            'name' => 'Menu 02',
            'total_cal' => '1900', // Este campo corresponde al total de la tabla de excel
            'tempos' => json_encode($menu02),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Menu 03
        DB::table('recipes')->insert([
            'name' => 'Menu 03',
            'total_cal' => '1900', // Este campo corresponde al total de la tabla de excel
            'tempos' => json_encode($menu03),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Menu 04
        DB::table('recipes')->insert([
            'name' => 'Menu 04',
            'total_cal' => '1920', // Este campo corresponde al total de la tabla de excel
            'tempos' => json_encode($menu04),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Menu 05
        DB::table('recipes')->insert([
            'name' => 'Menu 05',
            'total_cal' => '1910', // Este campo corresponde al total de la tabla de excel
            'tempos' => json_encode($menu05),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Menu 06
        DB::table('recipes')->insert([
            'name' => 'Menu 06',
            'total_cal' => '1880', // Este campo corresponde al total de la tabla de excel
            'tempos' => json_encode($menu06),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Menu 07
        DB::table('recipes')->insert([
            'name' => 'Menu 07',
            'total_cal' => '1880', // Este campo corresponde al total de la tabla de excel
            'tempos' => json_encode($menu07),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
