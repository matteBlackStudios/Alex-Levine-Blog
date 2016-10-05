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
        <?php $like_count = get_post_meta(get_the_ID(), '_zilla_likes', true)?>
        <h1><?php the_title()?></h1>
        <header class="post-info">
            <span class="time"><img width="13" height="13"  class="icon" src="<?= get_template_directory_uri() ?>/assets/images/global/time-icon.png" alt="Time Posted Shares" /> June 11, 2016 2:11 pm</span>
            <span class="likes"><img width="13" height="11"  class="icon" src="<?= get_template_directory_uri() ?>/assets/images/global/like-icon.png" alt="Like Shares" /> <span id="hero-like-count"><?= (!empty($like_count) ? $like_count : '0') ?></span></span>
            <span class="comments"><img width="13" height="12"  class="icon" src="<?= get_template_directory_uri() ?>/assets/images/global/comment-icon.png" alt="Comment Shares" /> <?= comments_number('0', '%', '% ') ?> </span>
            <a href="javascript:void" style="cursor:default" class="share"> <?= get_fb_share_count(get_permalink())?> Shares <img width="28" height="13" class="icon" src="<?= get_template_directory_uri() ?>/assets/images/global/share-icon.png" alt="Article Shares" /></a>
        </header>
    </div>
</div>