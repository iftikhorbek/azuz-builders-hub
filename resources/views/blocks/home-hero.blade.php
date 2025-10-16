@props([
    'headline' => 'Stronger Together. Building Better.',
    'subheadline' => 'AZUZ unites Uzbekistan\'s construction leaders to elevate standards, accelerate innovation, and build sustainable cities.',
    'members' => '28+',
    'projects' => '150+',
])

<section
    class="relative overflow-hidden hero-with-bg-image hero-bg-overlay"
    style="background-image: url('{{ asset('assets/hero-background.jpg') }}');"
>
    {{-- Pattern and gradient overlay layers --}}
    <div class="absolute inset-0 pattern-bg opacity-20 pointer-events-none" style="z-index: 0;"></div>

    {{-- Floating decorative elements - Percentage-based positioning --}}
    <div class="hero-orb-1 bg-primary/5 animate-float-slow hidden lg:block"></div>
    <div class="hero-orb-2 bg-accent/5 animate-float hidden lg:block"></div>
    <div class="hero-orb-3 bg-success/5 animate-float-slow hidden lg:block" style="animation-delay: 2s;"></div>

    {{-- Main Hero Content - Single Column Centered --}}
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 hero-content-wrapper" style="z-index: 2;">

        {{-- Small Badge --}}
        <div class="hero-badge inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-sm font-medium animate-fade-in-up">
            <span class="flex h-2 w-2 rounded-full bg-primary animate-pulse"></span>
            Non-profit Association, Est. 2020
        </div>

        {{-- Hero Headline --}}
        <h1 class="hero-headline animate-fade-in-up" style="animation-delay: 0.1s;">
            {{ $headline }}
        </h1>

        {{-- Hero Subheadline --}}
        <p class="hero-subheadline animate-fade-in-up" style="animation-delay: 0.2s;">
            {{ $subheadline }}
        </p>

        {{-- Call to Action Buttons --}}
        <div class="hero-cta-group animate-fade-in-up" style="animation-delay: 0.3s;">
            <a href="{{ route('membership') }}" class="hero-cta-primary">
                Join the Movement
                <i data-lucide="arrow-right" class="h-5 w-5"></i>
            </a>
            <a href="{{ route('about') }}" class="hero-cta-secondary">
                Explore Our Impact
            </a>
        </div>

        {{-- Trust Indicator --}}
        <div class="text-sm text-muted-foreground font-medium tracking-wide animate-fade-in-up" style="animation-delay: 0.4s;">
            {{ $members }} Members &nbsp;•&nbsp; {{ $projects }} Projects
        </div>

        {{-- Scroll Indicator --}}
        <div class="scroll-indicator">
            <i data-lucide="chevron-down" class="h-6 w-6"></i>
        </div>
    </div>
</section>
