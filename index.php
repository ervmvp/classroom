<?php ob_start(); ?>
<div class="app-root">
    <header class="topbar">
        <div class="brand">Class-ify</div>
        <div class="topbar-center">
            <a class="top-button active" href="index.php">Classes</a>
            <a class="top-button" href="calendar.php">Calendar</a>
            <button class="top-button">To-do</button>
        </div>
        <div class="top-actions">
            <button class="action-btn">+ Join class</button>
            <div class="profile-badge">A</div>
            <button id="logout-btn" class="logout-btn">Sign out</button>
        </div>
    </header>

    <div class="app-shell">
        <aside class="sidebar">
            <div class="sidebar-brand">Navigation</div>
            <nav>
                <a class="nav-link active" href="index.php">Classes</a>
                <a class="nav-link" href="#">Assignments</a>
                <a class="nav-link" href="#">People</a>
                <a class="nav-link" href="calendar.php">Calendar</a>
            </nav>

            <div class="sidebar-divider"></div>
            <div class="sidebar-title">Your classes</div>
            <a class="class-link" href="#">
                <span class="dot dot-blue"></span>
                Biology 101
            </a>
            <a class="class-link" href="#">
                <span class="dot dot-green"></span>
                World History
            </a>
            <a class="class-link" href="#">
                <span class="dot dot-red"></span>
                Chemistry Lab
            </a>
            <a class="class-link" href="#">
                <span class="dot dot-yellow"></span>
                Art & Design
            </a>
        </aside>

        <main class="main-content">
            <section class="hero">
                <div>
                    <p class="eyebrow">Welcome back, Alex</p>
                    <h1>Keep up with your classes</h1>
                    <p>Browse your courses, see next assignments, and review classroom announcements from a clean student dashboard.</p>
                </div>
                <button class="join-btn">Create class</button>
            </section>

            <section class="class-grid">
                <article class="class-card">
                    <span class="class-chip class-chip-blue">Science</span>
                    <h2>Physics 11</h2>
                    <p>Mr. Rivera · 34 students</p>
                    <div class="card-footer">Next due: Lab report — Fri</div>
                </article>

                <article class="class-card">
                    <span class="class-chip class-chip-green">Humanities</span>
                    <h2>World History</h2>
                    <p>Ms. Harper · 28 students</p>
                    <div class="card-footer">Upcoming: Essay draft — Wed</div>
                </article>

                <article class="class-card">
                    <span class="class-chip class-chip-red">Chemistry</span>
                    <h2>Chemistry Lab</h2>
                    <p>Dr. Kim · 22 students</p>
                    <div class="card-footer">New post: Safety rules</div>
                </article>

                <article class="class-card">
                    <span class="class-chip class-chip-yellow">Creative</span>
                    <h2>Art & Design</h2>
                    <p>Mrs. Jones · 19 students</p>
                    <div class="card-footer">Materials due: Monday</div>
                </article>
            </section>

            <section class="dashboard">
                <div class="panel">
                    <h3>Recent announcements</h3>
                    <div class="announcement">
                        <strong>Physics</strong> · New lab worksheet is available in Classwork.
                    </div>
                    <div class="announcement">
                        <strong>History</strong> · Review session added for Friday.
                    </div>
                    <div class="announcement">
                        <strong>Art</strong> · Submit your digital portfolio by Sunday.
                    </div>
                </div>

                <div class="panel">
                    <h3>Upcoming work</h3>
                    <div class="upcoming-item">
                        <div>Biology Quiz</div>
                        <div class="meta">Tomorrow</div>
                    </div>
                    <div class="upcoming-item">
                        <div>History Essay Draft</div>
                        <div class="meta">Wed</div>
                    </div>
                    <div class="upcoming-item">
                        <div>Chemistry Safety Quiz</div>
                        <div class="meta">Fri</div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</div>

<?php $out1 = ob_get_clean();
require "views/layout.php"; ?>