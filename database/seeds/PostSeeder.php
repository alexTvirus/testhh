<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
              'name' => 'F.A.Q',
              'desc' => 'acd',
              'type_id' => 1,
              'slug' => 'f-a-q',
            ],
            [
              'name' => 'Sell Cvv Good Fresh & Cc Fullz Info',
              'type_id' => 2,
              'desc' => 'sell-cvv-good-fresh-cc-fullz-info',
              'slug' => 'sell-cvv-good-fresh-cc-fullz-info',
            ],
            [
              'name' => 'Sell Dumps Track1 Track2',
              'type_id' => 3,
              'desc' => 'Sell Dumps Track1 Track2',
              'slug' => 'sell-dumps-track1-track2',
            ],
            [
              'name' => 'Payment',
              'type_id' => 4,
              'desc' => 'payment',
              'slug' => 'payment',
            ]
          ];
          DB::table('posts')->insert($posts);
    }
}
