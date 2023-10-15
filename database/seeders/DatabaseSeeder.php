<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Organisme;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
        Organisme::factory(10)->create();


        \App\Models\Projet::factory(10)->create();
        // \App\Models\GroupEmploye::factory(10)->create();

        \App\Models\Phase::factory(120)->create();
        \App\Models\Liverable::factory(20)->create();

        \App\Models\Employe::factory(20)->create();
        \App\Models\DocTechenique::factory(20)->create();



        \App\Models\User::create([
            'nom' => 'Absi',
            'prenom' => 'Ossama',
            'photo' => asset('https://cdn-icons-png.flaticon.com/512/3135/3135715.png'),


            'Age' => 20,
            'About' => 'h gasu huohasoasu hc00o 0oh 0hshihsdih odohosdhadbosdnuihsdnoo osd hiio dio osdihoisd have',
            'Adresse' => 'dbu cxiqwu bcibci sdo0',
            'profil_id' => 2,
            'email' => 'OssamaAbsi@gmail.com',
            'password' => Hash::make('absi123'),
            'telephone' => 98228901,

        ]);

        \App\Models\User::create([
            'nom' => 'Labas',
            'prenom' => 'Ayman',
            'photo' => asset('https://cdn-icons-png.flaticon.com/512/3135/3135715.png'),


            'Age' => 21,
            'About' => 'h gasu huohasoasu hc00o 0oh 0hshihsdih odohosdhadbosdnuihsdnoo osd hiio dio osdihoisd have',
            'Adresse' => 'dbu cxiqwu bcibci sdo0',

            'email' => 'LabasAyman@gmail.com',
            'password' => Hash::make('labas123'),
            'profil_id' => 3,
            'telephone' => 9883901,
        ]);

        \App\Models\User::create([
            'nom' => 'Bouyahia',
            'prenom' => 'Houssam',
            'photo' => asset('https://cdn-icons-png.flaticon.com/512/3135/3135715.png'),

            'email' => 'BouyahiaHoussam@gmail.com',
            'password' => Hash::make('bouyahia123'),
            'telephone' => 988901,
            'Age' => 22,
            'About' => 'h gasu huohasoasu hc00o 0oh 0hshihsdih odohosdhadbosdnuihsdnoo osd hiio dio osdihoisd have',
            'Adresse' => 'dbu cxiqwu bcibci sdo0',
            'profil_id' => 1,

        ]);

        \App\Models\Profil::create([
            'role' => 'Administrator',
        ]);
        \App\Models\Profil::create([
            'role' => 'chafeProject',
        ]);
        \App\Models\Profil::create([
            'role' => 'secrtire',
        ]);

        \App\Models\Profil::factory(10)->create();

        // \App\Models\User::factory(10)->create();
        // \App\Models\Compte::factory(10)->create();
    }
}
