<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $projects = Project::query()->orderBy('sort_order')->get();

        $profile = [
            'name' => 'Alex Morgan',
            'title' => 'Full-Stack Web Developer',
            'tagline' => 'I craft clean, user-focused digital experiences with Laravel, modern PHP, and thoughtful design.',
            'location' => 'Jakarta, Indonesia',
            'email' => 'hello@example.com',
            'about' => 'I am a passionate developer who enjoys turning ideas into reliable, elegant web applications. With a strong foundation in backend development and an eye for clean UI, I focus on building products that are fast, accessible, and easy to maintain.',
            'about_details' => [
                'experience' => '3+ Years Experience',
                'projects' => '20+ Projects Delivered',
                'focus' => 'Laravel & Bootstrap',
            ],
            'socials' => [
                ['label' => 'GitHub', 'url' => 'https://github.com/', 'icon' => 'bi-github'],
                ['label' => 'LinkedIn', 'url' => 'https://www.linkedin.com/', 'icon' => 'bi-linkedin'],
                ['label' => 'Instagram', 'url' => 'https://www.instagram.com/', 'icon' => 'bi-instagram'],
            ],
            'skills' => [
                ['name' => 'Laravel & PHP', 'level' => 90],
                ['name' => 'Bootstrap & UI Design', 'level' => 88],
                ['name' => 'JavaScript', 'level' => 80],
                ['name' => 'MySQL / SQLite', 'level' => 85],
                ['name' => 'REST APIs', 'level' => 82],
                ['name' => 'Git & Collaboration', 'level' => 86],
            ],
            'experiences' => [
                [
                    'role' => 'Full-Stack Developer',
                    'company' => 'Freelance & Personal Projects',
                    'period' => '2023 - Present',
                    'description' => 'Designing and developing personal branding sites, business websites, and web applications with Laravel and Bootstrap.',
                ],
                [
                    'role' => 'Web Development Student',
                    'company' => 'University Projects',
                    'period' => '2021 - 2023',
                    'description' => 'Built academic and collaborative projects focused on CRUD systems, responsive interfaces, and clean code practices.',
                ],
            ],
        ];

        return view('home', [
            'projects' => $projects,
            'profile' => $profile,
        ]);
    }
}
