<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $admin = User::factory()->create([
            'name'  => 'Admin',
            'email' => 'admin@admin.com',
        ]);
        $team = Team::factory()->create([
            'name'    => 'Admin',
            'user_id' => $admin->id,
        ]);
        $admin->forceFill(['current_team_id' => $team->id])->save();
    }
}
