<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class EducationController extends Controller
{
    public function __invoke(): View
    {
        return view('education', [
            'educations' => config('personal_branding.educations'),
            'socials' => config('personal_branding.socials'),
        ]);
    }
}
