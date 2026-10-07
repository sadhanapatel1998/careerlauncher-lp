<?php
/* Usage: set $pageHeading, $pageLead, (optional) $pageIcon before including.
   Breadcrumb is Home > $pageHeading. */
$crumbs = $crumbs ?? [['Home', 'index.php'], [$pageHeading, null]];
?>
<section class="page-banner">
    <div class="container position-relative">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb crumbs">
                <?php foreach ($crumbs as $i => [$label, $url]): ?>
                    <?php if ($url): ?>
                        <li class="breadcrumb-item"><a href="<?= $url ?>"><?php if ($i === 0): ?><i class="bi bi-house-door-fill me-1"></i><?php endif; ?><?= htmlspecialchars($label) ?></a></li>
                    <?php else: ?>
                        <li class="breadcrumb-item active" aria-current="page"><?= htmlspecialchars($label) ?></li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ol>
        </nav>
        <h1><?= htmlspecialchars($pageHeading) ?></h1>
        <p class="banner-lead"><?= htmlspecialchars($pageLead ?? '') ?></p>
    </div>
    <script type="application/ld+json">
    <?= json_encode(['@context' => 'https://schema.org', '@type' => 'BreadcrumbList', 'itemListElement' => array_map(fn($c, $i) => ['@type' => 'ListItem', 'position' => $i + 1, 'name' => $c[0]] + ($c[1] ? ['item' => $c[1]] : []), $crumbs, array_keys($crumbs))], JSON_UNESCAPED_SLASHES) ?>
    </script>
</section>
