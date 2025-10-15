@props(['policies' => []])

<section class="py-16 md:py-24">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-foreground mb-4">Policy Tracker</h2>
            <p class="text-lg text-muted-foreground">
                Current and upcoming policy initiatives affecting the construction industry
            </p>
        </div>

        <div class="max-w-5xl mx-auto">
            @include('components.policy.timeline', ['policies' => $policies])
        </div>
    </div>
</section>
