# BridgApp Africa — Skills Installed

**Source repository:** `C:\Users\lewis\Desktop\antigravity-skills-repo\`

This project uses the Antigravity skills ecosystem for website design, development, SEO, security, and QA.

## Installed in this project

Skills are installed at `.cursor/skills/` for Cursor Agent use:

| Skill | Purpose |
|-------|---------|
| `frontend-design` | Distinctive UI design and implementation |
| `design-taste-frontend` | Anti-slop landing page polish |
| `stitch-design-taste` | Design taste refinement |
| `baseline-ui` | UI baseline standards |
| `ui-ux-pro-max` | UX patterns and hierarchy |
| `scroll-experience` | Scroll-driven animations and sticky sections |
| `web-design-guidelines` | Web layout and accessibility guidance |
| `web-performance-optimization` | Core Web Vitals and speed |
| `landing-page-generator` | Landing page structure |
| `copywriting` | Marketing copy |
| `seo`, `seo-fundamentals`, `seo-page` | Search optimization |
| `php-pro` | PHP backend patterns |
| `frontend-security-coder` | XSS and client security |
| `backend-security-coder` | API and server security |
| `security-auditor` | Security review |
| `browser-automation` | Browser testing |
| `mcp-browser-automation` | MCP browser workflows |
| `webapp-testing` | Web app test patterns |
| `e2e-testing-patterns` | End-to-end testing |
| `test-driven-development` | TDD workflow |
| `systematic-debugging` | Bug investigation |
| `analytics-tracking` | Analytics implementation |
| `accessibility-compliance-accessibility-audit` | WCAG compliance |
| `brainstorming` | Feature planning |
| `concise-planning` | Task breakdown |
| `api-design-principles` | API design |
| `deployment-procedures` | Safe deploys |
| `taste-skill` | Premium anti-template UI (from open-design) |

## Full catalog

The Antigravity repo contains **1,480+ skills** at:

```
C:\Users\lewis\Desktop\antigravity-skills-repo\skills\
```

Browse `INDEX.md`, `CATALOG.md`, or `data/bundles.json` in that repo for the complete list.

## Companion tools

```
C:\Users\lewis\Desktop\antigravity-skills-repo\tools\
```

- `agent-browser` — test and screenshot the site
- `open-design` — design systems and taste skills
- `vercel-skills` — modern web patterns

## Usage in Cursor

Reference skills during development, for example:

- `@scroll-experience` — improve shuffle cards and scroll sections
- `@frontend-design` — refine hero and layout
- `@seo-page` — optimize meta and on-page SEO
- `@php-pro` — backend contact form and config

## GSAP

GSAP 3.13+ is installed via npm and vendored to `frontend/assets/vendor/gsap/`.

```powershell
npm install
npm run vendor:gsap
```

Stack card shuffle uses `ScrollTrigger` with scrub. Plugins are registered in `frontend/assets/js/gsap-register.js`.


### Homepage / UI polish
1. `frontend-design` + `design-taste-frontend`
2. `scroll-experience` for card shuffle
3. `webapp-testing` or browser MCP for verification

### SEO pass
1. `seo-fundamentals`
2. `seo-page`
3. `analytics-tracking`

### Security review
1. `frontend-security-coder`
2. `backend-security-coder`
3. `security-auditor`
