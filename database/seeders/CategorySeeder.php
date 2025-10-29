<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Category::create([
            'id' => 1,
            'name' => 'General Request',
            'parent_id' => null
        ]);
        Category::create([
            'id' => 2,
            'name' => 'Incident',
            'parent_id' => null
        ]);
        Category::create([
            'id' => 3,
            'name' => 'E-gate',
            'parent_id' => 1
        ]);
        Category::create([
            'id' => 4,
            'name' => 'ilog',
            'parent_id' => 1
        ]);
        Category::create([
            'id' => 5,
            'name' => 'Chatbot',
            'parent_id' => 2
        ]);
        Category::create([
            'id' => 6,
            'name' => 'OMS',
            'parent_id' => 2
        ]);
        Category::create([
            'id' => 7,
            'name' => 'Unrecognized language',
            'parent_id' => 5
        ]);
        Category::create([
            'id' => 8,
            'name' => 'Wifi tool',
            'parent_id' => 6
        ]);
        Category::create([
            'id' => 9,
            'name' => 'Recording unavailale',
            'parent_id' => 4
        ]);
        Category::create([
            'id' => 10,
            'name' => 'User locked',
            'parent_id' => 3
        ]);
    }
}
