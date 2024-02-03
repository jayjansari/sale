<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\sim;
use App\Models\sm;

class DummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        sm::factory(250)->create()->each(function ($sale) {
            // For each sale, create a random number of sale items (between 1 and 5)
            sim::factory(rand(1, 5))->create([
                'saleid' => $sale->id,
            ]);
        });

        return redirect('/d');
    }
    }

