<?php

use Illuminate\Database\Seeder;
use App\Models\ProductImage;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 1; $x <= 5; $x++) {
            
            ProductImage::firstOrCreate([
                'product_id' => $x,
                'file' => 'c-' . $x . '.PNG',
            ]);
            ProductImage::firstOrCreate([
                'product_id' => $x,
                'file' => 'l-' . $x . '.PNG',
            ]);
            ProductImage::firstOrCreate([
                'product_id' => $x,
                'file' => 'r-' . $x . '.PNG',
            ]);
            ProductImage::firstOrCreate([
                'product_id' => $x,
                'file' => 'b-' . $x . '.PNG',
            ]);

        }
    }
}
