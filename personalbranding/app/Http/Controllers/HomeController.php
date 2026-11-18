<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        $instagramUrl = config('personal_branding.instagram_url');
        $instagramUsername = config('personal_branding.instagram_username');

        $profile = [
            'name' => 'Ardy',
            'avatar' => 'https://softpfp.com/wp-content/uploads/2026/06/Funny-profile-pictures-pinterest-1.webp',
            'title' => 'Student at Universitas Ciputra Surabaya',
            'tagline' => 'I am a denim crafter, a father, and a student at UC Surabaya.',
            'location' => 'Jakarta, Indonesia',
            'email' => 'ardy.henjaya@gmail.com',
            'about' => 'I am an entrepreneur with over 10 years of experience running a wholesale clothing business. Currently pursuing a degree in technology to sharpen my technical skills, I bridge real-world commercial expertise with modern software development to build fast, reliable, and user-friendly web applications.',
            'about_details' => [
                'education' => 'Personality, Public Relations, Fashion Design, Software Engineering & Digital Marketing',
                'projects' => '5+ Student Group Projects Delivered',
                'focus' => 'Laravel, Bootstrap, React, and RESTful APIs',
            ],
            'socials' => config('personal_branding.socials'),
            'skills' => [
                ['name' => 'Laravel & PHP', 'level' => 30],
                ['name' => 'Bootstrap & UI Design', 'level' => 80],
                ['name' => 'JavaScript', 'level' => 70],
                ['name' => 'MySQL / SQLite', 'level' => 65],
                ['name' => 'REST APIs', 'level' => 70],
                ['name' => 'Git & Collaboration', 'level' => 70],
            ],
            'experiences' => [
                [
                    'role' => 'Mandarin Teacher',
                    'company' => 'AI-XIN MANDARIN SCHOOL',
                    'period' => '2009 - 2009',
                    'description' => 'Taught Mandarin at AI-XIN MANDARIN SCHOOL.',
                ],
                [
                    'role' => 'Executive Marketing',
                    'company' => 'PT. TIGA DUA PROPERTY',
                    'period' => '2009 - 2010',
                    'description' => 'Worked in executive marketing at PT. TIGA DUA PROPERTY.',
                ],
                [
                    'role' => 'Founder & Owner',
                    'company' => 'Candice Wholesale Denim Trading Company',
                    'period' => '2012 - Present',
                    'description' => 'Developing and operating my own wholesale denim trading company.',
                ],
            ],
        ];

        return view('home', [
            'profile' => $profile,
            'instagramUrl' => $instagramUrl,
            'instagramUsername' => $instagramUsername,
        ]);
    }
}
