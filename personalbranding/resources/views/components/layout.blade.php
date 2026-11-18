@props(['title' => 'Personal Branding'])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        html {
            scroll-behavior: smooth;
        }

        section {
            scroll-margin-top: 5rem;
        }

        .hero-section {
            background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);
            color: #fff;
        }

        .hero-badge {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.25);
        }

        .profile-avatar {
            width: 220px;
            height: 220px;
            background: rgba(255, 255, 255, 0.12);
            border: 4px solid rgba(255, 255, 255, 0.3);
        }

        .skill-progress {
            height: 0.7rem;
        }

        .project-card img {
            height: 220px;
            object-fit: cover;
        }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-semibold" href="{{ route('home') }}">Alex Morgan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main style="padding-top: 4.5rem;">
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
            <p class="mb-0 small">&copy; {{ date('Y') }} Alex Morgan. Built with Laravel &amp; Bootstrap.</p>
            <div class="d-flex gap-3">
                <a href="https://github.com/" class="text-white-50 fs-5" aria-label="GitHub"><i class="bi bi-github"></i></a>
                <a href="https://www.linkedin.com/" class="text-white-50 fs-5" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.instagram.com/" class="text-white-50 fs-5" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
