@extends('layouts.app')

@section('title', 'Resources & Newsroom')

@section('content')
    <section class="pattern-bg py-16 md:py-24 border-b">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            @include('components.common.breadcrumb', ['items' => [['label' => 'Resources & Newsroom']]])
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-6">
                    Resources & Newsroom
                </h1>
                <p class="text-xl text-muted-foreground leading-relaxed">
                    Access research, market data, press releases, and media coverage about AZUZ and the construction industry.
                </p>
            </div>
        </div>
    </section>

    <section class="py-16" x-init="$nextTick(() => refreshIcons())">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-foreground mb-2">Press Releases</h2>
                    <p class="text-muted-foreground">Latest news and announcements from AZUZ</p>
                </div>
                <a href="#" class="btn btn-outline btn-size-sm inline-flex items-center">
                    <i data-lucide="newspaper" class="h-4 w-4 mr-2"></i>
                    Media Kit
                </a>
            </div>

            <div class="space-y-4">
                @foreach ($pressReleases as $release)
                    <div class="p-6 card-elevated bg-card border-0 rounded-xl flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="badge bg-secondary text-secondary-foreground text-xs">{{ $release['type'] }}</span>
                                <span class="text-xs text-muted-foreground inline-flex items-center gap-1">
                                    <i data-lucide="calendar" class="h-3 w-3"></i>
                                    {{ \Carbon\Carbon::parse($release['date'])->format('M d, Y') }}
                                </span>
                            </div>
                            <h3 class="text-lg font-semibold text-foreground mb-2">{{ $release['title'] }}</h3>
                            <p class="text-sm text-muted-foreground">{{ $release['excerpt'] }}</p>
                        </div>
                        <button type="button" class="btn btn-outline btn-size-sm inline-flex items-center flex-shrink-0">
                            Read More
                            <i data-lucide="external-link" class="ml-2 h-3 w-3"></i>
                        </button>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16 bg-muted/30" x-init="$nextTick(() => refreshIcons())">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-foreground mb-2">Documents & Resources</h2>
                <p class="text-muted-foreground">Research reports, standards, guidelines, and market data</p>
            </div>

            <div class="grid md:grid-cols-2 gap-6">
                @foreach ($documents as $doc)
                    <div class="p-6 card-elevated bg-card border-0 rounded-xl flex gap-4">
                        <div class="flex-shrink-0 flex h-12 w-12 items-center justify-center rounded-xl bg-accent/10">
                            <i data-lucide="file-text" class="h-6 w-6 text-accent"></i>
                        </div>
                        <div class="flex-1 min-w-0">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="badge bg-secondary text-secondary-foreground text-xs">{{ $doc['category'] }}</span>
                                <span class="badge text-xs">{{ $doc['fileType'] }}</span>
                            </div>
                            <h3 class="text-lg font-semibold text-foreground mb-1">{{ $doc['title'] }}</h3>
                            <div class="flex items-center gap-3 text-xs text-muted-foreground mb-3">
                                <span>{{ \Carbon\Carbon::parse($doc['date'])->format('M Y') }}</span>
                                <span>&bull;</span>
                                <span>{{ $doc['size'] }}</span>
                            </div>
                            <button type="button" class="btn btn-cta btn-size-sm inline-flex items-center">
                                <i data-lucide="download" class="h-4 w-4 mr-2"></i>
                                Download
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-16" x-init="$nextTick(() => refreshIcons())">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="mb-8">
                <h2 class="text-3xl font-bold text-foreground mb-2">Media Coverage</h2>
                <p class="text-muted-foreground">AZUZ and member organizations in the news</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                @foreach ($mediaCoverage as $item)
                    <div class="p-6 card-elevated bg-card border-0 rounded-xl flex flex-col">
                        <div class="text-sm font-medium text-primary mb-2">{{ $item['outlet'] }}</div>
                        <h3 class="text-lg font-semibold text-foreground mb-2 flex-grow">{{ $item['title'] }}</h3>
                        <div class="flex items-center justify-between pt-4 border-t">
                            <span class="text-xs text-muted-foreground">
                                {{ \Carbon\Carbon::parse($item['date'])->format('M d, Y') }}
                            </span>
                            <a href="{{ $item['link'] }}" class="text-sm font-medium text-primary hover:text-primary-hover inline-flex items-center gap-1">
                                Read article
                                <i data-lucide="external-link" class="h-3 w-3"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-12 bg-primary text-primary-foreground" x-init="$nextTick(() => refreshIcons())">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center">
                <h2 class="text-2xl font-bold mb-4">Media Inquiries</h2>
                <p class="mb-6 opacity-90">
                    For press inquiries, interview requests, or media partnerships, contact our communications team.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="mailto:press@azuz.uz" class="btn btn-outline btn-size-default bg-transparent border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary">press@azuz.uz</a>
                    <a href="tel:+998711234569" class="btn btn-outline btn-size-default bg-transparent border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary">+998 (71) 123-45-69</a>
                </div>
            </div>
        </div>
    </section>
@endsection
