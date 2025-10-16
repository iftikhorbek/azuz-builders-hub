@props([
    'title',
    'subtitle' => null,
    'breadcrumbs' => [],
    'badge' => null,
    'badgeIcon' => null,
    'meta' => null,
    'actions' => [],
    'stats' => [],
    'fullHeight' => false,
    'backgroundImage' => null,
])

@php
    $sectionClasses = [];

    if (! $backgroundImage) {
        $sectionClasses[] = 'border-b';
    }

    if ($backgroundImage) {
        $sectionClasses[] = 'relative overflow-hidden hero-with-bg-image hero-bg-overlay';
    } else {
        $sectionClasses[] = 'pattern-bg';
    }

    $sectionClasses[] = $fullHeight ? 'hero-full-height' : 'py-16 md:py-24';

    $sectionClassAttr = implode(' ', $sectionClasses);

    $containerClasses = 'container relative z-[1] mx-auto px-4 sm:px-6 lg:px-8';

    if ($backgroundImage) {
        $containerClasses .= ' flex flex-col items-start justify-center py-20';
    }

    $contentWrapperClasses = 'max-w-3xl';

    $containerStyle = null;

    if ($fullHeight) {
        $containerStyle = 'min-height: calc(100vh - var(--header-height));';
    }
@endphp

<section class="{{ $sectionClassAttr }}" @if ($backgroundImage) style="background-image: url('{{ asset($backgroundImage) }}');" @endif>
    @if ($backgroundImage)
        <div class="absolute inset-0 pattern-bg opacity-20 pointer-events-none" style="z-index: 0;"></div>
        <div class="hero-orb-1 bg-primary/5 animate-float-slow hidden lg:block"></div>
        <div class="hero-orb-2 bg-accent/5 animate-float hidden lg:block"></div>
        <div class="hero-orb-3 bg-success/5 animate-float-slow hidden lg:block" style="animation-delay: 2s;"></div>
    @endif

    <div class="{{ $containerClasses }}" @if ($containerStyle) style="{{ $containerStyle }}" @endif>
        @if ($breadcrumbs)
            @include('components.common.breadcrumb', ['items' => $breadcrumbs])
        @endif

        <div class="{{ $contentWrapperClasses }}">
            @if ($badge)
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-sm font-medium mb-6">
                    @if ($badgeIcon)
                        <i data-lucide="{{ $badgeIcon }}" class="h-4 w-4"></i>
                    @endif
                    <span>{{ $badge }}</span>
                </div>
            @endif

            <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-6">
                {{ $title }}
            </h1>

            @if ($subtitle)
                <p class="text-xl text-muted-foreground leading-relaxed">
                    {{ $subtitle }}
                </p>
            @endif

            @if ($meta)
                <p class="text-sm text-muted-foreground mt-4">
                    {{ $meta }}
                </p>
            @endif

            @if ($actions)
                <div class="flex flex-col sm:flex-row gap-3 mt-8">
                    @foreach ($actions as $action)
                        @php
                            $label = $action['label'] ?? 'Learn more';
                            $icon = $action['icon'] ?? null;
                            $variant = $action['variant'] ?? 'cta';
                            $size = $action['size'] ?? 'default';
                            $url = $action['url'] ?? null;
                            $tag = $url ? 'a' : 'button';
                            $classes = trim("btn btn-{$variant} btn-size-{$size} inline-flex items-center" . (($action['classes'] ?? '') ? ' ' . $action['classes'] : ''));
                        @endphp

                        @if ($tag === 'a')
                            <a href="{{ $url }}" class="{{ $classes }}">
                                @if ($icon)
                                    <i data-lucide="{{ $icon }}" class="mr-2 h-5 w-5"></i>
                                @endif
                                <span>{{ $label }}</span>
                            </a>
                        @else
                            <button type="button" class="{{ $classes }}">
                                <span class="flex items-center">
                                    @if ($icon)
                                        <i data-lucide="{{ $icon }}" class="mr-2 h-5 w-5"></i>
                                    @endif
                                    <span>{{ $label }}</span>
                                </span>
                            </button>
                        @endif
                    @endforeach
                </div>
            @endif
        </div>

        @if ($stats)
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
                @foreach ($stats as $stat)
                    <div class="p-6 card-elevated bg-card border-0 rounded-xl">
                        <div class="text-2xl font-bold text-primary">{{ $stat['value'] ?? '' }}</div>
                        <div class="text-sm text-muted-foreground">{{ $stat['label'] ?? '' }}</div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
