<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Collection;
use App\Models\Product;
use Exception;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @throws Exception
     */

    public function run(): void
    {
        for ($i = 0; $i < 6; $i++) {
            Collection::factory()
                ->has(Product::factory(random_int(2, 7)))
                ->create();
        }
    }
}


