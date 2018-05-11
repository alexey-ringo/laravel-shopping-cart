<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product ([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at least as a child',
            'price' => 10
            ]);
        $product->save();
        
        $product = new Product ([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at least as a child',
            'price' => 8
            ]);
        $product->save();
        $product = new Product ([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at least as a child',
            'price' => 9
            ]);
        $product->save();
        
        $product = new Product ([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at least as a child',
            'price' => 12
            ]);
        $product->save();
        
        $product = new Product ([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at least as a child',
            'price' => 15
            ]);
        $product->save();
        
        $product = new Product ([
            'imagePath' => 'http://ecx.images-amazon.com/images/I/51ZU%2BCvkTyL.jpg',
            'title' => 'Harry Potter',
            'description' => 'Super cool - at least as a child',
            'price' => 20
            ]);
        $product->save();
    }
}
