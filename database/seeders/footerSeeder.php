<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class footerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([

            'contact'=>'0719556472',
            'email'=>'0719556472',
            'online_open_at'=>'0719556472',
            'online_close_at'=>'0719556472',
            'address'=>'0719556472',
            'land_line'=>'0719556472',
            'shop_open_at'=>'0719556472',
            'shop_close_at'=>'0719556472'

        ]);
    }
}
