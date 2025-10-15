@props(['benefits' => []])

<section class="py-16 md:py-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                Membership Benefits
            </h2>
            <p class="text-lg text-muted-foreground">
                Comprehensive support for your organization's growth and industry leadership
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($benefits as $benefit)
                <div class="p-6 border-2 rounded-xl hover:border-primary transition-colors">
                    <div class="flex items-start gap-3">
                        <div class="flex-shrink-0 mt-0.5">
                            <div class="flex h-6 w-6 items-center justify-center rounded-full bg-success/10">
                                <i data-lucide="check" class="h-4 w-4 text-success"></i>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-foreground mb-2">{{ $benefit['title'] ?? '' }}</h3>
                            <p class="text-sm text-muted-foreground">{{ $benefit['description'] ?? '' }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
