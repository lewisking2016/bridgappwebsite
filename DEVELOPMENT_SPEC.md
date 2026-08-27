# BridgApp Africa - Comprehensive AI Development Specification

This document outlines the architecture, motion principles, visual aesthetics, backend design, and workspace structure of the new **BridgApp Africa** website. Any AI coding assistant working on this project should read this document to understand the codebase and immediately begin extending or modifying the features without needing to ask the user clarifying questions.

---

## 1. Project Overview & Directory Structure

BridgApp Africa is a developer-centric software consultancy specializing in enterprise business automation (ERP/CRM), tax compliance (KRA eTIMS API integrations), eLearning platforms, and warehouse management software.

The codebase is strictly separated into **Frontend** and **Backend** directories.

```
bridgappwebsite/
├── backend/
│   ├── logs/
│   │   └── inquiries_fallback.log   # Created dynamically if database is offline
│   ├── config.php                   # MySQL connection strings & helper
│   ├── contact_submit.php           # Form processor, sanitization & fallback logger
│   └── db_setup.sql                 # MySQL schema creation script
├── frontend/
│   ├── assets/
│   │   ├── css/
│   │   │   └── style.css            # CSS Variables, Animations & Responsive Rules
│   │   └── js/
│   │       └── main.js              # IntersectionObservers, Scroll Parallax & AJAX
│   ├── about.php                    # Philosophy, Settle container, parallax overlays
│   ├── become-an-agent.php          # Agent registration page & timeline nodes
│   ├── contact.php                  # Interactive AJAX-driven contact form
│   ├── footer.php                   # Reusable footers & javascript loader
│   ├── header.php                   # Navigation drawer & dynamic page active markers
│   ├── index.php                    # Landing page, mask-up titles, staggered grid
│   └── services.php                 # Detailed solutions (ERP, POS, eLearning, Rental, Warehouse, School)
└── index.php                        # Root index file. Handles immediate redirect to frontend/index.php
```

---

## 2. Design System & Aesthetics ("The Vibe")

The website uses a **High-Damping Minimalist** white visual theme matching the BridgApp branding:
- **Primary Background**: Pure white (`#ffffff`).
- **Surface Panels**: Sleek light slate/grey (`#f8fafc` and `#ffffff` cards).
- **Accents**: Brand blue from logo gapp (`#1d70b8`), Brand green from logo arrows (`#0bd698`), and Dark slate from logo bridg (`#2e3d49`).
- **Ambient Glow**: Soft blue and green radial gradients in the background to emulate the logo colors.
- **Typography**: Display typography uses **Outfit** (modern, bold geometric sans-serif); body copy uses **Plus Jakarta Sans** (clean, highly readable).
- **Shadows**: Soft, diffused weightless shadows for card lift and hover states.
- **Glassmorphism**: Backdrop blur filter (`backdrop-filter: blur(12px)`) combined with translucent borders and backgrounds on headers and active modals.

---

## 3. The Mercer Motion Language (Core Principles)

Motion is semantic and functional, used to guide visual attention. The rules below must be followed for all page elements:

1. **Ease-Out Cubic Timing**:
   - Every transition defaults to: `transition: all 0.6s cubic-bezier(0.22, 1, 0.36, 1);`
2. **Text "Mask-Up" Entrance**:
   - Header titles and subheadings are wrapped in a container block with `overflow: hidden;`. On load or viewport entrance, they animate from `transform: translateY(100%)` and `opacity: 0` to `translateY(0)` and `opacity: 1` over `0.8s`.
3. **Low-Intensity Background Parallax**:
   - Set background glow layers or structural shapes to scroll at a different speed factor (`0.1` to `0.12`) relative to the foreground. Animations are managed with `requestAnimationFrame` to prevent frame-rate drops.
4. **Column-Staggered Grid Reveals**:
   - When grid items enter the viewport, they fade and translate up sequentially. An `IntersectionObserver` triggers the grid, and JS sets staggered timeouts (`index * 100ms`) to add the `.in-view` class.
5. **Interactive Card Scaling**:
   - Cards scale to `1.02x` on hover.
   - Internal card icons translate `5px` upward on card hover.
   - Card border shifts from dark slate to high-contrast cobalt blue.
   - Learn More CTAs shift their arrow icon `4px` to the right.
6. **"Settle" Image Reveal**:
   - Large graphics or team workspace images scale down from `1.06x` to `1.0x` as they scroll into view, making the graphic look like it is "landing" softly onto the grid.
7. **Permanent Viewport Entrance Triggers**:
   - Once elements scroll into view and trigger the entrance animation, they remain permanently visible (`observer.unobserve` is called) to prevent content flickering or disappearing when scrolling near viewport edges.
8. **Viewport-Relative Parallax (`data-scroll-offset`)**:
   - Elements can declare a `data-scroll-offset` factor (e.g. `0.08` or `-0.12`). On scroll, the layout engine translates them along the Y-axis based on their offset from the center of the viewport, creating a floating depth effect.
9. **Growing Underlines & Ambient Button Borders**:
   - Navigation links display an underline that expands from the center (`scaleX(0)` to `scaleX(1)`) on hover.
   - Secondary (white) buttons feature a masked, 45-degree gradient border with subtle green ambient glow highlights (`rgba(11, 214, 152, 0.45)`) on the top-right and bottom-left corners. This glow scales up to `0.7` opacity on hover to make them visible and highly premium.
10. **Accessibility & Reduced Motion**:
    - All animations must be nested inside `@media (prefers-reduced-motion: no-preference)` CSS blocks. If the user prefers reduced motion, animations must immediately bypass to their final state (`transform: none`, `opacity: 1`, `animation-delay: 0s`).

---

## 4. Backend & Database Specification

- **MySQL Schema**: Create the database using `backend/db_setup.sql`. The core table is `inquiries` (fields: `id`, `name`, `email`, `service_type`, `message`, `created_at`).
- **Resilient Fallback Logging**:
  - The contact form submits data asynchronously to `backend/contact_submit.php` via JS `fetch`.
  - The backend script attempts a database connection using `backend/config.php`.
  - **Critical Fail-Safe**: If the database is offline or not yet configured on the cPanel host, the script logs the submission inside `backend/logs/inquiries_fallback.log` and returns a successful response code. This keeps the frontend responsive and user inputs stored safely regardless of database state.
- **SQL Sanitization**: All queries must use parameterized prepared statements (`mysqli::prepare` and `bind_param`) to completely prevent SQL Injection vulnerabilities.

---

## 5. Instructions for Future AI Development Agents

If you are an AI assistant extending this website, follow these instructions:
1. **No Placeholders**: Do not insert mock data placeholders or generic text blocks. Write complete, premium copywriting suitable for a professional software agency.
2. **Follow CSS variables**: Utilize variables declared in `frontend/assets/css/style.css` (e.g., `--ease-mercer`, `--bg-secondary`, `--accent`) for all custom elements. Do not hardcode colors or transition timings.
3. **Respect separation**: Keep frontend assets inside `frontend/` and backend processors inside `backend/`. Ensure file-path references account for directory traversal (e.g., frontend pages referring to backend submit scripts use `../backend/contact_submit.php`).
4. **Resiliency**: If adding new form actions or integrations, always design a local file logging fallback in case database services are interrupted.
5. **No Questions Asked**: Do not stop to ask design questions. Read this specification document, follow the style guide, look at existing layouts (e.g., `index.php`), and proceed directly to execute.
