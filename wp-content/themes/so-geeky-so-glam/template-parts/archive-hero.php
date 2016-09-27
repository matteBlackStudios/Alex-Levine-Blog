<?php  if ( has_post_thumbnail( $post->ID ) ) :
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
        $image = $image[0]; ?>
<?php endif; ?>
<div id="archive-hero">
    <div class="overlay"></div>
    <div class="content">
        <h1><?php single_tag_title(); ?> </h1>
    </div>
</div>