<?php

$instagramUrl = 'https://www.instagram.com/candice_pgmta/';

return [
    'instagram_url' => $instagramUrl,
    'instagram_username' => '@candice_pgmta',
    'socials' => [
        ['label' => 'GitHub', 'url' => 'https://github.com/sotlier/', 'icon' => 'bi-github'],
        ['label' => 'LinkedIn', 'url' => 'https://www.linkedin.com/in/itsardy/', 'icon' => 'bi-linkedin'],
        ['label' => 'Instagram', 'url' => $instagramUrl, 'icon' => 'bi-instagram'],
    ],
    'educations' => [
        [
            'institution' => 'John Robert Power',
            'program' => 'Personality',
            'description' => 'Developed confidence, personal presentation, and interpersonal communication skills.',
        ],
        [
            'institution' => 'LSPR',
            'program' => 'Public Relations',
            'description' => 'Built a foundation in public relations, including strategic communication and relationship-building with audiences.',
        ],
        [
            'institution' => 'Bunka School',
            'program' => 'Fashion Design',
            'description' => 'Explored fashion design concepts and the process of turning creative ideas into garment designs.',
        ],
        [
            'institution' => 'RevoU Bootcamp',
            'program' => 'Software Engineering & Digital Marketing',
            'description' => 'Studied software engineering and digital marketing, combining product development fundamentals with online marketing strategy.',
        ],
    ],
    'certificates' => [
        [
            'title' => 'Full Stack Software Engineering',
            'issuer' => 'RevoU',
            'issued_at' => '24 August 2024',
            'description' => 'Certificate of achievement for completing the Full Stack Software Engineering course.',
            'file' => 'certificate-files/software-engineering.pdf',
        ],
        [
            'title' => 'Full Stack Digital Marketing',
            'issuer' => 'RevoU',
            'issued_at' => '18 January 2025',
            'description' => 'Certificate of achievement for completing the Full Stack Digital Marketing course.',
            'file' => 'certificate-files/digital-marketing.pdf',
        ],
    ],
];
