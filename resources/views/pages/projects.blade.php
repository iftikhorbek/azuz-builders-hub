@extends('layouts.app')

@section('title', 'Projects & Best Practices')

@section('content')
    <section class="pattern-bg py-16 md:py-24 border-b">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            @include('components.common.breadcrumb', ['items' => [['label' => 'Projects & Best Practices']]])
            <div class="max-w-3xl">
                <h1 class="text-4xl md:text-5xl font-bold text-foreground mb-6">Projects & Best Practices</h1>
                <p class="text-xl text-muted-foreground leading-relaxed">
                    Real-world case studies demonstrating quality standards, innovation, and lessons learned from member projects.
                </p>
            </div>
        </div>
    </section>

    <div x-data="projectsDirectory()" x-init="$nextTick(() => refreshIcons())">
        <section class="py-8 border-b bg-muted/30">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex flex-wrap gap-2">
                    <template x-for="category in categories" :key="category.id">
                        <button
                            type="button"
                            class="btn btn-size-sm"
                            :class="selectedCategory === category.id ? 'btn-primary' : 'btn-outline'"
                            @click="selectedCategory = category.id"
                            x-text="category.label"
                        ></button>
                    </template>
                </div>
            </div>
        </section>

        <section class="py-16">
            <div class="container mx-auto px-4 sm:px-6 lg:px-8">
                <div class="space-y-12">
                    <template x-for="project in filteredProjects" :key="project.id">
                        <div class="overflow-hidden border-0 card-elevated bg-card rounded-xl">
                            <div class="grid md:grid-cols-5 gap-0">
                                <div class="md:col-span-2">
                                    <img :src="assetPath(project.image)" :alt="project.title" class="w-full h-full object-cover min-h-[300px]">
                                </div>
                                <div class="md:col-span-3 p-8">
                                    <div class="flex items-center gap-2 mb-4">
                                        <span class="badge bg-primary/10 text-primary border-primary/30 border text-xs" x-text="project.category"></span>
                                        <span class="text-sm text-muted-foreground">by <span x-text="project.member"></span></span>
                                    </div>

                                    <h2 class="text-2xl font-bold text-foreground mb-2" x-text="project.title"></h2>
                                    <p class="text-sm text-muted-foreground mb-6 flex items-center gap-1">
                                        <i data-lucide="building-2" class="h-4 w-4"></i>
                                        <span x-text="project.location"></span>
                                    </p>

                                    <div class="mb-6">
                                        <h3 class="text-sm font-semibold text-foreground mb-2 flex items-center gap-2">
                                            <i data-lucide="award" class="h-4 w-4 text-primary"></i>
                                            Challenge
                                        </h3>
                                        <p class="text-sm text-muted-foreground" x-text="project.challenge"></p>
                                    </div>

                                    <div class="mb-6">
                                        <h3 class="text-sm font-semibold text-foreground mb-2">Solutions &amp; Standards Applied</h3>
                                        <div class="flex flex-wrap gap-2 mb-3">
                                            <template x-for="(standard, idx) in project.standards" :key="idx">
                                                <span class="badge bg-success/10 text-success border-success/30 border text-xs" x-text="standard"></span>
                                            </template>
                                        </div>
                                        <ul class="space-y-1">
                                            <template x-for="(solution, idx) in project.solutions" :key="idx">
                                                <li class="text-sm text-muted-foreground flex items-start gap-2">
                                                    <span class="text-primary mt-1">&bull;</span>
                                                    <span x-text="solution"></span>
                                                </li>
                                            </template>
                                        </ul>
                                    </div>

                                    <div class="mb-6">
                                        <h3 class="text-sm font-semibold text-foreground mb-2 flex items-center gap-2">
                                            <i data-lucide="trending-up" class="h-4 w-4 text-success"></i>
                                            Outcomes
                                        </h3>
                                        <ul class="space-y-1">
                                            <template x-for="(outcome, idx) in project.outcomes" :key="idx">
                                                <li class="text-sm text-muted-foreground flex items-start gap-2">
                                                    <span class="text-success mt-1">&#10003;</span>
                                                    <span x-text="outcome"></span>
                                                </li>
                                            </template>
                                        </ul>
                                    </div>

                                    <div class="flex gap-3">
                                        <button type="button" class="btn btn-cta btn-size-sm inline-flex items-center">
                                            <i data-lucide="download" class="h-4 w-4 mr-2"></i>
                                            Download Case Study
                                        </button>
                                        <button type="button" class="btn btn-outline btn-size-sm inline-flex items-center">
                                            <i data-lucide="external-link" class="h-4 w-4 mr-2"></i>
                                            View Project
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </section>
    </div>

    <script>
        function projectsDirectory() {
            return {
                selectedCategory: 'all',
                categories: @js($categories),
                projects: @js($projects),
                assetPath(path) {
                    const base = "{{ asset('') }}";
                    return path.startsWith('http') ? path : base + path;
                },
                get filteredProjects() {
                    if (this.selectedCategory === 'all') {
                        return this.projects;
                    }
                    return this.projects.filter(project => project.category === this.selectedCategory);
                }
            }
        }
    </script>
@endsection
