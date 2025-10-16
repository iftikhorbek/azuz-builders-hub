@props(['items' => []])

<section class="py-16 md:py-24 bg-muted/30">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Our Journey
            </h2>
            <p class="text-lg text-muted-foreground">
                Key milestones in building a stronger construction industry
            </p>
        </div>

        <div class="max-w-4xl mx-auto">
            <div class="relative">
                <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-border" aria-hidden="true"></div>
                <div class="space-y-8">
                    @foreach (collect($items)->reverse()->values() as $item)
                        <div class="relative flex gap-6">
                            <div class="flex-shrink-0 flex h-16 w-16 items-center justify-center rounded-xl bg-primary text-primary-foreground font-bold shadow-md z-10">
                                {{ $item['year'] ?? '' }}
                            </div>
                            <div class="flex-1 p-6 card-elevated bg-card rounded-xl">
                                <h3 class="text-lg font-semibold text-foreground mb-2">{{ $item['event'] ?? '' }}</h3>
                                <p class="text-sm text-muted-foreground">{{ $item['description'] ?? '' }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
