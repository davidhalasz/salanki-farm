<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Animal;

class AnimalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Animal::create([
            "name" => "Kecske",
            "filepath" => "animals/kecske2.jpeg",
        ]);

        Animal::create([
            "name" => "Láma",
            "filepath" => "animals/lama2.jpeg",
        ]);

        Animal::create([
            "name" => "Ló",
            "filepath" => "animals/lo.jpg",
        ]);

        Animal::create([
            "name" => "Nyúl",
            "filepath" => "animals/nyul2.jpeg",
        ]);

        Animal::create([
            "name" => "Páva",
            "filepath" => "animals/pava2.jpeg",
        ]);

        Animal::create([
            "name" => "Teve",
            "filepath" => "animals/teve2.jpeg",
        ]);

        Animal::create([
            "name" => "Szárnyasok",
            "filepath" => "animals/csirke2.jpeg",
        ]);

        Animal::create([
            "name" => "Papagáj",
            "filepath" => "animals/papagaj2.jpeg",
        ]);

        Animal::create([
            "name" => "Strucc",
            "filepath" => "animals/strucc2.jpeg",
        ]);

        Animal::create([
            "name" => "Teknős",
            "filepath" => "animals/teknos2.jpeg",
        ]);
    }
}
