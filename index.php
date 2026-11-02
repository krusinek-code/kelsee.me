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
<main id="main" tabindex="-1"><section class="hero" id="top"><div class="eyebrow">Artist · Technologist · Curious human</div><h1>What if we <em>thought</em> differently?</h1><p>Art, technology, human behavior, and the architecture of decisions. A collection of thoughts and creative experiments by Kelsee Rusinek.</p></section><section class="features" aria-labelledby="featured"><div class="features-head"><h2 id="featured">Latest experiments</h2><a class="all-link" href="/thoughts/">All experiments →</a></div><div class="article-grid"><?php foreach (array_slice(kelsee_articles(), 0, 2) as $article) { echo kelsee_article_card($article, 'h3'); } ?></div></section></main>
<?php require __DIR__ . '/includes/footer.php'; ?>
