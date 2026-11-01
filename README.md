# kelsee.me — PHP includes + Poppins (v6)

Static-file publishing with PHP includes; **no CMS, database, or content-generation backend**.

## Pages
- `/index.php` — homepage
- `/thoughts/vote-every-day/index.php` — immersive editorial page
- `/includes/head.php`, `/includes/header.php`, `/includes/footer.php` — shared components
- `/assets/css/global.css` — Poppins and shared visual identity
- `/assets/css/home.css` and `/assets/css/editorial/vote-every-day.css` — page-specific art direction
- `/assets/js/site.js` — header portrait docks on scroll
- `/assets/js/editorial-vote.js` — original editorial scroll effects
- `/assets/images/kelsee-emblem.png` — illustration from your uploaded logo

## Publishing
Upload the **contents** of this directory to your PHP-enabled web root. `index.php` files are served by standard PHP hosting. Preserve the folder structure. The site assumes deployment at the root of `kelsee.me` because asset and navigation URLs begin with `/`.

The existing résumé is **not included or overwritten**. Back up your current root résumé before deploying. Move it to `/resume/` separately, or update the link when ready. For a local test, run `php -S localhost:8000 -t .` from this directory and visit `http://localhost:8000/`.

Google Fonts serves Poppins when connected; the site falls back to local sans-serif fonts if unavailable. To eliminate this dependency later, self-host a licensed webfont with CSS `@font-face` (do not redistribute font files in this package).

## QA
Verify on desktop/mobile, including Safari, keyboard focus, reduced-motion, logo loading, and the editorial reveal animations. Shared header and footer now come from one source. The full editorial copy and the previously approved non-animated gradient background are preserved.
