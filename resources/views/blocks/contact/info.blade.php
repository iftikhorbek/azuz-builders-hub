@props(['items' => []])

<section class="py-12 bg-muted/30" x-init="$nextTick(() => refreshIcons())">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($items as $info)
                <div class="p-6 text-center bg-card border-0 rounded-xl card-elevated">
                    <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 mb-4">
                        <i data-lucide="{{ $info['icon'] ?? 'info' }}" class="h-6 w-6 text-primary"></i>
                    </div>
                    <h3 class="text-sm font-semibold leading-none text-foreground mb-2">{{ $info['title'] ?? '' }}</h3>
                    @foreach ($info['details'] ?? [] as $detail)
                        <p class="text-sm text-muted-foreground">{{ $detail }}</p>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
</section>
