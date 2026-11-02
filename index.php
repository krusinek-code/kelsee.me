<?php
$pageTitle = 'Kelsee Rusinek — Art, Technology & Thought';
$pageDescription = 'Kelsee Rusinek — artist, technologist, and curious human. Essays and creative experiments.';
$pageStylesheet = 'home.css';
$activeNav = 'home';
$headerMode = 'peek'; // Homepage alone gets the animated portrait entrance.
require __DIR__ . '/includes/articles.php';
require __DIR__ . '/includes/head.php';
require __DIR__ . '/includes/header.php';
?>
<main id="main" tabindex="-1"><section class="hero" id="top"><div class="eyebrow">Artist · Technologist · Curious human</div><h1>What if we <em>thought</em> differently?</h1><p>Art, technology, human behavior, and the architecture of decisions. A collection of thoughts and creative experiments by Kelsee Rusinek.</p></section><section class="features" aria-labelledby="featured"><div class="features-head"><h2 id="featured">Latest experiment</h2><a class="all-link" href="/thoughts/">All experiments →</a></div><?php $latest = kelsee_articles()[0] ?? null; if ($latest) { echo '<div class="article-feature">' . kelsee_article_card($latest, 'h3') . '</div>'; } ?></section></main>
<?php require __DIR__ . '/includes/footer.php'; ?>
