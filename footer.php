    <!-- Script Loads -->
    <script src="<?php bloginfo('template_url'); ?>/js/three.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/TweenLite.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/Math.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/EffectShell.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/StretchEffect.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/imagesloaded.pkgd.min.js"></script>

    <!-- Scripts -->
    <script>
    const container = document.body
    const itemsWrapper = document.querySelector('.grid')

    // Preload images
    const preloadImages = () => {
        return new Promise((resolve, reject) => {
            imagesLoaded(document.querySelectorAll('img'), resolve);
        });
    };
    // And then..
    preloadImages().then(() => {
        // Remove the loader
        document.body.classList.remove('loading');
        const effect = new StretchEffect(container, itemsWrapper)
	});
    </script>

    <?php wp_footer(); ?>
    
</body>

</html>