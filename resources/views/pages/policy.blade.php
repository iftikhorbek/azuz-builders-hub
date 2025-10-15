@extends('layouts.app')

@section('title', 'Policy & Standards')

@section('content')
    <section class="pattern-bg py-16 md:py-24 border-b">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            @include('components.common.breadcrumb', ['items' => [['label' => 'Policy & Standards']]])
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-6">Policy & Standards</h1>
                <p class="text-xl text-muted-foreground leading-relaxed">
                    Track policy developments, participate in consultations, and access industry standards that shape Uzbekistan's construction sector.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 bg-muted/30">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">Policy Workstreams</h2>
                <p class="text-lg text-muted-foreground">
                    Four key areas driving industry modernization and regulatory alignment
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($workstreams as $stream)
                    <div class="p-6 card-elevated bg-card border-0 rounded-xl">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 mb-4">
                            <i data-lucide="{{ $stream['icon'] }}" class="h-6 w-6 text-primary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-2">{{ $stream['name'] }}</h3>
                        <p class="text-sm text-muted-foreground mb-4">{{ $stream['description'] }}</p>

                        <div class="space-y-2">
                            <div class="flex justify-between text-xs">
                                <span class="text-muted-foreground">Progress</span>
                                <span class="font-medium text-foreground">{{ $stream['progress'] }}%</span>
                            </div>
                            <div class="h-2 rounded-full bg-muted overflow-hidden">
                                <div class="h-full bg-primary transition-all duration-300" style="width: {{ $stream['progress'] }}%"></div>
                            </div>
                            <div class="text-xs text-muted-foreground">
                                {{ $stream['activeItems'] }} active initiatives
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">Policy Tracker</h2>
                <p class="text-lg text-muted-foreground">
                    Current and upcoming policy initiatives affecting the construction industry
                </p>
            </div>

            <div class="max-w-5xl mx-auto">
                @include('components.policy.timeline', ['policies' => $policies])
            </div>
        </div>
    </section>
@endsection
