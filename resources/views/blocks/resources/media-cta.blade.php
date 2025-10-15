@props([
    'email' => 'press@azuz.uz',
    'phone' => '+998 (71) 123-45-69',
])

<section class="py-12 bg-primary text-primary-foreground" x-init="$nextTick(() => refreshIcons())">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center">
            <h2 class="text-2xl font-bold mb-4">Media Inquiries</h2>
            <p class="mb-6 opacity-90">
                For press inquiries, interview requests, or media partnerships, contact our communications team.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:{{ $email }}" class="btn btn-outline btn-size-default bg-transparent border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary">{{ $email }}</a>
                <a href="tel:{{ preg_replace('/[^\d+]/', '', $phone) }}" class="btn btn-outline btn-size-default bg-transparent border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary">{{ $phone }}</a>
            </div>
        </div>
    </div>
</section>
