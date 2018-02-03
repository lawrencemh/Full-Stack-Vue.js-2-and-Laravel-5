<?php

use App\Models\Listing;
use Illuminate\Database\Seeder;

class ListingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $path     = base_path('database/data.json');
        $file     = file($path);
        $listings = json_decode($file[0], true);

        foreach ($listings as $listing) {
            Listing::firstOrCreate($listing);
        }
    }
}
