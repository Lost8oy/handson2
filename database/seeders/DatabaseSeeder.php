<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\computer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        computer::create ([
            'inventory_number' => '2b',
            'model' => 'AppleII',
            'submodel' => 'plus',
            'manufacturer' => '1',
            'processor' => 'Intel',
            'power' => '120v',
            'speed' => '1mb',
            'country' => '1',
            'date' => '1984-06-19',
            'bit' => '8-bit',
            'description' => 'none'

        ]);
        computer::create ([
            'inventory_number' => '2b',
            'model' => 'AppleII',
            'submodel' => 'plus',
            'manufacturer' => '1',
            'processor' => 'Intel',
            'power' => '120v',
            'speed' => '1mb',
            'country' => '1',
            'date' => '1984-06-19',
            'bit' => '8-bit',
            'description' => 'none'

        ]);
    }
}
