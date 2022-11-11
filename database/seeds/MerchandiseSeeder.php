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
                'brand_name'=>'Test',
                'product_name'=>'Test4kilogram',
                'retail_price'=>'1500.00',
                'wholesale_price'=>'1.00',
                'wholesale_qty'=>'1',
                'qty_stock'=>'100',
                'unit_id'=>'1',
                'category_id'=>'1'
            ]


        ];

        foreach($data as $merchandises) {
            \App\Merchandise::create($merchandises);
        }
    }
}
