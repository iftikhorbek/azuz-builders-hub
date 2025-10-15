@props(['categories' => []])

<section class="py-16 md:py-24 bg-muted/30">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Membership Categories
            </h2>
            <p class="text-lg text-muted-foreground">
                Choose the membership type that fits your organization
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach ($categories as $category)
                <div class="p-6 card-elevated bg-card border-0 flex flex-col rounded-xl">
                    <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 mb-4">
                        <i data-lucide="{{ $category['icon'] ?? 'building-2' }}" class="h-6 w-6 text-primary"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-2">{{ $category['name'] ?? '' }}</h3>
                    <p class="text-sm text-muted-foreground mb-4">{{ $category['description'] ?? '' }}</p>

                    <div class="mb-4 pb-4 border-b">
                        <div class="text-2xl font-bold text-primary">{{ $category['fee'] ?? '' }}</div>
                        <div class="text-xs text-muted-foreground">Annual membership</div>
                    </div>

                    <div class="space-y-2 mb-6 flex-grow">
                        @foreach ($category['requirements'] ?? [] as $requirement)
                            <div class="flex items-start gap-2 text-sm">
                                <i data-lucide="check" class="h-4 w-4 text-success flex-shrink-0 mt-0.5"></i>
                                <span class="text-muted-foreground">{{ $requirement }}</span>
                            </div>
                        @endforeach
                    </div>

                    <button type="button" class="btn btn-outline btn-size-default w-full mt-auto inline-flex items-center justify-center">
                        Apply Now
                    </button>
                </div>
            @endforeach
        </div>
    </div>
</section>
