    <!-- 1. ANNOUNCEMENT BAR -->
    <div class="topbar">
        <div class="container d-flex justify-content-center align-items-center gap-3 flex-wrap">
            <span><i class="bi bi-megaphone-fill me-2"></i>Admissions Open | Start Your
                Entrance Exam Preparation Today</span>
            <a href="contact.php" class="topbar-cta">Enquire Now <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>

    <!-- 2. STICKY NAVBAR -->
    <nav class="navbar navbar-expand-lg sticky-top site-nav" id="nav">
        <div class="container">
            <a class="navbar-brand brand" href="index.php">
                <img src="./image/logo.png" alt="Career Launcher Vikaspuri Logo" class="logo" />
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#menu"
                aria-controls="menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <?php
                    $cur = basename($_SERVER['SCRIPT_NAME']);
                    $links = ['index.php' => 'Home', 'about.php' => 'About Us', 'courses.php' => 'Courses', 'exams.php' => 'Exams', 'results.php' => 'Results', 'gallery.php' => 'Gallery', 'contact.php' => 'Contact Us'];
                    foreach ($links as $file => $label): ?>
                        <li class="nav-item">
                            <a class="nav-link<?= $cur === $file ? ' active' : '' ?>" href="<?= $file ?>" <?= $cur === $file ? ' aria-current="page"' : '' ?>><?= $label ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
                <div class="d-flex align-items-lg-center flex-column flex-lg-row gap-3">
                    <!-- <a href="tel:9717238908" class="nav-phone"><i class="bi bi-telephone-fill"></i> 9717238908</a> -->
                    <a href="contact.php" class="btn btn-accent">Book a Free Counselling</a>
                </div>
            </div>
        </div>
    </nav>