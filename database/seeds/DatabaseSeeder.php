<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProdutosTableSeeder::class);
        $this->call(ProjetoTableSeeder::class);
        $this->call(RepresentantesTableSeeder::class);
    }
}
