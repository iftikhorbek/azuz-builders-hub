@props([
    'mission' => [
        'icon' => 'target',
        'title' => 'Our Mission',
        'description' => '',
    ],
    'vision' => [
        'icon' => 'eye',
        'title' => 'Our Vision',
        'description' => '',
    ],
    'image' => [
        'src' => null,
        'alt' => null,
    ],
])

<section class="py-16 md:py-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
            <div class="space-y-8">
                @foreach ([$mission, $vision] as $block)
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10">
                                <i data-lucide="{{ $block['icon'] ?? 'target' }}" class="h-6 w-6 text-primary"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-foreground">{{ $block['title'] ?? '' }}</h2>
                        </div>
                        <p class="text-muted-foreground leading-relaxed">
                            {{ $block['description'] ?? '' }}
                        </p>
                    </div>
                @endforeach
            </div>

            <div class="relative">
                @if ($image['src'] ?? false)
                    <img
                        src="{{ asset($image['src']) }}"
                        alt="{{ $image['alt'] ?? '' }}"
                        class="rounded-2xl shadow-xl w-full h-auto"
                    >
                @endif
            </div>
        </div>
    </div>
</section>
