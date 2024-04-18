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

        // Valores para category_id
        /**
         * desayuno = 1
         * media mañana = 2
         * comida = 3
         * merienda = 4
         * cena = 5
         */

        // Desayunos
        DB::table('recipes')->insert([
            'name' => 'Desayuno Pack 01',
            'group_kc' => '1900', // Este campo corresponde al total de la tabla de excel
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'Omelette de champiñones y espinacas', 'cant' => '2 huevos, champiñones, espinacas', 'calories' => '300'],
                ['id' => '2', 'desc' => 'Tortillas de maíz', 'cant' => '2 unidades', 'calories' => '150'],
                ['id' => '3', 'desc' => 'Frijoles refritos', 'cant' => '1/2 taza', 'calories' => '100'],
                ['id' => '4', 'desc' => 'Jugo de naranja natural sin azúcar', 'cant' => '1 vaso', 'calories' => '100'],
            ]),
            'category_id' => '1',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Media Mañana
        DB::table('recipes')->insert([
            'name' => 'Media Mañana Pack 01',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'Yogur natural sin azúcar', 'cant' => '1 envase', 'calories' => '100'],
            ]),
            'category_id' => '2',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Comidas
        DB::table('recipes')->insert([
            'name' => 'Comida Pack 01',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'Ensalada de pollo a la parrilla con aguacate', 'cant' => 'Pechuga de pollo, lechuga, agacate', 'calories' => '400'],
                ['id' => '2', 'desc' => 'Arroz integral', 'cant' => '1/2 taza', 'calories' => '100'],
                ['id' => '3', 'desc' => 'Agua de Jamaica sin azúcar', 'cant' => '1 vaso', 'calories' => '50'],
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
                ['id' => '1', 'desc' => 'Rodajas de piña', 'cant' => '1 taza', 'calories' => '100'],
            ]),
            'category_id' => '4',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        // Cenas
        DB::table('recipes')->insert([
            'name' => 'Cena Pack 01',
            'group_kc' => '1900',
            'tempos' => json_encode([
                ['id' => '1', 'desc' => 'Filete de pescado al horno con limón', 'cant' => '150 gramos', 'calories' => '300'],
                ['id' => '2', 'desc' => 'Espárragos a la parrilla', 'cant' => '1/2 taza', 'calories' => '50'],
                ['id' => '3', 'desc' => 'Puré de papas con leche descremada', 'cant' => '1/2 taza', 'calories' => '150'],
                ['id' => '4', 'desc' => 'Agua mineral sin gas', 'cant' => '1 vaso', 'calories' => '0'],
            ]),
            'category_id' => '5',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
