<?php

use Illuminate\Database\Seeder;
use App\Models\ProductAttributes;

class ProductAttributeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($x = 1; $x <= 5; $x++) {
            
            ProductAttributes::firstOrCreate([
                'product_id' => $x,
                'attribute' => 'Composição/Material',
                'value' => 'Porcelana',
            ]);
            ProductAttributes::firstOrCreate([
                'product_id' => $x,
                'attribute' => 'Capacidade',
                'value' => '325ml',                
            ]);
            ProductAttributes::firstOrCreate([
                'product_id' => $x,
                'attribute' => 'Dimensões(A * L * P)',
                'value' => '21 x 15 x 10 cm',                
            ]);
            ProductAttributes::firstOrCreate([
                'product_id' => $x,
                'attribute' => 'Peso',
                'value' => '0.5 kg',                
            ]);
            ProductAttributes::firstOrCreate([
                'product_id' => $x,
                'attribute' => 'Estampa',
                'value' => 'Alta qualidade, durabilidade',                
            ]);
        }
    }
}
