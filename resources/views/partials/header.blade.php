@php
    $navigation = [
        ['label' => 'About', 'route' => route('about'), 'name' => 'about'],
        ['label' => 'Membership', 'route' => route('membership'), 'name' => 'membership'],
        ['label' => 'Members', 'route' => route('members'), 'name' => 'members'],
        ['label' => 'Projects', 'route' => route('projects'), 'name' => 'projects'],
        ['label' => 'Policy', 'route' => route('policy'), 'name' => 'policy'],
        ['label' => 'Events', 'route' => route('events'), 'name' => 'events'],
        ['label' => 'Resources', 'route' => route('resources'), 'name' => 'resources'],
        ['label' => 'Contact', 'route' => route('contact'), 'name' => 'contact'],
    ];

    $languages = [
        ['code' => 'en', 'label' => 'English'],
        ['code' => 'uz', 'label' => "O'zbekcha"],
        ['code' => 'ru', 'label' => 'Русский'],
    ];
@endphp

<header
    class="fixed inset-x-0 top-0 z-50 border-b transition-all duration-300"
    :class="scrolled ? 'bg-background/80 supports-[backdrop-filter]:bg-background/60 backdrop-blur border-border shadow-sm' : 'bg-transparent border-transparent'"
    x-data="{
        mobileMenuOpen: false,
        currentLang: 'en',
        languages: @js($languages),
        scrolled: false,
        toggleMobile() {
            this.mobileMenuOpen = !this.mobileMenuOpen;
        },
        closeMobile() {
            this.mobileMenuOpen = false;
        },
        setLang(code) {
            this.currentLang = code;
        }
    }"
    x-init="scrolled = window.scrollY > 10"
    @scroll.window="scrolled = window.scrollY > 10"
>
    <nav class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <a href="{{ route('home') }}" class="flex items-center space-x-3">
                <img src="{{ asset('assets/azuz-logo.png') }}" alt="AZUZ Logo" class="h-10 w-10 object-contain">
                <div class="hidden sm:block">
                    <div class="text-sm font-medium text-foreground">O'zbekiston Quruvchilar Assotsiatsiyasi</div>
                </div>
            </a>

            <div class="hidden lg:flex lg:items-center lg:space-x-1">
                @foreach ($navigation as $item)
                    @php $isActive = request()->routeIs($item['name']); @endphp
                    <a
                        href="{{ $item['route'] }}"
                        class="px-3 py-2 text-sm font-medium rounded-md transition-colors {{ $isActive ? 'text-primary bg-primary/5' : 'text-foreground/80 hover:text-primary hover:bg-primary/5' }}"
                    >
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </div>

            <div class="flex items-center space-x-4">
                <div class="hidden sm:block relative" x-data="{ open: false }" @click.outside="open = false" @keydown.escape.window="open = false">
                    <button
                        type="button"
                        class="btn btn-ghost btn-size-sm flex items-center"
                        @click="open = !open"
                    >
                        <i data-lucide="globe" class="h-4 w-4"></i>
                        <span class="ml-1 uppercase" x-text="currentLang"></span>
                        <i data-lucide="chevron-down" class="h-3 w-3 ml-1"></i>
                    </button>
                    <div
                        x-cloak
                        x-show="open"
                        x-transition
                        class="absolute right-0 mt-2 w-40 rounded-md border bg-popover shadow-lg py-2 z-50"
                    >
                        <template x-for="lang in languages" :key="lang.code">
                            <button
                                type="button"
                                class="w-full px-3 py-2 text-sm text-left transition-colors"
                                :class="currentLang === lang.code ? 'bg-accent text-foreground' : 'text-muted-foreground hover:bg-accent/40 hover:text-foreground'"
                                @click="setLang(lang.code); open = false"
                                x-text="lang.label"
                            ></button>
                        </template>
                    </div>
                </div>

                <a
                    href="{{ route('membership') }}"
                    class="btn btn-cta btn-size-sm hidden md:inline-flex"
                >
                    Become a Member
                </a>

                <button
                    type="button"
                    class="lg:hidden rounded-md p-2 text-foreground hover:bg-accent"
                    @click="toggleMobile()"
                    :aria-expanded="mobileMenuOpen.toString()"
                >
                    <span class="sr-only">Toggle menu</span>
                    <template x-if="mobileMenuOpen">
                        <i data-lucide="x" class="h-6 w-6"></i>
                    </template>
                    <template x-if="!mobileMenuOpen">
                        <i data-lucide="menu" class="h-6 w-6"></i>
                    </template>
                </button>
            </div>
        </div>

        <div class="lg:hidden py-4 border-t" x-show="mobileMenuOpen" x-transition x-cloak>
            <div class="space-y-1">
                @foreach ($navigation as $item)
                    @php $isActive = request()->routeIs($item['name']); @endphp
                    <a
                        href="{{ $item['route'] }}"
                        class="block px-3 py-2 text-base font-medium rounded-md {{ $isActive ? 'text-primary bg-primary/5' : 'text-foreground/80 hover:text-primary hover:bg-primary/5' }}"
                        @click="closeMobile()"
                    >
                        {{ $item['label'] }}
                    </a>
                @endforeach

                <div class="pt-4 mt-4 border-t">
                    <a
                        href="{{ route('membership') }}"
                        class="btn btn-cta btn-size-sm w-full"
                        @click="closeMobile()"
                    >
                        Become a Member
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
