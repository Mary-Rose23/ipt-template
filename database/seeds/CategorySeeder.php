<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'category'=>'milk',
                'description'=>'delicious milk.'
            ],
            [
                'category'=>'loaf',
                'description'=>'rose loaf bread.'
            ],
            [
                'category'=>'drinks',
                'description'=>'lao cold drinks.'
            ],
            [
                'category'=>'biscuit',
                'description'=>'rebisco.'
            ],
            [
                'category'=>'shampoo',
                'description'=>'dove.'
            ],
        ];

        foreach($data as $categories) {
            \App\Category::create($categories);
        }
    }
}
