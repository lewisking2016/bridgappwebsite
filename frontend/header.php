<?php
// frontend/header.php

// Helper function to check active menu item
function isPageActive($pageName) {
    $currentFile = basename($_SERVER['SCRIPT_NAME']);
    return ($currentFile === $pageName) ? 'active-page' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BridgApp Africa | Custom Software & Business Automation</title>
    <meta name="description" content="BridgApp Africa specializes in custom software development, ERP systems, eTIMS compliant POS systems, eLearning, and business automation platforms in Kenya and across Africa.">
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
    
    <!-- Open Graph -->
    <meta property="og:title" content="BridgApp Africa | Custom Software & Business Automation">
    <meta property="og:description" content="Custom enterprise software, Duka POS, and eTIMS-ready integrations for teams that need dependable systems.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://bridgapp.considone.co.ke">
    <meta property="og:image" content="https://bridgapp.considone.co.ke/frontend/images/bridgapp-logo.png">
    <meta property="og:site_name" content="BridgApp Africa">
    <meta property="og:locale" content="en_KE">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="BridgApp Africa | Custom Software & Business Automation">
    <meta name="twitter:description" content="Custom enterprise software, Duka POS, and eTIMS-ready integrations for teams that need dependable systems.">
    <meta name="twitter:image" content="https://bridgapp.considone.co.ke/frontend/images/bridgapp-logo.png">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://bridgapp.considone.co.ke<?php echo htmlspecialchars($_SERVER['REQUEST_URI'] ?? '/'); ?>">
    
    <!-- JSON-LD Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "BridgApp Africa",
        "description": "Custom enterprise software, Duka POS, and eTIMS-ready integrations for teams that need dependable systems.",
        "url": "https://bridgapp.considone.co.ke",
        "logo": "https://bridgapp.considone.co.ke/frontend/images/bridgapp-logo.png",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Hazina Towers, Utalii Lane, 16th Floor",
            "addressLocality": "Nairobi",
            "addressCountry": "KE"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+254-727-585-599",
            "contactType": "customer service",
            "email": "info@bridgapp.co.ke"
        },
        "sameAs": [
            "https://www.linkedin.com/company/106608802/",
            "https://web.facebook.com/bridgapp"
        ],
        "areaServed": ["KE", "UG", "TZ"],
        "serviceType": ["ERP Systems", "POS Systems", "eLearning Platforms", "Rental Management", "Warehouse Management", "School Management", "Business Automation", "SEO", "Web Design"]
    }
    </script>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header id="site-header">
    <div class="container nav-container">
        <a href="index.php" class="logo">
            <img src="images/bridgapp-logo.png" alt="BridgApp Africa Logo" style="height: 2.2rem; width: auto; object-fit: contain; vertical-align: middle;">
        </a>
        
        <nav>
            <ul class="nav-links" id="nav-links">
                <li><a href="index.php" class="nav-link <?php echo isPageActive('index.php'); ?>">Home</a></li>
                <li><a href="about.php" class="nav-link <?php echo isPageActive('about.php'); ?>">About Us</a></li>
                <li><a href="services.php" class="nav-link <?php echo isPageActive('services.php'); ?>">Business Solutions</a></li>
                <li><a href="partnership.php" class="nav-link <?php echo isPageActive('partnership.php'); ?>">Partnership</a></li>
                <li><a href="contact.php" class="nav-link <?php echo isPageActive('contact.php'); ?>">Contact Us</a></li>
            </ul>
        </nav>
        
        <a href="contact.php" class="btn btn-primary" style="padding: 0.625rem 1.25rem; font-size: 0.85rem; display: none;" id="header-cta">Free Consulting</a>
        
        <button class="mobile-nav-toggle" id="mobile-toggle" aria-label="Toggle navigation" aria-expanded="false">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>
