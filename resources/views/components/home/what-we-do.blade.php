<section class="py-16 md:py-24 bg-muted/30">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                What We Do
            </h2>
            <p class="text-lg text-muted-foreground">
                Building a stronger construction ecosystem through collaboration, standards, and innovation
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($services as $service)
                <div class="p-6 card-elevated bg-card border-0 hover:border-primary/20 rounded-xl transition-all">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 mb-4">
                        <i data-lucide="{{ $service['icon'] }}" class="h-6 w-6 text-primary"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-foreground mb-2">{{ $service['title'] }}</h3>
                    <p class="text-sm text-muted-foreground leading-relaxed">{{ $service['description'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
