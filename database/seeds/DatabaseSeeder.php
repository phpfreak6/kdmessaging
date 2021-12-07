<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//         $this->call(UsersTableSeeder::class);
        $this->call(AwsRegionsTableSeeder::class);
        $this->call(TimeZonesTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
    }
}
