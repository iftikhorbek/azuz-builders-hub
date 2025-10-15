@props(['mediaCoverage' => []])

<section class="py-16" x-init="$nextTick(() => refreshIcons())">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-foreground mb-2">Media Coverage</h2>
            <p class="text-muted-foreground">AZUZ and member organizations in the news</p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach ($mediaCoverage as $item)
                <div class="p-6 card-elevated bg-card border-0 rounded-xl flex flex-col">
                    <div class="text-sm font-medium text-primary mb-2">{{ $item['outlet'] ?? '' }}</div>
                    <h3 class="text-lg font-semibold text-foreground mb-2 flex-grow">{{ $item['title'] ?? '' }}</h3>
                    <div class="flex items-center justify-between pt-4 border-t">
                        <span class="text-xs text-muted-foreground">
                            {{ \Carbon\Carbon::parse($item['date'] ?? now())->format('M d, Y') }}
                        </span>
                        <a href="{{ $item['link'] ?? '#' }}" class="text-sm font-medium text-primary hover:text-primary-hover inline-flex items-center gap-1">
                            Read article
                            <i data-lucide="external-link" class="h-3 w-3"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
