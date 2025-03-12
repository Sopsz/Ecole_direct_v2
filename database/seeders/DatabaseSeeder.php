<?php

namespace Database\Seeders;

use App\Models\Classroom;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Ethan',
            'email' => 'ethan@gmail.com',
            'password' => 'azerty',
            'is_admin' => 1,
            'points' => 0,
            'nb_notes' => 0,
            'last_note' => null
        ]);

        $c1 = new Classroom;
        $c1->label = "SIO2";
        $c1->letter = "A";
        $c1->user_id = 1;
        $c1->save();

        for($ii = 0; $ii <5; $ii++){
            User::factory(5)->create([
               'classroom_id' => $c1->id,
            ]);
        }

        $c2 = new Classroom;
        $c2->label = "SIO2";
        $c2->letter = "B";
        $c2->user_id = 2;
        $c2->save();

        for($ii = 0; $ii <5; $ii++){
            User::factory(5)->create([
                'classroom_id' => $c2->id,
            ]);
        }

    }
}
