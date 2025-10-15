@props(['policies' => []])

@php
    $statusClasses = [
        'draft' => 'status-draft',
        'consultation' => 'status-consultation',
        'adopted' => 'status-adopted',
    ];

    $statusLabels = [
        'draft' => 'Draft',
        'consultation' => 'Public Consultation',
        'adopted' => 'Adopted',
    ];
@endphp

<div class="relative">
    <div class="absolute left-6 top-0 bottom-0 w-0.5 bg-border hidden md:block" aria-hidden="true"></div>

    <div class="space-y-8">
        @foreach ($policies as $policy)
            <div class="relative flex gap-6">
                <div class="hidden md:flex flex-shrink-0 h-12 w-12 items-center justify-center rounded-full bg-primary text-primary-foreground font-bold shadow-md z-10">
                    <i data-lucide="file-text" class="h-5 w-5"></i>
                </div>

                <div class="flex-1 p-6 card-elevated bg-card rounded-xl">
                    <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-4 mb-4">
                        <div class="flex-1">
                            <div class="flex items-center gap-3 mb-2">
                                <span class="badge {{ $statusClasses[$policy['status']] ?? '' }} text-xs px-2 py-1 rounded-full">
                                    {{ $statusLabels[$policy['status']] ?? ucfirst($policy['status']) }}
                                </span>
                                <div class="flex items-center gap-1 text-xs text-muted-foreground">
                                    <i data-lucide="calendar" class="h-3 w-3"></i>
                                    {{ \Carbon\Carbon::parse($policy['date'])->format('M d, Y') }}
                                </div>
                            </div>
                            <h3 class="text-lg font-semibold text-foreground mb-2">{{ $policy['title'] }}</h3>
                            <p class="text-sm text-muted-foreground mb-3">{{ $policy['description'] }}</p>
                            <div class="inline-flex items-start gap-2 px-3 py-2 rounded-lg bg-accent/10">
                                <span class="text-xs font-medium text-accent-foreground">Impact:</span>
                                <span class="text-xs text-muted-foreground">{{ $policy['impact'] }}</span>
                            </div>
                        </div>

                        @if (!empty($policy['downloadUrl']))
                            <a href="{{ $policy['downloadUrl'] }}" class="btn btn-outline btn-size-sm inline-flex items-center">
                                <i data-lucide="download" class="h-4 w-4 mr-2"></i>
                                Download
                            </a>
                        @endif
                    </div>

                    @if (($policy['status'] ?? null) === 'consultation')
                        <div class="pt-4 border-t">
                            <a href="#" class="btn btn-cta btn-size-sm inline-flex items-center">Submit Feedback</a>
                        </div>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>
