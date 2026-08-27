// frontend/assets/js/main.js

document.addEventListener('DOMContentLoaded', () => {
    const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const canObserve = !reducedMotion && 'IntersectionObserver' in window;

    // 1. Sticky header state
    const header = document.getElementById('site-header');
    const handleScroll = () => {
        if (!header) {
            return;
        }

        header.classList.toggle('scrolled', window.scrollY > 100);
    };

    if (!reducedMotion) {
        window.addEventListener('scroll', handleScroll, { passive: true });
    }
    handleScroll();

    // 2. Mobile menu toggle
    const mobileToggle = document.getElementById('mobile-toggle');
    const navLinks = document.getElementById('nav-links');
    if (mobileToggle && navLinks) {
        mobileToggle.addEventListener('click', () => {
            const isOpen = mobileToggle.classList.toggle('open');
            navLinks.classList.toggle('mobile-open', isOpen);
            mobileToggle.setAttribute('aria-expanded', String(isOpen));
        });

        navLinks.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileToggle.classList.remove('open');
                navLinks.classList.remove('mobile-open');
                mobileToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // 3. Low-intensity parallax and scroll-relative offsets
    const parallaxLayers = document.querySelectorAll('[data-parallax-speed]');
    const scrollOffsetElements = document.querySelectorAll('[data-scroll-offset]');
    const stackSection = document.querySelector('[data-stack-section]');
    const stackScroll = stackSection ? stackSection.querySelector('.stack-scroll') : null;
    const stackStage = document.querySelector('[data-stack-stage]');
    const stackCards = stackStage ? Array.from(stackStage.querySelectorAll('[data-stack-card]')) : [];
    let lastScrollY = window.scrollY;
    let ticking = false;

    const clamp = (value, min, max) => Math.min(Math.max(value, min), max);
    let stackUsesScrollTrigger = false;
    const STACK_VH_PER_CARD = 100;
    const STACK_HOLD_WEIGHT = 1.15;
    const STACK_TRAVEL_WEIGHT = 0.55;
    const STACK_LATE_HOLD_WEIGHT = 1.55;

    const getStackHoldWeight = (index, maxIndex) => (
        index >= maxIndex - 1 ? STACK_LATE_HOLD_WEIGHT : STACK_HOLD_WEIGHT
    );

    const getStackScrollDistance = () => {
        const cardCount = stackCards.length;
        const transitions = Math.max(cardCount - 1, 1);
        const holdDistance = window.innerHeight * 0.85;
        return window.innerHeight * 1.08 * transitions + holdDistance;
    };

    const progressToDeckPosition = (progress) => {
        const maxIndex = Math.max(stackCards.length - 1, 1);
        const clamped = clamp(progress, 0, 1);
        let totalWeight = 0;

        for (let index = 0; index <= maxIndex; index += 1) {
            totalWeight += getStackHoldWeight(index, maxIndex);
            if (index < maxIndex) {
                totalWeight += STACK_TRAVEL_WEIGHT;
            }
        }

        const timeline = clamped * totalWeight;
        let cursor = 0;

        for (let index = 0; index <= maxIndex; index += 1) {
            const holdWeight = getStackHoldWeight(index, maxIndex);

            if (timeline <= cursor + holdWeight) {
                return index;
            }
            cursor += holdWeight;

            if (index < maxIndex) {
                if (timeline <= cursor + STACK_TRAVEL_WEIGHT) {
                    const local = (timeline - cursor) / STACK_TRAVEL_WEIGHT;
                    return index + local;
                }
                cursor += STACK_TRAVEL_WEIGHT;
            }
        }

        return maxIndex;
    };

    const setStackScrollHeight = () => {
        if (!stackScroll || stackCards.length === 0) {
            return;
        }

        const cardCount = stackCards.length;
        const runway = Math.max(cardCount * STACK_VH_PER_CARD, 360);
        stackScroll.style.setProperty('--stack-scroll-height', `${runway}vh`);
        stackStage.style.minHeight = `${Math.max(16, cardCount * 2.5 + 5.5)}rem`;
    };

    const getStackProgress = () => {
        if (!stackScroll) {
            return 0;
        }

        const viewportHeight = window.innerHeight;
        const scrollTop = stackScroll.getBoundingClientRect().top + window.scrollY;
        const runway = getStackScrollDistance();
        const start = scrollTop - viewportHeight * 0.14;
        const end = start + runway;

        return clamp((window.scrollY - start) / (end - start), 0, 1);
    };

    const applyDeckPosition = (deckPosition) => {
        const stackGapY = 24;
        const stackGapX = 8;

        stackCards.forEach((card, index) => {
            const stackOffset = index - deckPosition;
            const exitT = stackOffset < 0 ? clamp(-stackOffset, 0, 1) : 0;
            const depth = stackOffset > 0 ? stackOffset : 0;
            const yOffset = depth * stackGapY - exitT * 76;
            const xOffset = depth * stackGapX - exitT * 18;
            const scale = (1 - depth * 0.034) * (1 - exitT * 0.055);
            const opacity = clamp((1 - depth * 0.075) * (1 - exitT), 0, 1);
            const rotation = depth * 0.45 - exitT * 3.5;
            const zIndex = Math.round(220 - stackOffset * 16);

            card.style.setProperty('--stack-x', `${xOffset.toFixed(1)}px`);
            card.style.setProperty('--stack-y', `${yOffset.toFixed(1)}px`);
            card.style.setProperty('--stack-scale', scale.toFixed(3));
            card.style.setProperty('--stack-opacity', opacity.toFixed(3));
            card.style.setProperty('--stack-rot', `${rotation.toFixed(2)}deg`);
            card.style.zIndex = String(zIndex);
            card.classList.toggle('is-front', Math.abs(stackOffset) < 0.5);
        });
    };

    const updateStackCards = () => {
        if (!stackSection || !stackStage || stackCards.length === 0 || stackUsesScrollTrigger) {
            return;
        }

        const progress = getStackProgress();
        applyDeckPosition(progressToDeckPosition(progress));
    };

    const initStackScrollTrigger = () => {
        if (reducedMotion || !window.gsap || !window.ScrollTrigger || !stackScroll || stackCards.length === 0) {
            return false;
        }

        const stackFrame = stackSection.querySelector('.stack-frame');
        if (!stackFrame) {
            return false;
        }

        gsap.registerPlugin(ScrollTrigger);

        ScrollTrigger.create({
            trigger: stackScroll,
            start: 'top 14%',
            end: () => `+=${getStackScrollDistance()}`,
            pin: stackFrame,
            pinSpacing: true,
            scrub: 0.85,
            anticipatePin: 1,
            invalidateOnRefresh: true,
            onUpdate: (self) => {
                applyDeckPosition(progressToDeckPosition(self.progress));
            },
        });

        ScrollTrigger.addEventListener('refreshInit', setStackScrollHeight);
        applyDeckPosition(0);
        stackUsesScrollTrigger = true;
        return true;
    };

    const updateScrollAnimations = () => {
        parallaxLayers.forEach(layer => {
            const speed = parseFloat(layer.getAttribute('data-parallax-speed')) || 0.1;
            layer.style.transform = `translate3d(0, ${lastScrollY * speed}px, 0)`;
        });

        scrollOffsetElements.forEach(el => {
            const rect = el.getBoundingClientRect();
            if (rect.top >= window.innerHeight || rect.bottom <= 0) {
                return;
            }

            const factor = parseFloat(el.getAttribute('data-scroll-offset')) || 0.08;
            const viewportCenter = window.innerHeight / 2;
            const elementCenter = rect.top + rect.height / 2;
            const yTranslation = (elementCenter - viewportCenter) * factor;

            if (!el.matches(':hover') || (!el.classList.contains('service-card') && !el.classList.contains('settle-container'))) {
                el.style.transform = `translate3d(0, ${yTranslation}px, 0)`;
            }
        });

        updateStackCards();

        ticking = false;
    };

    if (!reducedMotion) {
        window.addEventListener(
            'scroll',
            () => {
                lastScrollY = window.scrollY;
                if (!ticking) {
                    window.requestAnimationFrame(updateScrollAnimations);
                    ticking = true;
                }
            },
            { passive: true }
        );
    }

    // 4. IntersectionObserver for entrance animations
    const observerOptions = {
        root: null,
        threshold: 0.05,
        rootMargin: '0px 0px -50px 0px',
    };

    const revealTargets = document.querySelectorAll(
        '.reveal-left, .reveal-right, .reveal-up, .reveal-scale, .reveal-fade, .stagger-grid, .settle-img, .mask-up-text, .feature-item, .floating-badge, .progress-fill, .glow-orb, .scroll-timeline, .timeline-node, .floating-overlay, .service-detail-card'
    );

    if (canObserve) {
        const revealObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    return;
                }

                if (entry.target.classList.contains('stagger-grid')) {
                    const cards = entry.target.querySelectorAll('.stagger-card');
                    cards.forEach((card, index) => {
                        setTimeout(() => card.classList.add('in-view'), index * 100);
                    });
                }

                entry.target.classList.add('in-view');
                observer.unobserve(entry.target);
            });
        }, observerOptions);

        revealTargets.forEach(el => revealObserver.observe(el));

        const staggerParentObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (!entry.isIntersecting) {
                    return;
                }

                const children = entry.target.querySelectorAll('.feature-item, .timeline-node');
                children.forEach((child, index) => {
                    setTimeout(() => child.classList.add('in-view'), index * 120);
                });

                observer.unobserve(entry.target);
            });
        }, { threshold: 0.05 });

        document.querySelectorAll('.feature-stagger-parent, .scroll-timeline').forEach(el => {
            staggerParentObserver.observe(el);
        });
    } else {
        revealTargets.forEach(el => el.classList.add('in-view'));
        document.querySelectorAll('.feature-item, .timeline-node').forEach(el => el.classList.add('in-view'));
        stackCards.forEach(card => {
            card.style.setProperty('--stack-y', '0px');
            card.style.setProperty('--stack-scale', '1');
            card.style.setProperty('--stack-opacity', '1');
            card.style.setProperty('--stack-rot', '0deg');
        });
    }

    if (stackSection && stackScroll && stackStage && stackCards.length > 0) {
        setStackScrollHeight();

        if (!initStackScrollTrigger()) {
            updateStackCards();
        }

        window.addEventListener('resize', () => {
            setStackScrollHeight();
            if (stackUsesScrollTrigger && window.ScrollTrigger) {
                ScrollTrigger.refresh();
            } else {
                updateStackCards();
            }
        }, { passive: true });

        if (stackUsesScrollTrigger) {
            ScrollTrigger.refresh();
        }
    }

    // ============================================================
    // GSAP ScrollTrigger Powered Animations
    // ============================================================
    if (!reducedMotion && window.gsap && window.ScrollTrigger) {
        gsap.registerPlugin(ScrollTrigger);

        // Hero entrance sequence
        const heroItems = document.querySelectorAll('.hero-eyebrow, .hero-title, .hero-tagline, .hero-cta-row');
        if (heroItems.length > 0) {
            const heroTl = gsap.timeline({ delay: 0.12 });
            heroTl.fromTo(heroItems, {
                opacity: 0,
                y: 24,
                clipPath: 'inset(0 0 100% 0)',
            }, {
                opacity: 1,
                y: 0,
                clipPath: 'inset(0 0 0% 0)',
                duration: 0.8,
                stagger: 0.12,
                ease: 'power3.out',
            });
        }

        // Hero parallax on scroll — hero content moves up faster
        const heroSection = document.querySelector('.hero-section');
        if (heroSection) {
            gsap.to('.hero-content', {
                y: -60,
                opacity: 0.3,
                ease: 'none',
                scrollTrigger: {
                    trigger: heroSection,
                    start: 'top top',
                    end: 'bottom top',
                    scrub: 1.2,
                },
            });
        }

        // Buttons hover micro-interactions
        document.querySelectorAll('.btn-hero').forEach((button) => {
            button.addEventListener('mouseenter', () => {
                gsap.to(button, { y: -2, duration: 0.22, ease: 'power2.out' });
            });
            button.addEventListener('mouseleave', () => {
                gsap.to(button, { y: 0, duration: 0.28, ease: 'power2.out' });
            });
            button.addEventListener('mousedown', () => {
                gsap.to(button, { scale: 0.98, duration: 0.12, ease: 'power2.out' });
            });
            button.addEventListener('mouseup', () => {
                gsap.to(button, { scale: 1, duration: 0.18, ease: 'power2.out' });
            });
        });

        // ScrollTrigger: service cards scale up on viewport entry
        document.querySelectorAll('.service-card').forEach(card => {
            gsap.fromTo(card, {
                scale: 0.96,
                opacity: 0,
            }, {
                scale: 1,
                opacity: 1,
                duration: 0.7,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: card,
                    start: 'top 85%',
                    toggleActions: 'play none none none',
                },
            });
        });

        // ScrollTrigger: animate progress bars when in view
        document.querySelectorAll('.progress-fill').forEach(fill => {
            const targetWidth = fill.style.getPropertyValue('--fill-percent') || '80%';
            gsap.fromTo(fill, {
                width: '0%',
            }, {
                width: targetWidth,
                duration: 1.4,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: fill,
                    start: 'top 90%',
                    toggleActions: 'play none none none',
                },
            });
        });

        // ScrollTrigger: timeline nodes stagger in
        document.querySelectorAll('.scroll-timeline').forEach(timeline => {
            const nodes = timeline.querySelectorAll('.timeline-node');
            gsap.fromTo(nodes, {
                opacity: 0,
                x: -24,
            }, {
                opacity: 1,
                x: 0,
                stagger: 0.15,
                duration: 0.65,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: timeline,
                    start: 'top 80%',
                    toggleActions: 'play none none none',
                },
            });

            // Animate the timeline line growing
            gsap.fromTo(timeline, {
                '--line-height': '0%',
            }, {
                '--line-height': '100%',
                duration: 1.8,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: timeline,
                    start: 'top 80%',
                    toggleActions: 'play none none none',
                },
            });
        });

        // ScrollTrigger: settle images scale down on viewport entry
        document.querySelectorAll('.settle-container').forEach(container => {
            const img = container.querySelector('.settle-img');
            if (img) {
                gsap.fromTo(img, {
                    scale: 1.08,
                    opacity: 0,
                }, {
                    scale: 1,
                    opacity: 1,
                    duration: 1.2,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: container,
                        start: 'top 82%',
                        toggleActions: 'play none none none',
                    },
                });
            }
        });

        // ScrollTrigger: floating overlays fade in
        document.querySelectorAll('.floating-overlay').forEach(overlay => {
            gsap.fromTo(overlay, {
                y: 20,
                opacity: 0,
            }, {
                y: 0,
                opacity: 1,
                duration: 0.8,
                delay: 0.3,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: overlay,
                    start: 'top 90%',
                    toggleActions: 'play none none none',
                },
            });
        });

        // ScrollTrigger: glow orbs subtle entrance
        document.querySelectorAll('.glow-orb').forEach(orb => {
            gsap.fromTo(orb, {
                scale: 0.7,
                opacity: 0,
            }, {
                scale: 1,
                opacity: 0.5,
                duration: 1.5,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: orb.parentElement,
                    start: 'top 70%',
                    toggleActions: 'play none none none',
                },
            });
        });

        // ScrollTrigger: testimonial cards stagger in
        document.querySelectorAll('.stagger-grid .stagger-card').forEach((card, index) => {
            gsap.fromTo(card, {
                y: 30,
                opacity: 0,
            }, {
                y: 0,
                opacity: 1,
                duration: 0.6,
                delay: index * 0.1,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: card,
                    start: 'top 88%',
                    toggleActions: 'play none none none',
                },
            });
        });

        // ScrollTrigger: section headings mask-up reveal with GSAP
        document.querySelectorAll('.section h2').forEach(heading => {
            gsap.fromTo(heading, {
                clipPath: 'inset(0 0 100% 0)',
                opacity: 0,
            }, {
                clipPath: 'inset(0 0 0% 0)',
                opacity: 1,
                duration: 0.85,
                ease: 'power3.out',
                scrollTrigger: {
                    trigger: heading,
                    start: 'top 85%',
                    toggleActions: 'play none none none',
                },
            });
        });

        // ScrollTrigger: CTA sections — content floats up
        document.querySelectorAll('section:has(.btn-primary.btn-arrow)').forEach(section => {
            const h2 = section.querySelector('h2');
            const p = section.querySelector('p');
            const btn = section.querySelector('.btn');

            if (h2) {
                const ctaTl = gsap.timeline({
                    scrollTrigger: {
                        trigger: section,
                        start: 'top 80%',
                        toggleActions: 'play none none none',
                    },
                });

                ctaTl.fromTo(h2, {
                    y: 30,
                    opacity: 0,
                }, {
                    y: 0,
                    opacity: 1,
                    duration: 0.7,
                    ease: 'power2.out',
                });

                if (p) {
                    ctaTl.fromTo(p, {
                        y: 20,
                        opacity: 0,
                    }, {
                        y: 0,
                        opacity: 1,
                        duration: 0.6,
                        ease: 'power2.out',
                    }, '-=0.4');
                }

                if (btn) {
                    ctaTl.fromTo(btn, {
                        y: 15,
                        opacity: 0,
                        scale: 0.95,
                    }, {
                        y: 0,
                        opacity: 1,
                        scale: 1,
                        duration: 0.5,
                        ease: 'power2.out',
                    }, '-=0.3');
                }
            }
        });

    } else if (!reducedMotion && window.gsap) {
        // GSAP without ScrollTrigger — basic hero animation
        const heroItems = document.querySelectorAll('.hero-eyebrow, .hero-title, .hero-tagline, .hero-cta-row');
        if (heroItems.length > 0) {
            gsap.fromTo(heroItems, { opacity: 0, y: 20 }, {
                opacity: 1,
                y: 0,
                duration: 0.75,
                stagger: 0.1,
                ease: 'power3.out',
                delay: 0.08,
            });
        }
    } else {
        // No GSAP at all — ensure everything is visible
        document.querySelectorAll('.hero-eyebrow, .hero-title, .hero-tagline, .hero-cta-row').forEach((el) => {
            el.style.opacity = '1';
        });
    }

    // 5. Team overlay parallax
    const teamCards = document.querySelectorAll('.settle-container');
    const updateTeamOverlays = () => {
        teamCards.forEach(card => {
            const rect = card.getBoundingClientRect();
            if (rect.top >= window.innerHeight || rect.bottom <= 0) {
                return;
            }

            const overlay = card.querySelector('.floating-overlay');
            if (overlay) {
                const relativeScroll = (window.innerHeight - rect.top) * 0.05;
                overlay.style.transform = `translate3d(0, ${-relativeScroll}px, 0)`;
            }
        });
    };

    if (!reducedMotion && teamCards.length > 0) {
        window.addEventListener('scroll', () => {
            window.requestAnimationFrame(updateTeamOverlays);
        }, { passive: true });
    }

    // 6. Contact form handling + client-side validation
    const contactForm = document.getElementById('contact-form');
    const alertBox = document.getElementById('alert-box');

    if (contactForm) {
        // Client-side validation feedback
        const validateField = (field) => {
            const value = field.value.trim();
            let isValid = true;
            let message = '';

            if (field.required && value === '') {
                isValid = false;
                message = `${field.previousElementSibling?.textContent || 'This field'} is required.`;
            } else if (field.type === 'email' && value !== '') {
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) {
                    isValid = false;
                    message = 'Please enter a valid email address.';
                }
            } else if (field.tagName === 'SELECT' && field.required && value === '') {
                isValid = false;
                message = 'Please select a project type.';
            }

            // Show/hide error
            let errorEl = field.parentElement.querySelector('.field-error');
            if (!isValid) {
                if (!errorEl) {
                    errorEl = document.createElement('span');
                    errorEl.className = 'field-error';
                    errorEl.style.cssText = 'color: #f87171; font-size: 0.82rem; margin-top: 0.35rem; display: block; font-weight: 500;';
                    field.parentElement.appendChild(errorEl);
                }
                errorEl.textContent = message;
                field.style.borderColor = 'rgba(239, 68, 68, 0.5)';
                field.style.boxShadow = '0 0 0 3px rgba(239, 68, 68, 0.1)';
            } else {
                if (errorEl) {
                    errorEl.remove();
                }
                field.style.borderColor = '';
                field.style.boxShadow = '';
            }
            return isValid;
        };

        // Live validation on blur
        contactForm.querySelectorAll('.form-control').forEach(field => {
            field.addEventListener('blur', () => validateField(field));
            field.addEventListener('input', () => {
                // Clear error on typing
                const errorEl = field.parentElement.querySelector('.field-error');
                if (errorEl && field.value.trim() !== '') {
                    errorEl.remove();
                    field.style.borderColor = '';
                    field.style.boxShadow = '';
                }
            });
        });

        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();

            // Validate all fields
            let allValid = true;
            contactForm.querySelectorAll('.form-control[required]').forEach(field => {
                if (!validateField(field)) {
                    allValid = false;
                }
            });

            if (!allValid) {
                // Shake the first invalid field
                const firstInvalid = contactForm.querySelector('.field-error')?.previousElementSibling;
                if (firstInvalid && window.gsap) {
                    gsap.fromTo(firstInvalid, { x: -6 }, { x: 0, duration: 0.5, ease: 'elastic.out(1, 0.3)' });
                }
                return;
            }

            const submitBtn = contactForm.querySelector('button[type="submit"]');
            const originalBtnHtml = submitBtn ? submitBtn.innerHTML : '';
            const formData = new FormData(contactForm);

            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerHTML = 'Sending...';
            }

            if (alertBox) {
                alertBox.classList.remove('show', 'alert-success', 'alert-error');
                alertBox.style.display = 'none';
            }

            try {
                const response = await fetch('../backend/contact_submit.php', {
                    method: 'POST',
                    body: formData,
                });

                const responseText = await response.text();
                let result = {};

                try {
                    result = responseText ? JSON.parse(responseText) : {};
                } catch {
                    result = {
                        status: response.ok ? 'success' : 'error',
                        message: response.ok
                            ? 'Thank you for your message! Our engineering leads will contact you shortly.'
                            : 'We could not process your inquiry right now.',
                    };
                }

                if (alertBox) {
                    alertBox.style.display = 'block';
                    void alertBox.offsetWidth;

                    const isSuccess = response.ok && result.status !== 'error';
                    alertBox.className = `alert-box ${isSuccess ? 'alert-success' : 'alert-error'} show`;
                    alertBox.textContent = result.message || (isSuccess
                        ? 'Thank you for your message! Our engineering leads will contact you shortly.'
                        : 'We could not process your inquiry right now.');

                    if (isSuccess) {
                        contactForm.reset();
                    }
                }
            } catch {
                if (alertBox) {
                    alertBox.style.display = 'block';
                    alertBox.className = 'alert-box alert-error show';
                    alertBox.textContent = 'Connection error. Please try again later.';
                }
            } finally {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerHTML = originalBtnHtml;
                }
            }
        });
    }

    // 7. Card tilt only when motion is allowed
    if (!reducedMotion) {
        document.querySelectorAll('.service-card, .settle-container').forEach(card => {
            card.style.transition = 'transform 0.1s var(--ease-mercer)';

            card.addEventListener('mousemove', (e) => {
                const rect = card.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const centerX = rect.width / 2;
                const centerY = rect.height / 2;
                const rotateX = ((centerY - y) / centerY) * 5;
                const rotateY = ((x - centerX) / centerX) * 5;

                card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.015, 1.015, 1.015)`;
            });

            card.addEventListener('mouseleave', () => {
                card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)';
                card.style.transition = 'transform 0.5s var(--ease-mercer)';
            });
        });
    }

    // 8. Interactive eTIMS compliance simulator console
    const simBtn = document.getElementById('run-sim-btn');
    const simConsole = document.getElementById('sim-console');
    const simItemInput = document.getElementById('sim-item');
    const simAmountInput = document.getElementById('sim-amount');

    if (simBtn && simConsole) {
        simBtn.addEventListener('click', async () => {
            const item = simItemInput ? simItemInput.value.trim() : 'Enterprise ERP Integration';
            const amount = simAmountInput ? simAmountInput.value : '35000';

            simConsole.innerHTML = '';
            simBtn.disabled = true;
            simBtn.textContent = 'Transmitting...';

            const logToConsole = (text, type = 'info', delay = 0) => {
                return new Promise(resolve => {
                    setTimeout(() => {
                        const div = document.createElement('div');
                        div.className = 'sim-step';
                        div.style.opacity = '0';
                        div.style.transform = 'translateY(5px)';
                        div.style.transition = 'all 0.4s var(--ease-mercer)';

                        let color = 'var(--text-secondary)';
                        if (type === 'api') color = 'var(--accent)';
                        if (type === 'handshake') color = 'var(--accent-green)';
                        if (type === 'success') {
                            color = '#10b981';
                            div.style.fontWeight = '700';
                        }

                        div.style.color = color;
                        div.textContent = text;
                        simConsole.appendChild(div);

                        void div.offsetWidth;
                        div.style.opacity = '1';
                        div.style.transform = 'translateY(0)';
                        resolve();
                    }, delay);
                });
            };

            await logToConsole(`[INFO] Initializing payload seal for "${item}"...`, 'info', 0);
            await logToConsole('[API] Fetching eTIMS security handshake token...', 'api', 800);
            await logToConsole('[HANDSHAKE] Token received. Signing payload with SHA-256 certificate key...', 'handshake', 1000);
            await logToConsole(`[KRA API] Transmitting signed invoice: KES ${Number(amount || 0).toLocaleString()}...`, 'api', 800);
            await logToConsole(
                `[SUCCESS] ✓ KRA eTIMS Receipt Generated: Receipt Hash: KRA-${Math.floor(10000 + Math.random() * 90000)}-${Math.floor(100000 + Math.random() * 900000)}`,
                'success',
                800
            );

            simBtn.disabled = false;
            simBtn.textContent = 'Transmit Invoice to KRA';
        });
    }

    // 9. Smooth scroll to anchors with GSAP ScrollToPlugin
    if (!reducedMotion && window.gsap && window.ScrollToPlugin) {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', (e) => {
                const targetId = anchor.getAttribute('href');
                if (targetId === '#') return;
                const target = document.querySelector(targetId);
                if (!target) return;

                e.preventDefault();
                gsap.to(window, {
                    scrollTo: { y: target, offsetY: 80 },
                    duration: 0.9,
                    ease: 'power2.inOut',
                });
            });
        });
    }
});
