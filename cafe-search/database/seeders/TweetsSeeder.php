<?php

namespace Database\Seeders;

use App\Models\CafeSearch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('cafe_users')->insert([
        //     'user_id' => 1,
        //     'age' => 25,
        //     'password' => 'Hello, World!',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'email' => 'test@example.com'
        // ]);


        CafeSearch::factory()->count(10)->create();
        
    }
}
