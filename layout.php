<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?= htmlspecialchars($pageTitle ?? 'CUET Coaching in Bahadurgarh | Crash Course, CLAT & IPMAT') ?></title>
    <meta name="description"
        content="<?= htmlspecialchars($pageDesc ?? 'Join Career Launcher Vikaspuri Bahadurgarh for CUET Crash Course starting March 2026, CUET 1yr/2yr, IPMAT & CLAT coaching. Affordable fees. 99 percentile results. Enroll now!') ?>" />
    <meta name="keywords"
        content="CUET Crash Course Bahadurgarh, CUET Coaching Bahadurgarh, CUET 2026 Bahadurgarh, CUET 1 year course Bahadurgarh, CUET 2 year course Bahadurgarh, IPMAT Coaching Bahadurgarh, CLAT Coaching Bahadurgarh, Career Launcher Vikaspuri Bahadurgarh, affordable CUET coaching Haryana, Tuitions 10th, Tuitions 12th, Tuitions 11th" />
    <!-- URL of the page -->
    <link rel="icon" href="./image/favicon.png" type="image/x-icon" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Sora:wght@600;700;800&display=swap"
        rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <link href="pages.css" rel="stylesheet" />
    <?= $extraHead ?? '' ?>
</head>

<body>
    
    <?php require_once("include/header.php"); ?>

    <main>
        <?= $content ?? ''; ?>
    </main>

    <?php require_once('include/footer.php') ?>

    <!-- 16. MOBILE FLOATING CTA -->
    <div class="mobile-cta d-md-none">
        <a href="tel:9717238908"><i class="bi bi-telephone-fill"></i> Call Now</a>
        <a href="https://wa.me/919717238908" target="_blank" rel="noopener" class="wa"><i class="bi bi-whatsapp"></i>
            WhatsApp</a>
        <a href="<?= $enquiryHref ?? (basename($_SERVER['SCRIPT_NAME']) === 'index.php' ? '#enquiry' : 'contact.php#enquiry') ?>" class="enq"><i class="bi bi-pencil-square"></i> Enquire Now</a>
    </div>

    <button id="toTop" aria-label="Back to top">
        <i class="bi bi-arrow-up"></i>
    </button>

    <!-- Success modal -->
    <div class="modal fade" id="okModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content text-center p-4">
                <i class="bi bi-check-circle-fill ok-icon"></i>
                <h4 class="mt-2">Enquiry Received</h4>
                <p class="mb-3">
                    Thank you! Our counsellor will contact you shortly. (Frontend demo
                    only.)
                </p>
                <button class="btn btn-accent" data-bs-dismiss="modal">Done</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script src="script.js"></script>
    <script src="pages.js"></script>
    <?= $extraScripts ?? '' ?>
</body>

</html>