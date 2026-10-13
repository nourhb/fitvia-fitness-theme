<?php
/**
 * Title: Photo gallery
 * Slug: fitvia/gallery
 * Categories: fitvia
 * Description: Six-photo gym gallery grid.
 *
 * @package Fitvia
 */
?>
<!-- wp:group {"align":"full","style":{"color":{"background":"#0d0d0f"},"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background" style="background-color:#0d0d0f;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#d4ff3f"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#d4ff3f;font-size:0.9rem;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Inside Fitvia</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#ffffff"}}} -->
	<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#ffffff">Take the tour</h2>
	<!-- /wp:heading -->
	<!-- wp:gallery {"columns":3,"linkTo":"none","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<figure class="wp-block-gallery has-nested-images columns-3 is-cropped" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gym-interior.jpg" alt="Modern gym floor with strength equipment"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/barbell-closeup.jpg" alt="Barbell loaded with plates on a rack"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/trainer-coaching.jpg" alt="Coach guiding a member through a lift"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/group-class.jpg" alt="Members training together in a group class"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cardio-treadmill.jpg" alt="Cardio zone with treadmills"/></figure>
		<!-- /wp:image -->
		<!-- wp:image {"sizeSlug":"large"} -->
		<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/gym-reception.jpg" alt="Fitvia reception and lounge area"/></figure>
		<!-- /wp:image -->
	</figure>
	<!-- /wp:gallery -->
</div>
<!-- /wp:group -->
