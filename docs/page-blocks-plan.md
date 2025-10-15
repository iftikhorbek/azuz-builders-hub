# Page Block Architecture

## Shared Blocks
- `blocks.shared.page-hero`: pattern header section with optional badge, breadcrumbs, description, stats grid, and CTA actions.
- `components.common.breadcrumb`: existing breadcrumb include reused by hero when breadcrumbs provided.

## Home Blocks
- `blocks.home.hero`: existing hero section (stats highlight, CTA stack).
- `blocks.home.what-we-do`: services grid.
- `blocks.home.updates`: news/cards list.
- `blocks.home.member-marquee`: member marquee.
- `blocks.home.impact`: metrics summary.

## About Blocks
- `blocks.about.mission-vision`: mission + vision copy with supporting image.
- `blocks.about.values`: four-card values grid.
- `blocks.about.governance`: governance structure cards.
- `blocks.about.timeline`: milestone timeline.

## Membership Blocks
- `blocks.membership.benefits`: benefit checklist grid.
- `blocks.membership.categories`: membership category cards.
- `blocks.membership.application`: application steps + CTA.

## Members Blocks
- `blocks.members.directory`: filter controls + member cards directory (Alpine powered).

## Policy Blocks
- `blocks.policy.workstreams`: policy workstream cards with progress bars.
- `blocks.policy.timeline`: policy tracker timeline (wraps existing component).

## Projects Blocks
- `blocks.projects.filters`: category filter chips.
- `blocks.projects.directory`: project case studies list (Alpine powered).

## Resources Blocks
- `blocks.resources.press`: press releases list with CTAs.
- `blocks.resources.documents`: document download cards.
- `blocks.resources.media`: media coverage cards.
- `blocks.resources.media-cta`: media inquiry CTA banner.

## Contact Blocks
- `blocks.contact.info`: contact cards grid.
- `blocks.contact.form`: interactive inquiry form (Alpine powered).
- `blocks.contact.map`: map placeholder panel.

Each page controller method will return `pageTitle` and an ordered `blocks` array, where every block entry contains `view` (Blade include path) and optional `data` payload. Page templates will loop over the block list via a dedicated `<x-page-block>` component that resolves the view and injects props.
