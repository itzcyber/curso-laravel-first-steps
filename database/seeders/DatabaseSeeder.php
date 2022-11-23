<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{

    public function run()
    {
        //ejecutar categoria antes de posts ya que para crear los post necesita de categorias existentes previamente
        $this->call(CategorySeeder::class);

        $this->call(PostSeeder::class);
    }
}
