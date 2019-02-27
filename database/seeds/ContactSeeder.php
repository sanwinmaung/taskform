<?php

use Illuminate\Database\Seeder;
use App\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact_one = Contact::create([
        	'name' => 'Bill Gate',
        	'description' => 'CEO of Microsoft'
        ]);

        $contact_two = Contact::create([
        	'name' => 'Steve Job',
        	'description' => 'CEO of Apple'
        ]);

        $contact_one = Contact::create([
        	'name' => 'Mark Zuckerberg',
        	'description' => 'CEO of Facebook'
        ]);
    }
}
