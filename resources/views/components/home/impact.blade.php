<section class="py-16 md:py-24 bg-primary text-primary-foreground relative overflow-hidden">
    <div class="absolute inset-0 opacity-5" aria-hidden="true">
        <div
            class="absolute inset-0"
            style="background-image: repeating-linear-gradient(45deg, transparent, transparent 20px, currentColor 20px, currentColor 40px);"
        ></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Our Impact
            </h2>
            <p class="text-lg opacity-90">
                Measurable progress toward modernizing Uzbekistan's construction industry
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($metrics as $metric)
                <div class="bg-background/10 backdrop-blur-sm border border-primary-foreground/20 rounded-xl p-6 text-center hover:bg-background/20 transition-all duration-300">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl {{ $metric['background'] }} mb-4">
                        <i data-lucide="{{ $metric['icon'] }}" class="h-6 w-6 {{ $metric['color'] }}"></i>
                    </div>
                    <div class="text-3xl md:text-4xl font-bold mb-2">{{ $metric['value'] }}</div>
                    <div class="text-sm font-semibold mb-1">{{ $metric['label'] }}</div>
                    <div class="text-xs opacity-80">{{ $metric['sublabel'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>
