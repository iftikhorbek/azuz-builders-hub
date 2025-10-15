@props(['workstreams' => []])

<section class="py-16 bg-muted/30">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">Policy Workstreams</h2>
            <p class="text-lg text-muted-foreground">
                Four key areas driving industry modernization and regulatory alignment
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($workstreams as $stream)
                <div class="p-6 card-elevated bg-card border-0 rounded-xl">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 mb-4">
                        <i data-lucide="{{ $stream['icon'] ?? 'target' }}" class="h-6 w-6 text-primary"></i>
                    </div>
                    <h3 class="text-lg font-semibold text-foreground mb-2">{{ $stream['name'] ?? '' }}</h3>
                    <p class="text-sm text-muted-foreground mb-4">{{ $stream['description'] ?? '' }}</p>

                    <div class="space-y-2">
                        <div class="flex justify-between text-xs">
                            <span class="text-muted-foreground">Progress</span>
                            <span class="font-medium text-foreground">{{ $stream['progress'] ?? 0 }}%</span>
                        </div>
                        <div class="h-2 rounded-full bg-muted overflow-hidden">
                            <div class="h-full bg-primary transition-all duration-300" style="width: {{ $stream['progress'] ?? 0 }}%"></div>
                        </div>
                        <div class="text-xs text-muted-foreground">
                            {{ $stream['activeItems'] ?? 0 }} active initiatives
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
