@props([
    'headline' => 'Stronger Together. Building Better.',
    'subheadline' => 'AZUZ unites Uzbekistan\'s construction leaders to elevate standards, accelerate innovation, and build sustainable cities.',
    'members' => '28+',
    'projects' => '150+',
])

<section
    class="relative overflow-hidden hero-with-bg-image hero-bg-overlay"
    style="background-image: url('{{ asset('assets/hero-background.png') }}');"
>
    {{-- Pattern and gradient overlay layers --}}
    <div class="absolute inset-0 pattern-bg opacity-20 pointer-events-none" style="z-index: 0;"></div>

    {{-- Floating decorative elements - Percentage-based positioning --}}
    <div class="hero-orb-1 bg-primary/5 animate-float-slow hidden lg:block"></div>
    <div class="hero-orb-2 bg-accent/5 animate-float hidden lg:block"></div>
    <div class="hero-orb-3 bg-success/5 animate-float-slow hidden lg:block" style="animation-delay: 2s;"></div>

    {{-- Main Hero Content --}}
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 min-h-screen flex items-center py-20" style="z-index: 2;">
        {{-- Content --}}
        <div class="max-w-4xl">
            {{-- Hero Headline --}}
            <h1 class="hero-headline !text-left !mx-0 animate-fade-in-up" style="opacity: 0; animation-delay: 0.8s;">
                {{ $headline }}
            </h1>

            {{-- Hero Subheadline --}}
            <p class="hero-subheadline !text-left !mx-0 animate-fade-in-up" style="opacity: 0; animation-delay: 1.1s;">
                {{ $subheadline }}
            </p>

            {{-- Call to Action Buttons --}}
            <div class="flex flex-col sm:flex-row items-start gap-4 mb-8 animate-fade-in-up" style="opacity: 0; animation-delay: 1.4s;">
                <a href="{{ route('membership') }}" class="hero-cta-primary">
                    Join the Movement
                    <i data-lucide="arrow-right" class="h-5 w-5"></i>
                </a>
                <a href="{{ route('about') }}" class="hero-cta-secondary">
                    Explore Our Impact
                </a>
            </div>
        </div>
    </div>

    {{-- Construction Image - Absolutely Positioned --}}
    <div class="hidden lg:block absolute bottom-16 right-16 animate-fade-in-up" style="z-index: 1; opacity: 0; animation-delay: 1.6s;">
        <img src="{{ asset('assets/construction-1.png') }}" alt="Construction" class="h-auto object-contain" style="width: 500px;">
    </div>
</section>
