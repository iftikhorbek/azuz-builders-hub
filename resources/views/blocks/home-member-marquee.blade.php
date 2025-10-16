@props(['members' => []])

<section class="py-12 border-t bg-muted/20">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-8">
            <div class="inline-flex items-center gap-2 text-sm font-medium text-muted-foreground">
                <i data-lucide="shield-check" class="h-4 w-4 text-success"></i>
                Verified Member Organizations
            </div>
        </div>

        <div class="relative overflow-hidden">
            <div class="flex animate-marquee">
                @foreach (array_merge($members, $members) as $member)
                    <div class="flex-shrink-0 mx-8 flex items-center justify-center">
                        <div class="flex items-center gap-2 px-6 py-3 rounded-lg bg-card border">
                            <div class="h-8 w-8 rounded bg-primary/10 flex items-center justify-center">
                                <span class="text-xs font-bold text-primary">{{ mb_substr($member, 0, 1) }}</span>
                            </div>
                            <span class="text-sm font-medium text-foreground whitespace-nowrap">{{ $member }}</span>
                            <i data-lucide="shield-check" class="h-3 w-3 text-success ml-1"></i>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
