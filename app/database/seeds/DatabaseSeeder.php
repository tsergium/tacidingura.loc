<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        // $this->call('UserTableSeeder');
        DB::table('products')->insert([
            'name' => str_random(10),
            'oldPrice' => rand(1, 9) * 3.5 * 10,
            'newPrice' => rand(1, 9) * 3.5 * 10,
        ]);
    }
}
