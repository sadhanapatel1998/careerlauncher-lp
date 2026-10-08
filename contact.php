<?php
$pageTitle = 'Contact Us | Career Launcher Vikaspuri';
$pageDesc  = 'Contact Career Launcher Vikaspuri – call, WhatsApp, email or visit us near Vikaspuri Metro Gate No. 1. Book a free counselling session.';
$pageHeading = 'Contact Us';
$pageLead = 'Talk to a counsellor, visit the centre, or send an enquiry. We reply quickly.';
$address = '2nd floor , b-57 new Krishna vihar , vikaspuri.
                                Near West janakpuri metro gate no 1 ,New Delhi, Delhi 110018';
ob_start();
include 'include/page-banner.php';
?>

<section class="section pb-0">
    <div class="container">
        <div class="row g-4 pt-4">
            <?php foreach ([
                ['telephone-fill', 'Call us', '<a href="tel:9717238908">9717238908</a>'],
                ['whatsapp', 'WhatsApp', '<a href="https://wa.me/919717238908" target="_blank" rel="noopener">Chat on 9717238908</a>'],
                ['envelope-fill', 'Email', '<a href="mailto:del.vikaspuri@careerlauncher.com">del.vikaspuri@careerlauncher.com</a>'],
                ['geo-alt-fill', 'Visit us', '<a href="https://maps.app.goo.gl/vPq4g9h7PuWi8vj88" target="_blank" rel="noopener">' . htmlspecialchars($address) . '</a>'],
            ] as [$ic, $t, $v]): ?>
                <div class="col-sm-6 col-lg-3 mt-5">
                    <div class="cinfo"><div class="ic"><i class="bi bi-<?= $ic ?>"></i></div><h5><?= $t ?></h5><?= $v ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="section" id="enquiry">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-7">
                <span class="pill">Send an enquiry</span>
                <h2 class="mb-4">Tell us what you are preparing for</h2>
                <form id="enquiryForm" class="js-enquiry enq-form row g-3 needs-validation" novalidate>
                    <div class="col-md-6">
                        <label class="form-label" for="fName">Full Name</label>
                        <div class="input-group has-validation"><span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input id="fName" name="name" class="form-control" placeholder="Your full name" required minlength="2" autocomplete="name" />
                            <div class="invalid-feedback">Please enter your full name.</div></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="fMobile">Mobile Number</label>
                        <div class="input-group has-validation"><span class="input-group-text"><i class="bi bi-phone"></i></span>
                            <input id="fMobile" name="mobile" class="form-control f-mobile" type="tel" placeholder="10-digit mobile number" required pattern="[6-9][0-9]{9}" inputmode="numeric" maxlength="10" autocomplete="tel" />
                            <div class="invalid-feedback">Enter a valid 10-digit mobile number.</div></div>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="fEmail">Email Address</label>
                        <div class="input-group has-validation"><span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input id="fEmail" name="email" class="form-control" type="email" placeholder="you@example.com" required autocomplete="email" />
                            <div class="invalid-feedback">Enter a valid email address.</div></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="fCourse">Select Course</label>
                        <div class="input-group has-validation"><span class="input-group-text"><i class="bi bi-journal-bookmark"></i></span>
                            <select id="fCourse" name="course" class="form-select f-course" required>
                                <option value="">Choose a course</option>
                                <?php foreach (['Law Entrances', 'CUET-UG', 'CUET-PG', 'Hotel Management', 'NIFT Entrance', 'IP-CET', '11th & 12th Tuitions', 'Other Entrance'] as $c): ?><option><?= $c ?></option><?php endforeach; ?>
                            </select>
                            <div class="invalid-feedback">Please select a course.</div></div>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label" for="fExam">Select Exam</label>
                        <div class="input-group has-validation"><span class="input-group-text"><i class="bi bi-pencil-square"></i></span>
                            <select id="fExam" name="exam" class="form-select f-exam" required disabled><option value="">Select a course first</option></select>
                            <div class="invalid-feedback">Please select an exam.</div></div>
                    </div>
                    <div class="col-12">
                        <label class="form-label" for="fMsg">Message</label>
                        <div class="input-group"><span class="input-group-text"><i class="bi bi-chat-left-text"></i></span>
                            <textarea id="fMsg" name="message" class="form-control" rows="3" placeholder="Anything you would like us to know? (optional)"></textarea></div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="fConsent" name="consent" value="yes" required />
                            <label class="form-check-label small" for="fConsent">I agree to be contacted by Career Launcher Vikaspuri about my enquiry.</label>
                            <div class="invalid-feedback">Please tick to continue.</div>
                        </div>
                    </div>
                    <div class="col-12"><button class="btn btn-accent btn-lg w-100" type="submit"><i class="bi bi-send-fill me-2"></i>Submit Enquiry</button></div>
                </form>
            </div>
            <div class="col-lg-5">
                <div class="visit">
                    <h3>Visiting the centre?</h3>
                    <ul>
                        <li><i class="bi bi-train-front-fill"></i><span>Right at Vikaspuri Metro Gate No. 1, 2nd floor.</span></li>
                        <li><i class="bi bi-clock-fill"></i><span>Call or WhatsApp to confirm visiting hours and batch timings.</span></li>
                        <li><i class="bi bi-person-check-fill"></i><span>Free one-to-one counselling to pick the right exam and program.</span></li>
                    </ul>
                    <a href="tel:9717238908" class="btn btn-accent w-100"><i class="bi bi-telephone-fill me-2"></i>Call 9717238908</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pb-5">
    <div class="container">
        <iframe class="map-frame" title="Career Launcher Vikaspuri on Google Maps" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps?q=<?= urlencode('Career Launcher Vikaspuri, B-57 New Krishna Vihar, Vikaspuri, Delhi 110018') ?>&output=embed"></iframe>
    </div>
</section>
<?php
$content = ob_get_clean();
require 'layout.php';
