<?php
// frontend/404.php
http_response_code(404);
require_once __DIR__ . '/header.php';
?>

<section class="section" style="padding-top: 12rem; padding-bottom: 8rem; text-align: center; position: relative; overflow: hidden; background: linear-gradient(180deg, #081019 0%, #0b1320 100%);">
    <div class="parallax-bg" data-parallax-speed="0.06" style="background-image: linear-gradient(to bottom, rgba(8, 16, 25, 0.28), rgba(8, 16, 25, 0.56)), url('images/bridgapphero.png'); background-size: cover; background-position: center; position: absolute; top: -10%; left: 0; width: 100%; height: 120%; z-index: 1; opacity: 0.5;"></div>
    <div class="glow-orb" style="top: 20%; left: 50%; transform: translateX(-50%); background: radial-gradient(circle, rgba(29, 112, 184, 0.18) 0%, transparent 70%); z-index: 2;"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div class="reveal-fade">
            <p style="font-size: clamp(6rem, 12vw, 10rem); font-weight: 800; letter-spacing: -0.06em; line-height: 1; margin-bottom: 1.5rem; background: linear-gradient(135deg, var(--accent) 0%, var(--accent-green) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">404</p>
            <h1 style="font-size: clamp(1.75rem, 3vw, 2.5rem); color: #ffffff; letter-spacing: -0.03em; margin-bottom: 1rem;">Page not found</h1>
            <p style="color: rgba(255, 255, 255, 0.72); max-width: 420px; margin: 0 auto 3rem auto; font-size: 1.05rem; line-height: 1.7;">
                The page you're looking for doesn't exist or has been moved. Let's get you back on track.
            </p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="index.php" class="btn btn-primary btn-arrow">
                    Back to Home
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
                <a href="contact.php" class="btn btn-hero btn-hero--ghost">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/footer.php';
?>
