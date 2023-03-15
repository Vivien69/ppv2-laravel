<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Factories\OffreFactory;
use Database\Seeders\CategorieTableSeeder;
use App\Models\{ User, Offre, Annonce, Marchand, Categorie };

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorieTableSeeder::class);

        
        User::factory(20)->create();
        Marchand::factory(30)->create();
        Offre::factory(10)->create();
        Annonce::factory(30)->create();
            

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
