<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Personal Branding Instagram',
                'description' => 'A responsive personal branding website built with Laravel and Bootstrap to showcase profile, skills, and projects.',
                'image_url' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80',
                'project_url' => 'https://example.com/portfolio',
                'github_url' => 'https://github.com/example/portfolio',
                'technologies' => 'Laravel, Bootstrap, Blade, SQLite',
                'sort_order' => 1,
            ],
        ];

        foreach ($projects as $project) {
            Project::query()->updateOrCreate(
                ['title' => $project['title']],
                $project,
            );
        }
    }
}
