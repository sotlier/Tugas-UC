@props(['title' => 'Personal Branding', 'socials' => []])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        :root {
            --bs-primary: #003E8F;
            --bs-primary-rgb: 0, 62, 143;
        }

        html {
            scroll-behavior: smooth;
        }

        section {
            scroll-margin-top: 5rem;
        }

        .hero-section {
            background: #14243A;
            color: #fff;
        }

        .hero-badge {
            background: #FFD482;
            border: 1px solid #8F5E01;
            color: #14243A;
        }

        .btn-primary {
            --bs-btn-bg: #003E8F;
            --bs-btn-border-color: #003E8F;
            --bs-btn-hover-bg: #14243A;
            --bs-btn-hover-border-color: #14243A;
            --bs-btn-active-bg: #4F3B15;
            --bs-btn-active-border-color: #4F3B15;
            --bs-btn-focus-shadow-rgb: 0, 62, 143;
        }

        .hero-section .btn-light {
            --bs-btn-color: #14243A;
            --bs-btn-bg: #FFD482;
            --bs-btn-border-color: #FFD482;
            --bs-btn-hover-bg: #ADD0FF;
            --bs-btn-hover-border-color: #ADD0FF;
        }

        .hero-section .btn-outline-light {
            --bs-btn-color: #FFD482;
            --bs-btn-border-color: #FFD482;
            --bs-btn-hover-color: #14243A;
            --bs-btn-hover-bg: #FFD482;
            --bs-btn-hover-border-color: #FFD482;
        }

        .profile-avatar {
            width: 220px;
            height: 220px;
            background: rgba(173, 208, 255, 0.15);
            border: 4px solid #ADD0FF;
        }

        .education-icon {
            width: 3.25rem;
            height: 3.25rem;
            background: #FFD482;
            color: #14243A;
        }

        .skill-progress {
            height: 0.7rem;
            background-color: #fff;
        }

        .skill-progress .progress-bar {
            background-color: #FFD482;
        }

        .text-bg-secondary {
            color: #FFD482 !important;
            background-color: #4F3B15 !important;
        }

        .navbar.bg-dark,
        footer.bg-dark {
            background-color: #14243A !important;
        }

        .project-card img {
            height: 220px;
            object-fit: cover;
        }
    </style>
</head>

<body class="bg-light min-vh-100 d-flex flex-column">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="{{ route('home') }}">Ardyanto H.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('education') }}">Education</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('certificates') }}">Certificates</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#instagram">Instagram</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('home') }}#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="flex-grow-1" style="padding-top: 2rem;">
        @if (session('success'))
        <div class="container mt-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
        @endif

        {{ $slot }}
    </main>

    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container d-flex flex-column flex-md-row justify-content-between align-items-center gap-2">
            <p class="mb-0 small">&copy; {{ date('Y') }} Ardyanto H. Built with Laravel &amp; Bootstrap.</p>
            <div class="d-flex gap-3">
                @foreach ($socials as $social)
                <a href="{{ $social['url'] }}" class="text-white-50 fs-5" target="_blank" rel="noopener noreferrer" aria-label="{{ $social['label'] }}">
                    <i class="bi {{ $social['icon'] }}"></i>
                </a>
                @endforeach
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>