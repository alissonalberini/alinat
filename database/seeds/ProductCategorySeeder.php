<?php

use Illuminate\Database\Seeder;
use App\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 1; $x <= 5; $x++) {
            ProductCategory::firstOrCreate([
                'product_id' => $x,
                'category_id' => 1,                
            ]);
        }
    }
}
