@props(['services' => []])

<section class="py-16 md:py-24 bg-muted/30">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">
                What We Do
            </h2>
            <p class="text-lg text-muted-foreground">
                Building a stronger construction ecosystem through collaboration, standards, and innovation
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($services as $service)
                <div class="group p-6 card-elevated bg-card border border-border hover:border-primary rounded-xl transition-all duration-500 hover:scale-[1.01] hover:shadow-2xl relative overflow-hidden">
                    {{-- Animated gradient background on hover --}}
                    <div class="absolute inset-0 bg-gradient-to-br from-primary/0 via-primary/0 to-primary/0 group-hover:from-primary/5 group-hover:via-accent/5 group-hover:to-primary/10 transition-all duration-500 rounded-xl"></div>

                    {{-- Content --}}
                    <div class="relative z-10">
                        <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-primary/10 group-hover:bg-primary group-hover:scale-110 group-hover:rotate-6 mb-4 transition-all duration-500">
                            <i data-lucide="{{ $service['icon'] }}" class="h-6 w-6 text-primary group-hover:text-primary-foreground transition-colors duration-500"></i>
                        </div>
                        <h3 class="text-lg font-semibold text-foreground group-hover:text-primary mb-2 transition-colors duration-300">{{ $service['title'] }}</h3>
                        <p class="text-sm text-muted-foreground group-hover:text-foreground leading-relaxed transition-colors duration-300">{{ $service['description'] }}</p>
                    </div>

                    {{-- Glowing corner accent --}}
                    <div class="absolute -top-10 -right-10 w-20 h-20 bg-accent/0 group-hover:bg-accent/20 rounded-full blur-2xl transition-all duration-500"></div>
                </div>
            @endforeach
        </div>
    </div>
</section>
