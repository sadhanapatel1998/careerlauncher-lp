<?php
$pageTitle = 'Gallery | Career Launcher Vikaspuri';
$pageDesc  = 'Photo gallery of Career Launcher Vikaspuri – classrooms, faculty and students.';
$pageHeading = 'Gallery';
$pageLead = 'A look at our classrooms, faculty and students. Click any photo to enlarge.';
$team = require 'include/team.php';

/* ---- Add / edit gallery photos here: [image path, caption, category] ---- */
$photos = [
    ['image/about-img.jpg', 'Classroom learning', 'Campus'],
    ['image/about.webp', 'Focused study sessions', 'Campus'],
    ['image/why-choose-us.jpg', 'Preparing together', 'Campus'],
    ['image/hero-bg.jpg', 'Career Launcher Vikaspuri', 'Campus'],
];
foreach ($team as $m) $photos[] = [$m['img'], $m['name'], 'Faculty'];
foreach (['aaditye' => 'Aaditye', 'deepanshi' => 'Deepanshi', 'omisha' => 'Omisha', 'yash' => 'Yash'] as $f => $n)
$cats = array_values(array_unique(array_column($photos, 2)));

$extraHead = '<link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />';
$extraScripts = <<<'JS'
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script>
(function ($) {
  var $grid = $('.gal-grid');
  function init() {
    $grid.magnificPopup('destroy');
    $grid.magnificPopup({
      delegate: 'a.gal-item:not(.is-hidden)',
      type: 'image', mainClass: 'mfp-fade', removalDelay: 300, closeOnContentClick: false,
      gallery: { enabled: true, navigateByImgClick: true, preload: [0, 1], tCounter: '%curr% of %total%' },
      image: { titleSrc: 'title' },
      zoom: { enabled: true, duration: 300, opener: function (el) { return el.find('img'); } }
    });
  }
  init();
  document.addEventListener('filterchange', init);
})(jQuery);
</script>
JS;
ob_start();
include 'include/page-banner.php';
?>

<section class="section">
    <div class="container">
        <div class="filter-bar">
            <button class="on" data-filter="all">All</button>
            <?php foreach ($cats as $c): ?><button data-filter="<?= $c ?>"><?= $c ?></button><?php endforeach; ?>
        </div>
        <div class="gal-grid">
            <?php foreach ($photos as [$src, $cap, $cat]): ?>
                <a class="gal-item" href="<?= $src ?>" title="<?= htmlspecialchars($cap) ?> – <?= $cat ?>" data-cat="<?= $cat ?>">
                    <img src="<?= $src ?>" alt="<?= htmlspecialchars($cap) ?>" loading="lazy" />
                    <span class="cap"><span><?= htmlspecialchars($cap) ?><small><?= $cat ?></small></span><span class="zoom"><i class="bi bi-zoom-in"></i></span></span>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-band py-4">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
        <h2 class="m-0 text-white fs-3">Want to see the centre in person?</h2>
        <a href="contact.php" class="btn btn-glass btn-lg">Plan a Visit</a>
    </div>
</section>
<?php
$content = ob_get_clean();
require 'layout.php';

