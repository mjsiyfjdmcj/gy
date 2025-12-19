<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="logo.png" alt="">
            </div>
            <button class="menu-toggle" id="menuToggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <main>
        <div class="container">
            <h1>CURRENT OPPORTUNITIES</h1>
            
            <div class="job-listings">
                <div class="job-card">
                    <div class="job-header">
                        <div class="job-icon">✨</div>
                        <div class="job-info">
                            <h2>Fellow - Just Energy Transition</h2>
                            <span class="job-type">FULL TIME</span>
                        </div>
                    </div>
                    <div class="job-details">
                        <div class="location">
                            <span class="icon">📍</span>
                            <span>Dhaka</span>
                            <span class="salary">💰 --</span>
                        </div>
                        <div class="deadline">
                            <span class="icon">📅</span>
                            <span>Deadline: 27 Dec 2025</span>
                        </div>
                        <button class="view-details-btn">View Details</button>
                    </div>
                </div>

                <div class="job-card">
                    <div class="job-header">
                        <div class="job-icon">✨</div>
                        <div class="job-info">
                            <h2>Manager – Resilience and Climate Justice</h2>
                            <span class="job-type">FULL TIME</span>
                        </div>
                    </div>
                    <div class="job-details">
                        <div class="location">
                            <span class="icon">📍</span>
                            <span>Dhaka</span>
                            <span class="salary">💰 --</span>
                        </div>
                        <div class="deadline">
                            <span class="icon">📅</span>
                            <span>Deadline: 26 Dec 2025</span>
                        </div>
                        <button class="view-details-btn">View Details</button>
                    </div>
                </div>

                <div class="job-card">
                    <div class="job-header">
                        <div class="job-icon">✨</div>
                        <div class="job-info">
                            <h2>Coordinator - Livelihood and Skill Development</h2>
                            <span class="job-type">FULL TIME</span>
                        </div>
                    </div>
                    <div class="job-details">
                        <div class="location">
                            <span class="icon">📍</span>
                            <span>Dhaka</span>
                            <span class="salary">💰 --</span>
                        </div>
                        <div class="deadline">
                            <span class="icon">📅</span>
                            <span>Deadline: 23 Dec 2025</span>
                        </div>
                        <button class="view-details-btn">View Details</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php wp_footer(); ?>
</body>
</html>