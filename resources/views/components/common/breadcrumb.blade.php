@php $items = $items ?? []; @endphp

<nav aria-label="breadcrumb" class="mb-6">
    <ol class="flex flex-wrap items-center gap-1.5 break-words text-sm text-muted-foreground sm:gap-2.5">
        <li class="inline-flex items-center gap-1.5">
            <a href="{{ route('home') }}" class="transition-colors hover:text-foreground">Home</a>
        </li>
        @foreach ($items as $index => $item)
            <li class="[&>svg]:size-3.5 text-muted-foreground">
                <i data-lucide="chevron-right" class="h-3.5 w-3.5"></i>
            </li>
            <li class="inline-flex items-center gap-1.5">
                @if (!empty($item['href']) && $index !== count($items) - 1)
                    <a href="{{ $item['href'] }}" class="transition-colors hover:text-foreground">{{ $item['label'] }}</a>
                @else
                    <span class="font-normal text-foreground">{{ $item['label'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
