<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->insert([
            [
                'name' => 'Bank OCBC',
                'code' => 'ocbc_va',
                'thumbnail' => 'img_bank_ocbc.png',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bank BNI',
                'code' => 'bni_va',
                'thumbnail' => 'img_bank_bni.png',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bank BCA',
                'code' => 'bca_va',
                'thumbnail' => 'img_bank_bca.png',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bank BRI',
                'code' => 'bri_va',
                'thumbnail' => 'img_bank_bri.png',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
