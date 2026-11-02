<?php
/*
 * Article registry — the homepage and /thoughts/ both read from here.
 *
 * To add an article: create /thoughts/<slug>/index.php and a meta.json beside it.
 * Nothing else needs editing. The listings pick it up on the next page load.
 *
 * meta.json fields:
 *   number  "003"                 sort order, newest (highest) first
 *   kind    "Thought experiment"  small label above the title
 *   theme   "Autonomy"            shown after the number
 *   title   "You Vote Every Day." card heading
 *   dek     one or two sentences  card description
 *   cta     "Read"                link text (optional)
 *   status  "published" | "draft" | "hidden"
 *           draft  → listed with a Working draft label
 *           hidden → never listed (the page still works by direct link)
 */

function kelsee_articles(): array
{
    static $articles = null;
    if ($articles !== null) {
        return $articles;
    }

    $articles = [];
    foreach (glob(__DIR__ . '/../thoughts/*/meta.json') ?: [] as $file) {
        $meta = json_decode((string) file_get_contents($file), true);
        if (!is_array($meta) || empty($meta['title'])) {
            continue; // A broken meta.json skips one card instead of breaking the page.
        }
        $status = $meta['status'] ?? 'published';
        if ($status === 'hidden') {
            continue;
        }
        $slug = basename(dirname($file));
        $articles[] = [
            'url'    => '/thoughts/' . rawurlencode($slug) . '/',
            'number' => (string) ($meta['number'] ?? ''),
            'kind'   => (string) ($meta['kind'] ?? 'Thought experiment'),
            'theme'  => (string) ($meta['theme'] ?? ''),
            'title'  => (string) $meta['title'],
            'dek'    => (string) ($meta['dek'] ?? ''),
            'cta'    => (string) ($meta['cta'] ?? 'Read'),
            'draft'  => $status === 'draft',
        ];
    }

    usort($articles, fn ($a, $b) => strnatcmp($b['number'], $a['number']));
    return $articles;
}

function kelsee_e(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

/* One card. $headingLevel keeps the outline correct on each page. */
function kelsee_article_card(array $a, string $headingLevel = 'h3'): string
{
    $meta = trim($a['kind'] . ' ' . $a['number'] . ($a['theme'] !== '' ? ' / ' . $a['theme'] : ''));
    $draft = $a['draft'] ? '<span class="card-draft">Working draft</span>' : '';
    return '<article class="article-card' . ($a['draft'] ? ' is-draft' : '') . '">'
        . '<div class="card-meta"><span>' . kelsee_e($meta) . '</span>' . $draft . '</div>'
        . "<$headingLevel class=\"card-title\"><a href=\"" . kelsee_e($a['url']) . '">' . kelsee_e($a['title']) . "</a></$headingLevel>"
        . ($a['dek'] !== '' ? '<p class="card-dek">' . kelsee_e($a['dek']) . '</p>' : '')
        . '<span class="card-cta" aria-hidden="true">' . kelsee_e($a['cta']) . ' →</span>'
        . '</article>';
}
