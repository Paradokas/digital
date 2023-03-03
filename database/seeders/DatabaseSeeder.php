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

//    public function run()
//    {
//        $collections = Collection::factory()->count(6)->create();
//
//        foreach ($collections as $collection) {
//            $products = Product::factory()->count(random_int(2, 7))->create();
//            foreach ($products as $product) {
//                $collectionProduct = new CollectionProduct([
//                    'collection_id' => $collection->id,
//                    'product_id' => $product->id,
//                ]);
//                $collectionProduct->save();
//            }
//        }
//    }


    public function run()
    {
        Collection::factory()
            ->count(6)
            ->afterCreating(function (Collection $collection) {
                $collection->products()->createMany(
                    Product::factory()->count(random_int(2, 7))->make()->toArray()
                );
            })
            ->create();
    }
}


