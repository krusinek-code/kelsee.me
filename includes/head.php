<?php
// Page variables are supplied by each page. All content is maintained in files.
$pageTitle = $pageTitle ?? 'Kelsee Rusinek — Art, Technology & Thought';
$pageDescription = $pageDescription ?? 'Art, technology, and creative experiments by Kelsee Rusinek.';
$pageStylesheet = $pageStylesheet ?? null;
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#1a1027">
  <meta name="description" content="<?= htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8') ?>">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/global.css?v=10">
  <?php if ($pageStylesheet): ?>
    <link rel="stylesheet" href="/assets/css/<?= htmlspecialchars($pageStylesheet, ENT_QUOTES, 'UTF-8') ?>?v=10">
  <?php endif; ?>
</head>
<body class="<?= ($headerMode ?? 'peek') === 'compact' ? 'header-compact header-static' : 'header-peek' ?>" data-header-mode="<?= ($headerMode ?? 'peek') === 'compact' ? 'compact' : 'peek' ?>">
