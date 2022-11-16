<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        //ejecutar categoria antes de posts ya que para crear los post necesita de categorias existentes previamente
        $this->call(CategorySeeder::class);

        $this->call(PostSeeder::class);
    }
}
