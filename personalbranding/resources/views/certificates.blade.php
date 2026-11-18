<x-layout title="Certificates - Ardyanto H." :socials="$socials">
    <section class="py-5">
        <div class="container py-4">
            <x-section-title title="Certificates" subtitle="Course certificates and achievements" />
            <div class="row g-4">
                @foreach ($certificates as $certificate)
                    @php($pdfUrl = asset($certificate['file']))
                    <div class="col-lg-6">
                        <article class="card border-0 shadow-sm h-100">
                            <div class="ratio" style="--bs-aspect-ratio: 70.7%;">
                                <iframe
                                    src="{{ $pdfUrl }}#page=1&view=FitH&toolbar=0&navpanes=0"
                                    title="Preview of {{ $certificate['title'] }} certificate"
                                    loading="lazy"></iframe>
                            </div>
                            <div class="card-body p-4">
                                <p class="text-primary fw-semibold mb-1">{{ $certificate['issuer'] }} &middot; {{ $certificate['issued_at'] }}</p>
                                <h3 class="h5 fw-semibold">{{ $certificate['title'] }}</h3>
                                <p class="text-secondary">{{ $certificate['description'] }}</p>
                                <a href="{{ $pdfUrl }}" class="btn btn-primary" target="_blank" rel="noopener noreferrer">
                                    <i class="bi bi-file-earmark-pdf me-2"></i>View full certificate
                                </a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
            <div class="text-center mt-4">
                <a href="{{ route('education') }}" class="btn btn-outline-primary me-2">Back to Education</a>
                <a href="{{ route('home') }}" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </section>
</x-layout>
