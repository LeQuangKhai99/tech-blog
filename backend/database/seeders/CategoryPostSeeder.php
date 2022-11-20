<?php

namespace Database\Seeders;

use App\Models\CategoryPost;
use Database\Factories\CategoryPostFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryPost::factory()->count(50)->create();
    }
}
