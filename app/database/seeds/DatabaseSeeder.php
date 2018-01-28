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
            'url' => 'http://example.com',
            'affiliateUrl' => 'http://example.com?type=affiliate',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis placerat augue ex, 
            et malesuada ante sagittis id. Aenean aliquam imperdiet nisl, vel ullamcorper mauris efficitur et. 
            Quisque id est tristique dui vehicula commodo id ut nisi. Donec felis sem, aliquam at massa ut, 
            molestie tincidunt arcu. Etiam odio magna, interdum ac leo in, aliquam imperdiet libero. Praesent 
            dapibus sem pharetra metus convallis tincidunt. Maecenas rhoncus vehicula quam, at pharetra neque
            dignissim ac. Fusce justo orci, tristique ut dignissim vitae, dignissim non nunc. 
            Suspendisse molestie diam id ligula suscipit dapibus. Suspendisse gravida dolor bibendum aliquam auctor. 
            Ut sed venenatis velit. Vestibulum ante eros, imperdiet quis urna et, finibus porttitor magna. 
            Nunc efficitur libero eget neque volutpat, id consequat sapien mattis.',
        ]);
    }
}
