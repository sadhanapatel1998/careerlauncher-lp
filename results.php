<?php
$pageTitle = 'Results | Career Launcher Vikaspuri';
$pageDesc  = 'Results and achievements of Career Launcher Vikaspuri students in CLAT, CUET, AILET and other entrance exams.';
$pageHeading = 'Results';
$pageLead = 'Proud moments from our students. Click any result to enlarge.';

/* Drop result images (jpg, png, webp) into the image/results/ folder.
   They appear here automatically, newest first. File name becomes the caption,
   e.g. "rahul-sharma-clat-2026.jpg" -> "Rahul Sharma Clat 2026". */
$files = glob(__DIR__ . '/image/results/*.{jpg,jpeg,png,webp,JPG,JPEG,PNG,WEBP}', GLOB_BRACE) ?: [];
usort($files, fn($a, $b) => filemtime($b) <=> filemtime($a));
$results = array_map(fn($f) => ['image/results/' . basename($f), ucwords(trim(preg_replace('/[-_]+/', ' ', pathinfo($f, PATHINFO_FILENAME))))], $files);

$extraHead = '<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />';
$extraScripts = <<<'JS'
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>
jQuery('.res-grid').magnificPopup({
  delegate: 'a.res-item', type: 'image', mainClass: 'mfp-fade', removalDelay: 300,
  gallery: { enabled: true, navigateByImgClick: true, preload: [0, 1], tCounter: '%curr% of %total%' },
  image: { titleSrc: 'title' },
  zoom: { enabled: true, duration: 300, opener: function (el) { return el.find('img'); } }
});
</script>
JS;
ob_start();
include 'include/page-banner.php';
?>

<section class="section">
    <div class="container">
        <?php if ($results): ?>
            <div class="sec-head"><h2>Our Students' Success</h2><p>Real results from real students of Career Launcher Vikaspuri.</p></div>
            <div class="res-grid">
                <?php foreach ($results as [$src, $cap]): ?>
                    <a class="res-item" href="<?= $src ?>" title="<?= htmlspecialchars($cap) ?>">
                        <img src="<?= $src ?>" alt="<?= htmlspecialchars($cap) ?>" loading="lazy" />
                        <span class="zoom"><i class="bi bi-zoom-in"></i></span>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <div class="res-empty">
                <i class="bi bi-trophy-fill"></i>
                <h3 class="mt-3">Results coming soon</h3>
                <p class="mb-0">Add result images to the <code>image/results/</code> folder and they will show here automatically.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<section class="cta-band py-4">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
        <h2 class="m-0 text-white fs-3">Want your name on this wall?</h2>
        <a href="contact.php#enquiry" class="btn btn-glass btn-lg">Book a Free Counselling</a>
    </div>
</section>
<?php
$content = ob_get_clean();
require 'layout.php';
