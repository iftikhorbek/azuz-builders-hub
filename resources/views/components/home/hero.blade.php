<section class="relative overflow-hidden pattern-bg">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
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
                <div class="relative rounded-2xl overflow-hidden shadow-xl">
                    <img
                        src="{{ asset('assets/hero-tashkent.jpg') }}"
                        alt="Modern Tashkent cityscape showcasing urban development"
                        class="w-full h-auto object-cover"
                    >
                    <div class="absolute inset-0 bg-gradient-to-t from-background/80 via-transparent to-transparent"></div>
                </div>

                <div class="absolute -bottom-6 -left-6 bg-card border-2 border-primary rounded-xl p-4 shadow-xl hidden md:block">
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
            </div>
        </div>
    </div>
</section>
