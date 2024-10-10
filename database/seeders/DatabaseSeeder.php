<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Collection;
use App\Models\Work;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //$this->call() è un metodo che esegue uno o più seeder. Qui viene passato un array di classi Seeder che devono essere eseguite, in ordine.
        $this->call([
            CollectionSeeder::class,
            TypeSeeder::class,
            CollectionTypeSeeder::class,
            WorkSeeder::class,
        ]);
    }
}
