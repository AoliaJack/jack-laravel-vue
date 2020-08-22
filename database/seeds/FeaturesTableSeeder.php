<?php

use Illuminate\Database\Seeder;
use App\Features;
class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Features::truncate,
        $feature =  [
                        [
                        'id'=>1,
                        'fname'=>'0.5X',
                        'fdesc'=>'RESOURCE POWER',
                        'pricings_id'=>1,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>2,
                        'fname'=>'500 MB',
                        'fdesc'=>'Disk Space',
                        'pricings_id'=>1,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>3,
                        'fname'=>'Unlimited',
                        'fdesc'=>'Bandwidth',
                        'pricings_id'=>1,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>4,
                        'fname'=>'Unlimited',
                        'fdesc'=>'Databases',
                        'pricings_id'=>1,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>5,
                        'fname'=>'1',
                        'fdesc'=>'Domain',
                        'pricings_id'=>1,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>6,
                        'fname'=>'Instant',
                        'fdesc'=>'Backup',
                        'pricings_id'=>1,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>7,
                        'fname'=>'Unlimited SSL',
                        'fdesc'=>'Gratis Selamanya',
                        'pricings_id'=>1,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>8,
                        'fname'=>'1X',
                        'fdesc'=>'RESOURCE POWER',
                        'pricings_id'=>2,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>9,
                        'fname'=>'Unlimited',
                        'fdesc'=>'Disk Space',
                        'pricings_id'=>2,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>10,
                        'fname'=>'Unlimited',
                        'fdesc'=>'Bandwidth',
                        'pricings_id'=>2,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>11,
                        'fname'=>'Unlimited',
                        'fdesc'=>'POP 3 Email',
                        'pricings_id'=>2,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>12,
                        'fname'=>'Unlimited',
                        'fdesc'=>'Databases',
                        'pricings_id'=>2,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>13,
                        'fname'=>'10',
                        'fdesc'=>'Addon Domains',
                        'pricings_id'=>2,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>14,
                        'fname'=>'Instant',
                        'fdesc'=>'Backup',
                        'pricings_id'=>2,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>15,
                        'fname'=>'Domain Gratis',
                        'fdesc'=>'Selamanya',
                        'pricings_id'=>2,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>16,
                        'fname'=>'Unlimited SSL',
                        'fdesc'=>'Gratis Selamanya',
                        'pricings_id'=>2,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>17,
                        'fname'=>'2X',
                        'fdesc'=>'RESOURCE POWER',
                        'pricings_id'=>3,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>18,
                        'fname'=>'Unlimited',
                        'fdesc'=>'Disk Space',
                        'pricings_id'=>3,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>19,
                        'fname'=>'Unlimited',
                        'fdesc'=>'Bandwidth',
                        'pricings_id'=>3,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>20,
                        'fname'=>'Unlimited',
                        'fdesc'=>'POP3 Email',
                        'pricings_id'=>3,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>21,
                        'fname'=>'Unlimited',
                        'fdesc'=>'Addon Domain',
                        'pricings_id'=>3,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>22,
                        'fname'=>'Instant',
                        'fdesc'=>'Backup',
                        'pricings_id'=>3,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>23,
                        'fname'=>'Domain Gratis',
                        'fdesc'=>'Selamanya',
                        'pricings_id'=>3,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>24,
                        'fname'=>'Unlimited SSL',
                        'fdesc'=>'Gratis Selamanya',
                        'pricings_id'=>3,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>25,
                        'fname'=>'Private',
                        'fdesc'=>'Name Server',
                        'pricings_id'=>3,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>26,
                        'fname'=>'SpamAssasin',
                        'fdesc'=>'Mail Protection',
                        'pricings_id'=>3,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>27,
                        'fname'=>'3X',
                        'fdesc'=>'RESOURCE POWER',
                        'pricings_id'=>4,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>28,
                        'fname'=>'Unlimited',
                        'fdesc'=>'Disk Space',
                        'pricings_id'=>4,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>29,
                        'fname'=>'Unlimited',
                        'fdesc'=>'Bandwidth',
                        'pricings_id'=>4,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>30,
                        'fname'=>'Unlimited',
                        'fdesc'=>'POP3 Email',
                        'pricings_id'=>4,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>31,
                        'fname'=>'Unlimited',
                        'fdesc'=>'Addon Domain',
                        'pricings_id'=>4,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>32,
                        'fname'=>'Magic Auto',
                        'fdesc'=>'Backup & Restore',
                        'pricings_id'=>4,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>33,
                        'fname'=>'Domain Gratis',
                        'fdesc'=>'Selamanya',
                        'pricings_id'=>4,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>34,
                        'fname'=>'Unlimited SSL',
                        'fdesc'=>'Gratis Selamanya',
                        'pricings_id'=>4,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>35,
                        'fname'=>'Private',
                        'fdesc'=>'Name Server',
                        'pricings_id'=>4,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>36,
                        'fname'=>'Prioritas',
                        'fdesc'=>'Layanan Support',
                        'pricings_id'=>4,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ],

                        [
                        'id'=>37,
                        'fname'=>'SpamExpert',
                        'fdesc'=>'Pro Mail Protection',
                        'pricings_id'=>4,
                        'created_at'=>'2020-08-21 19:20:30',
                        'updated_at'=>'2020-08-21 19:20:30'
                        ]

        ];
        Features::create($users);

    }
}
