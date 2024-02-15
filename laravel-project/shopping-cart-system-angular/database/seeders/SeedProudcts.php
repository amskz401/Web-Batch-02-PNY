<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Str;

class SeedProudcts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i = 0; $i < 100; $i++) {
            $objP = new Product();
            $objP->title = Str::random(15);
            $objP->description = Str::random(100);
            $objP->price = 5 * $i;
            $objP->quantity = 20;
            $objP->save();
        }
    }
}
