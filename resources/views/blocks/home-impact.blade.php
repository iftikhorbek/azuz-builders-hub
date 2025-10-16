@props(['metrics' => []])

<section class="py-16 md:py-24 relative overflow-hidden">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4 text-foreground">
                Our Impact
            </h2>
            <p class="text-lg text-muted-foreground">
                Measurable progress toward modernizing Uzbekistan's construction industry
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($metrics as $metric)
                <div class="bg-card border border-border rounded-xl p-6 text-center hover:bg-card/80 transition-all duration-300 shadow-sm hover:shadow-md">
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
