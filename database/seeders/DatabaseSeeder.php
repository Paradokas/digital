<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Collection;
use App\Models\Product;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     * @throws Exception
     */
    public function run(): void
    {

        $collections = Collection::factory(6)->create();

        foreach ($collections as $collection) {
            $products = Product::factory(random_int(2, 7))->create();

            foreach ($products as $product) {
                DB::table('collection_product')->insert([
                    'collection_id' => $collection->id,
                    'product_id' => $product->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
