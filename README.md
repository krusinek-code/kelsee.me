# kelsee.me — v10: accessibility + résumé new tab

This package builds on v9. Homepage header portrait peeks and animates on scroll; article header portrait is compact and static. Both pages use the same PHP includes.

## Changes
- Résumé link opens `/resume/` in a new tab with `target="_blank" rel="noopener"` and an accessible new-tab announcement. `noopener` prevents the new tab from controlling the original window.
- Keyboard skip links for **main content** and **navigation**, visible on focus.
- Focus indicators for interactive elements; main landmarks can receive skip-link focus.
- Screen-reader-only utility class.
- Article reveal text remains visible when JavaScript is unavailable; reduced-motion preferences remain supported.
- Asset cache versions bumped to v10.

## Deploy
Upload all files (including `.htaccess`) preserving folders. Remove stale `index.html` from the site root and article directory after backing them up. Keep your existing résumé separately: this archive does not include it.

Public URLs stay clean: `/`, `/thoughts/vote-every-day/`, `/resume/`.

## SVG
The current illustrated emblem is still the original PNG, not an SVG. When the larger original is provided, we can evaluate vector tracing/redrawing separately; simply embedding a raster image in SVG would not make it a true vector.
