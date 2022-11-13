<?php

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
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
                'unit_type'=>'milligram(s)',
                'description'=>'This is a milligram unit.'
            ],
            [
                'unit_type'=>'kilogram(s)',
                'description'=>'This is a kilogram unit.'
            ],
            [
                'unit_type'=>'gram(s)',
                'description'=>'This is a gram unit.'
            ],
            [
                'unit_type'=>'meter(s)',
                'description'=>'This is a meter unit.'
            ],
            [
                'unit_type'=>'centimeter(s)',
                'description'=>'This is a centimeter unit.'
            ],
        ];

        foreach($data as $units) {
            \App\Unit::create($units);
        }
    }
}
