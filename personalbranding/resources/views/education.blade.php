<x-layout title="Education - Ardyanto H." :socials="$socials">
    <section class="py-5">
        <div class="container py-4">
            <x-section-title title="Education" subtitle="Learning and professional development" />
            <div class="row g-4">
                @foreach ($educations as $education)
                <div class="col-sm-6 col-xl-3">
                    <article class="card border-0 shadow-sm h-100">
                        <div class="card-body p-4">
                            <span class="education-icon rounded-circle d-inline-flex align-items-center justify-content-center mb-3">
                                <i class="bi bi-mortarboard-fill fs-4"></i>
                            </span>
                            <h3 class="h5 fw-semibold">{{ $education['program'] }}</h3>
                            <p class="text-primary fw-semibold">{{ $education['institution'] }}</p>
                            <p class="text-secondary mb-0">{{ $education['description'] }}</p>
                        </div>
                    </article>
                </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('home') }}" class="btn btn-primary">Back to Homes</a>
            </div>
        </div>
    </section>
</x-layout>