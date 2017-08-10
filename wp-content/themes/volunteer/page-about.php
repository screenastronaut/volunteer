<?php
/**
 * Template Name: About Dream Teams page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package volunteer
 */

get_header(); ?>


<div id="primary" class="content-area dt-page container">
	<main id="main" class="site-main" role="main">

		<?php
		$args = array(
			'post_type' => 'dreamteams',
			'orderby' => 'name',
			'order' => 'ASC',
			'posts_per_page' => -1,
			);
		$the_query = new WP_Query( $args );
		$i = 0;

		if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

		$i++;
		?>

		<div class="circle col-lg-2 col-md-4 col sm-6 col-xs-6">
			<a data-fancybox data-src="#<?=$i?>" href="javascript:;">
				<div class="dream-team">
					<span><?php echo get_field('name'); ?></span>
				</div>
			</a>
			<div class="desc" id="<?=$i?>">
				<h2><?php echo get_field('name'); ?></h2>
				<?php echo get_field('about'); ?>
				<a href="../sign-up" class="signuplink"><h2 class="slant">Sign Up! ></h2></a>
			</div>
		</div>

	<?php endwhile; endif; ?>

	<a href="../sign-up" class="signuplink"><h2 class="slant">Sign Up! ></h2></a>

</main><!-- #main -->
</div><!-- #primary -->

<?php

get_footer();