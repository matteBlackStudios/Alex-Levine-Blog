<?php  if ( has_post_thumbnail( $post->ID ) ) :
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
        $image = $image[0]; ?>
<?php endif; ?>
<div id="article-hero-gallery">
    <div class="hero-gallery">
        <?php
            $hero_images_raw = types_render_field( "hero-background-images", array("output"=>"raw"));
            $hero_images = explode(' ', $hero_images_raw);
            foreach($hero_images as $hero_image){
        ?>
                <div style="background:url(<?= $hero_image ?>); background-size:cover; background-position: center"></div>
        <?php } ?>
    </div>
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
        <p class="sub-caption"><?= types_render_field( "fave-subcaption-copy", array("output"=>"raw")); ?></p>
    </div>
</div>
