<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<?php get_template_part('template-parts/archive-hero') ?>


<section id="archive-articles">
	<div class="row">
		<div class="columns large-12" >
			<div class="row">
				<div class="columns large-3 medium-6 small-12">
					<div class="article-post">
						<div class="featured-image" style="background:url(http://placehold.it/229x171); background-size:cover">
							<h4 class="house">House</h4>
						</div>
						<div class="featured-copy">
							<p class="lead-copy">Praesent rhoncus mi nec venenatis ultricies.</p>
							<p class="copy">Figuring out how our brains work is key to understanding </p>
						</div>
					</div>
				</div>
				<div class="columns large-3 medium-6 small-12">
					<div class="article-post">
						<div class="featured-image" style="background:url(http://placehold.it/229x171); background-size:cover">
							<h4 class="city">City</h4>
						</div>
						<div class="featured-copy">
							<p class="lead-copy">Praesent rhoncus mi nec venenatis ultricies.</p>
							<p class="copy">Figuring out how our brains work is key to understanding </p>
						</div>
					</div>
				</div>
				<div class="columns large-3 medium-6 small-12">
					<div class="article-post">
						<div class="featured-image" style="background:url(http://placehold.it/229x171); background-size:cover">
							<h4 class="beauty">Beauty</h4>
						</div>
						<div class="featured-copy">
							<p class="lead-copy">Praesent rhoncus mi nec venenatis ultricies.</p>
							<p class="copy">Figuring out how our brains work is key to understanding </p>
						</div>
					</div>
				</div>
				<div class="columns large-3 medium-6 small-12">
					<div class="article-post">
						<div class="featured-image" style="background:url(http://placehold.it/229x171); background-size:cover">
							<h4 class="city">City</h4>
						</div>
						<div class="featured-copy">
							<p class="lead-copy">Praesent rhoncus mi nec venenatis ultricies.</p>
							<p class="copy">Figuring out how our brains work is key to understanding </p>
						</div>
					</div>
				</div>
			</div>
			<a class="btn white">View More</a>
		</div>
	</div>
</section>



<!---->
<!--	<article class="main-content">-->
<!--	--><?php //if ( have_posts() ) : ?>
<!---->
<!--		--><?php ///* Start the Loop */ ?>
<!--		--><?php //while ( have_posts() ) : the_post(); ?>
<!--			--><?php //get_template_part( 'template-parts/content', get_post_format() ); ?>
<!--		--><?php //endwhile; ?>
<!---->
<!--		--><?php //else : ?>
<!--			--><?php //get_template_part( 'template-parts/content', 'none' ); ?>
<!---->
<!--		--><?php //endif; // End have_posts() check. ?>
<!---->
<!--		--><?php ///* Display navigation to next/previous pages when applicable */ ?>
<!--		--><?php //if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
<!--			<nav id="post-nav">-->
<!--				<div class="post-previous">--><?php //next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?><!--</div>-->
<!--				<div class="post-next">--><?php //previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?><!--</div>-->
<!--			</nav>-->
<!--		--><?php //} ?>
<!---->
<!--	</article>-->



<section id="footer-post">
	<div class="row">
		<div class="columns large-12" >
			<h4 class="tag">City</h4>
			<h3>Praesent augue enim, blandit faucibus posuere gravida, dictum vel nulla.</h3>
			<p>In id purus tempus leo facilisis interdum ac ut odio. In fermentum. </p>
		</div>
	</div>
</section>

<?php get_footer();
