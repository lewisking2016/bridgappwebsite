<?php
// frontend/partials/gsap-scripts.php
// GSAP 3.13+ — Core + ScrollTrigger + ScrollToPlugin (the only plugins we use)
$gsapVendor = 'assets/vendor/gsap';
$gsapPlugins = [
    'ScrollTrigger.min.js',
    'ScrollToPlugin.min.js',
];
?>
<script src="<?php echo $gsapVendor; ?>/gsap.min.js" defer></script>
<?php foreach ($gsapPlugins as $plugin): ?>
<script src="<?php echo $gsapVendor . '/' . $plugin; ?>" defer></script>
<?php endforeach; ?>
<script src="assets/js/gsap-register.js" defer></script>
