<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Database\Seeder;
use App\Models\Property;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        Property::factory(50)->create();
        User::factory()->create([
            'name' => "julien",
            'email' => "julien@example.com",
            'password' => bcrypt("0000")
        ]);
        Booking::factory(10)->create();
    }
}
