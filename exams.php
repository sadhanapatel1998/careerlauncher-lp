<?php
$pageTitle = 'Entrance Exams We Prepare For | Career Launcher Vikaspuri';
$pageDesc  = 'CLAT, AILET, CUET-UG, CUET-PG, NIFT, IP-CET, Symbiosis, Christ and more – exam details, topics and preparation tips at Career Launcher Vikaspuri.';
$pageHeading = 'Exams';
$pageLead = 'Pick your exam to see who it is for, what it tests and how to prepare.';

$exams = [
 ['name'=>'CLAT','full'=>'Common Law Admission Test','cat'=>'Law','ic'=>'hammer','by'=>'Consortium of National Law Universities','who'=>'Class 12 students aiming for 5-year integrated law programmes at NLUs and other participating colleges.','pattern'=>'120 MCQs, 2 hours, +1 mark per correct answer and 0.25 negative marking.','topics'=>['English Language','Current Affairs & GK','Legal Reasoning','Logical Reasoning','Quantitative Techniques'],'tips'=>['Read a newspaper daily and note current affairs.','Practise long passage-based questions under time.','Take full-length mocks and review every mistake.']],
 ['name'=>'AILET','full'=>'All India Law Entrance Test','cat'=>'Law','ic'=>'bank2','by'=>'National Law University, Delhi','who'=>'Students seeking admission to the 5-year BA LLB programme at NLU Delhi.','pattern'=>'150 MCQs, 90 minutes, 0.25 negative marking.','topics'=>['English','General Knowledge','Legal Aptitude','Reasoning','Elementary Maths'],'tips'=>['Build speed: the paper is short and fast.','Strengthen GK with weekly revision.','Practise legal aptitude with principle-fact questions.']],
 ['name'=>'DU-LLB','full'=>'Delhi University Law Entrance','cat'=>'Law','ic'=>'building','by'=>'University of Delhi, Faculty of Law','who'=>'Aspirants of law programmes at the Faculty of Law, University of Delhi.','pattern'=>'Admission route and pattern change by year; check the latest DU bulletin.','topics'=>['English','Legal Reasoning','Logical Reasoning','General Awareness'],'tips'=>['Confirm the current admission route early.','Practise reasoning and legal aptitude daily.','Revise current affairs every week.']],
 ['name'=>'CUET-UG','full'=>'Common University Entrance Test (UG)','cat'=>'University','ic'=>'mortarboard','by'=>'National Testing Agency (NTA)','who'=>'Class 12 students seeking undergraduate admission to central and participating universities.','pattern'=>'Computer-based test with language, domain subject and general test sections.','topics'=>['Language','Domain subjects','General Test','NCERT-based concepts'],'tips'=>['Master NCERT before moving to practice sets.','Choose subjects as per your target course and university.','Practise on a computer to build comfort and speed.']],
 ['name'=>'CUET-PG','full'=>'Common University Entrance Test (PG)','cat'=>'University','ic'=>'award','by'=>'National Testing Agency (NTA)','who'=>'Graduates seeking postgraduate admission to central and participating universities.','pattern'=>'Computer-based, subject-specific papers as per the chosen programme.','topics'=>['Subject syllabus','Graduation-level concepts','General awareness (where applicable)'],'tips'=>['Map the syllabus to your graduation notes.','Solve previous papers for your subject.','Revise in short cycles close to the exam.']],
 ['name'=>'IP-CET','full'=>'Indraprastha University Common Entrance Test','cat'=>'University','ic'=>'pencil-square','by'=>'Guru Gobind Singh Indraprastha University','who'=>'Students applying to programmes at GGSIPU and its affiliated colleges.','pattern'=>'Paper and subjects vary by programme; see the latest information bulletin.','topics'=>['English','Reasoning','General Knowledge','Maths / subject topics as per programme'],'tips'=>['Check the syllabus for your specific programme.','Work on accuracy before speed.','Attempt sectional tests every week.']],
 ['name'=>'Hotel Management','full'=>'Hotel Management Entrance','cat'=>'University','ic'=>'cup-hot','by'=>'As per the chosen institute or national test','who'=>'Students planning careers in hospitality, hotel administration and catering.','pattern'=>'Aptitude-style paper; details differ by exam and year.','topics'=>['Numerical Ability','Reasoning','English','General Knowledge','Service Sector Aptitude'],'tips'=>['Improve English and reasoning together.','Practise quick maths without a calculator.','Stay updated on the hospitality industry.']],
 ['name'=>'NIFT','full'=>'National Institute of Fashion Technology Entrance','cat'=>'Design','ic'=>'scissors','by'=>'National Institute of Fashion Technology','who'=>'Creative students aiming for design and fashion technology programmes.','pattern'=>'General Ability Test, plus Creative Ability and Situation Tests for design programmes.','topics'=>['Quantitative Ability','Communication Ability','English Comprehension','Analytical Ability','Creative thinking'],'tips'=>['Sketch and observe daily to build creativity.','Practise the General Ability Test regularly.','Think in stories for the situation test.']],
 ['name'=>'SYMBIOSIS','full'=>'Symbiosis Entrance','cat'=>'Law','ic'=>'journal-richtext','by'=>'Symbiosis International University','who'=>'Aspirants of Symbiosis law and related undergraduate programmes.','pattern'=>'Pattern differs by programme; confirm with the latest notification.','topics'=>['Logical Reasoning','Legal Reasoning','Analytical Reasoning','Reading Comprehension','General Knowledge'],'tips'=>['Focus on reading speed and comprehension.','Practise reasoning sets daily.','Attempt mocks in the real time limit.']],
 ['name'=>'CHRIST','full'=>'Christ University Entrance','cat'=>'Law','ic'=>'book','by'=>'Christ (Deemed to be University)','who'=>'Students applying to Christ University programmes through its entrance route.','pattern'=>'Pattern varies by programme; confirm with the latest notification.','topics'=>['English','Logical Reasoning','General Knowledge','Aptitude for the chosen programme'],'tips'=>['Read widely to sharpen language skills.','Practise aptitude and reasoning together.','Prepare for the interview or later rounds if applicable.']],
];
$cats = array_values(array_unique(array_column($exams, 'cat')));
ob_start();
include 'include/page-banner.php';
?>

<section class="section">
    <div class="container">
        <div class="sec-head"><h2>Prepare For The Exam That Shapes Your Future</h2>
            <p>Every program is built around the exam's pattern and syllabus. Open an exam to see the details.</p></div>
        <div class="filter-bar">
            <button class="on" data-filter="all">All Exams</button>
            <?php foreach ($cats as $c): ?><button data-filter="<?= $c ?>"><?= $c ?></button><?php endforeach; ?>
        </div>
        <div class="row g-4">
            <?php foreach ($exams as $i => $x): ?>
                <div class="col-md-6 col-lg-4 xcard-wrap" data-cat="<?= $x['cat'] ?>">
                    <article class="xcard">
                        <div class="top"><span class="ic"><i class="bi bi-<?= $x['ic'] ?>"></i></span><span class="tag"><?= $x['cat'] ?></span></div>
                        <h3><?= $x['name'] ?></h3>
                        <p class="full"><?= $x['full'] ?></p>
                        <p class="meta"><i class="bi bi-building"></i><?= $x['by'] ?></p>
                        <div class="btns">
                            <button class="btn btn-accent btn-sm" data-exam="<?= $i ?>">View details</button>
                            <a href="contact.php#enquiry" class="btn btn-outline-secondary btn-sm">Enquire</a>
                        </div>
                    </article>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- EXTRA INFO -->
<section class="section section-tint">
    <div class="container">
        <div class="sec-head"><h2>How We Prepare You</h2><p>The same proven approach behind every exam program.</p></div>
        <div class="row g-4">
            <?php foreach ([
                ['journal-check', 'Syllabus mapping', 'We break the syllabus into a clear weekly plan.'],
                ['easel2-fill', 'Concept classes', 'Expert faculty teach concepts the way the exam tests them.'],
                ['clipboard-data-fill', 'Tests & analysis', 'Regular mocks with detailed performance reports.'],
                ['headset', 'Doubt support', 'One-to-one help so no topic stays unclear.'],
            ] as [$ic, $t, $d]): ?>
                <div class="col-sm-6 col-lg-3"><div class="tip"><i class="bi bi-<?= $ic ?>"></i><h5><?= $t ?></h5><p><?= $d ?></p></div></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section">
    <div class="container" style="max-width:860px">
        <div class="sec-head"><h2>Exam FAQs</h2></div>
        <div class="accordion" id="examFaq">
            <?php foreach ([
                ['Which exam should I choose?', 'It depends on your stream, interests and target college. A free counselling session helps you shortlist the right exams.'],
                ['Can I prepare for more than one exam together?', 'Yes. Many exams share topics such as reasoning, English and general awareness, so combined preparation is often possible.'],
                ['When should I start preparing?', 'Early is better. Crash, 1-year and 2-year formats are available so you can start at the stage that suits you.'],
                ['Where do I find the latest dates and eligibility?', 'Official notifications change every year. Our counsellors share the latest details and help with applications.'],
            ] as $k => [$q, $a]): ?>
                <div class="accordion-item">
                    <h3 class="accordion-header"><button class="accordion-button <?= $k ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#f<?= $k ?>"><?= $q ?></button></h3>
                    <div id="f<?= $k ?>" class="accordion-collapse collapse <?= $k ? '' : 'show' ?>" data-bs-parent="#examFaq"><div class="accordion-body"><?= $a ?></div></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-band py-4">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
        <h2 class="m-0 text-white fs-3">Not sure which exam is right for you?</h2>
        <a href="contact.php#enquiry" class="btn btn-glass btn-lg">Book a Free Counselling</a>
    </div>
</section>

<div class="modal fade xmodal" id="examModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="mh d-flex justify-content-between align-items-start">
                <div><h3></h3><p></p></div>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-4 mb"></div>
            <div class="modal-footer"><a href="contact.php#enquiry" class="btn btn-accent">Enquire about this exam</a></div>
        </div>
    </div>
</div>
<script type="application/json" id="examData"><?= json_encode($exams, JSON_HEX_TAG | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE) ?></script>
<?php
$content = ob_get_clean();
require 'layout.php';
