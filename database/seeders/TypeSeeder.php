<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Disabilita le restrizioni di chiave esterna nel caso ci siano
        Schema::disableForeignKeyConstraints();
        //svuoto tabella
        Type::truncate();

        $types = [
            "Fantasy",
            "Futuristico",
            "Soprannaturale",
            "Cyberpunk",
            "Steampunk",
            "Post-apocalittico",
            "Mitologico",
            "Surreale"
        ];
        foreach ($types as $type) {
            $new_type = new Type();
            $new_type->name = $type;
            $new_type->save();
        }

        //Riabilita le restrizioni di chiave esterna
        Schema::enableForeignKeyConstraints();
    }
}
