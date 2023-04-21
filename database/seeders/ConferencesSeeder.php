<?php

namespace Database\Seeders;

use App\Models\Conference;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferencesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        (new Conference())->insert([
            [
                'title' => 'Konferencija 1',
                'content' => Lorem::text(),
                'address' => 'Address 123',
                'datetime' => '2023-06-01 17:30:00'
            ],
            [
                'title' => 'Konferencija 2',
                'content' => Lorem::text(),
                'address' => 'Address 321',
                'datetime' => '2023-05-21 12:30:00'
            ]
        ]);
    }
}
