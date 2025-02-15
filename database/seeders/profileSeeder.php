<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::factory(10)->create();
        // DB::table('profiles')->insert([
        //     'name' => Str::random(30), // Correspond à la taille définie dans la migration
        //     'email' => Str::random(10) . '@gmail.com', // Évitez de dépasser 255 caractères
        //     'password' => Hash::make('password'), // Hash compatible avec 255 caractères
        //     'Description' => Str::random(200), // Correspond à la colonne `text`
        // ]);
    }
}
