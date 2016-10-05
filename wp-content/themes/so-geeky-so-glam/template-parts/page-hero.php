<?php  if ( has_post_thumbnail( $post->ID ) ) :
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
        $image = $image[0]; ?>
<?php endif; ?>
<div id="page-hero" class="page" style="background:url(<?= $image ?>);background-size:cover; background-position: center center">
    <div class="overlay"></div>
    <div class="content">
        <?php
        $posttags = get_the_tags();
        if ($posttags) {
            foreach($posttags as $tag) {
                echo '<a href="'.get_tag_link($tag->term_id).'" class="clear-tag">'.$tag->name . ' </a>';
            }
        }
        ?>
        <h1><?php the_title()?></h1>
    </div>
</div>