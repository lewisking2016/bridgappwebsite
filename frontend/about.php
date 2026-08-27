<?php
// frontend/about.php
require_once __DIR__ . '/header.php';
?>

<!-- About Hero Header -->
<section class="section" style="padding-top: 10rem; padding-bottom: 5rem; overflow: hidden; position: relative; background: linear-gradient(180deg, #081019 0%, #0b1320 100%);">
    <!-- Background Image with Soft Overlay -->
    <div class="parallax-bg" data-parallax-speed="0.08" style="background-image: linear-gradient(to bottom, rgba(8, 16, 25, 0.28), rgba(8, 16, 25, 0.56)), url('images/bridgimage2.png'); background-size: cover; background-position: center; position: absolute; top: -10%; left: 0; width: 100%; height: 120%; z-index: 1; opacity: 0.66;"></div>
    <div class="glow-orb" style="bottom: 10%; left: -5%; background: radial-gradient(circle, rgba(29, 112, 184, 0.22) 0%, transparent 70%); z-index: 2;"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div style="max-width: 700px;">
            <div class="mask-up-wrapper" style="margin-bottom: 1.5rem;">
                <span class="mask-up-text in-view" style="color: #ffffff; font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; font-size: 0.88rem;">
                    Our Mission
                </span>
            </div>
            <div class="mask-up-wrapper" style="margin-bottom: 2rem;">
                <h1 class="mask-up-text in-view" style="font-size: clamp(2.5rem, 5vw, 4rem); line-height: 1.1; letter-spacing: -0.04em; color: #ffffff; animation-delay: 0.15s;">
                    Engineering efficiency for the African digital ecosystem.
                </h1>
            </div>
            <div class="mask-up-wrapper">
                <p class="mask-up-text in-view" style="font-size: 1.1rem; color: rgba(255, 255, 255, 0.88); animation-delay: 0.3s;">
                    BridgApp Africa is a developer-centric software consultancy. We build scalable digital bridges that connect operations, compliance, and commerce.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values and Philosophy -->
<section class="section" style="background: var(--bg-secondary); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 4rem;">
            <div class="reveal-left">
                <h2 style="font-size: 2rem; letter-spacing: -0.02em; margin-bottom: 1.5rem;">The BridgApp Philosophy</h2>
                <p style="color: var(--text-secondary); margin-bottom: 1.5rem;">
                    We believe that corporate software shouldn't feel like a legacy compromise. Our applications combine lightweight frontends, highly optimized SQL backends, and responsive user flows.
                </p>
                <p style="color: var(--text-secondary);">
                    Whether deployment is on dedicated servers or cost-effective cPanel hosting, we design modules with low resource footprints, high stability, and seamless scalability.
                </p>
            </div>
            
            <div class="reveal-fade" style="transition-delay: 0.2s; display: flex; flex-direction: column; gap: 2rem;">
                <div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem; color: var(--text-primary);">Minimalist Architecture</h3>
                    <p style="color: var(--text-secondary); font-size: 0.95rem;">
                        No unnecessary bloatware. We write clean, optimized code that operates efficiently under peak user load.
                    </p>
                </div>
                <div>
                    <h3 style="font-size: 1.25rem; margin-bottom: 0.5rem; color: var(--text-primary);">Secure & Compliant</h3>
                    <p style="color: var(--text-secondary); font-size: 0.95rem;">
                        Data isolation, parameterized database queries, and direct API handshakes with regulatory databases like KRA eTIMS.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team & Interactive Settle Animation Display -->
<section class="section">
    <div class="container">
        <div style="text-align: center; max-width: 600px; margin: 0 auto 5rem auto;" class="reveal-fade">
            <span style="color: var(--accent-light); font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.85rem; display: block; margin-bottom: 1rem;">Our Workspace</span>
            <h2 style="font-size: 2.25rem; letter-spacing: -0.02em;">Designed for collaboration.</h2>
        </div>
        
        <!-- Showcase Settle Image grids -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2.5rem;">
            <!-- Settle Card 1 -->
            <div class="settle-container" style="height: 400px; background: var(--bg-surface);">
                <div class="settle-img" style="width: 100%; height: 100%; overflow: hidden;">
                    <img src="images/bridgimage3.png" alt="Collaborative Coding Space at BridgApp Nairobi Dev Center" width="800" height="400" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                </div>
                <div class="floating-overlay">
                    <h4 style="font-size: 1.1rem; margin-bottom: 0.25rem;">Nairobi Dev Center</h4>
                    <p style="color: var(--text-secondary); font-size: 0.85rem;">Where our system blueprints are engineered.</p>
                </div>
            </div>
            
            <!-- Settle Card 2 -->
            <div class="settle-container" style="height: 400px; background: var(--bg-surface);">
                <div class="settle-img" style="width: 100%; height: 100%; overflow: hidden;">
                    <img src="images/bridgimage4.png" alt="System Architecture Office at BridgApp Quality Assurance Lab" width="800" height="400" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                </div>
                <div class="floating-overlay">
                    <h4 style="font-size: 1.1rem; margin-bottom: 0.25rem;">Quality Assurance Lab</h4>
                    <p style="color: var(--text-secondary); font-size: 0.85rem;">Rigorous performance and compliance testing.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/footer.php';
?>
