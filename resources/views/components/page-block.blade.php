@props(['block'])

@php
    $view = $block['view'] ?? null;
    $data = $block['data'] ?? [];
@endphp

@if (! $view)
    @php throw new InvalidArgumentException('Block view is required.'); @endphp
@endif

@unless (view()->exists($view))
    @php throw new InvalidArgumentException("Block view '{$view}' not found."); @endphp
@endunless

@include($view, $data)
