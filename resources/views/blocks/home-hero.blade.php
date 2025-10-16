@props(['stats' => []])

<section
    class="relative overflow-hidden hero-with-bg-image hero-bg-overlay !mt-0"
    style="background-image: url('{{ asset('assets/hero-background.jpg') }}'); margin-top: 0 !important;"
>
    {{-- Pattern and gradient overlay layers --}}
    <div class="absolute inset-0 pattern-bg opacity-20 pointer-events-none" style="z-index: 0;"></div>

    {{-- Optional: Add tech grid overlay - uncomment to enable --}}
    {{-- <div class="absolute inset-0 tech-grid-overlay opacity-30" style="z-index: 0;"></div> --}}

    {{-- Floating decorative elements --}}
    <div class="absolute top-20 right-10 w-20 h-20 bg-primary/5 rounded-full blur-3xl animate-float-slow hidden lg:block" style="z-index: 1;"></div>
    <div class="absolute bottom-40 left-10 w-32 h-32 bg-accent/5 rounded-full blur-3xl animate-float hidden lg:block" style="z-index: 1;"></div>
    <div class="absolute top-1/2 right-1/4 w-16 h-16 bg-success/5 rounded-full blur-2xl animate-float-slow hidden lg:block" style="animation-delay: 2s; z-index: 1;"></div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 pt-24 pb-16 md:pt-32 md:pb-24 relative" style="z-index: 2;">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-sm font-medium">
                    <span class="flex h-2 w-2 rounded-full bg-primary animate-pulse"></span>
                    Non-profit Association, Est. 2020
                </div>

                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold text-foreground leading-tight">
                    Uniting Uzbekistan's
                    <span class="text-primary"> Developers</span>
                </h1>

                <p class="text-lg md:text-xl text-muted-foreground leading-relaxed max-w-2xl">
                    Raising standards, accelerating innovation, and building better cities through collaboration, transparency, and quality.
                </p>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('membership') }}" class="btn btn-cta btn-size-lg">
                        Become a Member
                        <i data-lucide="arrow-right" class="h-5 w-5"></i>
                    </a>
                    <a href="{{ route('members') }}" class="btn btn-outline btn-size-lg">
                        See Our Members
                    </a>
                </div>

                <div class="grid grid-cols-3 gap-6 pt-8">
                    @foreach ($stats as $stat)
                        <div class="space-y-2">
                            <div class="flex items-center gap-2">
                                <div class="flex h-8 w-8 items-center justify-center rounded-lg bg-primary/10">
                                    <i data-lucide="{{ $stat['icon'] }}" class="h-4 w-4 text-primary"></i>
                                </div>
                            </div>
                            <div class="text-2xl md:text-3xl font-bold text-foreground">{{ $stat['value'] }}</div>
                            <div class="text-xs md:text-sm text-muted-foreground">{{ $stat['label'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="relative">
                {{-- Main hero image --}}
                <div class="relative rounded-2xl overflow-hidden shadow-2xl transform hover:scale-[1.02] transition-transform duration-500">
                    <img
                        src="{{ asset('assets/hero-tashkent.jpg') }}"
                        alt="Modern Tashkent cityscape showcasing urban development"
                        class="w-full h-auto object-cover"
                    >
                    {{-- Enhanced gradient overlays for depth --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-background/80 via-transparent to-transparent"></div>
                    <div class="absolute inset-0 bg-gradient-to-r from-primary/10 via-transparent to-accent/10"></div>
                </div>

                {{-- Quality badge with animation --}}
                <div class="absolute -bottom-6 -left-6 bg-card border-2 border-primary rounded-xl p-4 shadow-xl hidden md:block animate-float">
                    <div class="flex items-center gap-3">
                        <div class="flex h-12 w-12 items-center justify-center rounded-lg bg-success/10">
                            <i data-lucide="award" class="h-6 w-6 text-success"></i>
                        </div>
                        <div>
                            <div class="text-sm font-semibold text-foreground">Quality Standards</div>
                            <div class="text-xs text-muted-foreground">Certified &amp; Verified</div>
                        </div>
                    </div>
                </div>

                {{-- Optional: Floating tech/innovation badges --}}
                <div class="absolute -top-4 -right-4 bg-card border border-primary/20 rounded-lg p-3 shadow-lg hidden xl:block animate-float-slow" style="animation-delay: 1s;">
                    <div class="flex items-center gap-2">
                        <div class="flex h-8 w-8 items-center justify-center rounded-md bg-primary/10">
                            <i data-lucide="zap" class="h-4 w-4 text-primary"></i>
                        </div>
                        <div class="text-xs font-medium text-foreground">BIM Ready</div>
                    </div>
                </div>

                {{-- Decorative corner accent --}}
                <div class="absolute -z-10 -top-6 -right-6 w-40 h-40 bg-primary/10 rounded-2xl blur-2xl"></div>
                <div class="absolute -z-10 -bottom-6 -left-6 w-40 h-40 bg-accent/10 rounded-2xl blur-2xl"></div>
            </div>
        </div>
    </div>
</section>
