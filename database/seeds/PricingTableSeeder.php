<?php

use Illuminate\Database\Seeder;
user App\Pricing;

class PricingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Pricing::truncate();

        $pricing = [
            [
                'id'=>1,
                'name'=>'Bayi',
                'price'=>19900,
                'price-after'=>14900,
                'user'=>938,
                'status'=>0,
                'features'=>1,
                'created_at'=>'2020-08-21 19:20:30',
                'updated_at'=>'2020-08-21 19:20:30'
            ],
                [
                'id'=>2,
                'name'=>'Pelajar',
                'price'=>46900,
                'price-after'=>23450,
                'user'=>4168,
                'status'=>0,
                'features'=>2,
                'created_at'=>'2020-08-21 20:33:46',
                'updated_at'=>'2020-08-21 20:33:46'
            ],
                [
                'id'=>3,
                'name'=>'Personal',
                'price'=>58900,
                'price-after'=>38900,
                'user'=>10017,
                'status'=>1,
                'features'=>3,
                'created_at'=>'2020-08-21 20:34:38',
                'updated_at'=>'2020-08-21 20:34:38'
            ],
                [
                'id'=>4,
                'name'=>'Bisnis',
                'price'=>109900,
                'price-after'=>65900,
                'user'=>3552,
                'status'=>0,
                'features'=>4,
                'created_at'=>'2020-08-21 20:35:26',
                'updated_at'=>'2020-08-21 20:35:26'
            ]
        ];

        Pricing::create($pricing);

    }
}
