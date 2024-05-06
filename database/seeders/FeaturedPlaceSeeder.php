<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeaturedPlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('featured_place')->insert([
            'image' => 'Katon',
            'tempat' => 'jogja',
            'deskripsi' => 'wah jogja indah sekali yah'
        ]);
    }
}
