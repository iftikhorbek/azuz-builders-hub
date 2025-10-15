@props([
    'title' => null,
    'subtitle' => null,
    'items' => [],
    'background' => null,
    'columns' => ['md' => 2, 'lg' => 3],
    'itemDefaults' => [],
    'sectionClass' => '',
    'gridClass' => '',
    'cardClass' => 'p-6 card-elevated bg-card border-0 rounded-xl',
    'iconWrapperClass' => 'flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 mb-4',
    'iconSizeClass' => 'h-6 w-6',
    'iconColorClass' => 'text-primary',
    'iconField' => 'icon',
    'titleField' => 'title',
    'descriptionField' => 'description',
    'detailField' => 'details',
    'titleClass' => 'text-lg font-semibold text-foreground mb-2',
    'descriptionClass' => 'text-sm text-muted-foreground leading-relaxed',
    'detailsClass' => 'text-sm text-muted-foreground',
    'showIcons' => true,
])

@php
    $sectionClasses = trim('py-16 md:py-24 ' . ($background ?? '') . ' ' . $sectionClass);
    $sectionClasses = $sectionClasses !== '' ? $sectionClasses : 'py-16 md:py-24';

    $gridClasses = 'grid gap-6';
    if (is_array($columns)) {
        foreach ($columns as $breakpoint => $count) {
            if (is_string($breakpoint)) {
                $gridClasses .= " {$breakpoint}:grid-cols-{$count}";
            } else {
                $gridClasses .= " grid-cols-{$count}";
            }
        }
    } elseif ($columns) {
        $gridClasses .= " grid-cols-{$columns}";
    }
    $gridClasses = trim($gridClasses . ' ' . $gridClass);
@endphp

<section class="{{ $sectionClasses }}">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        @if ($title)
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                    {{ $title }}
                </h2>
                @if ($subtitle)
                    <p class="text-lg text-muted-foreground">
                        {{ $subtitle }}
                    </p>
                @endif
            </div>
        @endif

        <div class="{{ $gridClasses }}">
            @foreach ($items as $item)
                @php
                    $item = array_merge($itemDefaults, is_array($item) ? $item : []);
                    $cardClasses = trim($item['card_class'] ?? $cardClass);
                    $icon = $item[$iconField] ?? null;
                    $iconWrapper = trim($item['icon_wrapper_class'] ?? $iconWrapperClass);
                    $iconColor = trim($item['icon_color_class'] ?? $iconColorClass);
                    $iconSize = trim($item['icon_size_class'] ?? $iconSizeClass);
                    $titleText = $titleField ? ($item[$titleField] ?? null) : null;
                    $descriptionText = $descriptionField ? ($item[$descriptionField] ?? null) : null;
                    $details = $detailField ? ($item[$detailField] ?? null) : null;
                @endphp

                <div class="{{ $cardClasses }}">
                    @if ($showIcons && $icon)
                        <div class="{{ $iconWrapper }}">
                            <i data-lucide="{{ $icon }}" class="{{ trim($iconSize . ' ' . $iconColor) }}"></i>
                        </div>
                    @endif

                    @if ($titleText)
                        <h3 class="{{ $titleClass }}">{{ $titleText }}</h3>
                    @endif

                    @if ($descriptionText)
                        <p class="{{ $descriptionClass }}">{{ $descriptionText }}</p>
                    @endif

                    @if ($details)
                        @php $details = is_array($details) ? $details : [$details]; @endphp
                        @foreach ($details as $detail)
                            <p class="{{ $detailsClass }}">{{ $detail }}</p>
                        @endforeach
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</section>
