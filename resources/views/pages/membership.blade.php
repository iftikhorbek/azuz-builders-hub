@extends('layouts.app')

@section('title', 'Membership')

@section('content')
    <section class="pattern-bg py-16 md:py-24 border-b">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-6">
                    Join AZUZ
                </h1>
                <p class="text-xl text-muted-foreground leading-relaxed mb-8">
                    Become part of Uzbekistan's leading construction industry association and help shape the future of urban development.
                </p>
                <button type="button" class="btn btn-cta btn-size-lg inline-flex items-center">
                    Start Application
                    <i data-lucide="arrow-right" class="ml-2 h-5 w-5"></i>
                </button>
            </div>
        </div>
    </section>

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
                                <h3 class="text-lg font-semibold text-foreground mb-2">{{ $benefit['title'] }}</h3>
                                <p class="text-sm text-muted-foreground">{{ $benefit['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

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
                            <i data-lucide="{{ $category['icon'] }}" class="h-6 w-6 text-primary"></i>
                        </div>
                        <h3 class="text-xl font-semibold text-foreground mb-2">{{ $category['name'] }}</h3>
                        <p class="text-sm text-muted-foreground mb-4">{{ $category['description'] }}</p>

                        <div class="mb-4 pb-4 border-b">
                            <div class="text-2xl font-bold text-primary">{{ $category['fee'] }}</div>
                            <div class="text-xs text-muted-foreground">Annual membership</div>
                        </div>

                        <div class="space-y-2 mb-6 flex-grow">
                            @foreach ($category['requirements'] as $requirement)
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

    <section id="application" class="py-16 md:py-24">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                    How to Apply
                </h2>
                <p class="text-lg text-muted-foreground">
                    Simple, transparent process from application to approval
                </p>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="grid md:grid-cols-2 gap-6">
                    @foreach ($steps as $step)
                        <div class="p-6 card-elevated bg-card border-0 rounded-xl">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-primary text-primary-foreground font-bold text-lg">
                                    {{ $step['number'] }}
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-foreground mb-2">{{ $step['title'] }}</h3>
                                    <p class="text-sm text-muted-foreground">{{ $step['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="text-center mt-12">
                <button type="button" class="btn btn-cta btn-size-lg inline-flex items-center justify-center">
                    Begin Your Application
                    <i data-lucide="arrow-right" class="ml-2 h-5 w-5"></i>
                </button>
                <p class="text-sm text-muted-foreground mt-4">
                    Questions? <a href="{{ route('contact') }}" class="text-primary hover:underline">Contact our membership team</a>
                </p>
            </div>
        </div>
    </section>
@endsection
