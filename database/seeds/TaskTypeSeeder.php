<?php

use Illuminate\Database\Seeder;
use App\TaskType;

class TaskTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_one = TaskType::create([
        	'title' => 'Report for Meeting Minutes',
        	'description' => 'Report for Meeting Minutes.'
        ]);

        $type_two = TaskType::create([
        	'title' => 'Send Email',
        	'description' => 'To send email to client.'
        ]);
    }
}
