<?php
$pageTitle = 'Courses | Career Launcher Vikaspuri';
$pageDesc  = 'Law, CUET-UG, CUET-PG, Hotel Management, NIFT and IP-CET coaching with Crash, 1-year and 2-year formats at Career Launcher Vikaspuri.';
$pageHeading = 'Courses';
$pageLead = 'Focused programs built around the exam pattern, syllabus and goal that matter to you.';

$paths = [
 ['c-law', 'bank', 'Law Entrances', 'Comprehensive preparation for India\'s leading law and undergraduate entrance examinations.', ['CLAT', 'AILET', 'DU-LLB', 'IP-CET', 'SYMBIOSIS', 'CHRIST'],
   ['Legal reasoning and logical reasoning practice', 'English and reading comprehension training', 'Current affairs and GK with weekly revision', 'Full-length mocks with analysis'], 'Class 12 students and droppers aiming for law colleges.'],
 ['c-uni', 'building', 'Central Universities', 'A strong foundation for competitive university admissions and specialised entrances.', ['CUET-UG', 'CUET-PG', 'HOTEL MANAGEMENT', 'NIFT ENTRANCE'],
   ['Subject and domain classes aligned to the exam', 'NCERT-based concept building', 'Computer-based test practice', 'Counselling on universities and courses'], 'Class 12 students, graduates and creative aspirants.'],
 ['c-ipu', 'signpost-split-fill', 'IP-CET & Other Entrances', 'Focused preparation for IP-CET and other competitive entrance pathways.', ['IP-CET', 'IPMAT', 'OTHER ENTRANCES'],
   ['Programme-wise syllabus coverage', 'Aptitude, English and reasoning practice', 'Sectional and full mock tests', 'Guidance on applications and next steps'], 'Students targeting GGSIPU, management and other entrances.'],
];
ob_start();
include 'include/page-banner.php';
?>

<section class="section">
    <div class="container">
        <div class="sec-head"><h2>Choose Your Path. Prepare With Purpose.</h2><p>Three course families, one approach: expert teaching, steady practice and personal support.</p></div>
        <div class="d-grid gap-4">
            <?php foreach ($paths as [$cls, $ic, $t, $d, $badges, $incl, $who]): ?>
                <article class="cblock"><div class="row g-0">
                    <div class="col-lg-4"><div class="cblock-side <?= $cls ?>">
                        <i class="bi bi-<?= $ic ?> big"></i><h2><?= $t ?></h2><p><?= $d ?></p>
                        <div class="badges"><?php foreach ($badges as $b): ?><span><?= $b ?></span><?php endforeach; ?></div>
                    </div></div>
                    <div class="col-lg-8"><div class="cblock-main">
                        <h5>What you get</h5>
                        <ul class="ticks"><?php foreach ($incl as $i): ?><li><i class="bi bi-check-circle-fill"></i><span><?= $i ?></span></li><?php endforeach; ?></ul>
                        <h5>Who should join</h5><p class="text-muted"><?= $who ?></p>
                        <div class="d-flex flex-wrap gap-2">
                            <a href="exams.php" class="btn btn-accent">See exam details</a>
                            <a href="contact.php#enquiry" class="btn btn-outline-secondary">Enquire now</a>
                        </div>
                    </div></div>
                </div></article>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section" id="tuitions">
    <div class="container">
        <div class="sec-head"><h2>11th &amp; 12th Tuitions</h2><p>Board-exam coaching with a foundation for entrance exams.</p></div>
        <div class="row g-4">
            <?php foreach ([['11th', 'Class 11', 'Build strong concepts early and settle into a steady study routine.', ['Chapter-wise concept classes', 'Weekly practice and unit tests', 'Foundation for CUET and other entrances']], ['12th', 'Class 12', 'Score well in boards while preparing for CUET, CLAT and other entrances.', ['Board-pattern notes and revision', 'Mock tests with analysis', 'Parallel entrance exam guidance']]] as [$n, $t, $d, $pts]): ?>
                <div class="col-lg-6">
                    <article class="tcard tcard-lg">
                        <div class="tnum"><?= $n ?></div>
                        <div>
                            <h3><?= $t ?> Tuition</h3><p><?= $d ?></p>
                            <ul class="ticks mb-3"><?php foreach ($pts as $p): ?><li><i class="bi bi-check-circle-fill"></i><span><?= $p ?></span></li><?php endforeach; ?></ul>
                            <div class="badges mb-3"><span>SCIENCE</span><span>COMMERCE</span><span>HUMANITIES</span></div>
                            <a href="contact.php#enquiry" class="btn btn-accent">Enquire now</a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section section-tint">
    <div class="container">
        <div class="sec-head"><h2>Pick A Format That Fits</h2><p>Fees and batch dates are shared during counselling.</p></div>
        <div class="row g-4">
            <?php foreach ([
                ['lightning-charge-fill', 'Crash Course', 'Intensive revision for students close to the exam date.'],
                ['calendar-check-fill', '1-Year Program', 'Full syllabus coverage with steady practice and tests.'],
                ['calendar2-range-fill', '2-Year Program', 'An early start for strong concepts and relaxed pacing.'],
                ['book-half', '11th & 12th Tuitions', 'Board exam support with entrance exam foundation.'],
            ] as [$ic, $t, $d]): ?>
                <div class="col-sm-6 col-lg-3"><div class="fmt"><i class="bi bi-<?= $ic ?>"></i><h5><?= $t ?></h5><p><?= $d ?></p></div></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="sec-head"><h2>Included In Every Course</h2></div>
        <div class="row g-4">
            <?php foreach ([
                ['person-badge-fill', 'Expert & experienced faculty', 'Mentors who know each exam inside out.'],
                ['journal-bookmark-fill', 'Exam-focused study material', 'Notes and practice sets aligned to the latest pattern.'],
                ['calendar2-check-fill', 'Structured learning plan', 'A weekly roadmap from syllabus to revision.'],
                ['graph-up-arrow', 'Tests & performance analysis', 'Find weak areas early and fix them with data.'],
                ['chat-dots-fill', 'Mentorship & doubt support', 'One-to-one help whenever you get stuck.'],
                ['globe-americas', 'Beyond coaching', 'Online degree programs and study abroad guidance.'],
            ] as [$ic, $t, $d]): ?>
                <div class="col-md-6 col-lg-4"><div class="val"><i class="bi bi-<?= $ic ?>"></i><h5><?= $t ?></h5><p><?= $d ?></p></div></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-band py-4">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
        <h2 class="m-0 text-white fs-3">Find the right course for your goal</h2>
        <a href="contact.php#enquiry" class="btn btn-glass btn-lg">Book a Free Counselling</a>
    </div>
</section>
<?php
$content = ob_get_clean();
require 'layout.php';
