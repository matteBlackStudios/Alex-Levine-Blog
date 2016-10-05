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
				<div class="columns large-12 medium-12 small-12">
					<div id="mr-articles">
					<?php
						$count = 0;
						$number_posts = $GLOBALS['wp_query']->post_count;
						$page_number = ($GLOBALS['wp_query']->max_num_pages);
						if ( have_posts() ) :
					?>
						<?php  while ( have_posts() ) : the_post(); ?>
							<?php
								if($count == 4){
									break;
								}
							?>
							<?php get_template_part('template-parts/post-content')?>

							<?php
							$count += 1;
						endwhile;
						wp_reset_query();
						?>

					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>


					<?php endif; // End have_posts() check. ?>


					</div>
				</div>
			</div>

			<?php
				if($number_posts > 4){
					$tag = get_query_var('tag');
					?>
					<?= do_shortcode('[ajax_load_more transition_speed="600" destroy_after="'.$page_number.'" tag='.$tag.' scroll="false" offset="4" button_label="View More" post_type="post" post_format="standard" posts_per_page="4" pause="true" transition="fade" transition_container="true"]') ?>
			<?php
				}
			?>

		</div>
	</div>
</section>


<?php
	$popularpost = new WP_Query( array( 'posts_per_page' => 1, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
	if(empty($popularpost)){
		$popularpost = new WP_Query( array( 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'DESC'  ) );
	}
	$top_stories = array();
	while ( $popularpost->have_posts() ) : $popularpost->the_post();
		$category = get_the_category();
		$excerpt =  get_post_excerpt(130);
		$image = get_post_featured_image($post->ID);
?>
		<section id="footer-post" style="background-image:url(<?= $image ?>)">
			<div class="overlay"></div>
			<div class="row">
				<div class="columns large-12" >
					<a href="<?= get_tag_link($category[0]->term_id) ?>"><h4 class="tag"><?= $category[0]->cat_name ?></h4>
					<a href="<?= get_the_permalink() ?>"><h3><?php the_title(); ?></h3></a>
					<p><?= $excerpt ?></p>
				</div>
			</div>
		</section>
<?php
	endwhile;
	wp_reset_query();

?>



<?php get_footer();
