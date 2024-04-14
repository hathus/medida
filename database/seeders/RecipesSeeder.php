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
        // Desayunos
        DB::table('recipes')->insert([
            'name' => 'Desayuno Pack 01',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '250 ml de leche descremada'],
                ['id' => '2', 'desc' => 'cafe'],
                ['id' => '3', 'desc' => 'tostada con mermelada'],
            ]),
            'category_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Desayuno Pack 02',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '1 vaso de zumo de naranja'],
                ['id' => '2', 'desc' => 'tostada con jitomate y aceite de oliva'],
            ]),
            'category_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Desayuno Pack 03',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '250 ml de leche descremada'],
                ['id' => '2', 'desc' => 'chocolate'],
                ['id' => '3', 'desc' => '50 gramos de croutons'],
            ]),
            'category_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Desayuno Pack 04',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '250 ml de leche descremada'],
                ['id' => '2', 'desc' => '40 gramos de cereal'],
            ]),
            'category_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Desayuno Pack 05',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '150 ml café con leche descremada'],
                ['id' => '2', 'desc' => '2 churros pequeños'],
            ]),
            'category_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Desayuno Pack 06',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '150 ml de leche descremada'],
                ['id' => '2', 'desc' => '2 churros normales'],
            ]),
            'category_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Desayuno Pack 07',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '250 ml de jugo de naranja natural'],
            ]),
            'category_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Media mañana
        DB::table('recipes')->insert([
            'name' => 'Media Mañana Pack 01',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '1 manzana'],
            ]),
            'category_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Media Mañana Pack 02',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '1 pera'],
            ]),
            'category_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Media Mañana Pack 03',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '250 ml de jugo de naranja natural'],
                ['id' => '2', 'desc' => '30 gramos de galletas'],
            ]),
            'category_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Media Mañana Pack 04',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '1 manzana'],
            ]),
            'category_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Media Mañana Pack 05',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '1 plátano'],
            ]),
            'category_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Media Mañana Pack 06',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '1 manzana azada'],
            ]),
            'category_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Media Mañana Pack 07',
            'group_kc' => '1900',
            'tempos' => json_encode([]),
            'category_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Comida
        DB::table('recipes')->insert([
            'name' => 'Comida Pack 01',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'Lentejas guisadas con chorizo y arroz'],
                ['id' => '2', 'desc' => 'croquetas de pollo'],
                ['id' => '3', 'desc' => 'ensalada mixta de lechuga, jitomate, cebolla, espárragos y aceite de oliva'],
                ['id' => '4', 'desc' => '30 gramos de pan integral'],
                ['id' => '5', 'desc' => '1pera'],
            ]),
            'category_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Comida Pack 02',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'espinacas gratinadas'],
                ['id' => '2', 'desc' => 'asado de ternera y papas con ajo y perejil'],
                ['id' => '3', 'desc' => '30 gramos de pan integral'],
                ['id' => '4', 'desc' => 'flan 150 gramos'],
            ]),
            'category_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Comida Pack 03',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'ejotes con papas'],
                ['id' => '2', 'desc' => 'bacalao con jitomate'],
                ['id' => '3', 'desc' => '30 gramos de pan integral'],
                ['id' => '4', 'desc' => '1 manzana'],
            ]),
            'category_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Comida Pack 04',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'arroz con verduras y pollo'],
                ['id' => '2', 'desc' => 'croquetas de pollo'],
                ['id' => '3', 'desc' => '30 gramos de pan integral'],
                ['id' => '4', 'desc' => 'queso panela y ate de membrillo'],
                ['id' => '5', 'desc' => '100 gramos de duraznos en almíbar'],
            ]),
            'category_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Comida Pack 05',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '80 gramos de macarrones gratinados'],
                ['id' => '2', 'desc' => '1 filete de pescado'],
                ['id' => '3', 'desc' => 'ensalada escarola'],
                ['id' => '4', 'desc' => '30 gramos de pan integral'],
                ['id' => '5', 'desc' => '120 gramos de melón'],
            ]),
            'category_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Comida Pack 06',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'ejotes verdes cocidos con jamón de pavo bajo en sales'],
                ['id' => '2', 'desc' => 'salmon asado con papas asadas'],
                ['id' => '3', 'desc' => '30 gramos de pan integral'],
                ['id' => '4', 'desc' => 'cocktail de frutas'],
            ]),
            'category_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Comida Pack 07',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'sopa de verduras'],
                ['id' => '2', 'desc' => '80 gramos de albóndigas guisadas'],
                ['id' => '3', 'desc' => '30 gramos de pan'],
                ['id' => '4', 'desc' => '150 gramos de pure de manzana'],
            ]),
            'category_id' => '3',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Merienda
        DB::table('recipes')->insert([
            'name' => 'Merienda Pack 01',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '150 ml de café con leche descremada'],
                ['id' => '2', 'desc' => '30 gramos de galletas'],
            ]),
            'category_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Merienda Pack 02',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '250 ml de jugo de naranja'],
                ['id' => '2', 'desc' => '50 gramos de jamón ork'],
                ['id' => '3', 'desc' => '30 gramos de pan'],
            ]),
            'category_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Merienda Pack 03',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '100 gramos de natilla'],
                ['id' => '2', 'desc' => '1 una naranja'],
            ]),
            'category_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Merienda Pack 04',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '1 yogur descremado'],
            ]),
            'category_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Merienda Pack 05',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '150 ml de jugo de naranja'],
                ['id' => '2', 'desc' => '40 gramos de jamón serrano'],
            ]),
            'category_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Merienda Pack 06',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '1 yogur natural'],
            ]),
            'category_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Merienda Pack 07',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => '100 gramos de arroz con leche'],
            ]),
            'category_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Cena
        DB::table('recipes')->insert([
            'name' => 'Cena Pack 01',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'sopa de verduras'],
                ['id' => '2', 'desc' => '20 gramos de jamón'],
                ['id' => '3', 'desc' => '150 gramos de pescado asado con papas'],
                ['id' => '4', 'desc' => '30 gramos de pan integral'],
                ['id' => '5', 'desc' => '1 flan de 200 gramos'],
            ]),
            'category_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Cena Pack 02',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'sopa de fideos'],
                ['id' => '2', 'desc' => 'albóndigas caseras con papas'],
                ['id' => '3', 'desc' => '30 gramos de pan integral'],
                ['id' => '4', 'desc' => '1 manzana asada'],
            ]),
            'category_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Cena Pack 03',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'calabaza gratinada con jamón, queso y cebolla'],
                ['id' => '2', 'desc' => '100 gramos de salmón frito con ensalada escarola'],
                ['id' => '3', 'desc' => '30 gramos de pan'],
                ['id' => '4', 'desc' => 'cocktail de frutas'],
            ]),
            'category_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Cena Pack 04',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'crema de verduras'],
                ['id' => '2', 'desc' => 'lomo de merluza en salsa de albahaca'],
                ['id' => '3', 'desc' => '30 gramos de pan integral'],
                ['id' => '4', 'desc' => '1 pera'],
            ]),
            'category_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Cena Pack 05',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'puré de papas y pollo asado'],
                ['id' => '2', 'desc' => 'ensalada de pimientos asados'],
                ['id' => '3', 'desc' => '30 gramos de pan integral'],
                ['id' => '4', 'desc' => '1 pera'],
            ]),
            'category_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Cena Pack 06',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'sopa de pan con jamón y huevo cocido'],
                ['id' => '2', 'desc' => 'pollo con almendras, cebolla y ajo'],
                ['id' => '3', 'desc' => '30 gramos de pan integral'],
                ['id' => '4', 'desc' => '100 gramos de fruta picada'],
            ]),
            'category_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('recipes')->insert([
            'name' => 'Cena Pack 07',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'tortilla campesina con papas'],
                ['id' => '2', 'desc' => '30 gramos de pan integral'],
                ['id' => '3', 'desc' => '1 pieza de fruta'],
            ]),
            'category_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
