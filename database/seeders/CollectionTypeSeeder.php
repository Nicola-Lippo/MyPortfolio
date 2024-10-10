<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CollectionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Disabilita le restrizioni di chiave esterna nel caso ci siano
        Schema::disableForeignKeyConstraints();

        // Svuota la tabella di associazione
        DB::table('collection_types')->truncate();

        // Definisci le associazioni tra ristoranti e tipi
        $associazioni = [
            ['collection_id' => 1, 'type_id' => 1],
            ['collection_id' => 1, 'type_id' => 6],
            ['collection_id' => 2, 'type_id' => 4],
            ['collection_id' => 3, 'type_id' => 2],
            ['collection_id' => 3, 'type_id' => 7],
            ['collection_id' => 4, 'type_id' => 3],
            ['collection_id' => 5, 'type_id' => 5],
            ['collection_id' => 5, 'type_id' => 8],
        ];

        // Inserisci le associazioni nella tabella
        DB::table('collection_types')->insert($associazioni);

        // Riabilita le restrizioni di chiave esterna
        Schema::enableForeignKeyConstraints();
    }
}
