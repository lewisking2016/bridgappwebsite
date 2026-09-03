<?php
// frontend/contact.php
require_once __DIR__ . '/header.php';

// Get selected service from URL parameter
// 'agent' is a legacy alias for 'partner' — redirect old bookmarks seamlessly
$selectedService = isset($_GET['service']) ? $_GET['service'] : '';
if ($selectedService === 'agent') {
    $selectedService = 'partner';
}
?>

<div style="position: relative; overflow: hidden; width: 100%;">
    <!-- Floating Background Icons Distributed Across Entire Page -->
    <div class="floating-icons-wrapper">
        <!-- Icon 1: Mail (Top Right) -->
        <svg class="floating-icon" style="top: 8%; right: 12%; width: 50px; height: 50px; animation: floatPath1 9s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
        
        <!-- Icon 2: Code (Bottom Left) -->
        <svg class="floating-icon green" style="top: 78%; left: 8%; width: 56px; height: 56px; animation: floatPath2 11s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
        
        <!-- Icon 3: Phone (Middle Right) -->
        <svg class="floating-icon green" style="top: 42%; right: 6%; width: 44px; height: 44px; animation: floatPath3 8s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        
        <!-- Icon 4: Terminal / Gear (Top Left) -->
        <svg class="floating-icon" style="top: 15%; left: 15%; width: 44px; height: 44px; animation: floatPath4 9s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
        
        <!-- Icon 5: Message Square (Middle Left) -->
        <svg class="floating-icon" style="top: 35%; left: 5%; width: 42px; height: 42px; animation: floatPath1 8.5s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
        
        <!-- Icon 6: Database (Bottom Right) -->
        <svg class="floating-icon green" style="top: 85%; right: 10%; width: 50px; height: 50px; animation: floatPath3 10.5s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path><path d="M3 12c0 1.66 4 3 9 3s9-1.34 9-3"></path></svg>
        
        <!-- Icon 7: Check Circle (Middle Center-Left) -->
        <svg class="floating-icon green" style="top: 55%; left: 12%; width: 38px; height: 38px; animation: floatPath4 7.5s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
        
        <!-- Icon 8: Shield (Middle Right-Center) -->
        <svg class="floating-icon" style="top: 25%; right: 35%; width: 44px; height: 44px; animation: floatPath2 9.5s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
        
        <!-- Icon 9: Map Pin (Bottom Center-Left) -->
        <svg class="floating-icon" style="top: 68%; left: 45%; width: 40px; height: 40px; animation: floatPath1 9.2s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
    </div>

    <!-- Contact Header -->
    <section class="section" style="padding-top: 10rem; padding-bottom: 4rem; overflow: hidden; position: relative; background: linear-gradient(180deg, #081019 0%, #0b1320 100%);">
        <div class="parallax-bg" data-parallax-speed="0.08" style="background-image: linear-gradient(to bottom, rgba(8, 16, 25, 0.28), rgba(8, 16, 25, 0.56)), url('images/bridgapphero.png'); background-size: cover; background-position: center; position: absolute; top: -10%; left: 0; width: 100%; height: 120%; z-index: 1; opacity: 0.6;"></div>
        <div class="glow-orb" style="top: 0; right: 5%; background: radial-gradient(circle, rgba(29, 112, 184, 0.22) 0%, transparent 70%);"></div>
        <div class="container" style="position: relative; z-index: 10;">
            <div style="max-width: 650px;">
                <div class="mask-up-wrapper" style="margin-bottom: 1.5rem;">
                    <span class="mask-up-text in-view" style="color: #ffffff; font-weight: 700; text-transform: uppercase; letter-spacing: 0.15em; font-size: 0.88rem;">
                        Get in Touch
                    </span>
                </div>
                <div class="mask-up-wrapper" style="margin-bottom: 2rem;">
                    <h1 class="mask-up-text in-view" style="font-size: clamp(2.5rem, 5vw, 4rem); line-height: 1.1; letter-spacing: -0.04em; color: #ffffff; animation-delay: 0.15s;">
                        Let's build something efficient.
                    </h1>
                </div>
                <div class="mask-up-wrapper">
                    <p class="mask-up-text in-view" style="font-size: 1.1rem; color: rgba(255, 255, 255, 0.88); animation-delay: 0.3s;">
                        Describe your project or compliance needs, and our technical leads will get back to you within 24 hours.
                    </p>
                </div>
            </div>
        </div>
    </section>

<!-- Contact Form and Details Section -->
<section class="section" style="background: var(--bg-secondary); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
    <div class="container">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(min(100%, 300px), 1fr)); gap: 4rem; align-items: start;">
            
            <!-- Contact Details -->
            <div class="reveal-left">
                <h2 style="font-size: 2rem; letter-spacing: -0.02em; margin-bottom: 2rem;">Information</h2>
                
                <div style="display: flex; flex-direction: column; gap: 2.5rem; color: var(--text-secondary);">
                    <div>
                        <h4 style="color: var(--text-primary); margin-bottom: 0.5rem; font-size: 1.1rem;">Nairobi Office</h4>
                        <p>Hazina Towers, Utalii Lane</p>
                        <p>16th Floor, Nairobi, Kenya</p>
                    </div>
                    
                    <div>
                        <h4 style="color: var(--text-primary); margin-bottom: 0.5rem; font-size: 1.1rem;">Direct Inquiries</h4>
                        <p>Email: info@bridgapp.co.ke</p>
                        <p>Phone: +254 727 585 599</p>
                    </div>
                </div>
            </div>
            
            <!-- Interactive Form Panel -->
            <div class="reveal-fade" style="transition-delay: 0.15s;">
                <!-- Alert Box Container -->
                <div id="alert-box" class="alert-box"></div>
                
                <?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<form id="contact-form" novalidate>
                    <input type="hidden" name="csrf_token" value="<?php echo htmlspecialchars($_SESSION['csrf_token']); ?>">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="name@company.com" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="service_type" class="form-label">Project Type</label>
                        <select id="service_type" name="service_type" class="form-control" required style="appearance: none; background-image: url('data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 width=%2224%22 height=%2224%22 viewBox=%220 0 24 24%22 fill=%22none%22 stroke=%22%2394a3b8%22 stroke-width=%222%22 stroke-linecap=%22round%22 stroke-linejoin=%22round%22><polyline points=%226 9 12 15 18 9%22></polyline></svg>'); background-repeat: no-repeat; background-position: right 1.25rem center; background-size: 1.2rem;">
                            <option value="" disabled <?php echo empty($selectedService) ? 'selected' : ''; ?>>Select a solution</option>
                            <option value="erp" <?php echo ($selectedService === 'erp') ? 'selected' : ''; ?>>ERP & CRM Platforms</option>
                            <option value="pos" <?php echo ($selectedService === 'pos') ? 'selected' : ''; ?>>Duka POS Solutions</option>
                            <option value="elearning" <?php echo ($selectedService === 'elearning') ? 'selected' : ''; ?>>eLearning Systems</option>
                            <option value="rental" <?php echo ($selectedService === 'rental') ? 'selected' : ''; ?>>Rental Management Systems</option>
                            <option value="warehouse" <?php echo ($selectedService === 'warehouse') ? 'selected' : ''; ?>>Warehouse Management Systems</option>
                            <option value="school" <?php echo ($selectedService === 'school') ? 'selected' : ''; ?>>School Management Systems</option>
                            <option value="partner" <?php echo ($selectedService === 'partner') ? 'selected' : ''; ?>>Partnership Program</option>
                            <option value="custom" <?php echo ($selectedService === 'custom') ? 'selected' : ''; ?>>Custom Software Integration</option>
                            <option value="other" <?php echo ($selectedService === 'other') ? 'selected' : ''; ?>>Other Inquiries</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message" class="form-label">Message Details</label>
                        <textarea id="message" name="message" class="form-control" rows="5" placeholder="How can we help your business succeed?" required></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-arrow" style="width: 100%; justify-content: center; border: none;">
                        Submit Inquiry
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </button>
                </form>
            </div>
            
        </div>
    </div>
</section>

</div>

<?php
require_once __DIR__ . '/footer.php';
?>
