<?php

use Illuminate\Database\Seeder;

class MerchandiseSeeder extends Seeder
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
                'brand_name'=>'Milk',
                'product_name'=>'Delicious Milk',
                'retail_price'=>'25.00',
                'wholesale_price'=>'15.00',
                'wholesale_qty'=>'2',
                'qty_stock'=>'45',
                'unit_id'=>'3',
                'category_id'=>'2'
            ],
            [
                'brand_name'=>'Loaf',
                'product_name'=>'Rose Loaf Bread',
                'retail_price'=>'50.00',
                'wholesale_price'=>'20.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'63',
                'unit_id'=>'3',
                'category_id'=>'4'
            ],
            [
                'brand_name'=>'Drinks',
                'product_name'=>'Lao Cold Drinks',
                'retail_price'=>'30.00',
                'wholesale_price'=>'20.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'36',
                'unit_id'=>'3',
                'category_id'=>'5'
            ],
            [
                'brand_name'=>'Biscuit',
                'product_name'=>'Resbico',
                'retail_price'=>'14.00',
                'wholesale_price'=>'17.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'21',
                'unit_id'=>'3',
                'category_id'=>'5'
            ],
            [
                'brand_name'=>'Shampoo',
                'product_name'=>'Dove',
                'retail_price'=>'30.00',
                'wholesale_price'=>'10.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'36',
                'unit_id'=>'3',
                'category_id'=>'3'
            ],
            
            
        ];

        foreach($data as $merchandises) {
            \App\Merchandise::create($merchandises);
        }
    }
}
