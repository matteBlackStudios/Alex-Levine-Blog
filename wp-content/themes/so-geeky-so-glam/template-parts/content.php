<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$excerpt_char_len = 355;
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<header>
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<?php foundationpress_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php //the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
		<?php
			$excerpt =  get_the_excerpt();
			$using_wp_exerpt = true;
			if(empty($excerpt)){
				$using_wp_exerpt = false;
				$excerpt = substr(types_render_field( "content-section-1", array("output"=>"raw")), 0, $excerpt_char_len);
					if(empty($excerpt)){
						$excerpt = substr(types_render_field( "content-first-section", array("output"=>"raw")), 0, $excerpt_char_len);
					}
			}else{
				$excerpt = substr($excerpt, 0, $excerpt_char_len);
			}
		?>
		<p class="excerpt"><?php echo $excerpt ; ?> <?= ($using_wp_exerpt == true) ? '' : '...'?></p>
	</div>
	<footer>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
	<hr />
</div>
