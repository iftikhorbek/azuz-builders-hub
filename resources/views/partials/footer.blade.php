@php
    $footerLinks = [
        'organization' => [
            ['label' => 'About AZUZ', 'url' => route('about')],
            ['label' => 'Governance', 'url' => route('about') . '#governance'],
            ['label' => 'Membership', 'url' => route('membership')],
            ['label' => 'Partners', 'url' => route('members')],
        ],
        'resources' => [
            ['label' => 'Policy & Standards', 'url' => route('policy')],
            ['label' => 'Training & Events', 'url' => route('events')],
            ['label' => 'Best Practices', 'url' => route('projects')],
            ['label' => 'Newsroom', 'url' => route('resources')],
        ],
        'legal' => [
            ['label' => 'Charter', 'url' => '#'],
            ['label' => 'Privacy Policy', 'url' => '#'],
            ['label' => 'Terms of Service', 'url' => '#'],
            ['label' => 'Brand Assets', 'url' => '#'],
        ],
    ];
@endphp

<footer class="border-t bg-muted/30 mt-auto">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-8">
            <div class="lg:col-span-2">
                <div class="flex items-center space-x-3 mb-4">
                    <div class="flex h-10 w-10 items-center justify-center rounded-lg bg-primary">
                        <span class="text-xl font-bold text-primary-foreground">A</span>
                    </div>
                    <div>
                        <div class="text-lg font-bold text-foreground">AZUZ</div>
                        <div class="text-xs text-muted-foreground">Association of Developers</div>
                    </div>
                </div>
                <p class="text-sm text-muted-foreground mb-6 max-w-sm">
                    Uniting Uzbekistan's developers to raise standards, accelerate innovation, and build better cities.
                </p>

                <div class="space-y-2 text-sm">
                    <div class="flex items-start gap-2 text-muted-foreground">
                        <i data-lucide="map-pin" class="h-4 w-4 mt-0.5 flex-shrink-0"></i>
                        <span>BC Sigma, 71 Nukus Street<br>Tashkent, Uzbekistan</span>
                    </div>
                    <div class="flex items-center gap-2 text-muted-foreground">
                        <i data-lucide="phone" class="h-4 w-4 flex-shrink-0"></i>
                        <span>+998 (71) 123-45-67</span>
                    </div>
                    <div class="flex items-center gap-2 text-muted-foreground">
                        <i data-lucide="mail" class="h-4 w-4 flex-shrink-0"></i>
                        <a href="mailto:info@azuz.uz" class="hover:text-primary transition-colors">
                            info@azuz.uz
                        </a>
                    </div>
                </div>

                <div class="flex items-center gap-3 mt-6">
                    <a href="#" class="flex h-9 w-9 items-center justify-center rounded-md border hover:bg-accent transition-colors" aria-label="LinkedIn">
                        <i data-lucide="linkedin" class="h-4 w-4"></i>
                    </a>
                    <a href="#" class="flex h-9 w-9 items-center justify-center rounded-md border hover:bg-accent transition-colors" aria-label="Facebook">
                        <i data-lucide="facebook" class="h-4 w-4"></i>
                    </a>
                    <a href="#" class="flex h-9 w-9 items-center justify-center rounded-md border hover:bg-accent transition-colors" aria-label="Twitter">
                        <i data-lucide="twitter" class="h-4 w-4"></i>
                    </a>
                </div>
            </div>

            <div>
                <h3 class="font-semibold text-sm text-foreground mb-4">Organization</h3>
                <ul class="space-y-3">
                    @foreach ($footerLinks['organization'] as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="text-sm text-muted-foreground hover:text-primary transition-colors">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-sm text-foreground mb-4">Resources</h3>
                <ul class="space-y-3">
                    @foreach ($footerLinks['resources'] as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="text-sm text-muted-foreground hover:text-primary transition-colors">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div>
                <h3 class="font-semibold text-sm text-foreground mb-4">Legal</h3>
                <ul class="space-y-3">
                    @foreach ($footerLinks['legal'] as $link)
                        <li>
                            <a href="{{ $link['url'] }}" class="text-sm text-muted-foreground hover:text-primary transition-colors">
                                {{ $link['label'] }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <p class="text-sm text-muted-foreground">
                    &copy; {{ now()->year }} AZUZ. All rights reserved. Non-profit organization, founded 2020.
                </p>
                <div class="flex items-center gap-1 text-xs text-muted-foreground">
                    <span class="inline-flex h-2 w-2 rounded-full bg-success mr-1"></span>
                    <span>System Status: Operational</span>
                </div>
            </div>
        </div>
    </div>
</footer>
