<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//importo faker + alias
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 5; $i++) {
            $collection = new Collection();
            $collection->user_id = 1;
            $collection->name = $faker->city();
            // Il metodo Str::of() è un helper di Laravel 
            $collection->slug = Str::of($collection->name)->slug('-');
            $collection->description = $faker->text();
            $collection->path_img = $faker->imageUrl();
            $collection->save();
        }
    }
}
