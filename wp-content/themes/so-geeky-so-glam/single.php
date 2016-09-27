<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php
	$article_type = types_render_field( "post-type", array("output"=>"raw"));
	if( $article_type == 'article'){
		get_template_part('page-templates/single-article');
	}
	else if($article_type == 'technology'){
		get_template_part('page-templates/single-technology');
	}
	else if($article_type == 'fave'){
		get_template_part('page-templates/single-fave');
	}
	else{
		get_template_part('template-parts/single-article');
	}
?>




<?php get_footer(); ?>
