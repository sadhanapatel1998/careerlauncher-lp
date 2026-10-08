        <?php
        ob_start();
        include 'include/faculty.php';
        ?>

        <!-- 3. HERO: single background image + enquiry form -->
        <section id="home" class="hero">
            <span class="shape sh1"></span><span class="shape sh2"></span>
            <div class="container hero-grid">
                <div class="hero-copy">
                    <p class="eyebrow animate__animated animate__fadeInUp">
                        Your dream college starts here
                    </p>
                    <h1 class="animate__animated animate__fadeInUp animate__delay-1s">
                        Prepare Smart. Perform Better. Get Ahead.
                    </h1>
                    <p class="lead animate__animated animate__fadeInUp animate__delay-1s">
                        Expert preparation for India's leading Law, Central University and
                        Professional Entrance Exams.
                    </p>
                    <div class="btn-row animate__animated animate__fadeInUp animate__delay-2s">
                        <a href="#courses" class="btn btn-accent btn-lg">Explore Courses</a>
                        <a href="#enquiry" class="btn btn-glass btn-lg">Talk to an Expert</a>
                    </div>
                    <div class="hero-chips animate__animated animate__fadeInUp animate__delay-2s">
                        <span><i class="bi bi-journal-bookmark-fill"></i>10+ Entrance
                            Exams</span>
                        <span><i class="bi bi-person-badge-fill"></i>Expert Faculty</span>
                        <span><i class="bi bi-chat-heart-fill"></i>Personalised Support</span>
                    </div>
                </div>
                <div class="hero-form animate__animated animate__fadeInRight animate__delay-1s">
                    <h2>Book a Free Counselling</h2>
                    <p>Fill in your details and we will call you back.</p>
                    <form id="heroForm" class="js-enquiry row g-2 needs-validation" novalidate>

                        <div class="col-12">
                            <label class="form-label" for="hName">Full Name</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">
                                    <i class="bi bi-person"></i>
                                </span>

                                <input id="hName" name="name" class="form-control" placeholder="Your full name" required
                                    minlength="2" autocomplete="name" />

                                <div class="invalid-feedback">
                                    Please enter your full name.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="hMobile">Mobile Number</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">
                                    <i class="bi bi-phone"></i>
                                </span>

                                <input id="hMobile" name="mobile" class="form-control f-mobile" type="tel"
                                    placeholder="10-digit mobile number" required pattern="[6-9][0-9]{9}"
                                    inputmode="numeric" maxlength="10" autocomplete="tel" />

                                <div class="invalid-feedback">
                                    Enter a valid 10-digit mobile number.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="hCourse">Select Course</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">
                                    <i class="bi bi-journal-bookmark"></i>
                                </span>

                                <select id="hCourse" name="course" class="form-select f-course" required>
                                    <option value="">Choose a course</option>
                                    <option>Law Entrances</option>
                                    <option>CUET-UG</option>
                                    <option>CUET-PG</option>
                                    <option>Hotel Management</option>
                                    <option>NIFT Entrance</option>
                                    <option>IP-CET</option>
                                    <option>11th &amp; 12th Tuitions</option>
                                    <option>Other Entrance</option>
                                </select>

                                <div class="invalid-feedback">
                                    Please select a course.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <label class="form-label" for="hExam">Select Exam</label>
                            <div class="input-group has-validation">
                                <span class="input-group-text">
                                    <i class="bi bi-pencil-square"></i>
                                </span>

                                <select id="hExam" name="exam" class="form-select f-exam" required disabled>
                                    <option value="">Select a course first</option>
                                </select>

                                <div class="invalid-feedback">
                                    Please select an exam.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="hConsent" name="consent" value="yes"
                                    required />

                                <label class="form-check-label small" for="hConsent">
                                    I agree to be contacted about my enquiry.
                                </label>

                                <div class="invalid-feedback">
                                    Please tick to continue.
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                            <button class="btn btn-accent btn-lg w-100" type="submit">
                                <i class="bi bi-send-fill me-2"></i>
                                Submit Enquiry
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </section>

        <!-- 4. STATS -->
        <section class="stats">
            <div class="container">
                <div class="row g-3 g-lg-4">
                    <div class="col-6 col-lg-3 wow fadeInUp" data-wow-delay="0s">
                        <div class="stat-card">
                            <i class="bi bi-journal-text"></i>
                            <h3><span class="count" data-to="10">0</span>+</h3>
                            <p>Entrance Exams</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 wow fadeInUp" data-wow-delay=".1s">
                        <div class="stat-card">
                            <i class="bi bi-diagram-3-fill"></i>
                            <h3><span class="count" data-to="3">0</span></h3>
                            <p>Major Preparation Categories</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 wow fadeInUp" data-wow-delay=".2s">
                        <div class="stat-card">
                            <i class="bi bi-person-workspace"></i>
                            <h3>Expert</h3>
                            <p>Faculty Guidance</p>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 wow fadeInUp" data-wow-delay=".3s">
                        <div class="stat-card">
                            <i class="bi bi-heart-pulse-fill"></i>
                            <h3>Personalised</h3>
                            <p>Student Support</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4a. CL-SAT SCHOLARSHIP TEST -->
        <?php
        /* Edit scholarship test details here */
        $sat = ['date' => '15 March, Sunday', 'mode' => 'CL Center / Online', 'fee' => 'Free'];
        ?>
        <section id="scholarship" class="section pb-0">
            <div class="container">
                <div class="sat-card">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7">
                            <span class="pill sat-pill">For Class X Board appearing students</span>
                            <h2>CL-SAT: Career Launcher Scholarship Aptitude Test</h2>
                            <p class="sat-lead">Take a 60-minute test and win up to <b>100% scholarship</b> on your preparation. Scholarships worth <b>₹5 Crore</b> are on offer.</p>
                            <div class="sat-chips">
                                <span>CLAT</span><span>AILET</span><span>IPM</span><span>BBA</span><span>IIM-B UG</span><span>CUET</span>
                            </div>
                            <div class="sat-facts">
                                <div><i class="bi bi-calendar-event-fill"></i><b><?= $sat['date'] ?></b><small>Test date</small></div>
                                <div><i class="bi bi-geo-alt-fill"></i><b><?= $sat['mode'] ?></b><small>Test mode</small></div>
                                <div><i class="bi bi-stopwatch-fill"></i><b>60 minutes</b><small>Duration</small></div>
                                <div><i class="bi bi-gift-fill"></i><b><?= $sat['fee'] ?></b><small>Registration</small></div>
                            </div>
                            <div class="btn-row mt-4">
                                <a href="contact.php#enquiry" class="btn btn-accent btn-lg">Register Now</a>
                                <button type="button" class="btn btn-glass btn-lg" data-bs-toggle="modal" data-bs-target="#satModal"><i class="bi bi-arrows-fullscreen me-2"></i>View Poster</button>
                            </div>
                        </div>
                        <div class="col-lg-5 text-center">
                            <button type="button" class="sat-poster" data-bs-toggle="modal" data-bs-target="#satModal" aria-label="Enlarge CL-SAT poster">
                                <img src="./image/cl-sat-poster.jpg" alt="CL-SAT Career Launcher Scholarship Aptitude Test poster" loading="lazy" />
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="satModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content border-0 bg-transparent">
                        <button type="button" class="btn-close btn-close-white ms-auto mb-2" data-bs-dismiss="modal" aria-label="Close"></button>
                        <img src="./image/cl-sat-poster.jpg" alt="CL-SAT poster" class="img-fluid rounded-4" />
                    </div>
                </div>
            </div>
        </section>

        <!-- 4b. ABOUT US (content based on careerlauncher.com, paraphrased) -->
        <section id="about" class="section section-tint">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInLeft order-2 order-lg-1">
                        <div class="about-visual">
                            <div class="av-bg"></div>
                            <!-- IMAGE PLACEHOLDER: replace with <img src="images/about.jpg" alt="Career Launcher Vikaspuri classroom"> -->
                            <!-- ABOUT IMAGE -->
                            <img src="./image/about-img.jpg" alt="Students preparing for entrance exams"
                                class="about-main-img" />
                            <div class="ab-card ab1">
                                <i class="bi bi-patch-check-fill"></i>
                                <div><b>IIT-IIM alumni</b><span>Led by experts</span></div>
                            </div>
                            <div class="ab-card ab2">
                                <i class="bi bi-calendar-heart-fill"></i>
                                <div><b>Since 1995</b><span>Nurturing youth</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeInRight order-1 order-lg-2">
                        <h2>Nurturing Youth Since 1995</h2>
                        <p class="about-lead">
                            Career Launcher Vikaspuri is the flagship brand of CL Educate Ltd, an
                            education company that supports learners across many age groups,
                            from school students to college aspirants.
                        </p>
                        <p>
                            Our team is led by highly qualified professionals, including IIT
                            and IIM alumni, who care deeply about quality education. For
                            over 29 years we have helped students prepare for entrance exams
                            and plan their careers with confidence.
                        </p>
                        <div class="ab-stats">
                            <div><b>1995</b><span>Year we began</span></div>
                            <div>
                                <b class="d-flex"><span class="count" data-to="29">0</span>+</b><span>Years of
                                    experience</span>
                            </div>
                            <div><b>IIT-IIM</b><span>Alumni-led team</span></div>
                        </div>
                        <div class="about-points">
                            <div class="ap">
                                <span class="ic"><i class="bi bi-mortarboard-fill"></i></span>Entrance exam coaching
                            </div>
                            <div class="ap">
                                <span class="ic"><i class="bi bi-book-half"></i></span>School
                                tuitions &amp; boards
                            </div>
                            <div class="ap">
                                <span class="ic"><i class="bi bi-laptop"></i></span>Online
                                degree programs
                            </div>
                            <div class="ap">
                                <span class="ic"><i class="bi bi-globe-americas"></i></span>Study abroad guidance
                            </div>
                        </div>
                        <a href="#enquiry" class="btn btn-accent btn-lg mt-4">Book a Free Counselling</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. COURSE CATEGORIES -->
        <section id="courses" class="section">
            <div class="container">
                <div class="sec-head wow fadeInUp">
                    <h2>Choose Your Path. Prepare With Purpose.</h2>
                    <p>
                        Focused preparation programs designed around the exam pattern,
                        syllabus and goals that matter.
                    </p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0s">
                        <article class="path path-law">
                            <div class="path-icon"><i class="bi bi-bank"></i></div>
                            <h3>Law Entrances</h3>
                            <p>
                                Comprehensive preparation for India's leading undergraduate
                                and law entrance examinations.
                            </p>
                            <div class="badges">
                                <span>CLAT</span><span>AILET</span><span>DU-LLB</span><span>IP-CET</span><span>SYMBIOSIS</span><span>CHRIST</span>
                            </div>
                            <a href="#enquiry" class="path-cta">Explore Law Programs <i
                                    class="bi bi-arrow-right"></i></a>
                        </article>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".15s">
                        <article class="path path-uni">
                            <div class="path-icon"><i class="bi bi-building"></i></div>
                            <h3>Central Universities</h3>
                            <p>
                                Build a strong foundation for competitive university
                                admissions and specialised entrance examinations.
                            </p>
                            <div class="badges">
                                <span>CUET-UG</span><span>CUET-PG</span><span>HOTEL MANAGEMENT</span><span>NIFT
                                    ENTRANCE</span>
                            </div>
                            <a href="#enquiry" class="path-cta">Explore University Programs <i
                                    class="bi bi-arrow-right"></i></a>
                        </article>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay=".3s">
                        <article class="path path-ipu">
                            <div class="path-icon">
                                <i class="bi bi-signpost-split-fill"></i>
                            </div>
                            <h3>IP-CET &amp; Other Entrances</h3>
                            <p>
                                Focused preparation for IP-CET and other competitive entrance
                                pathways.
                            </p>
                            <div class="badges">
                                <span>IP-CET</span><span>OTHER ENTRANCES</span>
                            </div>
                            <a href="#enquiry" class="path-cta">Explore Programs <i class="bi bi-arrow-right"></i></a>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5b. 11th & 12th TUITIONS -->
        <section id="tuitions" class="section pt-0">
            <div class="container">
                <div class="tuition-wrap">
                    <div class="sec-head wow fadeInUp">
                        <h2 class="text-white">11th &amp; 12th Tuitions</h2>
                        <p>Strong board-exam preparation with a head start on your entrance exams.</p>
                    </div>
                    <div class="row g-4">
                        <?php foreach ([['11th', 'Class 11', 'Build strong concepts early and settle into a steady study routine.'], ['12th', 'Class 12', 'Score well in boards while preparing for CUET, CLAT and other entrances.']] as [$n, $t, $d]): ?>
                            <div class="col-md-6">
                                <article class="tcard">
                                    <div class="tnum"><?= $n ?></div>
                                    <div>
                                        <h3><?= $t ?> Tuition</h3>
                                        <p><?= $d ?></p>
                                        <div class="badges"><span>SCIENCE</span><span>COMMERCE</span><span>HUMANITIES</span></div>
                                    </div>
                                </article>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <ul class="tfeat">
                        <li><i class="bi bi-check-circle-fill"></i>Concept-based classes by experienced faculty</li>
                        <li><i class="bi bi-check-circle-fill"></i>Board-focused notes and practice</li>
                        <li><i class="bi bi-check-circle-fill"></i>Regular tests with performance analysis</li>
                        <li><i class="bi bi-check-circle-fill"></i>Doubt support whenever you need it</li>
                    </ul>
                    <div class="text-center mt-4"><a href="contact.php#enquiry" class="btn btn-accent btn-lg">Enquire About Tuitions</a></div>
                </div>
            </div>
        </section>

        <!-- 6. EXAM SLIDER (custom, populated by js) -->
        <section id="exams" class="section section-tint exams">
            <div class="container position-relative">
                <div class="xs exs" id="examSlider" data-desktop="3">
                    <div class="exs-head wow fadeInUp">
                        <div>
                            <h2>Prepare For The Exams That Shape Your Future</h2>
                            <p>
                                Pick your exam and get a preparation plan built around its
                                pattern and syllabus.
                            </p>
                        </div>
                        <div class="exs-arrows">
                            <button class="round-btn xs-prev" aria-label="Previous">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <button class="round-btn xs-next" aria-label="Next">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                    <div class="xs-viewport">
                        <div class="xs-track">
                            <div class="xs-item">
                                <article class="ex ex-law">
                                    <i class="bi bi-hammer ex-wm"></i>
                                    <div class="ex-top">
                                        <span class="ex-ic"><i class="bi bi-hammer"></i></span><span
                                            class="ex-tag">Law</span>
                                    </div>
                                    <h4>CLAT</h4>
                                    <p>Common Law Admission Test</p>
                                    <a href="#enquiry" class="ex-btn">Enquire Now <i class="bi bi-arrow-right"></i></a>
                                </article>
                            </div>
                            <div class="xs-item">
                                <article class="ex ex-law">
                                    <i class="bi bi-bank2 ex-wm"></i>
                                    <div class="ex-top">
                                        <span class="ex-ic"><i class="bi bi-bank2"></i></span><span
                                            class="ex-tag">Law</span>
                                    </div>
                                    <h4>AILET</h4>
                                    <p>All India Law Entrance Test</p>
                                    <a href="#enquiry" class="ex-btn">Enquire Now <i class="bi bi-arrow-right"></i></a>
                                </article>
                            </div>
                            <div class="xs-item">
                                <article class="ex ex-uni">
                                    <i class="bi bi-mortarboard ex-wm"></i>
                                    <div class="ex-top">
                                        <span class="ex-ic"><i class="bi bi-mortarboard"></i></span><span
                                            class="ex-tag">University</span>
                                    </div>
                                    <h4>CUET-UG</h4>
                                    <p>Common University Entrance Test</p>
                                    <a href="#enquiry" class="ex-btn">Enquire Now <i class="bi bi-arrow-right"></i></a>
                                </article>
                            </div>
                            <div class="xs-item">
                                <article class="ex ex-uni">
                                    <i class="bi bi-award ex-wm"></i>
                                    <div class="ex-top">
                                        <span class="ex-ic"><i class="bi bi-award"></i></span><span
                                            class="ex-tag">University</span>
                                    </div>
                                    <h4>CUET-PG</h4>
                                    <p>Postgraduate University Entrance</p>
                                    <a href="#enquiry" class="ex-btn">Enquire Now <i class="bi bi-arrow-right"></i></a>
                                </article>
                            </div>
                            <div class="xs-item">
                                <article class="ex ex-pro">
                                    <i class="bi bi-scissors ex-wm"></i>
                                    <div class="ex-top">
                                        <span class="ex-ic"><i class="bi bi-scissors"></i></span><span
                                            class="ex-tag">Design</span>
                                    </div>
                                    <h4>NIFT</h4>
                                    <p>National Institute of Fashion Technology Entrance</p>
                                    <a href="#enquiry" class="ex-btn">Enquire Now <i class="bi bi-arrow-right"></i></a>
                                </article>
                            </div>
                            <div class="xs-item">
                                <article class="ex ex-uni">
                                    <i class="bi bi-pencil-square ex-wm"></i>
                                    <div class="ex-top">
                                        <span class="ex-ic"><i class="bi bi-pencil-square"></i></span><span
                                            class="ex-tag">University</span>
                                    </div>
                                    <h4>IP-CET</h4>
                                    <p>Indraprastha University Common Entrance Test</p>
                                    <a href="#enquiry" class="ex-btn">Enquire Now <i class="bi bi-arrow-right"></i></a>
                                </article>
                            </div>
                            <div class="xs-item">
                                <article class="ex ex-law">
                                    <i class="bi bi-journal-richtext ex-wm"></i>
                                    <div class="ex-top">
                                        <span class="ex-ic"><i class="bi bi-journal-richtext"></i></span><span
                                            class="ex-tag">Law</span>
                                    </div>
                                    <h4>SYMBIOSIS</h4>
                                    <p>Symbiosis Entrance</p>
                                    <a href="#enquiry" class="ex-btn">Enquire Now <i class="bi bi-arrow-right"></i></a>
                                </article>
                            </div>
                            <div class="xs-item">
                                <article class="ex ex-law">
                                    <i class="bi bi-book ex-wm"></i>
                                    <div class="ex-top">
                                        <span class="ex-ic"><i class="bi bi-book"></i></span><span
                                            class="ex-tag">Law</span>
                                    </div>
                                    <h4>CHRIST</h4>
                                    <p>Christ University Entrance</p>
                                    <a href="#enquiry" class="ex-btn">Enquire Now <i class="bi bi-arrow-right"></i></a>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="xs-controls">
                        <div class="xs-dots"></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. WHY CHOOSE US -->
        <section id="why" class="section">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 wow fadeInLeft">
                        <div class="why-visual">
                            <!-- IMAGE PLACEHOLDER -->
                            <img src="./image/why-choose-us.jpg" alt="Students preparing for entrance exams"
                                class="why-main-img" />
                            <!-- <i class="bi bi-person-video3"></i><small>Student /
                classroom image placeholder</small> -->
                        </div>
                    </div>
                    <div class="col-lg-7 wow fadeInRight">
                        <h2 class="mb-4">
                            More Than Coaching. A Complete Preparation Journey.
                        </h2>
                        <ul class="why-list">
                            <li>
                                <span class="ic"><i class="bi bi-person-badge-fill"></i></span>
                                <div>
                                    <h5>Expert &amp; Experienced Faculty</h5>
                                    <p>Learn from mentors who know each exam inside out.</p>
                                </div>
                            </li>
                            <li>
                                <span class="ic"><i class="bi bi-journal-bookmark-fill"></i></span>
                                <div>
                                    <h5>Exam-Focused Study Material</h5>
                                    <p>
                                        Notes and practice sets aligned to the latest pattern.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <span class="ic"><i class="bi bi-calendar2-check-fill"></i></span>
                                <div>
                                    <h5>Structured Learning Plans</h5>
                                    <p>A clear weekly roadmap from syllabus to revision.</p>
                                </div>
                            </li>
                            <li>
                                <span class="ic"><i class="bi bi-graph-up-arrow"></i></span>
                                <div>
                                    <h5>Regular Tests &amp; Performance Analysis</h5>
                                    <p>Find weak areas early and fix them with data.</p>
                                </div>
                            </li>
                            <li>
                                <span class="ic"><i class="bi bi-chat-dots-fill"></i></span>
                                <div>
                                    <h5>Personalised Mentorship &amp; Doubt Support</h5>
                                    <p>One-to-one help whenever you get stuck.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8. HOW IT WORKS -->
        <section class="section section-tint ">
            <div class="container">
                <div class="sec-head wow fadeInUp">
                    <h2>How It Works</h2>
                </div>
                <ol class="steps">
                    <li class="wow fadeInUp" data-wow-delay="0s">
                        <span class="num">01</span>
                        <h4>Choose Your Program</h4>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay=".15s">
                        <span class="num">02</span>
                        <h4>Learn With Expert Faculty</h4>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay=".3s">
                        <span class="num">03</span>
                        <h4>Practice &amp; Test Yourself</h4>
                    </li>
                    <li class="wow fadeInUp" data-wow-delay=".45s">
                        <span class="num">04</span>
                        <h4>Achieve Your Goal</h4>
                    </li>
                </ol>
            </div>
        </section>

        <!-- 9. Team-->
        <section id="results" class="section dark">
            <div class="container">
                <div class="sec-head light wow fadeInUp">
                    <h2>Meet Our Expert Faculty.</h2>
                    <p>
                        Meet our experienced faculty and mentors dedicated to guiding
                        students towards academic excellence and success.
                    </p>
                </div>
                <div class="wow fadeInUp">
                    <div class="xs" id="resSlider" data-desktop="4">
                        <div class="xs-viewport">
                            <div class="xs-viewport">
                                <div class="xs-track">

                                    <?php foreach ($faculty as $member): ?>

                                        <div class="xs-item">
                                            <article class="rc">

                                                <div class="rc-top">
                                                    <div class="avatar">
                                                        <img
                                                            src="<?= htmlspecialchars($member['image']) ?>"
                                                            alt="<?= htmlspecialchars($member['alt']) ?>" />
                                                    </div>
                                                </div>

                                                <h4 class="pb-2">
                                                    <?= htmlspecialchars($member['name']) ?>
                                                </h4>

                                                <p class="rank">
                                                    <i class="bi <?= htmlspecialchars($member['icon']) ?> me-1"></i>
                                                    <?= htmlspecialchars($member['position']) ?>
                                                </p>

                                                <blockquote>
                                                    "<?= htmlspecialchars($member['description']) ?>"
                                                </blockquote>

                                            </article>
                                        </div>

                                    <?php endforeach; ?>

                                </div>
                            </div>
                        </div>
                        <div class="xs-controls">
                            <button class="round-btn xs-prev" aria-label="Previous">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <div class="xs-dots"></div>
                            <button class="round-btn xs-next" aria-label="Next">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 10. TESTIMONIALS -->
        <section class="section">
            <div class="container">
                <div class="sec-head wow fadeInUp">
                    <h2>What Our Students Say</h2>
                    <p class="section-content mt-4" data-aos="slide-up">
                        Hear from our students about their preparation journey, expert
                        guidance, personalised mentoring and the confidence they gained
                        along the way.
                    </p>
                </div>
                <div class="wow fadeInUp">
                    <div class="xs" id="testSlider" data-desktop="3">
                        <div class="xs-viewport">
                            <div class="xs-track">
                                <div class="xs-item">
                                    <article class="tc">
                                        <i class="bi bi-quote tc-q"></i>

                                        <div class="stars" aria-label="5 out of 5">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>

                                        <p>
                                            "Career Launcher Vikaspuri Vikaspuri is generally known for experienced
                                            faculty, good study material, and
                                            helpful mock tests that improve concepts and confidence. However, some
                                            students feel the fees are
                                            high and management/support can be inconsistent at times. Overall, it’s a
                                            decent option but
                                            depends on the specific batch and teacher.ourney smooth and enriching."
                                        </p>

                                        <div class="tc-who">
                                            <div class="avatar sm">
                                                <img src="image/testimonials/user.png" alt="User Image" />
                                            </div>

                                            <div>
                                                <h5>Ayush Kandari</h5>
                                                <!-- <span>Jesus and Mary College · Psychology Hons</span> -->
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="xs-item">
                                    <article class="tc">
                                        <i class="bi bi-quote tc-q"></i>

                                        <div class="stars" aria-label="5 out of 5">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>

                                        <p>
                                            "My experience with **Career Launcher Vikaspuri, Vikaspuri has been quite
                                            positive and enriching. The
                                            institute provides a well-structured learning environment with experienced
                                            faculty who explain
                                            concepts clearly and focus on building strong fundamentals."
                                        </p>

                                        <div class="tc-who">
                                            <div class="avatar sm">
                                                <img src="image/testimonials/user.png" alt="User Image" />
                                            </div>

                                            <div>
                                                <h5>Gautam Sagar</h5>
                                                <!-- <span>SRCC · Economics Hons</span> -->
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="xs-item">
                                    <article class="tc">
                                        <i class="bi bi-quote tc-q"></i>

                                        <div class="stars" aria-label="5 out of 5">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>

                                        <p>
                                            "I had a very good experience with Career Launcher Vikaspuri Vikaspuri for
                                            MBA entrance exam preparation
                                            (CAT/XAT). The faculty is highly experienced and supportive, and they
                                            explain concepts in a very
                                            clear and practical manner. Classes are well structured and focus on
                                            exam-oriented preparation."
                                        </p>

                                        <div class="tc-who">
                                            <div class="avatar sm">
                                                <img src="image/testimonials/user.png" alt="User Image" />
                                            </div>

                                            <div>
                                                <h5>Jeevan Bisht</h5>
                                                <!-- <span>Deen Dayal College · B.Com Hons</span> -->
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="xs-item">
                                    <article class="tc">
                                        <i class="bi bi-quote tc-q"></i>

                                        <div class="stars" aria-label="5 out of 5">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>

                                        <p>
                                            "6 months ago
                                            Career Launcher Vikaspuri Vikaspuri is a good coaching institute for
                                            students preparing for exams like CAT,
                                            CLAT, CUET, and other competitive exams. The faculty members are generally
                                            knowledgeable and
                                            supportive. They explain concepts clearly and are approachable if students
                                            need extra help."
                                        </p>

                                        <div class="tc-who">
                                            <div class="avatar sm">
                                                <img src="image/testimonials/user.png" alt="User Image" />
                                            </div>

                                            <div>
                                                <h5>Rohit Kumar</h5>
                                                <!-- <span>CUET Express · PCM & Verbal</span> -->
                                            </div>
                                        </div>
                                    </article>
                                </div>

                                <div class="xs-item">
                                    <article class="tc">
                                        <i class="bi bi-quote tc-q"></i>

                                        <div class="stars" aria-label="5 out of 5">
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                            <i class="bi bi-star-fill"></i>
                                        </div>

                                        <p>
                                            "Excellent coaching centre....... Friendly staff, structured material and
                                            consistent support make
                                            it a top choice for competitive exams. Career Launcher Vikaspuri provide an
                                            excellent learning
                                            environment..... Thank you"
                                        </p>

                                        <div class="tc-who">
                                            <div class="avatar sm">
                                                <img src="image/testimonials/user.png" alt="User Image" />
                                            </div>

                                            <div>
                                                <h5>Radha Sharma</h5>
                                                <!-- <span>CUET Express · PCM & Verbal</span> -->
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="xs-controls">
                            <button class="round-btn xs-prev" aria-label="Previous">
                                <i class="bi bi-chevron-left"></i>
                            </button>
                            <div class="xs-dots"></div>
                            <button class="round-btn xs-next" aria-label="Next">
                                <i class="bi bi-chevron-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 11. COUNSELLING CTA -->
        <section class="cta-band py-4">
            <span class="circle c1"></span><span class="circle c2"></span>
            <div class="container text-center position-relative wow zoomIn">
                <h2>Not Sure Which Entrance Exam Is Right For You?</h2>
                <p>
                    Speak with our counsellor and find the right preparation path based
                    on your goals.
                </p>
                <div class="btn-row justify-content-center">
                    <a href="#enquiry" class="btn btn-light btn-lg fw-bold text-danger">Book Free Counselling</a>
                    <a href="tel:9717238908" class="btn btn-glass btn-lg"><i class="bi bi-telephone-fill me-2"></i>Call
                        9717238908</a>
                </div>
            </div>
        </section>

        <!-- 12. ENQUIRY FORM -->
        <section id="enquiry" class="section section-tint">
            <div class="container">
                <div class="enq-card wow fadeInUp">
                    <div class="row g-0">
                        <div class="col-lg-5">
                            <aside class="enq-side">
                                <h2>Start Your Preparation Today</h2>
                                <p>
                                    Share your details and our counsellor will help you choose
                                    the right program.
                                </p>
                                <ul class="enq-points">
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>Free one-to-one
                                        counselling
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>Guidance on the
                                        right exam for your goals
                                    </li>
                                    <li>
                                        <i class="bi bi-check-circle-fill"></i>A clear, structured
                                        preparation roadmap
                                    </li>
                                </ul>
                                <a href="tel:9717238908" class="enq-call"><i
                                        class="bi bi-telephone-fill"></i><span>Prefer to
                                        talk?<b>9717238908</b></span></a>
                            </aside>
                        </div>
                        <div class="col-lg-7">
                            <form id="enquiryForm" class="js-enquiry enq-form row g-3 needs-validation" novalidate>

                                <div class="col-md-6">
                                    <label class="form-label" for="fName">Full Name</label>

                                    <div class="input-group has-validation">
                                        <span class="input-group-text">
                                            <i class="bi bi-person"></i>
                                        </span>

                                        <input id="fName" name="name" class="form-control" placeholder="Your full name"
                                            required minlength="2" autocomplete="name" />

                                        <div class="invalid-feedback">
                                            Please enter your full name.
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label" for="fMobile">Mobile Number</label>

                                    <div class="input-group has-validation">
                                        <span class="input-group-text">
                                            <i class="bi bi-phone"></i>
                                        </span>

                                        <input id="fMobile" name="mobile" class="form-control f-mobile" type="tel"
                                            placeholder="10-digit mobile number" required pattern="[6-9][0-9]{9}"
                                            inputmode="numeric" maxlength="10" autocomplete="tel" />

                                        <div class="invalid-feedback">
                                            Enter a valid 10-digit mobile number.
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <label class="form-label" for="fEmail">Email Address</label>

                                    <div class="input-group has-validation">
                                        <span class="input-group-text">
                                            <i class="bi bi-envelope"></i>
                                        </span>

                                        <input id="fEmail" name="email" class="form-control" type="email"
                                            placeholder="you@example.com" required autocomplete="email" />

                                        <div class="invalid-feedback">
                                            Enter a valid email address.
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label" for="fCourse">Select Course</label>

                                    <div class="input-group has-validation">
                                        <span class="input-group-text">
                                            <i class="bi bi-journal-bookmark"></i>
                                        </span>

                                        <select id="fCourse" name="course" class="form-select f-course" required>
                                            <option value="">Choose a course</option>
                                            <option>Law Entrances</option>
                                            <option>CUET-UG</option>
                                            <option>CUET-PG</option>
                                            <option>Hotel Management</option>
                                            <option>NIFT Entrance</option>
                                            <option>IP-CET</option>
                                            <option>11th &amp; 12th Tuitions</option>
                                            <option>Other Entrance</option>
                                        </select>

                                        <div class="invalid-feedback">
                                            Please select a course.
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <label class="form-label" for="fExam">Select Exam</label>

                                    <div class="input-group has-validation">
                                        <span class="input-group-text">
                                            <i class="bi bi-pencil-square"></i>
                                        </span>

                                        <select id="fExam" name="exam" class="form-select f-exam" required disabled>
                                            <option value="">Select a course first</option>
                                        </select>

                                        <div class="invalid-feedback">
                                            Please select an exam.
                                        </div>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <label class="form-label" for="fMsg">Message</label>

                                    <div class="input-group has-validation">
                                        <span class="input-group-text">
                                            <i class="bi bi-chat-left-text"></i>
                                        </span>

                                        <textarea id="fMsg" name="message" class="form-control" rows="3"
                                            placeholder="Anything you would like us to know? (optional)"></textarea>
                                    </div>
                                </div>


                                <div class="col-12">
                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" id="fConsent" name="consent"
                                            value="yes" required />

                                        <label class="form-check-label small" for="fConsent">
                                            I agree to be contacted by Career Launcher Vikaspuri about my enquiry.
                                        </label>

                                        <div class="invalid-feedback">
                                            Please tick to continue.
                                        </div>

                                    </div>
                                </div>


                                <div class="col-12">
                                    <button class="btn btn-accent btn-lg w-100" type="submit">
                                        <i class="bi bi-send-fill me-2"></i>
                                        Submit Enquiry
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 13. FAQ -->
        <section id="faqs" class="section">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="faq-side wow fadeInLeft">
                            <h2>Frequently Asked Questions</h2>
                            <p>Quick answers about our programs and how to get started.</p>
                            <div class="faq-help">
                                <i class="bi bi-headset"></i>
                                <h5>Still have questions?</h5>
                                <p>Talk to a counsellor and get a clear answer.</p>
                                <a href="tel:9717238908" class="btn btn-accent w-100 mb-2"><i
                                        class="bi bi-telephone-fill me-2"></i>Call
                                    9717238908</a>
                                <a href="#enquiry" class="btn btn-glass w-100">Send Enquiry</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 wow fadeInRight">
                        <div class="accordion faq-acc" id="faqAcc">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#q1"
                                        aria-expanded="true">
                                        <span class="q-ic"><i class="bi bi-bank"></i></span>Which
                                        law entrance exams do you prepare students for?
                                    </button>
                                </h3>
                                <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#faqAcc">
                                    <div class="accordion-body">
                                        We prepare students for CLAT, AILET, DU-LLB, IP-CET,
                                        Symbiosis and Christ University entrances.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#q2" aria-expanded="false">
                                        <span class="q-ic"><i class="bi bi-hammer"></i></span>Do
                                        you offer CLAT and AILET preparation?
                                    </button>
                                </h3>
                                <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                                    <div class="accordion-body">
                                        Yes. Both are part of our Law Entrances programs.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#q3" aria-expanded="false">
                                        <span class="q-ic"><i class="bi bi-mortarboard"></i></span>Do you provide
                                        CUET-UG and CUET-PG
                                        preparation?
                                    </button>
                                </h3>
                                <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                                    <div class="accordion-body">
                                        Yes, we offer structured programs for both CUET-UG and
                                        CUET-PG.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#q4" aria-expanded="false">
                                        <span class="q-ic"><i class="bi bi-scissors"></i></span>Do
                                        you offer NIFT entrance preparation?
                                    </button>
                                </h3>
                                <div id="q4" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                                    <div class="accordion-body">
                                        Yes. Our NIFT Entrance program is part of the Central
                                        Universities category.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#q5" aria-expanded="false">
                                        <span class="q-ic"><i class="bi bi-building"></i></span>Do
                                        you provide Hotel Management entrance preparation?
                                    </button>
                                </h3>
                                <div id="q5" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                                    <div class="accordion-body">
                                        Yes, Hotel Management entrance preparation is available.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#q6" aria-expanded="false">
                                        <span class="q-ic"><i class="bi bi-pencil-square"></i></span>Do you offer IP-CET
                                        preparation?
                                    </button>
                                </h3>
                                <div id="q6" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                                    <div class="accordion-body">
                                        Yes, we have a focused IP-CET program.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#q7" aria-expanded="false">
                                        <span class="q-ic"><i class="bi bi-headset"></i></span>Can
                                        I speak with a counsellor before joining?
                                    </button>
                                </h3>
                                <div id="q7" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                                    <div class="accordion-body">
                                        Absolutely. Book a free counselling session and we will
                                        help you choose the right program.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                        data-bs-target="#q8" aria-expanded="false">
                                        <span class="q-ic"><i class="bi bi-chat-left-text"></i></span>How can I enquire
                                        about a course?
                                    </button>
                                </h3>
                                <div id="q8" class="accordion-collapse collapse" data-bs-parent="#faqAcc">
                                    <div class="accordion-body">
                                        Fill in the enquiry form above or call 9717238908.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cta-band py-4">
            <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between gap-3">
                <h2 class="m-0 text-white fs-3">Want your name on this wall?</h2>
                <a href="contact.php#enquiry" class="btn btn-glass btn-lg">Book a Free Counselling</a>
            </div>
        </section>

        <!-- 14. CONTACT -->
        <!-- <section id="contact" class="section dark contact">
      <div class="container">
        <div class="sec-head light wow fadeInUp">
          <h2>Let's Start Your Journey</h2>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3 wow fadeInUp">
            <div class="c-card"><i class="bi bi-telephone"></i>
              <h5>Phone</h5><a href="tel:9717238908">9717238908</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".1s">
            <div class="c-card"><i class="bi bi-envelope"></i>
              <h5>Email</h5><a href="mailto:del.vikaspuri@careerlauncher.com">del.vikaspuri@careerlauncher.com</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".2s">
            <div class="c-card"><i class="bi bi-geo-alt"></i>
              <h5>Address</h5><span>[Add your centre address]</span>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay=".3s">
            <div class="c-card"><i class="bi bi-clock"></i>
              <h5>Hours</h5><span>[Add your working hours]</span>
            </div>
          </div>
        </div>
        <div class="btn-row justify-content-center mt-5">
          <a href="tel:9717238908" class="btn btn-accent btn-lg"><i class="bi bi-telephone-fill me-2"></i>Call Now</a>
          <a href="#enquiry" class="btn btn-glass btn-lg">Send Enquiry</a>
        </div>
      </div>
    </section> 

        <?php
        $content = ob_get_clean();
        require 'layout.php';
        ?>