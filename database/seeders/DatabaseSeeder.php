<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Dragon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);


        $d = new Dragon;
        $d->name = 'Draago';
        $d->type = 'speed';
        $d->level = 7;
        $d->height = 2.97;
        $d->born_at = '2026-11-03';
        $d->is_in_team = true;
        $d->image_path = 'https://thumbs.dreamstime.com/b/kind-dragon-looks-sad-full-body-image-cartoon-style-kind-dragon-looks-sad-full-body-image-cartoon-style-ai-313756626.jpg';
        $d->save(); 

        $d = new Dragon;
        $d->name = 'Dragus';
        $d->type = 'strength';
        $d->level = 107;
        $d->height = 5.97;
        $d->born_at = '1990-11-03';
        $d->is_in_team = false;
        $d->image_path = 'https://images.cults3d.com/RdvBvzamLdru8Jv6PgG37w8msBQ=/516x516/filters:no_upscale()/https://fbi.cults3d.com/uploaders/40110151/illustration-file/83011f52-5270-44a6-80e6-9624b7c9f5fb/Dragon2.png';
        $d->save(); 

        $d = new Dragon;
        $d->name = 'Draguette';
        $d->type = 'technique';
        $d->level = 19;
        $d->height = 1.07;
        $d->born_at = '190-11-03';
        $d->is_in_team = true;
        $d->image_path = 'https://thumbs.dreamstime.com/b/dessin-d-encre-de-cheville-type-dragon-dessin%C3%A9-%C3%A0-la-main-mod%C3%A8le-wyvern-croquis-noir-et-blanc-illustration-236580527.jpg';
        $d->save(); 
    }
}
