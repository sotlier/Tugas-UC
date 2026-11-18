<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class CertificatesController extends Controller
{
    public function __invoke(): View
    {
        return view('certificates', [
            'certificates' => config('personal_branding.certificates'),
            'socials' => config('personal_branding.socials'),
        ]);
    }
}
