@props([
    'steps' => [],
    'cta' => [
        'label' => 'Begin Your Application',
        'icon' => 'arrow-right',
        'url' => null,
    ],
    'supportCopy' => null,
])

<section id="application" class="py-16 md:py-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                How to Apply
            </h2>
            <p class="text-lg text-muted-foreground">
                Simple, transparent process from application to approval
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="grid md:grid-cols-2 gap-6">
                @foreach ($steps as $step)
                    <div class="p-6 card-elevated bg-card border-0 rounded-xl">
                        <div class="flex items-start gap-4">
                            <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-primary text-primary-foreground font-bold text-lg">
                                {{ $step['number'] ?? '' }}
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-foreground mb-2">{{ $step['title'] ?? '' }}</h3>
                                <p class="text-sm text-muted-foreground">{{ $step['description'] ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="text-center mt-12">
            @php
                $ctaUrl = $cta['url'] ?? null;
                $ctaLabel = $cta['label'] ?? 'Begin Your Application';
                $ctaIcon = $cta['icon'] ?? 'arrow-right';
            @endphp

            @if ($ctaUrl)
                <a href="{{ $ctaUrl }}" class="btn btn-cta btn-size-lg inline-flex items-center justify-center">
                    {{ $ctaLabel }}
                    <i data-lucide="{{ $ctaIcon }}" class="ml-2 h-5 w-5"></i>
                </a>
            @else
                <button type="button" class="btn btn-cta btn-size-lg inline-flex items-center justify-center">
                    {{ $ctaLabel }}
                    <i data-lucide="{{ $ctaIcon }}" class="ml-2 h-5 w-5"></i>
                </button>
            @endif

            @if ($supportCopy)
                <p class="text-sm text-muted-foreground mt-4">{!! $supportCopy !!}</p>
            @endif
        </div>
    </div>
</section>
