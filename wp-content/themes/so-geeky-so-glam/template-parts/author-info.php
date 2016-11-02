<?php
    global $wp_query;

?>
<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post();
        $author_id = $post->post_author;
        $curauth = $wp_query->get_queried_object();
?>
        <!-- Switch to the_author_meta() -->
        <div class="author-info">
            <img class="author-img" src="<?= get_avatar_url($author_id) ?>" alt="author bio img" />
            <h3 class="name"><?= get_the_author_meta('display_name', $author_id) ?></h3>
            <p class="bio"><?= get_the_author_meta('user_description', $author_id)  ?></p>
            <div class="social-media-links">
                <a href="<?= get_the_author_meta('facebook', $author_id)  ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="<?= get_the_author_meta('twitter', $author_id)   ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="<?=  get_the_author_meta('instagram', $author_id)   ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            </div>
            <a  href="<?= get_author_posts_url($author_id); ?>" class="all-posts"><div >All Posts</div></a>

        </div>

    <?php endwhile; ?>
<?php endif; ?>

