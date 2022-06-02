<?php

namespace Database\Seeders;
use App\Models\Team;
use App\Models\User;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();
        // para llamar a la clase Team Seeder
        //$this->call('TeamSeeder::class');

        // Team::factory(10)->create();

        $this->call(TeamSeeder::class);
        // $this->call(PartidosSeeder::class);

        
    }
}
