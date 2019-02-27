<?php

use Illuminate\Database\Seeder;
use App\Priority;

class PrioritySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $priority_one = Priority::create([
        	'title' => 'Very Important',
        	'description' => 'Very Important'
        ]);

        $priority_two = Priority::create([
        	'title' => 'Important',
        	'description' => 'Important'
        ]);

        $priority_three = Priority::create([
        	'title' => 'Normal',
        	'description' => 'Normal'
        ]);

        $priority_four = Priority::create([
        	'title' => 'Slow',
        	'description' => 'Slow'
        ]);
    }
}
