<?php
/**
 * Title: Hero with trial CTA
 * Slug: fitvia/hero-cta
 * Categories: fitvia
 * Description: Full-width dark hero with volt accents, headline, trial offer and hero photo.
 *
 * @package Fitvia
 */
?>
<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-workout.jpg","dimRatio":70,"overlayColor":"onyx","isUserOverlayColor":true,"minHeight":88,"minHeightUnit":"vh","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}}} -->
<div class="wp-block-cover alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70);min-height:88vh"><span aria-hidden="true" class="wp-block-cover__background has-onyx-background-color has-background-dim-70 has-background-dim"></span><img class="wp-block-cover__image-background" alt="Athlete training with dumbbells in a dark modern gym" src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/hero-workout.jpg" data-object-fit="cover"/>
<div class="wp-block-cover__inner-container">
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#d4ff3f"}}} -->
	<p class="has-text-color" style="color:#d4ff3f;font-size:0.9rem;font-weight:700;letter-spacing:0.22em;text-transform:uppercase"><span class="fitvia-badge fitvia-badge--volt fitvia-pulse">First week free</span></p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"level":1,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|display"},"color":{"text":"#ffffff"}}} -->
	<h1 class="wp-block-heading has-text-color" style="color:#ffffff">Train harder.<br>Recover smarter.<br><span style="color:#d4ff3f">Become unstoppable.</span></h1>
	<!-- /wp:heading -->
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"var:preset|font-size|large"},"color":{"text":"#e8e8e4"}}} -->
	<p class="has-text-color" style="color:#e8e8e4;font-size:var(--wp--preset--font-size--large)">60+ weekly classes, elite coaches and a 24/7 strength floor — all in the heart of Toronto. Your first week is on us.</p>
	<!-- /wp:paragraph -->
	<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:button {"className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="/membership">Start Free Week</a></div>
		<!-- /wp:button -->
		<!-- wp:button {"className":"is-style-outline"} -->
		<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="/classes" style="color:#ffffff;border-color:#ffffff">Explore Classes</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.85rem"},"color":{"text":"#9a9aa0"}}} -->
	<p class="has-text-color" style="color:#9a9aa0;font-size:0.85rem">No credit card required · Cancel anytime · All fitness levels welcome</p>
	<!-- /wp:paragraph -->
</div>
</div>
<!-- /wp:cover -->
