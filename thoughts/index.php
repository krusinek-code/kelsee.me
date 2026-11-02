<?php
$pageTitle = 'Thought Experiments — Articles by Kelsee Rusinek';
$pageDescription = 'Essays, editorial experiments, and personal archives by Kelsee Rusinek.';
$pageStylesheet = 'thoughts.css';
$activeNav = 'thoughts';
$headerMode = 'compact';
require __DIR__ . '/../includes/articles.php';
require __DIR__ . '/../includes/head.php';
require __DIR__ . '/../includes/header.php';
$articles = kelsee_articles();
?>
<main id="main" tabindex="-1">
<section class="thoughts-hero" id="top" aria-labelledby="thoughts-title"><div class="eyebrow">Articles · Essays · Archives</div><h1 id="thoughts-title">Thought <em>experiments.</em></h1><p>Essays and editorial experiments on art, technology, and the architecture of decisions. Some are finished. Some are still being written.</p></section>
<section class="thoughts-list" aria-label="All articles"><?php if ($articles): ?><div class="article-grid"><?php foreach ($articles as $article) { echo kelsee_article_card($article, 'h2'); } ?></div><?php else: ?><p class="thoughts-empty">Nothing here yet. More to make.</p><?php endif; ?></section>
</main>
<?php require __DIR__ . '/../includes/footer.php'; ?>
