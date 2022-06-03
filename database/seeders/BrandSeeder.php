<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arrays = [
            ['brand' => 'TOYOTA'],
            ['brand' => 'HONDA'],
            ['brand' => 'MITSUBITSI'],
            ['brand' => 'HYUDAI'],
            ['brand' => 'MERCEDES'],
        ];

        foreach($arrays as $row){
            Brand::create([
                'brand' => $row['brand']
            ]);
        }
    }
}
