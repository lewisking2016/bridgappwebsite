<?php
// frontend/become-an-agent.php
require_once __DIR__ . '/header.php';
?>

<!-- Agent Hero -->
<section class="section" style="padding-top: 10rem; padding-bottom: 5rem; overflow: hidden; position: relative; background: linear-gradient(180deg, #081019 0%, #0b1320 100%);">
    <!-- Background Image with Soft Overlay -->
    <div class="parallax-bg" data-parallax-speed="0.08" style="background-image: linear-gradient(to bottom, rgba(8, 16, 25, 0.28), rgba(8, 16, 25, 0.56)), url('images/bridgimage2.png'); background-size: cover; background-position: center; position: absolute; top: -10%; left: 0; width: 100%; height: 120%; z-index: 1; opacity: 0.66;"></div>
    <div class="glow-orb" style="top: -15%; right: 5%; background: radial-gradient(circle, rgba(11, 214, 152, 0.22) 0%, transparent 70%); z-index: 2;"></div>
    <div class="glow-orb" style="bottom: -20%; left: -10%; background: radial-gradient(circle, rgba(29, 112, 184, 0.22) 0%, transparent 70%); z-index: 2;"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div style="max-width: 700px;">
            <div class="floating-badge" style="margin-bottom: 1.5rem; background: rgba(11, 214, 152, 0.08); border-color: rgba(11, 214, 152, 0.15); color: var(--accent-green);">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                Partner With Us
            </div>
            <div class="mask-up-wrapper" style="margin-bottom: 2rem;">
                <h1 class="mask-up-text in-view" style="font-size: clamp(2.5rem, 5vw, 4rem); line-height: 1.1; letter-spacing: -0.04em; color: #ffffff;">
                    Become a BridgApp Agent.
                </h1>
            </div>
            <div class="reveal-up delay-2" style="max-width: 550px;">
                <p style="font-size: 1.1rem; color: rgba(255, 255, 255, 0.88);">
                    Join our growing partner network across Africa. Represent BridgApp's suite of enterprise software solutions in your region and earn recurring commissions while empowering local businesses.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Partner With BridgApp -->
<section class="section" style="background: var(--bg-secondary); border-top: 1px solid var(--border-color); overflow: hidden; position: relative;">
    <!-- Floating Background Icons -->
    <div class="floating-icons-wrapper">
        <svg class="floating-icon" style="top: 12%; right: 10%; width: 44px; height: 44px; animation: floatPath1 8.5s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
        <svg class="floating-icon green" style="bottom: 15%; left: 8%; width: 46px; height: 46px; animation: floatPath2 10s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
        <svg class="floating-icon green" style="top: 45%; right: 7%; width: 38px; height: 38px; animation: floatPath3 9s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        <svg class="floating-icon" style="top: 20%; left: 12%; width: 42px; height: 42px; animation: floatPath4 8s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
    </div>
    <div class="container">
        <div style="text-align: center; max-width: 600px; margin: 0 auto 5rem auto;" class="reveal-fade">
            <span style="color: var(--accent-light); font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.85rem; display: block; margin-bottom: 1rem;">Why Partner With Us</span>
            <h2 style="font-size: clamp(2rem, 3.5vw, 2.75rem); letter-spacing: -0.02em;">Grow your business with a proven software platform.</h2>
        </div>

        <div class="stagger-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem;">
            <!-- Benefit 1 -->
            <div class="stagger-card">
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                    </div>
                    <h3>Recurring Revenue</h3>
                    <p>Earn ongoing commissions on every license, subscription renewal, and upsell. Build a sustainable income stream from client relationships you maintain.</p>
                </div>
            </div>

            <!-- Benefit 2 -->
            <div class="stagger-card">
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M4 4.5A2.5 2.5 0 0 1 6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5z"></path></svg>
                    </div>
                    <h3>Full Training & Support</h3>
                    <p>Receive comprehensive product training, marketing materials, and dedicated sales support from our engineering and business development team.</p>
                </div>
            </div>

            <!-- Benefit 3 -->
            <div class="stagger-card">
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                    </div>
                    <h3>Regional Exclusivity</h3>
                    <p>Depending on your market, secure exclusive agent rights in your territory. Be the primary BridgApp representative for businesses in your region.</p>
                </div>
            </div>

            <!-- Benefit 4 -->
            <div class="stagger-card">
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline></svg>
                    </div>
                    <h3>Proven Product Suite</h3>
                    <p>Sell market-tested solutions including ERP systems, Duka POS with eTIMS compliance, eLearning platforms, and rental management systems.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- How It Works — Timeline -->
<section class="section" style="overflow: hidden; position: relative;">
    <div class="glow-orb" style="top: -10%; left: -10%; width: 30vw; height: 30vw; background: radial-gradient(circle, rgba(29, 112, 184, 0.06) 0%, transparent 70%);"></div>
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 5rem; align-items: start;">
            <div class="reveal-left">
                <span style="color: var(--accent-light); font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.85rem; display: block; margin-bottom: 1rem;">How It Works</span>
                <h2 style="font-size: 2.25rem; letter-spacing: -0.02em; margin-bottom: 1.5rem;">Your path to becoming a BridgApp Agent.</h2>
                <p style="color: var(--text-secondary); margin-bottom: 2rem;">
                    We've built a streamlined onboarding process to get you selling and earning fast. From application to your first closed deal, our team is beside you every step.
                </p>
                <a href="contact.php?service=agent" class="btn btn-primary btn-arrow">
                    Apply Now
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>

            <div class="reveal-right delay-2">
                <div class="scroll-timeline">
                    <div class="timeline-node">
                        <h4 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-primary);">1. Submit Application</h4>
                        <p style="color: var(--text-secondary); font-size: 0.9rem;">Fill out our agent interest form with your region, business background, and target market.</p>
                    </div>
                    <div class="timeline-node">
                        <h4 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-primary);">2. Interview & Approval</h4>
                        <p style="color: var(--text-secondary); font-size: 0.9rem;">Our partnerships team reviews your application and schedules a brief alignment call.</p>
                    </div>
                    <div class="timeline-node">
                        <h4 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-primary);">3. Product Training</h4>
                        <p style="color: var(--text-secondary); font-size: 0.9rem;">Receive comprehensive training on our ERP, POS, eLearning, and management platforms.</p>
                    </div>
                    <div class="timeline-node">
                        <h4 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-primary);">4. Start Selling</h4>
                        <p style="color: var(--text-secondary); font-size: 0.9rem;">Go to market with demo access, marketing collateral, and dedicated engineering support for your prospects.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section" style="text-align: center; background: var(--bg-secondary); border-top: 1px solid var(--border-color); overflow: hidden; position: relative;">
    <!-- Floating Background Icons -->
    <div class="floating-icons-wrapper">
        <svg class="floating-icon" style="top: 15%; right: 15%; width: 44px; height: 44px; animation: floatPath1 8.5s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
        <svg class="floating-icon green" style="bottom: 15%; left: 15%; width: 46px; height: 46px; animation: floatPath2 10s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
        <svg class="floating-icon green" style="top: 45%; right: 10%; width: 38px; height: 38px; animation: floatPath3 9s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        <svg class="floating-icon" style="top: 25%; left: 10%; width: 42px; height: 42px; animation: floatPath4 8s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
    </div>
    <div class="glow-orb" style="top: -20%; left: 30%; width: 40vw; height: 40vw; background: radial-gradient(circle, rgba(11, 214, 152, 0.06) 0%, transparent 70%);"></div>
    <div class="container">
        <div class="reveal-scale">
            <h2 style="font-size: clamp(2.25rem, 4vw, 3.25rem); letter-spacing: -0.03em; margin-bottom: 1.5rem;">Ready to grow with us?</h2>
            <p style="color: var(--text-secondary); max-width: 550px; margin: 0 auto 3rem auto; font-size: 1.1rem;">
                Join our network of technology partners across East Africa. Contact us today to learn more about the agent programme.
            </p>
            <div style="display: flex; gap: 1.5rem; justify-content: center; flex-wrap: wrap;">
                <a href="contact.php?service=agent" class="btn btn-primary btn-arrow">
                    Apply as Agent
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
                <a href="tel:+254727585599" class="btn btn-secondary">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    Call +254 727 585 599
                </a>
            </div>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/footer.php';
?>
