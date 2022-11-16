<?php

namespace Database\Seeders;

use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
                //disable FK : para evitar problemas al truncar la table; luego trunca table categ
        Schema::disableForeignKeyConstraints();
        Category::truncate();
        

        for ($i = 1; $i < 11 ; $i++) { 
            Category::create(
                [
                    'title' => "Categoria $i",
                    'slug' => "Categoria-$i"
                ]
            );
        }
        //enable FK despues de crear las categorias en la tabla modo seed
        Schema::enableForeignKeyConstraints();
    }
}