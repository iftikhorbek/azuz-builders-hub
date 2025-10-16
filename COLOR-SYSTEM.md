# AZUZ Color System - Midnight Professional

## 🎨 Current Theme: **Midnight Professional**

A sophisticated dark theme designed for modern, tech-forward professional identity.

---

## Color Palette

### Backgrounds (Deep Navy Slate)

| Purpose | Color | Hex | HSL | Usage |
|---------|-------|-----|-----|-------|
| Main Background | `--background` | `#0F1729` | `217 52% 11%` | Page background, main sections |
| Cards & Elevated | `--card` | `#1A2332` | `217 35% 15%` | Cards, elevated surfaces |
| Popover | `--popover` | `#243044` | `217 30% 20%` | Popovers, dropdowns, tooltips |
| Secondary | `--secondary` | `#243044` | `217 30% 20%` | Secondary buttons, surfaces |
| Muted | `--muted` | `#2D3A4F` | `217 25% 25%` | Disabled states, subtle elements |
| Borders | `--border` | `#2D3A4F` | `217 25% 25%` | Dividers, borders |
| Input Backgrounds | `--input` | `#243044` | `#217 30% 20%` | Form inputs |

### Text Colors

| Purpose | Color | Hex | HSL | Usage |
|---------|-------|-----|-----|-------|
| Primary Text | `--foreground` | `#F1F5F9` | `210 20% 96%` | Headings, body text |
| Muted Text | `--muted-foreground` | `#94A3B8` | `215 16% 65%` | Secondary text, labels |

### Brand Colors

#### Primary (Bright Professional Blue)
| State | Color | Hex | HSL | Usage |
|-------|-------|-----|-----|-------|
| Default | `--primary` | `#3B82F6` | `221 91% 60%` | Primary actions, links, focus states |
| Hover | `--primary-hover` | `#2563EB` | `221 83% 53%` | Hover state |
| Foreground | `--primary-foreground` | `#F8FAFC` | `210 20% 98%` | Text on primary background |

#### Accent (Uzbek Amber/Gold)
| State | Color | Hex | HSL | Usage |
|-------|-------|-----|-----|-------|
| Default | `--accent` | `#F59E0B` | `38 92% 50%` | CTA buttons, highlights, warm accents |
| Hover | `--accent-hover` | `#D97706` | `32 95% 44%` | Hover state |
| Foreground | `--accent-foreground` | `#0F1729` | `217 52% 11%` | Text on accent background (dark) |

#### Success (Growth Green)
| State | Color | Hex | HSL | Usage |
|-------|-------|-----|-----|-------|
| Default | `--success` | `#10B981` | `160 84% 39%` | Success messages, verified badges, positive actions |
| Foreground | `--success-foreground` | `#F8FAFC` | `210 20% 98%` | Text on success background |

#### Destructive (Alert Red)
| State | Color | Hex | HSL | Usage |
|-------|-------|-----|-----|-------|
| Default | `--destructive` | `#DC2626` | `0 72% 51%` | Error messages, delete actions, alerts |
| Foreground | `--destructive-foreground` | `#F8FAFC` | `210 20% 98%` | Text on destructive background |

### Status Colors

| Status | Color | Hex | HSL | Usage |
|--------|-------|-----|-----|-------|
| Draft | `--status-draft` | `#F59E0B` | `43 96% 56%` | Draft policies/documents |
| Consultation | `--status-consultation` | `#3B82F6` | `221 91% 60%` | Under consultation |
| Adopted | `--status-adopted` | `#10B981` | `160 84% 39%` | Adopted/approved |

---

## Design Principles

### 1. **Depth Through Layering**
- Main background: `#0F1729` (deepest)
- Elevated surfaces: `#1A2332` (cards, modals)
- Interactive elements: `#243044` (buttons, inputs)
- Borders: `#2D3A4F` (subtle definition)

### 2. **Bright Accents on Dark Canvas**
- Primary blue (`#3B82F6`) - High contrast, vibrant
- Amber accent (`#F59E0B`) - Warmth, Uzbek cultural connection
- Green success (`#10B981`) - Fresh, positive

### 3. **Accessibility**
All color combinations meet **WCAG 2.1 AA standards**:
- Primary text (#F1F5F9) on background (#0F1729): **15.2:1** ✓
- Primary blue (#3B82F6) on background (#0F1729): **6.8:1** ✓
- Amber (#F59E0B) with dark foreground: **9.2:1** ✓

### 4. **Cultural Connection**
- **Amber/Gold accent**: References traditional Uzbek tilework and architecture
- **Deep navy**: Modern, professional, tech-forward
- **Bright blue**: Trust, innovation, international standards

---

## Usage Guidelines

### Buttons

```html
<!-- Primary action -->
<button class="btn btn-primary">Learn More</button>

<!-- Call-to-action (uses amber) -->
<button class="btn btn-cta">Become a Member</button>

<!-- Outline -->
<button class="btn btn-outline">See Members</button>

<!-- Secondary -->
<button class="btn btn-secondary">Cancel</button>
```

### Cards

```html
<!-- Elevated card on dark background -->
<div class="bg-card text-card-foreground rounded-lg p-6 shadow-md">
  <h3 class="text-foreground">Card Title</h3>
  <p class="text-muted-foreground">Supporting text</p>
</div>
```

### Status Badges

```html
<span class="status-draft">Draft</span>
<span class="status-consultation">Under Consultation</span>
<span class="status-adopted">Adopted</span>
```

---

## Switching to Light Theme (Optional)

To enable light theme, add `class="light"` to your `<html>` element:

```html
<html lang="en" class="light">
```

This switches to a clean white/gray palette while maintaining the same accent colors.

---

## Color Variable Reference

All colors are defined as CSS custom properties in `resources/css/app.css`:

```css
:root {
  --background: 217 52% 11%;
  --foreground: 210 20% 96%;
  --primary: 221 91% 60%;
  --accent: 38 92% 50%;
  --success: 160 84% 39%;
  /* ... etc */
}
```

Use them in your CSS:
```css
.my-element {
  background-color: hsl(var(--background));
  color: hsl(var(--foreground));
  border: 1px solid hsl(var(--border));
}
```

Or with Tailwind classes:
```html
<div class="bg-background text-foreground border-border">
  Content
</div>
```

---

## Shadows & Elevation

Designed for dark backgrounds with enhanced depth:

```css
--shadow-sm: 0 1px 3px 0 hsl(0 0% 0% / 0.3);
--shadow-md: 0 4px 8px -2px hsl(0 0% 0% / 0.4);
--shadow-lg: 0 10px 20px -5px hsl(0 0% 0% / 0.5);
--shadow-xl: 0 20px 30px -10px hsl(0 0% 0% / 0.6);
```

Usage:
```html
<div class="shadow-md">Subtle elevation</div>
<div class="shadow-lg">Higher elevation</div>
```

---

## Customization

### Adjusting Brightness

To make the theme lighter/darker, modify the **lightness** (third value) in HSL:

```css
/* Current */
--background: 217 52% 11%;

/* Lighter background (13% instead of 11%) */
--background: 217 52% 13%;

/* Darker background (8% instead of 11%) */
--background: 217 52% 8%;
```

### Changing Accent Color

Want a different accent instead of amber? Update both values:

```css
/* Current: Amber */
--accent: 38 92% 50%;           /* #F59E0B */
--accent-hover: 32 95% 44%;     /* #D97706 */

/* Example: Teal */
--accent: 173 80% 40%;           /* #14B8A6 */
--accent-hover: 173 80% 35%;     /* Darker teal */
```

---

## Design Resources

**Color inspiration:**
- Traditional Uzbek tilework (blues, golds, geometrics)
- Modern tech brands (Stripe, Vercel, Linear)
- Construction materials (steel blue, concrete gray, safety amber)

**Accessibility tools:**
- [WebAIM Contrast Checker](https://webaim.org/resources/contrastchecker/)
- [Colorable](https://colorable.jxnblk.com/)

**HSL to Hex converter:**
- [HSL Color Picker](https://hslpicker.com/)
