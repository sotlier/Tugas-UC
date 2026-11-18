@props(['title', 'subtitle' => null])

<div class="text-center mb-5">
    <h2 class="fw-bold mb-2">{{ $title }}</h2>
    @if ($subtitle)
        <p class="text-secondary mb-0">{{ $subtitle }}</p>
    @endif
</div>
