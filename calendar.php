<?php
ob_start();
?>
<div class="app-root">
    <header class="topbar">
        <div class="brand">Class-ify</div>
        <div class="topbar-center">
            <a class="top-button" href="index.php">Classes</a>
            <a class="top-button active" href="calendar.php">Calendar</a>
            <button class="top-button">To-do</button>
        </div>
        <div class="top-actions">
            <button class="action-btn">+ Add event</button>
            <div class="profile-badge">A</div>
            <span id="user-role" class="role-label"></span>
            <button id="logout-btn" class="logout-btn">Sign out</button>
        </div>
    </header>

    <div class="app-shell">
        <aside class="sidebar">
            <div class="sidebar-brand">Navigation</div>
            <nav>
                <a class="nav-link" href="index.php">Classes</a>
                <a class="nav-link" href="#">Assignments</a>
                <a class="nav-link" href="#">People</a>
                <a class="nav-link active" href="calendar.php">Calendar</a>
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
                    <p class="eyebrow">Calendar view</p>
                    <h1>Class schedule at a glance</h1>
                    <p>See scheduled lessons, assignments, and school events for the month in one clean calendar.</p>
                </div>
                <button class="join-btn">Today</button>
            </section>

            <section class="calendar-panel">
                <div class="calendar-header">
                    <div>
                        <p class="eyebrow">May 2026</p>
                        <h2>May classes & events</h2>
                    </div>
                    <div class="calendar-controls">
                        <button class="top-button">Prev</button>
                        <button class="top-button active">Next</button>
                    </div>
                </div>

                <div class="calendar-grid">
                    <div class="calendar-day header">Sun</div>
                    <div class="calendar-day header">Mon</div>
                    <div class="calendar-day header">Tue</div>
                    <div class="calendar-day header">Wed</div>
                    <div class="calendar-day header">Thu</div>
                    <div class="calendar-day header">Fri</div>
                    <div class="calendar-day header">Sat</div>

                    <div class="calendar-day empty"></div>
                    <div class="calendar-day empty"></div>
                    <div class="calendar-day empty"></div>
                    <div class="calendar-day">1</div>
                    <div class="calendar-day">2</div>
                    <div class="calendar-day">3</div>
                    <div class="calendar-day">4</div>

                    <div class="calendar-day">5</div>
                    <div class="calendar-day event-day">
                        <span class="date-number">6</span>
                        <div class="event-pill blue">History review</div>
                    </div>
                    <div class="calendar-day">7</div>
                    <div class="calendar-day event-day">
                        <span class="date-number">8</span>
                        <div class="event-pill green">Chemistry lab</div>
                    </div>
                    <div class="calendar-day">9</div>
                    <div class="calendar-day">10</div>
                    <div class="calendar-day">11</div>

                    <div class="calendar-day">12</div>
                    <div class="calendar-day">13</div>
                    <div class="calendar-day event-day">
                        <span class="date-number">14</span>
                        <div class="event-pill yellow">Art project</div>
                    </div>
                    <div class="calendar-day">15</div>
                    <div class="calendar-day">16</div>
                    <div class="calendar-day event-day">
                        <span class="date-number">17</span>
                        <div class="event-pill red">Biology quiz</div>
                    </div>
                    <div class="calendar-day">18</div>

                    <div class="calendar-day">19</div>
                    <div class="calendar-day">20</div>
                    <div class="calendar-day">21</div>
                    <div class="calendar-day">22</div>
                    <div class="calendar-day">23</div>
                    <div class="calendar-day">24</div>
                    <div class="calendar-day">25</div>

                    <div class="calendar-day">26</div>
                    <div class="calendar-day">27</div>
                    <div class="calendar-day">28</div>
                    <div class="calendar-day">29</div>
                    <div class="calendar-day">30</div>
                    <div class="calendar-day">31</div>
                    <div class="calendar-day empty"></div>
                </div>
            </section>
        </main>
    </div>
</div>

<?php
$out1 = ob_get_clean();
require "views/layout.php";
?>
