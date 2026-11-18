@props(['project'])

<div class="col-md-6 col-lg-4">
    <div class="card h-100 shadow-sm border-0 project-card">
        @if ($project->image_url)
            <img src="{{ $project->image_url }}" class="card-img-top" alt="{{ $project->title }}">
        @endif
        <div class="card-body d-flex flex-column">
            <h5 class="card-title fw-semibold">{{ $project->title }}</h5>
            <p class="card-text text-secondary flex-grow-1">{{ $project->description }}</p>
            @if ($project->technologies)
                <div class="mb-3">
                    @foreach (array_map('trim', explode(',', $project->technologies)) as $tech)
                        <span class="badge text-bg-light border me-1 mb-1">{{ $tech }}</span>
                    @endforeach
                </div>
            @endif
            <div class="d-flex gap-2 mt-auto">
                @if ($project->project_url)
                    <a href="{{ $project->project_url }}" target="_blank" rel="noopener" class="btn btn-primary btn-sm">
                        <i class="bi bi-box-arrow-up-right me-1"></i>Live Demo
                    </a>
                @endif
                @if ($project->github_url)
                    <a href="{{ $project->github_url }}" target="_blank" rel="noopener" class="btn btn-outline-dark btn-sm">
                        <i class="bi bi-github me-1"></i>GitHub
                    </a>
                @endif
            </div>
        </div>
    </div>
</div>
