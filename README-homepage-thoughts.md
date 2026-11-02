# kelsee.me — homepage + Thoughts index

Incremental patch: merge index.php, thoughts/index.php, includes/header.php and assets/css/ into your current site root. Only the homepage and shared header are replaced. Existing article pages, shared head/footer, global styles and images remain unchanged.

Routes: / and /thoughts/. Shared Cognitive Dump / Articles navigation now points to /thoughts/. The playful existing label and hover behavior are preserved.

Prerequisite: install the previous history draft patch so /thoughts/the-history-i-left-out/ exists. It is intentionally linked here as Working draft. Its noindex remains in its own page; this index is indexable and a draft link is not private.

The _review directory contains standalone offline HTML previews with embedded styles and logo. You can review those locally; uploading that directory is unnecessary. Fonts fall back to local sans-serif if Poppins is unavailable.

Checks completed: HTML IDs and fragment links, article destinations against provided patches, local stylesheet dependencies, and patch contents. PHP and browser rendering were unavailable in this environment. Run PHP syntax checks and inspect desktop/mobile on your host before sharing.

The new stylesheet filenames avoid replacing existing article styles. No hosting configuration, sitemap, article text, or draft robots metadata changed.
