<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = Tag::all();
        $project = Project::factory()
            ->create([
                'title' => 'Sitio público y privado',
                'image' => 'public/diners-club-image.png',
                'logo' => 'public/diners-club-logo.png',
                'background' => '#223B82'
            ]);

        $this->setAttach($project, $tags);

        $project = Project::factory()
            ->create([
                'title' => 'Sitio web 2017',
                'image' => 'public/derco-image.png',
                'logo' => 'public/derco-logo.png',
                'background' => '#C92C3A'
            ]);

        $this->setAttach($project, $tags);

        $project = Project::factory()
            ->create([
                'title' => 'TV App',
                'image' => 'public/copec-image.png',
                'logo' => 'public/copec-logo.png',
                'background' => '#FFFFFF'
            ]);

        $this->setAttach($project, $tags);

    }

    /**
     * @param $project
     * @param $tags
     */
    private function setAttach($project, $tags): void
    {
        $project->tags()->attach(
            $tags->random(rand(2, 4))->pluck('id')->toArray()
        );
    }
}
