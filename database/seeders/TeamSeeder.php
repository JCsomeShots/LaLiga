<?php

namespace Database\Seeders;
use App\Models\Team;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // instanciando de uno a uno los equipos

        $equipo = new Team();
        $equipo->name = 'Real Madrid';
        $equipo->slogan = 'Hala Madrid';
        $equipo->club = 'Real Madrid Club ';
        $equipo->save();

        $equipo1 = new Team();
        $equipo1->name = 'FC Barcelona';
        $equipo1->slogan = 'Més que un club';
        $equipo1->club = 'FC Barcelona ';
        $equipo1->save();

        $equipo2 = new Team();
        $equipo2->name = 'Valencia CF';
        $equipo2->slogan = 'Nadie es tan bueno como todos juntos';
        $equipo2->club = 'Valencia Club de Fútbol ';
        $equipo2->save();
       
        $equipo3 = new Team();
        $equipo3->name = 'Betis';
        $equipo3->slogan = 'Viva er betis manquepierda';
        $equipo3->club = 'Club Deportivo Betis Club de Fútbol';
        $equipo3->save();

        $equipo3 = new Team();
        $equipo3->name = 'Sevilla';
        $equipo3->slogan = 'Lucha por lo que amas';
        $equipo3->club = 'Sevilla Fútbol Club';
        $equipo3->save();

        $equipo3 = new Team();
        $equipo3->name = 'Altéctico de Madrid';
        $equipo3->slogan = 'Nunca dejes de creer ';
        $equipo3->club = 'Club Atlético de Madrid';
        $equipo3->save();

        $equipo3 = new Team();
        $equipo3->name = 'Espanyol';
        $equipo3->slogan = 'Maravillosa minoría';
        $equipo3->club = 'RCD Espanyol de Barcelona';
        $equipo3->save();

        $equipo3 = new Team();
        $equipo3->name = 'Mallorca';
        $equipo3->slogan = 'MÓJATE POR EL RCD MALLORCA';
        $equipo3->club = 'Real Club Deportivo Mallorca';
        $equipo3->save();

        // Team::factory(3)->create();
    }
}
