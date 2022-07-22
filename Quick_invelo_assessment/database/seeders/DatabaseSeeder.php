<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        DB::table('record')->insert([
            'name' => Str::random(10),
            'field_id' => 1
        ]);
        DB::table('record')->insert([
            'name' => Str::random(10),
            'field_id' => 1
        ]);
        DB::table('record')->insert([
            'name' => Str::random(10),
            'field_id' => 1
        ]);
        DB::table('record')->insert([
            'name' => Str::random(10),
            'field_id' => 1
        ]);
        DB::table('record')->insert([
            'name' => Str::random(10),
            'field_id' => 1
        ]);
        DB::table('record')->insert([
            'name' => Str::random(10),
            'field_id' => 2
        ]);
        
        DB::table('field')->insert([
            'name' => Str::random(10),
            'record_id' => 1
        ]);
        DB::table('field')->insert([
            'name' => Str::random(10),
             'record_id' => 1
        ]);
        DB::table('field')->insert([
            'name' => Str::random(10),
             'record_id' => 1
        ]);
        DB::table('field')->insert([
            'name' => Str::random(10),
             'record_id' => 1
        ]);
        DB::table('field')->insert([
            'name' => Str::random(10),
             'record_id' => 2
        ]);
    }
}
