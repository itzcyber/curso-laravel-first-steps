<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use Illuminate\Support\Facades\Schema;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Category::truncate();

        for ($i = 0; $i < 20 ; $i++) { 
            Category::create(
                [
                    'title' => "Categoria $i",
                    'slug' => "categoria-$i"
                ]
            );
        }
        Schema::enableForeignKeyConstraints();
    }
}