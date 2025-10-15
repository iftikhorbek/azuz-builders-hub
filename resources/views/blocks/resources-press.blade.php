@props(['pressReleases' => []])

<section class="py-16" x-init="$nextTick(() => refreshIcons())">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between mb-8">
            <div>
                <h2 class="text-3xl font-bold text-foreground mb-2">Press Releases</h2>
                <p class="text-muted-foreground">Latest news and announcements from AZUZ</p>
            </div>
            <a href="#" class="btn btn-outline btn-size-sm inline-flex items-center">
                <i data-lucide="newspaper" class="h-4 w-4 mr-2"></i>
                Media Kit
            </a>
        </div>

        <div class="space-y-4">
            @foreach ($pressReleases as $release)
                <div class="p-6 card-elevated bg-card border-0 rounded-xl flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                    <div class="flex-1 min-w-0">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="badge bg-secondary text-secondary-foreground text-xs">{{ $release['type'] ?? '' }}</span>
                            <span class="text-xs text-muted-foreground inline-flex items-center gap-1">
                                <i data-lucide="calendar" class="h-3 w-3"></i>
                                {{ \Carbon\Carbon::parse($release['date'] ?? now())->format('M d, Y') }}
                            </span>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-2">{{ $release['title'] ?? '' }}</h3>
                        <p class="text-sm text-muted-foreground">{{ $release['excerpt'] ?? '' }}</p>
                    </div>
                    <button type="button" class="btn btn-outline btn-size-sm inline-flex items-center flex-shrink-0">
                        Read More
                        <i data-lucide="external-link" class="ml-2 h-3 w-3"></i>
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</section>
