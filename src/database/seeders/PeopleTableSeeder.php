<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Person::create([
            'name' => 'Jorge da Silva',
            'email' => 'jorge@terra.com.br',
            'category_id' => 1,
        ]);
        Person::create([
            'name' => 'Flavia Monteiro',
            'email' => 'flavia@globo.com',
            'category_id' => 2,
        ]);
        Person::create([
            'name' => 'Marcos Frota Ribeiro',
            'email' => 'ribeiro@gmail.com',
            'category_id' => 2,
        ]);
        Person::create([
            'name' => 'Raphael Souza Santos',
            'email' => 'rsantos@gmail.com',
            'category_id' => 1,
        ]);
        Person::create([
            'name' => 'Pedro Paulo Mota',
            'email' => 'ppmota@gmail.com',
            'category_id' => 1,
        ]);
        Person::create([
            'name' => 'Winder Carvalho da Silva',
            'email' => 'winder@hotmail.com',
            'category_id' => 3,
        ]);
        Person::create([
            'name' => 'Maria da Penha Albuquerque',
            'email' => 'mpa@hotmail.com',
            'category_id' => 3,
        ]);
        Person::create([
            'name' => 'Rafael Garcia Souza',
            'email' => 'rgsouza@hotmail.com',
            'category_id' => 3,
        ]);
        Person::create([
            'name' => 'Tabata Costa',
            'email' => 'tabata_costa@gmail.com',
            'category_id' => 2,
        ]);
        Person::create([
            'name' => 'Ronil Camarote',
            'email' => 'camarote@terra.com.br',
            'category_id' => 1,
        ]);
        Person::create([
            'name' => 'Joaquim Barbosa',
            'email' => 'barbosa@globo.com',
            'category_id' => 1,
        ]);
        Person::create([
            'name' => 'Eveline Maria Alcantra',
            'email' => 'ev_alcantra@gmail.com',
            'category_id' => 2,
        ]);
        Person::create([
            'name' => 'João Paulo Vieira',
            'email' => 'jpvieria@gmail.com',
            'category_id' => 1,
        ]);
        Person::create([
            'name' => 'Carla Zamborlini',
            'email' => 'zamborlini@terra.com.br',
            'category_id' => 3,
        ]);
    }
}
