@props(['documents' => []])

<section class="py-16 bg-muted/30" x-init="$nextTick(() => refreshIcons())">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="mb-8">
            <h2 class="text-3xl font-bold text-foreground mb-2">Documents & Resources</h2>
            <p class="text-muted-foreground">Research reports, standards, guidelines, and market data</p>
        </div>

        <div class="grid md:grid-cols-2 gap-6">
            @foreach ($documents as $doc)
                <div class="p-6 card-elevated bg-card border-0 rounded-xl flex gap-4">
                    <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-accent/10">
                        <i data-lucide="file-text" class="h-6 w-6 text-accent"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="badge bg-secondary text-secondary-foreground text-xs">{{ $doc['category'] ?? '' }}</span>
                            <span class="badge text-xs">{{ $doc['fileType'] ?? '' }}</span>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-1">{{ $doc['title'] ?? '' }}</h3>
                        <div class="flex items-center gap-3 text-xs text-muted-foreground mb-3">
                            <span>{{ \Carbon\Carbon::parse($doc['date'] ?? now())->format('M Y') }}</span>
                            <span>&bull;</span>
                            <span>{{ $doc['size'] ?? '' }}</span>
                        </div>
                        <button type="button" class="btn btn-cta btn-size-sm inline-flex items-center">
                            <i data-lucide="download" class="h-4 w-4 mr-2"></i>
                            Download
                        </button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
