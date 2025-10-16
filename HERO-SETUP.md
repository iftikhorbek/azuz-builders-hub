# Hero Section Setup Guide

## Current Configuration

Your hero section now uses **layered backgrounds** for a rich, professional look and starts at the very top of the page with the transparent header floating over it.

### Visual Layers (Bottom to Top)

```
Layer 0: hero-background.jpg (your base image)
         ↓
Layer 1: Gradient overlay (92% → 70% white) - ensures text readability
         ↓
Layer 2: Uzbek pattern overlay (40% opacity) - subtle geometric design
         ↓
Layer 3: Floating decorative orbs - animated background elements
         ↓
Layer 4: Your content (text, buttons, stats, images)
```

## Files Modified

1. **resources/css/app.css**
   - Added `.hero-with-bg-image` - handles background image display
   - Added `.hero-bg-overlay` - creates gradient overlay for readability
   - Added main spacing rules - ensures no gap at top of page

2. **resources/views/blocks/home-hero.blade.php**
   - Section now uses `hero-background.jpg` as background
   - Layered with pattern and gradient overlays
   - Top padding adjusted (pt-24 md:pt-32) to account for fixed header

3. **resources/views/layouts/app.blade.php**
   - Removed all margin/padding from body and main elements
   - Ensures hero starts at the very top of the page

## Customization Options

### 1. Change Background Image
Replace `public/assets/hero-background.jpg` with your image (1920x1200px minimum recommended)

### 2. Adjust Pattern Overlay Opacity
In `home-hero.blade.php` line 8:
```blade
<div class="absolute inset-0 pattern-bg opacity-20 pointer-events-none">
```
- Change `opacity-20` to `opacity-10` (more image visible) or `opacity-30` (less image visible)

### 3. Enable Parallax Scroll Effect
Add the `parallax` class to the section (desktop only):
```blade
<section class="... hero-with-bg-image hero-bg-overlay parallax !mt-0">
```
Note: Parallax only works on desktop browsers (>1024px width)

### 4. Adjust Text Readability (Gradient Overlay)
In `resources/css/app.css` lines 224-235, modify gradient opacity:
```css
.hero-bg-overlay::before {
  background: linear-gradient(
    135deg,
    hsl(var(--background) / 0.75) 0%,    /* ← Adjust these values */
    hsl(var(--background) / 0.65) 40%,   /* ← Lower = more image visible */
    hsl(var(--background) / 0.4) 100%    /* ← Higher = more white overlay */
  );
}
```

**Current settings:** More of the background image is visible for a dramatic look
**For more text contrast:** Increase these values (e.g., 0.85, 0.75, 0.6)
**For more image visibility:** Decrease these values (e.g., 0.6, 0.5, 0.3)

### 5. Enable Tech Grid Overlay
Uncomment line 11 in `home-hero.blade.php`:
```blade
{{-- <div class="absolute inset-0 tech-grid-overlay opacity-30" style="z-index: 0;"></div> --}}
```

### 6. Adjust Hero Height
The hero is set to `min-height: 100vh` (full viewport height). To change:
In `resources/css/app.css` line 209:
```css
min-height: 100vh; /* Change to 80vh for shorter, 120vh for taller */
```

### 7. Remove Scroll Effect (Keep Image Static)
By default, the background image now scrolls with the page. This is already set correctly.
```css
background-attachment: fixed;  /* ← Remove this for no parallax */
```

## Background Image Recommendations

### What Works Best:
- **Resolution:** 1920x1200px or higher
- **File size:** Under 500KB (optimize with TinyPNG)
- **Content:** Wide-angle cityscape, construction site, or architectural details
- **Colors:** Should complement your primary blue (#1d6eb8)
- **Style:** Professional, not too busy (text needs to be readable)

### Where to Find Images:
- **Unsplash:** https://unsplash.com/s/photos/modern-architecture
- **Pexels:** https://pexels.com/search/construction/
- Search terms: "modern construction", "city skyline", "architectural detail"

## Troubleshooting

### Background image not showing?
1. Check file exists: `public/assets/hero-background.jpg`
2. Clear cache: `php artisan view:clear`
3. Check browser console for 404 errors

### Text not readable?
1. Increase overlay opacity in `.hero-bg-overlay::before`
2. Increase pattern opacity on line 8 of `home-hero.blade.php`

### Image too large/slow loading?
1. Optimize image: https://tinypng.com
2. Target size: 200-500KB
3. Use WebP format for better compression

## Alternative Styles

### Option A: No Background Image (Gradient Only)
Remove the `style` attribute from section tag and use:
```blade
<section class="relative overflow-hidden pattern-bg hero-gradient-bg">
```

### Option B: Darker/Moodier
In CSS, change overlay to darker:
```css
hsl(var(--background) / 0.5) 0%,
hsl(var(--background) / 0.3) 100%
```

### Option C: Image on Right Side Only
Keep image in the grid column instead of as background (original design)
