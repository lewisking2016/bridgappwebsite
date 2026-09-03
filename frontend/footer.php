<?php
// frontend/footer.php
?>
<footer>
    <div class="container footer-grid" style="grid-template-columns: repeat(auto-fit, minmax(min(100%, 200px), 1fr));">
        <div class="footer-brand">
            <a href="index.php" class="logo">
                <img src="images/bridgapp-logo.png" alt="BridgApp Africa Logo" style="height: 2.2rem; width: auto; object-fit: contain; vertical-align: middle;">
            </a>
            <p>Empowering African businesses with custom software solutions, seamless automation, and compliant system integrations.</p>
            
            <!-- Contact Details -->
            <div style="margin-top: 1.5rem; display: flex; flex-direction: column; gap: 0.75rem; font-size: 0.9rem;">
                <a href="mailto:info@bridgapp.co.ke" style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-secondary);">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                    info@bridgapp.co.ke
                </a>
                <a href="tel:+254727585599" style="display: flex; align-items: center; gap: 0.5rem; color: var(--text-secondary);">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    +254 727 585 599
                </a>
                <span style="display: flex; align-items: flex-start; gap: 0.5rem; color: var(--text-secondary);">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="2" style="flex-shrink: 0; margin-top: 2px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                    Hazina Towers, Utalii Lane, 16th Floor, Nairobi (K)
                </span>
            </div>

            <!-- Social Links -->
            <div style="margin-top: 1.5rem; display: flex; gap: 1rem;">
                <a href="https://web.facebook.com/bridgapp" target="_blank" title="Facebook" style="color: var(--text-muted); transition: color 0.3s ease;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                </a>
                <a href="https://www.linkedin.com/company/106608802/" target="_blank" title="LinkedIn" style="color: var(--text-muted); transition: color 0.3s ease;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                </a>
            </div>
        </div>
        
        <div class="footer-nav">
            <h4>Quick Links</h4>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="services.php">Business Solutions</a>
            <a href="partnership.php">Partnership</a>
            <a href="contact.php">Contact Us</a>
        </div>
        
        <div class="footer-nav">
            <h4>Solutions</h4>
            <a href="services.php#erp">ERP Systems</a>
            <a href="services.php#pos">Duka POS</a>
            <a href="services.php#elearning">eLearning Platforms</a>
            <a href="services.php#rental">Rental Management</a>
            <a href="services.php#warehouse">Warehouse Management</a>
            <a href="services.php#school">School Management</a>
        </div>

        <div class="footer-nav">
            <h4>Get In Touch</h4>
            <a href="contact.php">Free Consulting</a>
            <a href="mailto:info@bridgapp.co.ke">info@bridgapp.co.ke</a>
            <a href="tel:+254727585599">+254 727 585 599</a>
        </div>
    </div>
    
    <div class="container footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> BridgApp Africa. All rights reserved.</p>
        <p><a href="contact.php" style="color: var(--accent); font-weight: 600; text-decoration: underline;">Get a cool website like this</a></p>
    </div>
</footer>

<?php include __DIR__ . '/partials/gsap-scripts.php'; ?>
<script src="assets/js/main.js" defer></script>
</body>
</html>
