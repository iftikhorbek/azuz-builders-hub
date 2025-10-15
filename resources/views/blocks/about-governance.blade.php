@props(['items' => []])

<section class="py-16 md:py-24" id="governance">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Governance Structure
            </h2>
            <p class="text-lg text-muted-foreground">
                Transparent leadership ensuring accountability and effective representation
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            @foreach ($items as $item)
                <div class="p-6 text-center bg-card border-2 rounded-xl">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 mb-4">
                        <i data-lucide="users" class="h-6 w-6 text-primary"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-foreground mb-2">{{ $item['role'] ?? '' }}</h3>
                    <div class="text-sm font-medium text-primary mb-2">{{ $item['members'] ?? '' }}</div>
                    <p class="text-sm text-muted-foreground">{{ $item['description'] ?? '' }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>
