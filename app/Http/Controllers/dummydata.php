<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sm;
use App\Models\sim;
class dummydata extends Controller
{
    public function addDummyData()
    {
        // Add 250 dummy sales records
        sm::factory(250)->create()->each(function ($sale) {
            // For each sale, create a random number of sale items (between 1 and 5)
            sim::factory(rand(1, 5))->create([
                'saleid' => $sale->id,
            ]);
        });

        return redirect('/d');
    }
}
