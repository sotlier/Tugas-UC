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
                'title' => 'Personal Portfolio Website',
                'description' => 'A responsive personal branding website built with Laravel and Bootstrap to showcase profile, skills, and projects.',
                'image_url' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&w=1200&q=80',
                'project_url' => 'https://example.com/portfolio',
                'github_url' => 'https://github.com/example/portfolio',
                'technologies' => 'Laravel, Bootstrap, Blade, SQLite',
                'sort_order' => 1,
            ],
            [
                'title' => 'Business Landing Page',
                'description' => 'A clean landing page for a small business with service highlights, testimonials, and a contact call-to-action.',
                'image_url' => 'https://images.unsplash.com/photo-1498050108023-c5249f4df085?auto=format&fit=crop&w=1200&q=80',
                'project_url' => 'https://example.com/business',
                'github_url' => 'https://github.com/example/business-landing',
                'technologies' => 'Laravel, Bootstrap 5, PHP',
                'sort_order' => 2,
            ],
            [
                'title' => 'Task Management Dashboard',
                'description' => 'A simple productivity dashboard concept featuring task tracking, status cards, and an organized user interface.',
                'image_url' => 'https://images.unsplash.com/photo-1517694712202-14dd9538aa97?auto=format&fit=crop&w=1200&q=80',
                'project_url' => 'https://example.com/tasks',
                'github_url' => 'https://github.com/example/task-dashboard',
                'technologies' => 'Laravel, Bootstrap, JavaScript',
                'sort_order' => 3,
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
