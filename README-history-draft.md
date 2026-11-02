# The History I Left Out — incremental draft

Copy the `thoughts/` and `assets/` directories into the existing kelsee.me root, preserving relative paths. This package contains only new files. It requires the existing `/includes/head.php`, `/includes/header.php`, `/includes/footer.php`, global CSS, logo, and site JS from the site's PHP layout.

Route after you commit and upload: `/thoughts/the-history-i-left-out/`.

The page is visibly marked Working draft and includes `noindex, nofollow`. This discourages indexing; it is NOT password protection. Anyone with the URL can read the uploaded draft. It is not added to navigation or any article listing by this patch. No deployment has been performed by this package.

Optional artifact prompts are intentional text cards, never broken images. A button hides/shows all four prompts during review. To permanently remove them, delete the four `<aside class="artifact">` blocks and optionally the toggle and article JS. No actual historical photos or documentation have been fabricated.

The current article wording is also in `thoughts/the-history-i-left-out/article.md`. Editing that Markdown does not automatically regenerate the PHP page: update the page as well. The article incorporates the latest accepted wording about estimated thousands of hours, lifelong music, experiences that counted, and the dry year or two.

To make it a final article, remove the `ob_start()` / `$head` transformation around the head include and use a direct `require` as in the other article, removing the draft robots meta. Also remove the draft tag/bar and update metadata as appropriate. Add a navigation/listing link only when ready.

Verification: generated HTML structure, unique IDs, section links, asset references, and JavaScript syntax checked. PHP executable and browser rendering were unavailable during packaging; run `php -l thoughts/the-history-i-left-out/index.php` and inspect on your PHP host. Review mobile appearance and verify the existing shared header/footer load before sharing.
