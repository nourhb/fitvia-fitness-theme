<?php
/**
 * Title: About story
 * Slug: fitvia/about-story
 * Categories: fitvia
 * Description: Brand story with photo, mission text and value points.
 *
 * @package Fitvia
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:image {"sizeSlug":"large","className":"is-style-soft-frame"} -->
			<figure class="wp-block-image size-large is-style-soft-frame"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gym-interior.jpg" alt="Wide view of the Fitvia gym floor"/></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem","fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#5c7a00"}}} -->
			<p class="has-text-color" style="color:#5c7a00;font-size:0.9rem;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Our story</p>
			<!-- /wp:paragraph -->
			<!-- wp:heading {"level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#0d0d0f"}}} -->
			<h2 class="wp-block-heading has-text-color" style="color:#0d0d0f">Built by lifters, for everyone</h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem"},"color":{"text":"#26262b"}}} -->
			<p class="has-text-color" style="color:#26262b;font-size:1.05rem">Fitvia started in 2015 as a 2,000 sq ft garage gym with one squat rack and a big idea: elite-level coaching shouldn't require an elite budget. Eleven years later we run 12,000 sq ft in downtown Toronto — and the idea hasn't changed.</p>
			<!-- /wp:paragraph -->
			<!-- wp:list -->
			<ul class="wp-block-list"><!-- wp:list-item -->
			<li>✅ Coaching-first: every member gets a free movement assessment</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>✅ No egos: chalk-friendly, beginner-welcoming, judgment-free</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>✅ Recovery matters: sauna, cold plunge and mobility studio included</li>
			<!-- /wp:list-item --></ul>
			<!-- /wp:list -->
			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"className":"is-style-fill"} -->
				<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="/trainers">Meet the Coaches</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->
