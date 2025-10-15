@php
    $statusClasses = [
        'consultation' => 'status-consultation',
        'upcoming' => 'status-draft',
        'new' => 'status-adopted',
    ];
@endphp

<section class="py-16 md:py-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-6 mb-12">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-2">
                    Latest Updates
                </h2>
                <p class="text-lg text-muted-foreground">
                    Stay informed on policy developments, events, and member news
                </p>
            </div>
            <a href="{{ route('resources') }}" class="btn btn-outline btn-size-sm hidden md:inline-flex">
                View All
            </a>
        </div>

        <div class="grid md:grid-cols-3 gap-6">
            @foreach ($updates as $update)
                <div class="p-6 card-elevated bg-card border-0 flex flex-col rounded-xl">
                    <div class="flex items-start justify-between mb-4">
                        <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary/10">
                            <i data-lucide="{{ $update['icon'] }}" class="h-5 w-5 text-primary"></i>
                        </div>
                        <span class="badge {{ $statusClasses[$update['status']] ?? '' }} text-xs px-2 py-1 rounded-full capitalize">
                            {{ $update['status'] }}
                        </span>
                    </div>

                    <h3 class="text-lg font-semibold text-foreground mb-2">
                        {{ $update['title'] }}
                    </h3>
                    <p class="text-sm text-muted-foreground mb-4 flex-grow">
                        {{ $update['description'] }}
                    </p>

                    <div class="flex items-center justify-between mt-auto pt-4 border-t">
                        <span class="text-xs text-muted-foreground">
                            {{ \Carbon\Carbon::parse($update['date'])->format('M d, Y') }}
                        </span>
                        <a href="{{ $update['link'] }}" class="text-sm font-medium text-primary hover:text-primary-hover inline-flex items-center gap-1">
                            Learn more
                            <i data-lucide="arrow-right" class="h-3 w-3"></i>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8 text-center md:hidden">
            <a href="{{ route('resources') }}" class="btn btn-outline btn-size-sm">
                View All Updates
            </a>
        </div>
    </div>
</section>
