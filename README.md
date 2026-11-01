# kelsee.me — PHP shared layout v7

This package fixes the stale editorial header issue. Both pages call the **same** `/includes/header.php` and `/includes/footer.php` and use the same Poppins wordmark, portrait and navigation.

## Clean URLs — no `.php` in the browser address

- Homepage: `https://kelsee.me/` (served from `/index.php`)
- Editorial: `https://kelsee.me/thoughts/vote-every-day/` (served from `/thoughts/vote-every-day/index.php`)
- Résumé link: `https://kelsee.me/resume/` (your existing résumé must be moved separately)

The `.htaccess` file tells Apache to prefer `index.php` over `index.html`. This is a PHP site with file-based editorial content, no CMS or database, not a headless setup. You can continue using one bespoke PHP page per article.

## IMPORTANT: remove outdated HTML files

If you uploaded earlier HTML prototypes, **remove or rename** the old `/index.html` and `/thoughts/vote-every-day/index.html` on the server after backing them up. Otherwise old links, cached pages, or server directory-index preferences may still show the old version.

Upload **all files including `.htaccess`** to your site root; preserve the folder structure. Do not overwrite your résumé until it has been backed up. If the hosting configuration disallows `Options -MultiViews`, remove only that line from `.htaccess` and retain `DirectoryIndex index.php index.html`.

All shared CSS, scripts, and emblem URLs include a `?v=7` version query to encourage fresh loading after deployment. Hard-refresh if your browser still shows an older version.

## Testing

Run `php -S localhost:8000 -t .` from this folder, then open:
- `http://localhost:8000/`
- `http://localhost:8000/thoughts/vote-every-day/`

Note: PHP's built-in server ignores `.htaccess`, but serves directory `index.php` files. Test the Apache `.htaccess` behavior on the actual host.

## Structure

- `/index.php` — homepage with clean editorial link
- `/thoughts/vote-every-day/index.php` — editorial page
- `/includes/head.php` — metadata and shared CSS
- `/includes/header.php` — fixed Poppins header and portrait
- `/includes/footer.php` — footer and shared JS
- `/assets/css/global.css` — shared styling
- `/assets/css/home.css` — homepage-specific styling
- `/assets/css/editorial/vote-every-day.css` — editorial-specific styling

No new animations or changes to the approved editorial layout in this revision.
