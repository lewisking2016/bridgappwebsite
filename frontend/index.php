<?php
// frontend/index.php
require_once __DIR__ . '/header.php';
?>

<section class="hero-section" id="hero">
    <div class="hero-bg" aria-hidden="true">
        <div class="hero-bg__image" data-parallax-speed="0.06"></div>
        <div class="hero-bg__overlay"></div>
    </div>

    <div class="container hero-content">
        <p class="hero-eyebrow">Automation &amp; digital transformation</p>

        <h1 class="hero-title">
            Bridging operations with <span class="hero-title__accent">intelligent code.</span>
        </h1>

        <p class="hero-tagline">
            Custom enterprise software, Duka POS, and eTIMS-ready integrations for teams that need dependable systems.
        </p>

        <div class="hero-cta-row">
            <a href="services.php" class="btn btn-hero btn-hero--primary btn-arrow">
                Explore Solutions
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a href="contact.php" class="btn btn-hero btn-hero--ghost">Start a Conversation</a>
        </div>
    </div>
</section>

<section class="section stack-section" id="what-we-do" data-stack-section style="background: var(--bg-secondary); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
    <div class="container">
        <div class="stack-scroll">
            <div class="stack-frame">
            <div class="reveal-left" style="max-width: 620px;">
                <span style="color: var(--accent); font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.82rem; display: block; margin-bottom: 1rem;">What We Do</span>
                <h2 style="font-size: clamp(2rem, 3.5vw, 2.8rem); line-height: 1.15; letter-spacing: -0.03em; margin-bottom: 1.25rem;">
                    Stacked solutions that reveal themselves as you scroll.
                </h2>
                <p style="color: var(--text-secondary); max-width: 38rem; font-size: 0.98rem;">
                    The cards overlap at first, then slide apart one by one so the next capability becomes visible without breaking the rhythm of the page.
                </p>
            </div>

            <div class="stack-stage reveal-fade" data-stack-stage data-stack-count="5" style="transition-delay: 0.15s;">
                <div class="stack-card is-front" data-stack-card data-stack-index="0">
                    <div class="stack-card__eyebrow">01 Automation</div>
                    <h3 class="stack-card__title">Business process automation</h3>
                    <p class="stack-card__body">
                        Turn repetitive admin into structured workflows for approvals, follow-ups, reporting, and task routing. We map how work actually moves through your team, then replace manual handoffs with clear digital steps.
                    </p>
                    <p class="stack-card__detail">
                        From invoice approvals to onboarding checklists, every workflow gets ownership, timestamps, and visibility so nothing stalls in someone's inbox.
                    </p>
                    <div class="stack-card__meta">
                        <div class="stack-card__chip">Approvals</div>
                        <div class="stack-card__chip">Workflow routing</div>
                        <div class="stack-card__chip">Task notifications</div>
                    </div>
                </div>

                <div class="stack-card" data-stack-card data-stack-index="1">
                    <div class="stack-card__eyebrow">02 CRM</div>
                    <h3 class="stack-card__title">Customer relationship management</h3>
                    <p class="stack-card__body">
                        Keep leads, customers, and sales activity in one place so your team can follow up faster and stay organized. Track conversations, deal stages, and account history without juggling spreadsheets or scattered notes.
                    </p>
                    <p class="stack-card__detail">
                        Dashboards show who needs a call today, which quotes are pending, and where revenue is coming from — giving managers a live picture of pipeline health.
                    </p>
                    <div class="stack-card__meta">
                        <div class="stack-card__chip">Lead tracking</div>
                        <div class="stack-card__chip">Sales pipeline</div>
                        <div class="stack-card__chip">Customer history</div>
                    </div>
                </div>

                <div class="stack-card" data-stack-card data-stack-index="2">
                    <div class="stack-card__eyebrow">03 SEO</div>
                    <h3 class="stack-card__title">SEO and search visibility</h3>
                    <p class="stack-card__body">
                        Improve rankings and traffic with technical SEO, clean structure, better metadata, and fast mobile pages. We fix crawl issues, sharpen page titles, and align content with what your audience is actually searching for.
                    </p>
                    <p class="stack-card__detail">
                        Structured data, internal linking, and performance tuning help search engines understand your site — and help visitors find answers without friction.
                    </p>
                    <div class="stack-card__meta">
                        <div class="stack-card__chip">Technical SEO</div>
                        <div class="stack-card__chip">Content structure</div>
                        <div class="stack-card__chip">Page speed</div>
                    </div>
                </div>

                <div class="stack-card" data-stack-card data-stack-index="3">
                    <div class="stack-card__eyebrow">04 Branding</div>
                    <h3 class="stack-card__title">Full branding systems</h3>
                    <p class="stack-card__body">
                        Shape a consistent brand identity with logo refinement, colors, typography, voice, and presentation. We build guidelines your whole team can follow — from social posts to proposals to product screens.
                    </p>
                    <p class="stack-card__detail">
                        A cohesive visual system builds trust at every touchpoint, so customers recognize BridgApp-quality polish whether they land on your site or open a PDF quote.
                    </p>
                    <div class="stack-card__meta">
                        <div class="stack-card__chip">Logo systems</div>
                        <div class="stack-card__chip">Color palette</div>
                        <div class="stack-card__chip">Brand voice</div>
                    </div>
                </div>

                <div class="stack-card" data-stack-card data-stack-index="4">
                    <div class="stack-card__eyebrow">05 Support</div>
                    <h3 class="stack-card__title">Website support and maintenance</h3>
                    <p class="stack-card__body">
                        Keep systems healthy after launch with updates, fixes, content changes, speed checks, and support. We monitor uptime, patch vulnerabilities, and handle the small requests that would otherwise pull your team off core work.
                    </p>
                    <p class="stack-card__detail">
                        Monthly health reports cover performance, broken links, and backup status — so you always know your digital storefront is secure and running smoothly.
                    </p>
                    <div class="stack-card__meta">
                        <div class="stack-card__chip">Bug fixes</div>
                        <div class="stack-card__chip">Content updates</div>
                        <div class="stack-card__chip">Security patches</div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="position: relative;">
    <?php include __DIR__ . '/partials/floating-icons.php'; ?>
    <div class="container">
        <div style="text-align: center; max-width: 640px; margin: 0 auto 4.5rem auto;" class="reveal-fade">
            <span style="color: var(--accent); font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.82rem; display: block; margin-bottom: 1rem;">Our Services</span>
            <h2 style="font-size: clamp(2rem, 3.5vw, 2.8rem); letter-spacing: -0.03em;">Tailored software suites for scale.</h2>
        </div>

        <div class="stagger-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <div class="stagger-card">
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line><line x1="15" y1="3" x2="15" y2="21"></line><line x1="3" y1="9" x2="21" y2="9"></line><line x1="3" y1="15" x2="21" y2="15"></line></svg>
                    </div>
                    <h3>ERP and Custom CRM</h3>
                    <p>Unified databases and workflow tools for teams that need clear oversight across finance, inventory, customers, and reporting.</p>
                    <a href="services.php#erp" class="learn-more">
                        Learn More
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>

            <div class="stagger-card">
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="12" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="8" x2="6.01" y2="8"></line><line x1="6" y1="16" x2="6.01" y2="16"></line></svg>
                    </div>
                    <h3>Duka POS</h3>
                    <p>Retail point-of-sale systems with eTIMS workflows, invoice automation, and outlet-level stock visibility built in.</p>
                    <a href="services.php#pos" class="learn-more">
                        Learn More
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>

            <div class="stagger-card">
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M4 4.5A2.5 2.5 0 0 1 6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5z"></path></svg>
                    </div>
                    <h3>eLearning Platforms</h3>
                    <p>Learning portals with student workflows, structured content delivery, and administrative controls that keep training organized.</p>
                    <a href="services.php#elearning" class="learn-more">
                        Learn More
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section" style="background: var(--bg-secondary); border-top: 1px solid var(--border-color); overflow: hidden;">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr; gap: 4rem; align-items: center;">
            <div class="reveal-left">
                <span style="color: var(--accent); font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.82rem; display: block; margin-bottom: 1rem;">Our Values</span>
                <h2 style="font-size: clamp(2rem, 3.5vw, 2.8rem); letter-spacing: -0.03em; margin-bottom: 1.5rem;">Built on operational integrity and speed.</h2>
                <p style="color: var(--text-secondary); max-width: 560px; margin-bottom: 2.5rem;">
                    We care about fast interfaces, low-latency systems, and code that keeps working after the handoff. From data models to responsive client portals, the details matter.
                </p>
                <a href="about.php" class="btn btn-secondary">About Our Team</a>
            </div>

            <div style="position: relative;">
                <div class="settle-container" style="height: 400px; background: var(--bg-surface);">
                    <div class="settle-img" style="width: 100%; height: 100%; overflow: hidden;">
                        <img src="images/bridgimage1.png" alt="BridgApp Africa workspace and team" width="800" height="400" loading="lazy" style="width: 100%; height: 100%; object-fit: cover; display: block;">
                    </div>
                    <div class="floating-overlay">
                        <h4 style="font-size: 1.1rem; margin-bottom: 0.25rem;">Quality-first infrastructure</h4>
                        <p style="color: var(--text-secondary); font-size: 0.9rem;">Robust systems built to scale with the business, not against it.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials / Social Proof -->
<section class="section" style="background: var(--bg-secondary); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color);">
    <div class="container">
        <div style="text-align: center; max-width: 640px; margin: 0 auto 4rem auto;" class="reveal-fade">
            <span style="color: var(--accent-light); font-weight: 600; text-transform: uppercase; letter-spacing: 0.1em; font-size: 0.85rem; display: block; margin-bottom: 1rem;">Client Outcomes</span>
            <h2 style="font-size: clamp(2rem, 3.5vw, 2.75rem); letter-spacing: -0.03em;">Systems that deliver measurable results.</h2>
        </div>

        <div class="stagger-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem;">
            <div class="stagger-card">
                <div class="service-card" style="background: var(--bg-surface); border-color: rgba(29, 112, 184, 0.12);">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.5rem;">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, var(--accent), #1a63a8); display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; font-size: 1.1rem; font-family: var(--font-display);">JM</div>
                        <div>
                            <h4 style="font-size: 1rem; margin-bottom: 0.1rem;">James Mwangi</h4>
                            <p style="font-size: 0.82rem; color: var(--text-muted);">Operations Director, RetailChain KE</p>
                        </div>
                    </div>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.5rem;">
                        "Our inventory reconciliation dropped from 3 days to under 4 hours after deploying the ERP module. The team at BridgApp understood our workflow before writing a single line of code."
                    </p>
                    <div style="display: flex; gap: 0.5rem;">
                        <div style="padding: 0.35rem 0.85rem; border-radius: 999px; background: rgba(29, 112, 184, 0.06); font-size: 0.78rem; font-weight: 600; color: var(--accent);">ERP</div>
                        <div style="padding: 0.35rem 0.85rem; border-radius: 999px; background: rgba(11, 214, 152, 0.06); font-size: 0.78rem; font-weight: 600; color: var(--accent-green);">Automation</div>
                    </div>
                </div>
            </div>

            <div class="stagger-card">
                <div class="service-card" style="background: var(--bg-surface); border-color: rgba(29, 112, 184, 0.12);">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.5rem;">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, var(--accent-green), #09b87f); display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; font-size: 1.1rem; font-family: var(--font-display);">AO</div>
                        <div>
                            <h4 style="font-size: 1rem; margin-bottom: 0.1rem;">Amina Osman</h4>
                            <p style="font-size: 0.82rem; color: var(--text-muted);">Owner, Swahili Fashion House</p>
                        </div>
                    </div>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.5rem;">
                        "We switched to Duka POS and haven't looked back. eTIMS compliance used to be a nightmare — now it happens automatically with every sale. Our auditors are impressed."
                    </p>
                    <div style="display: flex; gap: 0.5rem;">
                        <div style="padding: 0.35rem 0.85rem; border-radius: 999px; background: rgba(11, 214, 152, 0.06); font-size: 0.78rem; font-weight: 600; color: var(--accent-green);">Duka POS</div>
                        <div style="padding: 0.35rem 0.85rem; border-radius: 999px; background: rgba(29, 112, 184, 0.06); font-size: 0.78rem; font-weight: 600; color: var(--accent);">eTIMS</div>
                    </div>
                </div>
            </div>

            <div class="stagger-card">
                <div class="service-card" style="background: var(--bg-surface); border-color: rgba(29, 112, 184, 0.12);">
                    <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.5rem;">
                        <div style="width: 48px; height: 48px; border-radius: 50%; background: linear-gradient(135deg, #6366f1, #4f46e5); display: flex; align-items: center; justify-content: center; color: #fff; font-weight: 700; font-size: 1.1rem; font-family: var(--font-display);">PK</div>
                        <div>
                            <h4 style="font-size: 1rem; margin-bottom: 0.1rem;">Peter Kamau</h4>
                            <p style="font-size: 0.82rem; color: var(--text-muted);">Head of ICT, Nairobi Technical Institute</p>
                        </div>
                    </div>
                    <p style="color: var(--text-secondary); font-size: 0.95rem; line-height: 1.65; margin-bottom: 1.5rem;">
                        "The eLearning portal transformed how we deliver training to 2,000+ students. Fee collection through M-Pesa integration cut our reconciliation time by 70%."
                    </p>
                    <div style="display: flex; gap: 0.5rem;">
                        <div style="padding: 0.35rem 0.85rem; border-radius: 999px; background: rgba(99, 102, 241, 0.06); font-size: 0.78rem; font-weight: 600; color: #6366f1;">eLearning</div>
                        <div style="padding: 0.35rem 0.85rem; border-radius: 999px; background: rgba(11, 214, 152, 0.06); font-size: 0.78rem; font-weight: 600; color: var(--accent-green);">M-Pesa</div>
                    </div>
                </div>
            </div>
        </div>

        <div style="text-align: center; margin-top: 4rem;" class="reveal-up delay-3">
            <p style="font-size: 0.88rem; color: var(--text-muted); letter-spacing: 0.04em;">Trusted by businesses across Kenya, Uganda, and Tanzania</p>
            <div style="display: flex; justify-content: center; gap: 3rem; margin-top: 1.5rem; opacity: 0.45;">
                <span style="font-family: var(--font-display); font-weight: 700; font-size: 1.1rem; color: var(--text-primary);">RetailChain</span>
                <span style="font-family: var(--font-display); font-weight: 700; font-size: 1.1rem; color: var(--text-primary);">NTI</span>
                <span style="font-family: var(--font-display); font-weight: 700; font-size: 1.1rem; color: var(--text-primary);">Swahili FH</span>
            </div>
        </div>
    </div>
</section>

<section class="section" style="text-align: center; border-bottom: 1px solid var(--border-color); position: relative;">
    <?php include __DIR__ . '/partials/floating-icons.php'; ?>
    <div class="container reveal-fade">
        <h2 style="font-size: clamp(2.25rem, 4vw, 3.25rem); letter-spacing: -0.03em; margin-bottom: 1.5rem;">Ready to automate your operations?</h2>
        <p style="color: var(--text-secondary); max-width: 560px; margin: 0 auto 2.75rem auto; font-size: 1.05rem;">
            If your current systems feel fragmented, let’s design a cleaner operating layer around the way your team actually works.
        </p>
        <a href="contact.php" class="btn btn-primary btn-arrow">
            Start a Project
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
        </a>
    </div>
</section>

<?php
require_once __DIR__ . '/footer.php';
?>
