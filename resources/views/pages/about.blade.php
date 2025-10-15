@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section class="pattern-bg py-16 md:py-24 border-b">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-sm font-medium mb-6">
                    Non-profit Organization &middot; Est. 2020
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-6">
                    About AZUZ
                </h1>
                <p class="text-xl text-muted-foreground leading-relaxed">
                    The Association of Developers of Uzbekistan (AZUZ) is a non-profit organization uniting construction developers to elevate industry standards, drive innovation, and shape policy for sustainable urban development.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10">
                                <i data-lucide="target" class="h-6 w-6 text-primary"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-foreground">Our Mission</h2>
                        </div>
                        <p class="text-muted-foreground leading-relaxed">
                            To unite Uzbekistan's construction developers in raising industry standards, accelerating innovation, and building better cities through collaboration, transparency, and quality-driven practices.
                        </p>
                    </div>

                    <div>
                        <div class="flex items-center gap-3 mb-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-accent/10">
                                <i data-lucide="eye" class="h-6 w-6 text-accent"></i>
                            </div>
                            <h2 class="text-2xl font-bold text-foreground">Our Vision</h2>
                        </div>
                        <p class="text-muted-foreground leading-relaxed">
                            A modernized, transparent, and internationally competitive construction industry that creates sustainable, livable cities for all Uzbekistan residents.
                        </p>
                    </div>
                </div>

                <div class="relative">
                    <img
                        src="{{ asset('assets/collaboration.jpg') }}"
                        alt="AZUZ team collaboration"
                        class="rounded-2xl shadow-xl w-full h-auto"
                    >
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-muted/30">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                    Our Core Values
                </h2>
                <p class="text-lg text-muted-foreground">
                    Principles that guide our work and shape our impact
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach ($values as $value)
                    <div class="p-6 card-elevated bg-card border-0 rounded-xl">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 mb-4">
                            <i data-lucide="{{ $value['icon'] }}" class="h-6 w-6 text-primary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-2">{{ $value['title'] }}</h3>
                        <p class="text-sm text-muted-foreground leading-relaxed">{{ $value['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24" id="governance">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                    Governance Structure
                </h2>
                <p class="text-lg text-muted-foreground">
                    Transparent leadership ensuring accountability and effective representation
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 max-w-5xl mx-auto">
                @foreach ($governance as $item)
                    <div class="p-6 text-center bg-card border-2 rounded-xl">
                        <div class="inline-flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 mb-4">
                            <i data-lucide="users" class="h-6 w-6 text-primary"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground mb-2">{{ $item['role'] }}</h3>
                        <div class="text-sm font-medium text-primary mb-2">{{ $item['members'] }}</div>
                        <p class="text-sm text-muted-foreground">{{ $item['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 md:py-24 bg-muted/30">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                    Our Journey
                </h2>
                <p class="text-lg text-muted-foreground">
                    Key milestones in building a stronger construction industry
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="relative">
                    <div class="absolute left-8 top-0 bottom-0 w-0.5 bg-border" aria-hidden="true"></div>
                    <div class="space-y-8">
                        @foreach ($timeline as $item)
                            <div class="relative flex gap-6">
                                <div class="flex-shrink-0 flex h-16 w-16 items-center justify-center rounded-xl bg-primary text-primary-foreground font-bold shadow-md z-10">
                                    {{ $item['year'] }}
                                </div>
                                <div class="flex-1 p-6 card-elevated bg-card rounded-xl">
                                    <h3 class="text-lg font-semibold text-foreground mb-2">{{ $item['event'] }}</h3>
                                    <p class="text-sm text-muted-foreground">{{ $item['description'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
