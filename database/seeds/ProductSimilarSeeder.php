<?php

use Illuminate\Database\Seeder;
use App\Models\ProductSimilar;

class ProductSimilarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 1; $x <= 5; $x++) {
            ProductSimilar::firstOrCreate([
                'product_id' => $x,
                'product_similar_id' => 1,
            ]);
        }
    }
}
