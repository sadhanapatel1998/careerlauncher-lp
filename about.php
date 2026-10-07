<?php
$pageTitle = 'About Us | Career Launcher Vikaspuri';
$pageDesc  = 'Know about Career Launcher Vikaspuri – nurturing youth since 1995 with expert-led entrance exam coaching. Our mission, vision and values.';
$pageHeading = 'About Us';
$pageLead = 'Nurturing young minds since 1995 with focused, expert-led entrance exam preparation.';
$team = require 'include/team.php';
ob_start();
include 'include/page-banner.php';
?>

<section class="section pb-0">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft order-2 order-lg-1">
                <div class="about-visual">
                    <div class="av-bg"></div>
                    <img src="./image/about-img.jpg" alt="Students preparing for entrance exams" class="about-main-img" />
                    <div class="ab-card ab1"><i class="bi bi-patch-check-fill"></i><div><b>IIT-IIM alumni</b><span>Led by experts</span></div></div>
                    <div class="ab-card ab2"><i class="bi bi-calendar-heart-fill"></i><div><b>Since 1995</b><span>Nurturing youth</span></div></div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInRight order-1 order-lg-2">
                <span class="pill">Who we are</span>
                <h2>A Trusted Name in Entrance Exam Coaching</h2>
                <p class="lead-copy">Career Launcher Vikaspuri is part of CL Educate Ltd, an education company that supports learners from school students to college aspirants.</p>
                <p>Our team is led by highly qualified professionals, including IIT and IIM alumni, who care deeply about quality education. For over 29 years we have helped students prepare for entrance exams and plan their careers with confidence.</p>
                <div class="about-points">
                    <div class="ap"><span class="ic"><i class="bi bi-mortarboard-fill"></i></span>Entrance exam coaching</div>
                    <div class="ap"><span class="ic"><i class="bi bi-book-half"></i></span>School tuitions &amp; boards</div>
                    <div class="ap"><span class="ic"><i class="bi bi-laptop"></i></span>Online degree programs</div>
                    <div class="ap"><span class="ic"><i class="bi bi-globe-americas"></i></span>Study abroad guidance</div>
                </div>
            </div>
        </div>
        <div class="stat-strip mt-5">
            <div class="row text-center g-3">
                <div class="col-6 col-md-3"><b>1995</b><span>Year we began</span></div>
                <div class="col-6 col-md-3"><b>29+</b><span>Years of experience</span></div>
                <div class="col-6 col-md-3"><b>10+</b><span>Entrance exams covered</span></div>
                <div class="col-6 col-md-3"><b>IIT-IIM</b><span>Alumni-led team</span></div>
            </div>
        </div>
    </div>
</section>

<!-- MISSION & VISION -->
<section class="section" id="mission-vision">
    <div class="container">
        <div class="sec-head">
            <h2>Our Mission &amp; Vision</h2>
            <p>What drives us every day, and where we are headed.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-6">
                <article class="mv mission">
                    <i class="bi bi-bullseye mv-wm"></i>
                    <div class="mv-ic"><i class="bi bi-bullseye"></i></div>
                    <h2>Our Mission</h2>
                    <p>To help every aspirant prepare with clarity and confidence by combining expert teaching, exam-focused material and personal mentorship, so that the right college is within reach.</p>
                    <ul>
                        <li><i class="bi bi-check-circle-fill"></i>Teach concepts the way each exam tests them</li>
                        <li><i class="bi bi-check-circle-fill"></i>Track progress with regular tests and analysis</li>
                        <li><i class="bi bi-check-circle-fill"></i>Guide students and parents at every step</li>
                    </ul>
                </article>
            </div>
            <div class="col-lg-6">
                <article class="mv vision">
                    <i class="bi bi-eye-fill mv-wm"></i>
                    <div class="mv-ic"><i class="bi bi-eye-fill"></i></div>
                    <h2>Our Vision</h2>
                    <p>To be the most trusted preparation partner for students in West Delhi and Bahadurgarh, known for honest guidance, strong results and a learning culture that builds both marks and character.</p>
                    <ul>
                        <li><i class="bi bi-check-circle-fill"></i>Quality coaching within every family's reach</li>
                        <li><i class="bi bi-check-circle-fill"></i>Learners who stay curious and self-reliant</li>
                        <li><i class="bi bi-check-circle-fill"></i>Careers chosen with informed confidence</li>
                    </ul>
                </article>
            </div>
        </div>
    </div>
</section>

<!-- VALUES -->
<section class="section section-tint">
    <div class="container">
        <div class="sec-head"><h2>What We Stand For</h2><p>The principles behind every class, test and counselling session.</p></div>
        <div class="row g-4">
            <?php foreach ([
                ['person-badge-fill', 'Expert faculty', 'Mentors who know each exam inside out.'],
                ['journal-bookmark-fill', 'Exam-focused material', 'Notes and practice sets aligned to the latest pattern.'],
                ['calendar2-check-fill', 'Structured plans', 'A clear weekly roadmap from syllabus to revision.'],
                ['graph-up-arrow', 'Data-led improvement', 'Regular tests that show exactly what to fix.'],
                ['chat-dots-fill', 'Personal support', 'One-to-one doubt solving whenever you need it.'],
                ['shield-check', 'Honest guidance', 'Advice based on your goals, not on enrolment numbers.'],
            ] as [$ic, $t, $d]): ?>
                <div class="col-md-6 col-lg-4"><div class="val"><i class="bi bi-<?= $ic ?>"></i><h5><?= $t ?></h5><p><?= $d ?></p></div></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- TEAM -->
<section class="section">
    <div class="container">
        <div class="sec-head"><h2>Meet Our Team</h2><p>Experienced faculty and mentors guiding students towards success.</p></div>
        <div class="row g-4 justify-content-center">
            <?php foreach ($team as $m): ?>
                <div class="col-6 col-md-4 col-lg-3 col-xl-2 team-mini">
                    <img src="<?= $m['img'] ?>" alt="<?= htmlspecialchars($m['name']) ?>" loading="lazy" />
                    <h6><?= htmlspecialchars($m['name']) ?></h6><small><?= htmlspecialchars($m['role']) ?></small>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-band py-4">
    <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
        <h2 class="m-0 text-white fs-3">Ready to start your preparation?</h2>
        <a href="contact.php#enquiry" class="btn btn-glass btn-lg">Book a Free Counselling</a>
    </div>
</section>
<?php
$content = ob_get_clean();
require 'layout.php';
