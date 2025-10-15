@extends('layouts.app')

@section('title', 'Training & Events')

@section('content')
    <section class="pattern-bg py-16 md:py-24 border-b">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            @include('components.common.breadcrumb', ['items' => [['label' => 'Training & Events']]])
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-6">Training & Events</h1>
                <p class="text-xl text-muted-foreground leading-relaxed">
                    Professional development programs, industry forums, and networking opportunities to advance your expertise.
                </p>
            </div>
        </div>
    </section>

    @php
        $eventTypeClasses = [
            'Forum' => 'bg-primary/10 text-primary border-primary/30',
            'CPD' => 'bg-accent/10 text-accent border-accent/30',
            'Networking' => 'bg-success/10 text-success border-success/30',
            'Webinar' => 'bg-purple-100 text-purple-700 border-purple-300 dark:bg-purple-900/20 dark:text-purple-400',
        ];
    @endphp

    <section class="py-16" x-init="$nextTick(() => refreshIcons())">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8">
                <h2 class="text-3xl font-bold text-foreground">Upcoming Events</h2>
                <a href="#" class="btn btn-outline btn-size-sm inline-flex items-center">
                    <i data-lucide="calendar" class="h-4 w-4 mr-2"></i>
                    View Calendar
                </a>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                @foreach ($events as $event)
                    <div class="p-6 card-elevated bg-card border-0 flex flex-col rounded-xl" x-data="{ open: false }">
                        <div class="flex items-start justify-between mb-4">
                            <span class="badge border text-xs px-2 py-1 rounded-full {{ $eventTypeClasses[$event['type']] ?? '' }}">
                                {{ $event['type'] }}
                            </span>
                            <span class="text-xs font-medium text-primary">{{ $event['price'] }}</span>
                        </div>

                        <h3 class="text-xl font-semibold text-foreground mb-3">{{ $event['title'] }}</h3>
                        <p class="text-sm text-muted-foreground mb-4 flex-grow">
                            {{ $event['description'] }}
                        </p>

                        <div class="space-y-2 mb-4 pb-4 border-t pt-4 text-sm text-muted-foreground">
                            <div class="flex items-center gap-2">
                                <i data-lucide="calendar" class="h-4 w-4"></i>
                                {{ \Carbon\Carbon::parse($event['date'])->format('l, F d, Y') }}
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="clock" class="h-4 w-4"></i>
                                {{ $event['time'] }}
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="map-pin" class="h-4 w-4"></i>
                                {{ $event['location'] }}
                            </div>
                            <div class="flex items-center gap-2">
                                <i data-lucide="users" class="h-4 w-4"></i>
                                {{ $event['attendees'] }} expected attendees
                            </div>
                        </div>

                        <button type="button" class="btn btn-cta btn-size-default w-full" @click="open = true; $nextTick(() => refreshIcons())">
                            Register Now
                        </button>

                        <button type="button" class="btn btn-ghost btn-size-sm mt-2 inline-flex items-center">
                            View Full Details
                            <i data-lucide="external-link" class="ml-2 h-3 w-3"></i>
                        </button>

                        <div
                            x-show="open"
                            x-cloak
                            class="fixed inset-0 z-50 flex items-center justify-center bg-black/50 px-4"
                            @keydown.escape.window="open = false"
                        >
                            <div class="bg-popover max-w-lg w-full rounded-xl p-6 shadow-xl" @click.outside="open = false">
                                <div class="flex items-start justify-between mb-4">
                                    <div>
                                        <h3 class="text-xl font-semibold text-foreground">Register for {{ $event['title'] }}</h3>
                                        <p class="text-sm text-muted-foreground">Complete the form below to secure your spot at this event.</p>
                                    </div>
                                    <button type="button" class="p-2 rounded-md hover:bg-muted" @click="open = false">
                                        <i data-lucide="x" class="h-4 w-4"></i>
                                    </button>
                                </div>

                                <form class="grid gap-4">
                                    <div class="grid gap-2">
                                        <label class="text-sm font-medium text-foreground" for="name-{{ $event['id'] }}">Full Name</label>
                                        <input id="name-{{ $event['id'] }}" type="text" placeholder="Enter your full name" class="w-full rounded-md border border-border bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div class="grid gap-2">
                                        <label class="text-sm font-medium text-foreground" for="email-{{ $event['id'] }}">Email</label>
                                        <input id="email-{{ $event['id'] }}" type="email" placeholder="your.email@company.com" class="w-full rounded-md border border-border bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div class="grid gap-2">
                                        <label class="text-sm font-medium text-foreground" for="org-{{ $event['id'] }}">Organization</label>
                                        <input id="org-{{ $event['id'] }}" type="text" placeholder="Your company name" class="w-full rounded-md border border-border bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>
                                    <div class="grid gap-2">
                                        <label class="text-sm font-medium text-foreground" for="phone-{{ $event['id'] }}">Phone Number</label>
                                        <input id="phone-{{ $event['id'] }}" type="tel" placeholder="+998 XX XXX XX XX" class="w-full rounded-md border border-border bg-background px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary">
                                    </div>

                                    <div class="flex justify-end gap-3 pt-2">
                                        <button type="button" class="btn btn-outline btn-size-sm" @click="open = false">Cancel</button>
                                        <button type="submit" class="btn btn-cta btn-size-sm">Confirm Registration</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
