@props(['inquiryTypes' => []])

<section class="py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto" x-data="contactForm()" x-init="$nextTick(() => refreshIcons())">
            <div class="p-8 bg-card border-0 rounded-xl card-elevated">
                <h2 class="text-2xl font-bold text-foreground mb-2">Send us a message</h2>
                <p class="text-sm text-muted-foreground mb-6">We respond within 1-2 business days.</p>

                <form class="space-y-6" @submit.prevent="submit">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="name" class="text-sm font-medium leading-none text-foreground">Full Name *</label>
                            <input
                                id="name"
                                type="text"
                                placeholder="Enter your full name"
                                x-model.trim="form.name"
                                :class="inputClass('name')"
                            >
                            <p class="text-xs text-destructive" x-text="errors.name" x-show="errors.name"></p>
                        </div>
                        <div class="space-y-2">
                            <label for="email" class="text-sm font-medium leading-none text-foreground">Email Address *</label>
                            <input
                                id="email"
                                type="email"
                                placeholder="your.email@company.com"
                                x-model.trim="form.email"
                                :class="inputClass('email')"
                            >
                            <p class="text-xs text-destructive" x-text="errors.email" x-show="errors.email"></p>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-2">
                            <label for="organization" class="text-sm font-medium leading-none text-foreground">Organization *</label>
                            <input
                                id="organization"
                                type="text"
                                placeholder="Your company name"
                                x-model.trim="form.organization"
                                :class="inputClass('organization')"
                            >
                            <p class="text-xs text-destructive" x-text="errors.organization" x-show="errors.organization"></p>
                        </div>
                        <div class="space-y-2">
                            <label for="phone" class="text-sm font-medium leading-none text-foreground">Phone Number *</label>
                            <input
                                id="phone"
                                type="tel"
                                placeholder="+998 XX XXX XX XX"
                                x-model.trim="form.phone"
                                :class="inputClass('phone')"
                            >
                            <p class="text-xs text-destructive" x-text="errors.phone" x-show="errors.phone"></p>
                        </div>
                    </div>

                    <div class="space-y-2">
                        <label class="text-sm font-medium leading-none text-foreground">Inquiry Type *</label>
                        <div class="relative" x-data="{ open: false }" @click.outside="open = false" @keydown.escape.window="open = false">
                            <button
                                type="button"
                                class="flex h-10 w-full items-center justify-between rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                @click="open = !open; $nextTick(() => refreshIcons())"
                            >
                                <span x-text="inquiryLabel"></span>
                                <i data-lucide="chevron-down" class="h-4 w-4 opacity-50"></i>
                            </button>
                            <div
                                x-cloak
                                x-show="open"
                                x-transition
                                class="absolute z-50 mt-2 w-full min-w-[12rem] overflow-hidden rounded-md border bg-popover text-popover-foreground shadow-md"
                            >
                                <div class="grid gap-1 p-1">
                                    <template x-for="option in inquiryOptions" :key="option.value">
                                        <button
                                            type="button"
                                            class="relative flex w-full cursor-default select-none items-center rounded-sm py-1.5 pl-8 pr-2 text-sm text-left outline-none transition-colors focus:bg-accent focus:text-accent-foreground hover:bg-accent hover:text-accent-foreground"
                                            @click="selectInquiry(option.value); open = false; $nextTick(() => refreshIcons())"
                                        >
                                            <span class="absolute left-2 flex h-3.5 w-3.5 items-center justify-center" x-show="form.inquiryType === option.value">
                                                <i data-lucide="check" class="h-4 w-4"></i>
                                            </span>
                                            <span x-text="option.label"></span>
                                        </button>
                                    </template>
                                </div>
                            </div>
                        </div>
                        <p class="text-xs text-destructive" x-text="errors.inquiryType" x-show="errors.inquiryType"></p>
                    </div>

                    <div class="space-y-2">
                        <label for="message" class="text-sm font-medium leading-none text-foreground">Message *</label>
                        <textarea
                            id="message"
                            rows="5"
                            placeholder="Tell us how we can help you"
                            x-model.trim="form.message"
                            :class="textareaClass('message')"
                        ></textarea>
                        <p class="text-xs text-destructive" x-text="errors.message" x-show="errors.message"></p>
                    </div>

                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 pt-4">
                        <p class="text-xs text-muted-foreground">By submitting this form you agree to our privacy policy.</p>
                        <button type="submit" class="btn btn-cta btn-size-default inline-flex items-center justify-center min-w-[160px]" :disabled="submitting">
                            <span x-show="!submitting">Submit Inquiry</span>
                            <span x-show="submitting" class="flex items-center gap-2">
                                <svg class="h-4 w-4 animate-spin" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"></path>
                                </svg>
                                Sending...
                            </span>
                        </button>
                    </div>
                </form>
            </div>

            <div
                x-cloak
                x-show="toastVisible"
                x-transition
                class="fixed right-4 bottom-4 z-50 w-full max-w-xs group pointer-events-auto flex items-start justify-between space-x-4 overflow-hidden rounded-md border bg-background p-6 pr-8 shadow-lg"
            >
                <div class="grid gap-1">
                    <div class="text-sm font-semibold text-foreground">Message Sent Successfully</div>
                    <div class="text-sm text-muted-foreground opacity-90">Thank you for contacting AZUZ. We will respond within 1-2 business days.</div>
                </div>
                <button type="button" class="absolute right-2 top-2 rounded-md p-1 text-foreground/50 hover:text-foreground" @click="toastVisible = false">
                    <i data-lucide="x" class="h-4 w-4"></i>
                </button>
            </div>
        </div>
    </div>
</section>

@push('scripts')
    <script>
        function contactForm() {
            return {
                form: {
                    name: '',
                    email: '',
                    organization: '',
                    phone: '',
                    inquiryType: '',
                    message: '',
                },
                errors: {},
                submitting: false,
                toastVisible: false,
                inquiryOptions: @js($inquiryTypes),
                get inquiryLabel() {
                    if (!this.form.inquiryType) {
                        return 'Select inquiry type';
                    }
                    const option = this.inquiryOptions.find((opt) => opt.value === this.form.inquiryType);
                    return option ? option.label : 'Select inquiry type';
                },
                inputClass(field) {
                    const base = 'flex h-10 w-full rounded-md border border-input bg-background px-3 py-2 text-base ring-offset-background placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm';
                    return this.errors[field] ? base + ' border-destructive' : base;
                },
                textareaClass(field) {
                    const base = 'flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50';
                    return this.errors[field] ? base + ' border-destructive' : base;
                },
                selectInquiry(value) {
                    this.form.inquiryType = value;
                    delete this.errors.inquiryType;
                },
                validate() {
                    const errors = {};
                    if (this.form.name.length < 2) errors.name = 'Name must be at least 2 characters.';
                    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(this.form.email)) errors.email = 'Invalid email address.';
                    if (this.form.organization.length < 2) errors.organization = 'Organization name required.';
                    if (this.form.phone.length < 10) errors.phone = 'Valid phone number required.';
                    if (!this.form.inquiryType) errors.inquiryType = 'Please select inquiry type.';
                    if (this.form.message.length < 10) errors.message = 'Message must be at least 10 characters.';
                    this.errors = errors;
                    return Object.keys(errors).length === 0;
                },
                reset() {
                    this.form = { name: '', email: '', organization: '', phone: '', inquiryType: '', message: '' };
                },
                submit() {
                    if (!this.validate()) {
                        return;
                    }
                    this.submitting = true;
                    setTimeout(() => {
                        this.submitting = false;
                        this.toastVisible = true;
                        this.reset();
                        this.errors = {};
                        setTimeout(() => refreshIcons(), 0);
                    }, 1500);
                },
            }
        }
    </script>
@endpush
