<x-layout :title="$profile['name'].' - '.$profile['title']" :socials="$profile['socials']">
    <section class="hero-section py-5 py-lg-6">
        <div class="container py-4 py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-7">
                    <span class="badge hero-badge rounded-pill px-3 py-2 mb-3">Personal Branding</span>
                    <h1 class="display-4 fw-bold mb-3">Hi, I'm {{ $profile['name'] }}</h1>
                    <p class="fs-4 fw-light mb-3">{{ $profile['title'] }}</p>
                    <p class="lead mb-4 text-white-50">{{ $profile['tagline'] }}</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="#instagram" class="btn btn-light btn-lg px-4">Visit Instagram</a>
                        <a href="#contact" class="btn btn-outline-light btn-lg px-4">Contact Me</a>
                    </div>
                    <div class="d-flex gap-3 mt-4">
                        @foreach ($profile['socials'] as $social)
                        <a href="{{ $social['url'] }}" class="text-white fs-4" target="_blank" rel="noopener" aria-label="{{ $social['label'] }}">
                            <i class="bi {{ $social['icon'] }}"></i>
                        </a>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-5 text-center">
                    <div class="profile-avatar rounded-circle d-inline-flex align-items-center justify-content-center shadow-lg">
                        <img
                            src="{{ $profile['avatar'] }}"
                            alt="Foto profil {{ $profile['name'] }}"
                            class="rounded-circle w-100 h-100"
                            style="object-fit: cover;">
                    </div>
                    <div class="mt-4">
                        <p class="mb-1"><i class="bi bi-geo-alt-fill me-2"></i>{{ $profile['location'] }}</p>
                        <p class="mb-0"><i class="bi bi-envelope-fill me-2"></i>{{ $profile['email'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container py-4">
            <x-section-title title="About Me" subtitle="A quick introduction to who I am and what I do" />
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-lg-5">
                            <p class="fs-5 text-secondary mb-4">{{ $profile['about'] }}</p>
                            <div class="row g-3">
                                @foreach ($profile['about_details'] as $detail)
                                <div class="col-md-4">
                                    <div class="border rounded-3 p-3 text-center h-100 bg-light">
                                        <span class="fw-semibold">{{ $detail }}</span>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="py-5 bg-white">
        <div class="container py-4">
            <x-section-title title="Skills" subtitle="Technologies and strengths I bring to every project" />
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-4">
                        @foreach ($profile['skills'] as $skill)
                        <div class="col-md-6">
                            <div class="p-4 border rounded-3 h-100 bg-light">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="fw-semibold">{{ $skill['name'] }}</span>
                                    <span class="text-secondary">{{ $skill['level'] }}%</span>
                                </div>
                                <div class="progress skill-progress" role="progressbar" aria-label="{{ $skill['name'] }}" aria-valuenow="{{ $skill['level'] }}" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar" style="width: {{ $skill['level'] }}%"></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="instagram" class="py-5">
        <div class="container py-4">
            <x-section-title title="Instagram" subtitle="Follow my updates and connect with me on Instagram" />
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-lg-5">
                            <div class="row align-items-center g-4">
                                <div class="col-auto">
                                    <img
                                        src="{{ $profile['avatar'] }}"
                                        alt="Foto profil {{ $profile['name'] }}"
                                        class="rounded-circle border"
                                        width="112"
                                        height="112"
                                        style="object-fit: cover;">
                                </div>
                                <div class="col text-center text-md-start">
                                    <p class="text-secondary small mb-1"><i class="bi bi-instagram me-1"></i>Instagram Profile</p>
                                    <h3 class="fw-semibold mb-1">{{ $profile['name'] }}</h3>
                                    <p class="text-primary mb-2">{{ $instagramUsername }}</p>
                                    <p class="text-secondary mb-0">{{ $profile['tagline'] }}</p>
                                </div>
                                <div class="col-12 col-md-auto text-center">
                                    <a href="{{ $instagramUrl }}" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-lg text-nowrap">
                                        <i class="bi bi-instagram me-2"></i>Follow on Instagram
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="experience" class="py-5 bg-white">
        <div class="container py-4">
            <x-section-title title="Experience" subtitle="My journey and hands-on development background" />
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="row g-4">
                        @foreach ($profile['experiences'] as $experience)
                        <div class="col-12">
                            <div class="card border-0 shadow-sm">
                                <div class="card-body p-4">
                                    <div class="d-flex flex-column flex-md-row justify-content-between mb-2 gap-2">
                                        <div>
                                            <h5 class="fw-semibold mb-1">{{ $experience['role'] }}</h5>
                                            <p class="text-primary mb-0">{{ $experience['company'] }}</p>
                                        </div>
                                        <span class="badge text-bg-secondary align-self-start">{{ $experience['period'] }}</span>
                                    </div>
                                    <p class="text-secondary mb-0">{{ $experience['description'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container py-4">
            <x-section-title title="Contact" subtitle="Have a question or want to work together? Send me a message" />
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-4 p-lg-5">
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <label for="name" class="form-label">Name</label>
                                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" required>
                                        @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" required>
                                        @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="subject" class="form-label">Subject <span class="text-secondary">(optional)</span></label>
                                        <input type="text" id="subject" name="subject" value="{{ old('subject') }}" class="form-control @error('subject') is-invalid @enderror">
                                        @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <label for="message" class="form-label">Message</label>
                                        <textarea id="message" name="message" rows="5" class="form-control @error('message') is-invalid @enderror" required>{{ old('message') }}</textarea>
                                        @error('message')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary btn-lg px-4">
                                            <i class="bi bi-send me-2"></i>Send Message
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>