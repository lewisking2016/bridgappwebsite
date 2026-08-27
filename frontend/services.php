<?php
// frontend/services.php
require_once __DIR__ . '/header.php';
?>

<!-- Services Hero -->
<section class="section" style="padding-top: 10rem; padding-bottom: 5rem; overflow: hidden; position: relative; background: linear-gradient(180deg, #081019 0%, #0b1320 100%);">
    <!-- Background Image with Soft Overlay -->
    <div class="parallax-bg" data-parallax-speed="0.08" style="background-image: linear-gradient(to bottom, rgba(8, 16, 25, 0.28), rgba(8, 16, 25, 0.56)), url('images/bridgimage1.png'); background-size: cover; background-position: center; position: absolute; top: -10%; left: 0; width: 100%; height: 120%; z-index: 1; opacity: 0.66;"></div>
    <div class="glow-orb" style="top: -10%; right: 10%; background: radial-gradient(circle, rgba(29, 112, 184, 0.22) 0%, transparent 70%); z-index: 2;"></div>
    <div class="glow-orb" style="bottom: -20%; left: -5%; background: radial-gradient(circle, rgba(11, 214, 152, 0.18) 0%, transparent 70%); z-index: 2;"></div>
    <div class="container" style="position: relative; z-index: 10;">
        <div style="max-width: 700px;">
            <div class="floating-badge" style="margin-bottom: 1.5rem; background: rgba(11, 214, 152, 0.08); border-color: rgba(11, 214, 152, 0.15); color: var(--accent-green);">
                <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"></path></svg>
                Bespoke Engineering
            </div>
            <div class="mask-up-wrapper" style="margin-bottom: 2rem;">
                <h1 class="mask-up-text in-view" style="font-size: clamp(2.5rem, 5vw, 4rem); line-height: 1.1; letter-spacing: -0.04em; color: #ffffff;">
                    Tailored engineering for unique business workflows.
                </h1>
            </div>
            <div class="reveal-up delay-2" style="max-width: 550px;">
                <p style="font-size: 1.1rem; color: rgba(255, 255, 255, 0.88);">
                    We design software that maps to your operational reality. From financial automation to school portals, we build systems that integrate and scale.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Business Solutions Snapshot -->
<section id="business-solutions" class="section" style="background: var(--bg-secondary); border-top: 1px solid rgba(29, 112, 184, 0.12); border-bottom: 1px solid rgba(29, 112, 184, 0.12);">
    <div class="container">
        <div style="display: grid; grid-template-columns: 1fr; gap: 1.75rem; margin-bottom: 3rem;" class="reveal-fade">
            <span style="color: var(--accent); font-weight: 700; text-transform: uppercase; letter-spacing: 0.12em; font-size: 0.82rem;">Business Solutions</span>
            <h2 style="font-size: clamp(2rem, 3.5vw, 2.9rem); letter-spacing: -0.03em; max-width: 760px;">High-demand services that help businesses grow, sell, and stay visible.</h2>
            <p style="color: var(--text-secondary); max-width: 720px; font-size: 1.02rem;">
                Based on current small-business and marketing trends, the strongest demand clusters are customer management, automation, SEO-led visibility, brand identity, and dependable site support. We have packaged those into practical services below.
            </p>
        </div>

        <div class="stagger-grid" style="grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.5rem;">
            <div class="stagger-card">
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="7" r="4"></circle><path d="M6 21v-2a6 6 0 0 1 12 0v2"></path></svg>
                    </div>
                    <h3>CRM Systems</h3>
                    <p>Organize leads, clients, follow-ups, and sales activity in one place so your team can move faster and close more consistently.</p>
                </div>
            </div>

            <div class="stagger-card">
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20v-6"></path><path d="M6 20h12"></path><path d="M4 4h16v8H4z"></path></svg>
                    </div>
                    <h3>Business Automation</h3>
                    <p>Remove repetitive admin tasks with smart workflows for approvals, reporting, invoicing, reminders, and internal handoffs.</p>
                </div>
            </div>

            <div class="stagger-card">
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="11" r="7"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                    </div>
                    <h3>SEO Management</h3>
                    <p>Improve search visibility with technical SEO, on-page optimization, content structure, and performance tuning for modern search.</p>
                </div>
            </div>

            <div class="stagger-card">
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 20l4-10 4 10 4-14 4 8"></path></svg>
                    </div>
                    <h3>Full Branding</h3>
                    <p>Create a sharper identity with logo refinement, color systems, typography, brand messaging, and consistent presentation across channels.</p>
                </div>
            </div>

            <div class="stagger-card">
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="16" rx="2"></rect><path d="M7 8h10"></path><path d="M7 12h6"></path></svg>
                    </div>
                    <h3>Web Design</h3>
                    <p>Build fast, clean, conversion-focused websites and landing pages that turn attention into inquiries and booked calls.</p>
                </div>
            </div>

            <div class="stagger-card">
                <div class="service-card">
                    <div class="card-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12h14"></path><path d="M12 5l7 7-7 7"></path></svg>
                    </div>
                    <h3>Support & Maintenance</h3>
                    <p>Keep your systems stable with updates, bug fixes, content changes, performance checks, and responsive technical support.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detail Services Section 1: ERP & Custom CRM -->
<section id="erp" class="section" style="background: var(--bg-secondary); border-top: 1px solid var(--border-color); overflow: hidden;">
    <div class="glow-orb" style="top: 20%; right: -15%; width: 30vw; height: 30vw; background: radial-gradient(circle, rgba(29, 112, 184, 0.06) 0%, transparent 70%);"></div>
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 4rem; align-items: center;">
            <div class="reveal-left">
                <div class="floating-badge" style="margin-bottom: 1.5rem;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="9" y1="3" x2="9" y2="21"></line></svg>
                    Enterprise Suite
                </div>
                <h2 style="font-size: 2.25rem; letter-spacing: -0.02em; margin-bottom: 1.5rem;">Enterprise Resource Planning (ERP)</h2>
                <p style="color: var(--text-secondary); margin-bottom: 2rem;">
                    Consolidate your operations into a single control pane. Manage raw inventory, track supplier pipelines, log internal accounting, and view automated executive dashboards.
                </p>
                <ul class="feature-stagger-parent" style="list-style: none; margin-bottom: 2.5rem; display: flex; flex-direction: column; gap: 1rem; color: var(--text-secondary);">
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Automated stock and inventory reconciliation.
                    </li>
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Real-time supplier ledger management.
                    </li>
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Custom dashboards with automated reporting metrics.
                    </li>
                </ul>
                <a href="contact.php?service=erp" class="btn btn-primary btn-arrow">
                    Request Demo
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>
            
            <div class="reveal-right delay-2">
                <div class="service-detail-card" style="min-height: 350px; display: flex; flex-direction: column; justify-content: center;">
                    <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                        <div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span style="font-weight: 600; font-size: 0.9rem;">Inventory Accuracy</span>
                                <span style="font-weight: 700; color: var(--accent);">98%</span>
                            </div>
                            <div class="progress-track">
                                <div class="progress-fill" style="--fill-percent: 98%;"></div>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span style="font-weight: 600; font-size: 0.9rem;">Reporting Automation</span>
                                <span style="font-weight: 700; color: var(--accent);">95%</span>
                            </div>
                            <div class="progress-track">
                                <div class="progress-fill" style="--fill-percent: 95%;"></div>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span style="font-weight: 600; font-size: 0.9rem;">Supplier Integration</span>
                                <span style="font-weight: 700; color: var(--accent);">92%</span>
                            </div>
                            <div class="progress-track">
                                <div class="progress-fill" style="--fill-percent: 92%;"></div>
                            </div>
                        </div>
                        <div style="margin-top: 1rem; padding: 1.25rem; background: rgba(29, 112, 184, 0.04); border-radius: 16px; border: 1px solid rgba(29, 112, 184, 0.08);">
                            <p style="font-size: 0.85rem; color: var(--text-secondary); line-height: 1.5;">
                                <span style="color: var(--accent-light); font-weight: 700;">↗ 40%</span> average reduction in manual data entry after ERP deployment across our client base.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detail Services Section 2: eTIMS POS Solutions -->
<section id="pos" class="section" style="overflow: hidden; position: relative;">
    <div class="glow-orb" style="top: -10%; left: -10%; width: 35vw; height: 35vw; background: radial-gradient(circle, rgba(11, 214, 152, 0.06) 0%, transparent 70%);"></div>
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 4rem; align-items: center;">
            <!-- Timeline Column (Left) -->
            <div class="reveal-left" style="order: 2;">
                <div class="scroll-timeline">
                    <div class="timeline-node">
                        <h4 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-primary);">1. Invoice Generated</h4>
                        <p style="color: var(--text-secondary); font-size: 0.9rem;">Customer checkout triggers automatic tax invoice creation at the POS terminal.</p>
                    </div>
                    <div class="timeline-node">
                        <h4 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-primary);">2. Payload Sealed</h4>
                        <p style="color: var(--text-secondary); font-size: 0.9rem;">Transaction data is encrypted and sealed with a SHA-256 certificate key.</p>
                    </div>
                    <div class="timeline-node">
                        <h4 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-primary);">3. eTIMS Handshake</h4>
                        <p style="color: var(--text-secondary); font-size: 0.9rem;">Secure handshake with KRA eTIMS API validates the signed payload in real-time.</p>
                    </div>
                    <div class="timeline-node">
                        <h4 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-primary);">4. Receipt Confirmed</h4>
                        <p style="color: var(--text-secondary); font-size: 0.9rem;">KRA returns a verified receipt hash — full compliance achieved in under 3 seconds.</p>
                    </div>
                </div>
            </div>
            
            <!-- Content Column (Right) -->
            <div class="reveal-right" style="order: 1;">
                <div class="floating-badge" style="margin-bottom: 1.5rem; background: rgba(11, 214, 152, 0.08); border-color: rgba(11, 214, 152, 0.15); color: var(--accent-green);">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M9 11l3 3L22 4"></path><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"></path></svg>
                    Tax Compliance
                </div>
                <h2 style="font-size: 2.25rem; letter-spacing: -0.02em; margin-bottom: 1.5rem;">Duka POS</h2>
                <p style="color: var(--text-secondary); margin-bottom: 2rem;">
                    Cloud-based point-of-sale and inventory management built for African retail. Zero hardware dependency, real-time multi-branch stock visibility, automated eTIMS compliance, and a simplified interface your staff can learn in minutes.
                </p>
                <ul class="feature-stagger-parent" style="list-style: none; margin-bottom: 2.5rem; display: flex; flex-direction: column; gap: 1rem; color: var(--text-secondary);">
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Multi-branch and warehouse stock management.
                    </li>
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Direct eTIMS invoicing and KRA compliance.
                    </li>
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        HR module — attendance, shifts, payroll, leaves.
                    </li>
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        CRM — lead tracking, campaigns, proposals.
                    </li>
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Service management and repair job sheets.
                    </li>
                </ul>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="https://dukapos.africa" target="_blank" class="btn btn-primary btn-arrow">
                        Visit Duka POS
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="contact.php?service=pos" class="btn btn-secondary">Book a Demo</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Compliance Simulator -->
<section class="section" style="background: linear-gradient(135deg, var(--bg-secondary) 0%, var(--bg-primary) 100%); border-top: 1px solid var(--border-color); overflow: hidden; position: relative;">
    <div class="glow-orb" style="top: -15%; right: -10%; width: 30vw; height: 30vw; background: radial-gradient(circle, rgba(11, 214, 152, 0.06) 0%, transparent 70%);"></div>
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 5rem; align-items: center;">
            <div class="reveal-up">
                <div class="floating-badge" style="margin-bottom: 1.5rem;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                    Code Component Demo
                </div>
                <h2 style="font-size: 2.25rem; letter-spacing: -0.02em; margin-bottom: 1.5rem;">Interactive eTIMS API Sandbox</h2>
                <p style="color: var(--text-secondary); margin-bottom: 2rem;">
                    Test our direct KRA compliance pipeline. Input a mock invoice value and trigger a real-time validation handshake to see how we seal transaction payloads.
                </p>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <div style="flex: 1; min-width: 150px;">
                        <label style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-secondary);">Item Description</label>
                        <input type="text" id="sim-item" value="Enterprise ERP Integration" class="form-control" style="padding: 0.75rem 1rem; font-size: 0.9rem;">
                    </div>
                    <div style="width: 120px;">
                        <label style="display: block; font-size: 0.85rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--text-secondary);">Amount (KES)</label>
                        <input type="number" id="sim-amount" value="35000" class="form-control" style="padding: 0.75rem 1rem; font-size: 0.9rem;">
                    </div>
                </div>
                <button id="run-sim-btn" class="btn btn-primary" style="margin-top: 1.5rem; width: 100%; border: none;">
                    Transmit Invoice to KRA
                </button>
            </div>
            
            <div class="reveal-scale delay-2">
                <div class="service-detail-card" style="min-height: 250px; position: relative;">
                    <!-- Ambient Glow inside Sandbox -->
                    <div class="glow-orb" style="width: 150px; height: 150px; top: 10%; right: 10%; background: radial-gradient(circle, rgba(11, 214, 152, 0.08) 0%, transparent 70%);"></div>
                    
                    <h3 style="font-size: 1.15rem; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem; color: var(--text-primary);">
                        <span style="display: inline-block; width: 8px; height: 8px; border-radius: 50%; background: var(--accent-green); animation: pulse 1.5s infinite;"></span>
                        eTIMS Transmission Console
                    </h3>
                    
                    <div id="sim-console" style="display: flex; flex-direction: column; gap: 1rem; font-family: monospace; font-size: 0.85rem; color: var(--text-secondary);">
                        <div class="sim-step" style="color: var(--text-muted);">Console ready. Input transaction details and press transmit...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detail Services Section 3: eLearning Platforms -->
<section id="elearning" class="section" style="background: var(--bg-secondary); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color); overflow: hidden; position: relative;">
    <div class="glow-orb" style="bottom: -10%; right: -10%; width: 35vw; height: 35vw; background: radial-gradient(circle, rgba(29, 112, 184, 0.06) 0%, transparent 70%);"></div>
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 4rem; align-items: center;">
            <div class="reveal-left">
                <div class="floating-badge" style="margin-bottom: 1.5rem; background: rgba(29, 112, 184, 0.08); border-color: rgba(29, 112, 184, 0.15); color: var(--accent);">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M4 4.5A2.5 2.5 0 0 1 6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5z"></path></svg>
                    Educational Portals
                </div>
                <h2 style="font-size: 2.25rem; letter-spacing: -0.02em; margin-bottom: 1.5rem;">eLearning & Student Portals</h2>
                <p style="color: var(--text-secondary); margin-bottom: 2rem;">
                    Empower students and staff with custom learning spaces. Manage syllabi, handle assignment workflows, publish grade cards, and track tuition billing securely in one place.
                </p>
                <ul class="feature-stagger-parent" style="list-style: none; margin-bottom: 2.5rem; display: flex; flex-direction: column; gap: 1rem; color: var(--text-secondary);">
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Intuitive virtual classroom and quiz workflows.
                    </li>
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Custom student profiles and attendance logs.
                    </li>
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Flexible fee collection and receipting portals.
                    </li>
                </ul>
                <a href="contact.php?service=elearning" class="btn btn-primary btn-arrow">
                    Request Education Demo
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>
            
            <div class="reveal-right delay-2">
                <div class="service-detail-card" style="min-height: 350px; display: flex; flex-direction: column; justify-content: center;">
                    <!-- Three stacked eLearning module cards -->
                    <div style="display: flex; flex-direction: column; gap: 1.25rem;">
                        <div class="reveal-up delay-1" style="padding: 1.25rem 1.5rem; background: var(--bg-secondary); border-radius: 16px; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 1rem;">
                            <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(29, 112, 184, 0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polygon points="10 8 16 12 10 16 10 8" fill="var(--accent)"></polygon></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 0.95rem; margin-bottom: 0.15rem;">Virtual Classrooms</h4>
                                <p style="color: var(--text-muted); font-size: 0.8rem;">Live sessions, recordings & resources</p>
                            </div>
                        </div>
                        <div class="reveal-up delay-3" style="padding: 1.25rem 1.5rem; background: var(--bg-secondary); border-radius: 16px; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 1rem;">
                            <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(11, 214, 152, 0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent-green)" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 0.95rem; margin-bottom: 0.15rem;">Assignment Engine</h4>
                                <p style="color: var(--text-muted); font-size: 0.8rem;">Auto-grading & plagiarism checks</p>
                            </div>
                        </div>
                        <div class="reveal-up delay-5" style="padding: 1.25rem 1.5rem; background: var(--bg-secondary); border-radius: 16px; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 1rem;">
                            <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(29, 112, 184, 0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 0.95rem; margin-bottom: 0.15rem;">Fee Management</h4>
                                <p style="color: var(--text-muted); font-size: 0.8rem;">M-Pesa integration & balance tracking</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detail Services Section 4: Rental Management Systems -->
<section id="rental" class="section" style="border-top: 1px solid var(--border-color); overflow: hidden; position: relative;">
    <div class="glow-orb" style="top: 10%; right: -10%; width: 30vw; height: 30vw; background: radial-gradient(circle, rgba(29, 112, 184, 0.05) 0%, transparent 70%);"></div>
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 4rem; align-items: center;">
            <div class="reveal-left">
                <div class="floating-badge" style="margin-bottom: 1.5rem; background: rgba(29, 112, 184, 0.08); border-color: rgba(29, 112, 184, 0.15); color: var(--accent);">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                    Asset & Property Leasing
                </div>
                <h2 style="font-size: 2.25rem; letter-spacing: -0.02em; margin-bottom: 1.5rem;">Rental Management Systems</h2>
                <p style="color: var(--text-secondary); margin-bottom: 2rem;">
                    Track leases, log automated tenant billing cycles, manage maintenance tickets, and accept online payments (M-Pesa / Card) with instant ledger balancing.
                </p>
                <ul class="feature-stagger-parent" style="list-style: none; margin-bottom: 2.5rem; display: flex; flex-direction: column; gap: 1rem; color: var(--text-secondary);">
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Automated lease reminders and rent invoicing.
                    </li>
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Tenant payment tracking via integrated M-Pesa.
                    </li>
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Lease expiry alerts and utility cost logging.
                    </li>
                </ul>
                <a href="contact.php?service=rental" class="btn btn-primary btn-arrow">
                    Inquire Rental System
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>
            
            <div class="reveal-right delay-2">
                <div class="service-detail-card" style="min-height: 350px; display: flex; flex-direction: column; justify-content: center;">
                    <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                        <div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span style="font-weight: 600; font-size: 0.9rem;">Rent Collection Efficiency</span>
                                <span style="font-weight: 700; color: var(--accent);">99.4%</span>
                            </div>
                            <div class="progress-track">
                                <div class="progress-fill" style="--fill-percent: 99.4%;"></div>
                            </div>
                        </div>
                        <div>
                            <div style="display: flex; justify-content: space-between; margin-bottom: 0.5rem;">
                                <span style="font-weight: 600; font-size: 0.9rem;">Automated Invoicing Accuracy</span>
                                <span style="font-weight: 700; color: var(--accent);">100%</span>
                            </div>
                            <div class="progress-track">
                                <div class="progress-fill" style="--fill-percent: 100%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detail Services Section 5: Warehouse & Stock Management -->
<section id="warehouse" class="section" style="background: var(--bg-secondary); border-top: 1px solid var(--border-color); overflow: hidden; position: relative;">
    <div class="glow-orb" style="top: -10%; left: -10%; width: 35vw; height: 35vw; background: radial-gradient(circle, rgba(11, 214, 152, 0.05) 0%, transparent 70%);"></div>
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 4rem; align-items: center;">
            <!-- Timeline (Left) -->
            <div class="reveal-left" style="order: 2;">
                <div class="scroll-timeline">
                    <div class="timeline-node">
                        <h4 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-primary);">1. Item Intake</h4>
                        <p style="color: var(--text-secondary); font-size: 0.9rem;">Scan barcodes or RFID tags to log incoming raw materials or items instantly.</p>
                    </div>
                    <div class="timeline-node">
                        <h4 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-primary);">2. Smart Bin Assignment</h4>
                        <p style="color: var(--text-secondary); font-size: 0.9rem;">System assigns shelf paths, optimizing physical picking routes for staff.</p>
                    </div>
                    <div class="timeline-node">
                        <h4 style="font-size: 1.05rem; margin-bottom: 0.35rem; color: var(--text-primary);">3. Automatic Reorder Alerts</h4>
                        <p style="color: var(--text-secondary); font-size: 0.9rem;">Low-stock counts auto-trigger purchase orders to connected suppliers.</p>
                    </div>
                </div>
            </div>
            
            <!-- Content (Right) -->
            <div class="reveal-right" style="order: 1;">
                <div class="floating-badge" style="margin-bottom: 1.5rem; background: rgba(11, 214, 152, 0.08); border-color: rgba(11, 214, 152, 0.15); color: var(--accent-green);">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                    Logistics & Supply
                </div>
                <h2 style="font-size: 2.25rem; letter-spacing: -0.02em; margin-bottom: 1.5rem;">Warehouse Management Systems</h2>
                <p style="color: var(--text-secondary); margin-bottom: 2rem;">
                    Gain end-to-end operational visibility. Track batch numbers, monitor inventory shelves across multiple geographical warehouses, and optimize supply chains.
                </p>
                <ul class="feature-stagger-parent" style="list-style: none; margin-bottom: 2.5rem; display: flex; flex-direction: column; gap: 1rem; color: var(--text-secondary);">
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Multi-warehouse inventory synchronization.
                    </li>
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Smart pathing and barcode tracking.
                    </li>
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Supplier procurement triggers and alerts.
                    </li>
                </ul>
                <a href="contact.php?service=warehouse" class="btn btn-primary btn-arrow">
                    Request Logistics Demo
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Detail Services Section 6: School Management Portals -->
<section id="school" class="section" style="border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color); overflow: hidden; position: relative;">
    <div class="glow-orb" style="bottom: -10%; right: -10%; width: 35vw; height: 35vw; background: radial-gradient(circle, rgba(29, 112, 184, 0.05) 0%, transparent 70%);"></div>
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 4rem; align-items: center;">
            <div class="reveal-left">
                <div class="floating-badge" style="margin-bottom: 1.5rem; background: rgba(29, 112, 184, 0.08); border-color: rgba(29, 112, 184, 0.15); color: var(--accent);">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 10v6M2 10l10-5 10 5-10 5z"></path><path d="M6 12v5c0 2 2 3 6 3s6-1 6-3v-5"></path></svg>
                    Academic Administration
                </div>
                <h2 style="font-size: 2.25rem; letter-spacing: -0.02em; margin-bottom: 1.5rem;">School Management Systems</h2>
                <p style="color: var(--text-secondary); margin-bottom: 2rem;">
                    A unified portal for school managers. Keep student registers, log staff tasks, generate report cards, and track school transport logistics.
                </p>
                <ul class="feature-stagger-parent" style="list-style: none; margin-bottom: 2.5rem; display: flex; flex-direction: column; gap: 1rem; color: var(--text-secondary);">
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Unified student admission and parent database.
                    </li>
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Staff payroll, tasks, and attendance tracking.
                    </li>
                    <li class="feature-item" style="display: flex; align-items: center; gap: 0.75rem;">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="var(--accent-light)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Fee statements, M-Pesa push invoice reconciliations.
                    </li>
                </ul>
                <a href="contact.php?service=school" class="btn btn-primary btn-arrow">
                    Inquire School System
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                </a>
            </div>
            
            <div class="reveal-right delay-2">
                <div class="service-detail-card" style="min-height: 350px; display: flex; flex-direction: column; justify-content: center;">
                    <div style="display: flex; flex-direction: column; gap: 1.25rem;">
                        <div class="reveal-up delay-1" style="padding: 1.25rem 1.5rem; background: var(--bg-secondary); border-radius: 16px; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 1rem;">
                            <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(29, 112, 184, 0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 0.95rem; margin-bottom: 0.15rem;">Parent Portal</h4>
                                <p style="color: var(--text-muted); font-size: 0.8rem;">Real-time reports & fee status updates</p>
                            </div>
                        </div>
                        <div class="reveal-up delay-3" style="padding: 1.25rem 1.5rem; background: var(--bg-secondary); border-radius: 16px; border: 1px solid var(--border-color); display: flex; align-items: center; gap: 1rem;">
                            <div style="width: 40px; height: 40px; border-radius: 10px; background: rgba(11, 214, 152, 0.1); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="var(--accent-green)" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                            </div>
                            <div>
                                <h4 style="font-size: 0.95rem; margin-bottom: 0.15rem;">Exam & Grading Module</h4>
                                <p style="color: var(--text-muted); font-size: 0.8rem;">Grading curves & performance charts</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- UzaBiz Live Product Section -->
<section id="uzabiz" class="section" style="background: var(--bg-secondary); border-top: 1px solid var(--border-color); border-bottom: 1px solid var(--border-color); overflow: hidden; position: relative;">
    <div class="glow-orb" style="top: -10%; left: -10%; width: 30vw; height: 30vw; background: radial-gradient(circle, rgba(29, 112, 184, 0.08) 0%, transparent 70%);"></div>
    <div class="container">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 4rem; align-items: center;">
            <div class="reveal-left">
                <div style="display: inline-flex; align-items: center; gap: 0.6rem; padding: 0.5rem 1.25rem; background: rgba(29, 112, 184, 0.06); border: 1px solid rgba(29, 112, 184, 0.15); border-radius: 999px; margin-bottom: 1.5rem;">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="var(--accent)" stroke-width="2.5"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"></path></svg>
                    <span style="color: var(--accent); font-weight: 700; font-size: 0.82rem; text-transform: uppercase; letter-spacing: 0.08em;">Live Product</span>
                </div>
                <h2 style="font-size: clamp(2rem, 3.5vw, 2.8rem); letter-spacing: -0.03em; margin-bottom: 1.5rem;">UzaBiz</h2>
                <p style="color: var(--text-secondary); margin-bottom: 2rem; max-width: 520px;">
                    Omnichannel customer communication platform. Unify WhatsApp, Messenger, and Instagram into one smart inbox with AI chatbots, bulk broadcasts, and automated replies.
                </p>
                <div style="display: flex; flex-wrap: wrap; gap: 0.75rem; margin-bottom: 2.5rem;">
                    <div style="padding: 0.45rem 1rem; border-radius: 999px; background: rgba(29, 112, 184, 0.06); border: 1px solid rgba(29, 112, 184, 0.12); color: var(--accent); font-size: 0.82rem; font-weight: 600;">WhatsApp</div>
                    <div style="padding: 0.45rem 1rem; border-radius: 999px; background: rgba(29, 112, 184, 0.06); border: 1px solid rgba(29, 112, 184, 0.12); color: var(--accent); font-size: 0.82rem; font-weight: 600;">Messenger</div>
                    <div style="padding: 0.45rem 1rem; border-radius: 999px; background: rgba(29, 112, 184, 0.06); border: 1px solid rgba(29, 112, 184, 0.12); color: var(--accent); font-size: 0.82rem; font-weight: 600;">Instagram</div>
                    <div style="padding: 0.45rem 1rem; border-radius: 999px; background: rgba(29, 112, 184, 0.06); border: 1px solid rgba(29, 112, 184, 0.12); color: var(--accent); font-size: 0.82rem; font-weight: 600;">SMS</div>
                    <div style="padding: 0.45rem 1rem; border-radius: 999px; background: rgba(29, 112, 184, 0.06); border: 1px solid rgba(29, 112, 184, 0.12); color: var(--accent); font-size: 0.82rem; font-weight: 600;">Email</div>
                    <div style="padding: 0.45rem 1rem; border-radius: 999px; background: rgba(29, 112, 184, 0.06); border: 1px solid rgba(29, 112, 184, 0.12); color: var(--accent); font-size: 0.82rem; font-weight: 600;">AI Chatbots</div>
                </div>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="https://uzabiz.africa" target="_blank" class="btn btn-primary btn-arrow">
                        Visit UzaBiz
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </a>
                    <a href="contact.php?service=custom" class="btn btn-hero btn-hero--ghost">Book a Demo</a>
                </div>
            </div>
            <div class="reveal-right delay-2">
                <div class="service-detail-card" style="min-height: 350px;">
                    <h3 style="font-size: 1.15rem; margin-bottom: 1.5rem;">Platform Stats</h3>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem;">
                        <div style="text-align: center; padding: 1.25rem; background: var(--bg-secondary); border-radius: 12px; border: 1px solid var(--border-color);">
                            <p style="font-size: 1.75rem; font-weight: 800; color: var(--accent); font-family: var(--font-display);">50M+</p>
                            <p style="font-size: 0.78rem; color: var(--text-muted); margin-top: 0.25rem;">Messages Delivered</p>
                        </div>
                        <div style="text-align: center; padding: 1.25rem; background: var(--bg-secondary); border-radius: 12px; border: 1px solid var(--border-color);">
                            <p style="font-size: 1.75rem; font-weight: 800; color: var(--accent); font-family: var(--font-display);">12K+</p>
                            <p style="font-size: 0.78rem; color: var(--text-muted); margin-top: 0.25rem;">Businesses</p>
                        </div>
                        <div style="text-align: center; padding: 1.25rem; background: var(--bg-secondary); border-radius: 12px; border: 1px solid var(--border-color);">
                            <p style="font-size: 1.75rem; font-weight: 800; color: var(--accent-green); font-family: var(--font-display);">99.9%</p>
                            <p style="font-size: 0.78rem; color: var(--text-muted); margin-top: 0.25rem;">Uptime SLA</p>
                        </div>
                        <div style="text-align: center; padding: 1.25rem; background: var(--bg-secondary); border-radius: 12px; border: 1px solid var(--border-color);">
                            <p style="font-size: 1.75rem; font-weight: 800; color: var(--accent-green); font-family: var(--font-display);">5x</p>
                            <p style="font-size: 0.78rem; color: var(--text-muted); margin-top: 0.25rem;">Higher Open Rates</p>
                        </div>
                    </div>
                    <div style="margin-top: 1.5rem; padding: 1.25rem; background: rgba(29, 112, 184, 0.04); border-radius: 12px; border: 1px solid rgba(29, 112, 184, 0.08);">
                        <p style="font-size: 0.88rem; color: var(--text-secondary); line-height: 1.55;">
                            <span style="color: var(--accent-light); font-weight: 700;">Official Meta Business APIs</span> — WhatsApp Cloud API, Messenger, and Instagram integrations with 14-day free trial on all paid plans.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section" style="text-align: center; overflow: hidden; position: relative;">
    <!-- Floating Background Icons -->
    <div class="floating-icons-wrapper">
        <svg class="floating-icon" style="top: 15%; right: 15%; width: 44px; height: 44px; animation: floatPath1 8.5s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
        <svg class="floating-icon green" style="bottom: 15%; left: 15%; width: 46px; height: 46px; animation: floatPath2 10s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
        <svg class="floating-icon green" style="top: 45%; right: 10%; width: 38px; height: 38px; animation: floatPath3 9s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
        <svg class="floating-icon" style="top: 25%; left: 10%; width: 42px; height: 42px; animation: floatPath4 8s ease-in-out infinite;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 1 1-2.83 2.83l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1.05 1.51V21a2 2 0 0 1-4 0v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 1 1-2.83-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1 0-4h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 1 1 2.83-2.83l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 4 0v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 1 1 2.83 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 0 4h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
    </div>
    <div class="glow-orb" style="top: -20%; left: 30%; width: 40vw; height: 40vw; background: radial-gradient(circle, rgba(29, 112, 184, 0.06) 0%, transparent 70%);"></div>
    <div class="container">
        <div class="reveal-scale">
            <h2 style="font-size: clamp(2.25rem, 4vw, 3.25rem); letter-spacing: -0.03em; margin-bottom: 1.5rem;">Need a custom solution?</h2>
            <p style="color: var(--text-secondary); max-width: 550px; margin: 0 auto 3rem auto; font-size: 1.1rem;">
                Let us architect a bespoke system that fits your exact business workflow. Our engineering leads are ready to discuss your project.
            </p>
            <a href="contact.php" class="btn btn-primary btn-arrow">
                Start a Project
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="arrow-icon"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
        </div>
    </div>
</section>

<?php
require_once __DIR__ . '/footer.php';
?>
