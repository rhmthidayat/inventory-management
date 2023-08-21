<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            BrandSeeder::class,
            SiteSeeder::class,
            TypeSeeder::class,
            LocationSeeder::class,
            RackSeeder::class,
            DeviceSeeder::class
        ]);
    }
}