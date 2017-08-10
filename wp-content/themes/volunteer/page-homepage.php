<?php
/**
 * Template Name: Homepage
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package volunteer
 */

get_header(); ?>


<div id="primary" class="content-area container">
	<main id="main" class="site-main" role="main">

		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<img src="<?php echo get_template_directory_uri(); ?>/images/everyhandlogo_stacked.png" title="Every Hand Logo Stacked" alt="Every Hand Logo Stacked">
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<div class="acts-logo">
				<a href="http://www.actschurch.org" target="_blank">
					<img src="<?php echo get_template_directory_uri(); ?>/images/acts_logo.png" title="Acts Church logo" alt="Acts Church logo">
				</a>
			</div>
			<div class="about-volunteering col-lg-offset-2 col-lg-6">
				<h1 class="slant">Want to know more about volunteering at acts church?</h1>
				<a href="about-dream-teams"><button class="cta-button" id="letsgo" title="test"></button></a>
			</div>
			<div class="clear"></div>
			<div class="quiz col-lg-offset-2 col-lg-6">
				<h1 class="slant">Answer 9 questions & we'll tell you which ministry suits you best!</h1>
				<a href="quiz"><button class="cta-button" id="takequiz" title="test"></button></a>
			</div>
		</div>

	</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();