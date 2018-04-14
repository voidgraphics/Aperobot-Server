<?php

use App\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Jupiler',
            'icon' => 'beer',
            'price' => 2,
            'salePrice' => 2.5,
            'availability' => 600
        ]);
        Product::create([
            'name' => 'Heineken',
            'icon' => 'beer',
            'price' => 2,
            'salePrice' => 2.5,
            'availability' => 400
        ]);
        Product::create([
            'name' => 'Orval',
            'icon' => 'beer',
            'price' => 4,
            'salePrice' => 5,
            'availability' => 200
        ]);
        Product::create([
            'name' => 'Champagne',
            'icon' => 'champagne',
            'price' => 3,
            'salePrice' => 6,
            'availability' => 100
        ]);
        Product::create([
            'name' => 'Bloody Mary',
            'icon' => 'cocktail',
            'price' => 2.5,
            'salePrice' => 4,
            'availability' => 250
        ]);
        Product::create([
            'name' => 'Soda',
            'icon' => 'soda',
            'price' => 0.8,
            'salePrice' => 1.2,
            'availability' => 400
        ]);
        Product::create([
            'name' => 'Vin rouge',
            'icon' => 'redwine',
            'price' => 1.2,
            'salePrice' => 3,
            'availability' => 300
        ]);
        Product::create([
            'name' => 'Vin blanc',
            'icon' => 'whitewine',
            'price' => 1.2,
            'salePrice' => 3,
            'availability' => 300
        ]);
        Product::create([
            'name' => 'Burger',
            'icon' => 'hamburger',
            'price' => 1,
            'salePrice' => 2.5,
            'availability' => 200
        ]);
        Product::create([
            'name' => 'Assiette fromage',
            'icon' => 'snack',
            'price' => 1.5,
            'salePrice' => 5,
            'availability' => 80
        ]);
    }
}
