<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Award;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::create(['name' => 'Work']);
        Category::create(['name' => 'Hobby']);
        Category::create(['name' => 'Personal']);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Award::create(['name'=>'Self care Award', 'image'=>'selfcare.png', 'description'=>'You have completed 5 self care tasks', 'task_required'=>5]);
        Award::create(['name'=>'Trackify Welcome Award', 'image'=>'welcome.png', 'description'=>'You have completed 5 tasks', 'task_required'=>5]);
        Award::create(['name'=>'Workaholic Award', 'image'=>'workaholic.png', 'description'=>'You have completed 5 work tasks', 'task_required'=>5]);
    }
}
