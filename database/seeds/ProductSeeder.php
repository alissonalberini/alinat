<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 1; $x <= 5; $x++) {
            Product::firstOrCreate([
                'name' => 'CANECA nº' . $x,
                'description_full' => 'detalhes blablabla da caneca especial ..... nº' . $x,
                'rating' => 5,
                'unity' => 'UN',
                'purchase_price' => '10.00',
                'sale_price' => '25.00',
                'stock' => '1',
                'stock_min' => '1',
                'input' => '1',
                'exit' => '1',    
            ]);
        }
    }
}
