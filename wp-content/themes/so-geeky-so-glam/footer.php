<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>
<div id="footer-container">
	<footer id="footer">
		<div class="row full-width">
			<div class="columns large-4 medium-12 small-12 left">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?= get_template_directory_uri().'/assets/images/global/logo-footer.png' ?>" width="247" height="110"/></a>
			</div>
			<div class="columns large-8 medium-12 small-12 right">
				<?php foundationpress_footer_nav() ?>
				<div class="form-field">
					<form id="newsletter-start">
						<label>Newsletter</label> <input type="text" id="newsletter-email" placeholder="E-mail" />
						<a id="subsribe-trigger" href="#" class="big-link" data-reveal-id="newsletter-modal" data-animation="fade"><img src="<?= get_template_directory_uri().'/assets/images/global/email-icon.png' ?>" class="email-icon"/></a>
					</form>
				</div>
			</div>
		</div>

		<div id="newsletter-modal" class="reveal-modal">
			<div class="newsletter-hero" style="background: url(<?= get_template_directory_uri().'/assets/images/global/newsletter-bg.jpg' ?>);background-size:cover;background-position:center;position:relative">
				<h1 style="text-align: center;color: #CA67DE;font-weight: bold;margin-bottom:0px;position: absolute;left:0;right:0;top: 50%;transform: translateY(-50%);padding-left: 20px;padding-right: 20px;line-height: 100%;">Join Our Newsletter</h1>
			</div>
			<div id="mc_embed_signup">
				<form action="//sogeekysoglam.us14.list-manage.com/subscribe/post?u=f9570370b6abbd115ff4f4f5f&amp;id=c014ddede4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
						<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
						<div class="mc-field-group">
							<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
							</label>
							<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
						</div>
						<div class="mc-field-group">
							<label for="mce-FNAME">First Name </label>
							<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
						</div>
						<div class="mc-field-group">
							<label for="mce-LNAME">Last Name </label>
							<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
						</div>
						<div id="mce-responses" class="clear">
							<div class="response" id="mce-error-response" style="display:none"></div>
							<div class="response" id="mce-success-response" style="display:none"></div>
						</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
						<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_f9570370b6abbd115ff4f4f5f_c014ddede4" tabindex="-1" value=""></div>
						<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</div>
				</form>
			</div>
			<a class="close-reveal-modal">&#215;</a>
		</div>

	</footer>
</div>
<div id="overlay-search" class="overlay-hugeinc">
	<button width="80" height="80" type="button" class="overlay-close">Close</button>
	<?php get_search_form() ?>
</div>



<?php do_action( 'foundationpress_layout_end' );?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
	</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
	</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>

<script type="text/javascript" src="<?= get_template_directory_uri().'/assets/javascript/vendor/velocity/velocity.min.js' ?>"></script>
<script type="text/javascript" src="<?= get_template_directory_uri().'/assets/javascript/pages/global.js' ?>"></script>
<script type="text/javascript" src="<?= get_template_directory_uri().'/assets/javascript/vendor/reveal/jquery.reveal.js' ?>"></script>
<?php wp_footer(); ?>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

<?php do_action( 'foundationpress_before_closing_body' ); ?>

</body>
</html>
