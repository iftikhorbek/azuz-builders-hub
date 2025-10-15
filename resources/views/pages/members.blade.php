@extends('layouts.app')

@section('title', 'Members')

@section('content')
    <section class="pattern-bg py-16 md:py-24 border-b">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl">
                <div class="flex items-center gap-2 mb-4">
                    <i data-lucide="shield-check" class="h-6 w-6 text-success"></i>
                    <span class="text-sm font-medium text-success">Verified Members</span>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-6">
                    Member Directory
                </h1>
                <p class="text-xl text-muted-foreground leading-relaxed">
                    Explore Uzbekistan's leading construction developers, suppliers, and industry partners committed to quality and innovation.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-8">
                @foreach ($memberStats as $stat)
                    <div class="p-4 bg-card border-2 rounded-xl">
                        <div class="text-2xl font-bold text-primary">{{ $stat['value'] }}</div>
                        <div class="text-sm text-muted-foreground">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <div x-data="memberDirectory()" x-init="$nextTick(() => refreshIcons())">
        <section class="py-8 border-b bg-muted/30">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col md:flex-row gap-4">
                    <div class="flex-1 relative">
                        <i data-lucide="search" class="absolute left-3 top-1/2 -translate-y-1/2 h-4 w-4 text-muted-foreground"></i>
                        <input
                            type="text"
                            placeholder="Search members..."
                            class="flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 pl-10 text-base ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm"
                            x-model="searchQuery"
                        >
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:w-auto">
                        <div class="relative md:w-[180px]" x-data="{ open: false }" @click.outside="open = false" @keydown.escape.window="open = false">
                            <button
                                type="button"
                                class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                @click="open = !open; $nextTick(() => refreshIcons())"
                            >
                                <span class="line-clamp-1" x-text="filterSegment === 'all' ? 'All Segments' : filterSegment"></span>
                                <i data-lucide="chevron-down" class="h-4 w-4 opacity-50"></i>
                            </button>
                            <div
                                x-cloak
                                x-show="open"
                                x-transition
                                class="absolute right-0 mt-2 w-full min-w-[8rem] max-h-96 overflow-hidden rounded-md border bg-popover text-popover-foreground shadow-md z-50"
                            >
                                <div class="p-1 max-h-60 overflow-auto">
                                    <template x-for="segment in segments" :key="segment">
                                        <button
                                            type="button"
                                            class="relative flex w-full cursor-default select-none items-center rounded-sm py-1.5 pl-8 pr-2 text-sm text-left outline-none transition-colors focus:bg-accent focus:text-accent-foreground hover:bg-accent hover:text-accent-foreground"
                                            @click="filterSegment = segment; open = false; $nextTick(() => refreshIcons())"
                                        >
                                            <span class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center" x-show="filterSegment === segment">
                                                <i data-lucide="check" class="h-4 w-4"></i>
                                            </span>
                                            <span x-text="segment === 'all' ? 'All Segments' : segment"></span>
                                        </button>
                                    </template>
                                </div>
                            </div>
                        </div>

                        <div class="relative md:w-[180px]" x-data="{ open: false }" @click.outside="open = false" @keydown.escape.window="open = false">
                            <button
                                type="button"
                                class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                @click="open = !open; $nextTick(() => refreshIcons())"
                            >
                                <span class="line-clamp-1" x-text="filterRegion === 'all' ? 'All Regions' : filterRegion"></span>
                                <i data-lucide="chevron-down" class="h-4 w-4 opacity-50"></i>
                            </button>
                            <div
                                x-cloak
                                x-show="open"
                                x-transition
                                class="absolute right-0 mt-2 w-full min-w-[8rem] max-h-96 overflow-hidden rounded-md border bg-popover text-popover-foreground shadow-md z-50"
                            >
                                <div class="p-1 max-h-60 overflow-auto">
                                    <template x-for="region in regions" :key="region">
                                        <button
                                            type="button"
                                            class="relative flex w-full cursor-default select-none items-center rounded-sm py-1.5 pl-8 pr-2 text-sm text-left outline-none transition-colors focus:bg-accent focus:text-accent-foreground hover:bg-accent hover:text-accent-foreground"
                                            @click="filterRegion = region; open = false; $nextTick(() => refreshIcons())"
                                        >
                                            <span class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center" x-show="filterRegion === region">
                                                <i data-lucide="check" class="h-4 w-4"></i>
                                            </span>
                                            <span x-text="region === 'all' ? 'All Regions' : region"></span>
                                        </button>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex items-center gap-2 mt-4 text-sm text-muted-foreground">
                    <span>Showing <span x-text="filteredMembers.length"></span> of <span x-text="members.length"></span> members</span>
                </div>
            </div>
        </section>

        <section class="py-12">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <template x-for="member in filteredMembers" :key="member.id">
                        <div class="p-6 card-elevated bg-card border-0 flex flex-col rounded-xl">
                            <div class="flex items-start justify-between mb-4">
                                <div class="flex h-14 w-14 items-center justify-center rounded-xl bg-primary/10">
                                    <span class="text-xl font-bold text-primary" x-text="member.name.charAt(0)"></span>
                                </div>
                                <template x-if="member.verified">
                                    <span class="verified-badge inline-flex items-center gap-1 text-xs font-medium">
                                        <i data-lucide="shield-check" class="h-3 w-3"></i>
                                        Verified
                                    </span>
                                </template>
                            </div>

                            <h3 class="text-xl font-semibold text-foreground mb-2" x-text="member.name"></h3>

                            <p class="text-sm text-muted-foreground mb-4 flex-grow" x-text="member.description"></p>

                            <div class="space-y-2 mb-4 pb-4 border-b">
                                <div class="flex items-center gap-2 text-sm text-muted-foreground">
                                    <i data-lucide="building-2" class="h-4 w-4"></i>
                                    <span x-text="member.segment"></span>
                                    <span>&bull;</span>
                                    <span x-text="member.size"></span>
                                </div>
                                <div class="flex items-center gap-2 text-sm text-muted-foreground">
                                    <i data-lucide="map-pin" class="h-4 w-4"></i>
                                    <span x-text="member.region"></span>
                                </div>
                                <div class="text-sm font-medium text-foreground" x-show="member.projects > 0">
                                    <span x-text="member.projects"></span> active projects
                                </div>
                            </div>

                            <button type="button" class="btn btn-outline btn-size-default w-full mt-auto inline-flex items-center justify-center">
                                View Profile
                                <i data-lucide="external-link" class="ml-2 h-4 w-4"></i>
                            </button>
                        </div>
                    </template>
                </div>

                <div class="text-center py-12" x-show="filteredMembers.length === 0">
                    <p class="text-lg text-muted-foreground">
                        No members found matching your criteria.
                    </p>
                </div>
            </div>
        </section>
    </div>

    <script>
        function memberDirectory() {
            return {
                searchQuery: '',
                filterSegment: 'all',
                filterRegion: 'all',
                members: @js($memberDirectory),
                segments: @js($segments),
                regions: @js($regions),
                get filteredMembers() {
                    const query = this.searchQuery.toLowerCase();
                    return this.members.filter(member => {
                        const matchesSearch = member.name.toLowerCase().includes(query) || member.description.toLowerCase().includes(query);
                        const matchesSegment = this.filterSegment === 'all' || member.segment === this.filterSegment;
                        const matchesRegion = this.filterRegion === 'all' || member.region === this.filterRegion;
                        return matchesSearch && matchesSegment && matchesRegion;
                    });
                }
            }
        }
    </script>
@endsection
