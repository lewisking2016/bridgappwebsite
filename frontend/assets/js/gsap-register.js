// frontend/assets/js/gsap-register.js
(function registerBridgAppGsapPlugins() {
    if (typeof gsap === 'undefined') {
        return;
    }

    const plugins = [
        typeof ScrollTrigger !== 'undefined' ? ScrollTrigger : null,
        typeof ScrollToPlugin !== 'undefined' ? ScrollToPlugin : null,
    ].filter(Boolean);

    if (plugins.length > 0) {
        gsap.registerPlugin(...plugins);
    }

    window.bridgAppGsapReady = true;
    window.dispatchEvent(new CustomEvent('bridgapp:gsap-ready'));
})();
