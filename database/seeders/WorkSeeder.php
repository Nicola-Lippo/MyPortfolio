<?php

namespace Database\Seeders;

use App\Models\Work;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//importo faker + alias
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++) {
            $work = new Work();
            $work->collection_id = rand(1, 5);
            $work->name = $faker->city();
            // Il metodo Str::of() è un helper di Laravel 
            $work->slug = Str::of($work->name)->slug('-');
            $work->description = $faker->text();
            $work->prompt = $faker->text();
            $work->path_img = $faker->imageUrl();
            $work->save();
        }
    }
}
