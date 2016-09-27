<?php  if ( has_post_thumbnail( $post->ID ) ) :
        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
        $image = $image[0]; ?>
<?php endif; ?>
<div id="article-hero" style="background:url(<?= $image ?>);background-size:cover; background-position: center center">
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
        <header class="post-info">
            <span class="time"><img width="13" height="13"  class="icon" src="<?= get_template_directory_uri() ?>/assets/images/global/time-icon.png" alt="Time Posted Shares" /> June 11, 2016 2:11 pm</span>
            <span class="likes"><img width="13" height="11"  class="icon" src="<?= get_template_directory_uri() ?>/assets/images/global/like-icon.png" alt="Like Shares" /> 2</span>
            <span class="comments"><img width="13" height="12"  class="icon" src="<?= get_template_directory_uri() ?>/assets/images/global/comment-icon.png" alt="Comment Shares" /> <?= comments_number('0', '%', '% ') ?> </span>
            <a href="#" class="share"> 93 Shares <img width="28" height="13" class="icon" src="<?= get_template_directory_uri() ?>/assets/images/global/share-icon.png" alt="Article Shares" /></a>
        </header>
    </div>
</div>