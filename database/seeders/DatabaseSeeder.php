<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\Proposal;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->count(200)->create();

        User::query()->inRandomOrder()->limit(10)->get()
            ->each(function (User $u) {

            $project = Project::factory()->create(['created_by' => $u->id]);

            Proposal::factory()->count(random_int(4, 45))->create(['project_id' => $project->id]);
        });
    }
}
