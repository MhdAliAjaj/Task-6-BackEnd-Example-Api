<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        Category::create([
            'category_name' => "cultural",
          ]);
        Category::create([
            'category_name' => "entertainment",
          ]);
        Category::create([
            'category_name' => "scientific",
          ]);
       
    }
}
