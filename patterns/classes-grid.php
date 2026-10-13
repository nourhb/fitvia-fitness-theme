<?php
/**
 * Title: Classes grid
 * Slug: fitvia/classes-grid
 * Categories: fitvia
 * Description: Six fitness class cards with photos, intensity badges and schedules.
 *
 * @package Fitvia
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"0.9rem","fontWeight":"700","letterSpacing":"0.22em","textTransform":"uppercase"},"color":{"text":"#5c7a00"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#5c7a00;font-size:0.9rem;font-weight:700;letter-spacing:0.22em;text-transform:uppercase">Find your fight</p>
	<!-- /wp:paragraph -->
	<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontFamily":"var:preset|font-family|display","fontSize":"var:preset|font-size|xx-large"},"color":{"text":"#0d0d0f"}}} -->
	<h2 class="wp-block-heading has-text-align-center has-text-color" style="color:#0d0d0f">Classes for every goal</h2>
	<!-- /wp:heading -->
	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"fitvia-card","style":{"border":{"radius":"12px"},"color":{"background":"#0d0d0f"},"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|40","left":"0"}}}} -->
			<div class="wp-block-group fitvia-card has-background" style="background-color:#0d0d0f;border-radius:12px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0;overflow:hidden">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/strength-training.jpg" alt="Woman doing strength training with dumbbells"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph --><p><span class="fitvia-badge fitvia-badge--volt">High intensity</span></p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#ffffff"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#ffffff;font-size:1.25rem">Power Strength</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#9a9aa0"}}} -->
					<p class="has-text-color" style="color:#9a9aa0;font-size:0.9rem">Barbell fundamentals, progressive overload and raw power. Mon / Wed / Fri · 6:00 AM</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"fitvia-card","style":{"border":{"radius":"12px"},"color":{"background":"#0d0d0f"},"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|40","left":"0"}}}} -->
			<div class="wp-block-group fitvia-card has-background" style="background-color:#0d0d0f;border-radius:12px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0;overflow:hidden">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/group-class.jpg" alt="Group fitness class training together"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph --><p><span class="fitvia-badge fitvia-badge--volt">All levels</span></p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#ffffff"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#ffffff;font-size:1.25rem">HIIT Inferno</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#9a9aa0"}}} -->
					<p class="has-text-color" style="color:#9a9aa0;font-size:0.9rem">45 minutes of metabolic conditioning that torches calories. Tue / Thu · 12:15 PM</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"fitvia-card","style":{"border":{"radius":"12px"},"color":{"background":"#0d0d0f"},"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|40","left":"0"}}}} -->
			<div class="wp-block-group fitvia-card has-background" style="background-color:#0d0d0f;border-radius:12px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0;overflow:hidden">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/boxing-bag.jpg" alt="Boxer training on a heavy punching bag"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph --><p><span class="fitvia-badge fitvia-badge--volt">Combat</span></p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#ffffff"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#ffffff;font-size:1.25rem">Boxing Lab</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#9a9aa0"}}} -->
					<p class="has-text-color" style="color:#9a9aa0;font-size:0.9rem">Footwork, combos and heavy-bag rounds with pro fighters. Mon / Wed · 7:00 PM</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--40)">
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"fitvia-card","style":{"border":{"radius":"12px"},"color":{"background":"#0d0d0f"},"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|40","left":"0"}}}} -->
			<div class="wp-block-group fitvia-card has-background" style="background-color:#0d0d0f;border-radius:12px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0;overflow:hidden">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/yoga-class.jpg" alt="Yoga class in a calm studio"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph --><p><span class="fitvia-badge fitvia-badge--outline">Recovery</span></p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#ffffff"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#ffffff;font-size:1.25rem">Mobility Flow</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#9a9aa0"}}} -->
					<p class="has-text-color" style="color:#9a9aa0;font-size:0.9rem">Yoga-inspired mobility to unlock joints and calm the nervous system. Sun · 10:00 AM</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"fitvia-card","style":{"border":{"radius":"12px"},"color":{"background":"#0d0d0f"},"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|40","left":"0"}}}} -->
			<div class="wp-block-group fitvia-card has-background" style="background-color:#0d0d0f;border-radius:12px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0;overflow:hidden">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/kettlebell-training.jpg" alt="Athlete swinging a kettlebell"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph --><p><span class="fitvia-badge fitvia-badge--volt">Functional</span></p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#ffffff"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#ffffff;font-size:1.25rem">Kettlebell Club</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#9a9aa0"}}} -->
					<p class="has-text-color" style="color:#9a9aa0;font-size:0.9rem">Swings, snatches and carries for bulletproof conditioning. Tue / Fri · 6:30 PM</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"className":"fitvia-card","style":{"border":{"radius":"12px"},"color":{"background":"#0d0d0f"},"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|40","left":"0"}}}} -->
			<div class="wp-block-group fitvia-card has-background" style="background-color:#0d0d0f;border-radius:12px;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--40);padding-left:0;overflow:hidden">
				<!-- wp:image {"sizeSlug":"large"} -->
				<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/cardio-treadmill.jpg" alt="Runner on a treadmill in the cardio zone"/></figure>
				<!-- /wp:image -->
				<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
				<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
					<!-- wp:paragraph --><p><span class="fitvia-badge fitvia-badge--outline">Endurance</span></p><!-- /wp:paragraph -->
					<!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.25rem"},"color":{"text":"#ffffff"}}} -->
					<h3 class="wp-block-heading has-text-color" style="color:#ffffff;font-size:1.25rem">Engine Room</h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"color":{"text":"#9a9aa0"}}} -->
					<p class="has-text-color" style="color:#9a9aa0;font-size:0.9rem">Treadmill intervals, rowers and assault bikes. Build an unstoppable engine. Daily · 7:00 AM</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
		<!-- wp:button {"className":"is-style-fill"} -->
		<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button" href="/schedule">View Full Schedule</a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
