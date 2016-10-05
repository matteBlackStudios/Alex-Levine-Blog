<?php
    $excerpt =  get_post_excerpt(90);
    $image = get_post_featured_image($post->ID);
    $category = get_the_category();
?>
<a href="<?php the_permalink()?>" class="article"><div class="article-post">
        <div class="featured-image-container">
            <h4 class="<?= $category[0]->slug ?>"><?= $category[0]->cat_name ?></h4>
            <div class="featured-image hover-zoom" style="background-image:url(<?= $image ?>); background-size:cover"></div>
        </div>
        <div class="featured-copy">
            <p class="lead-copy"><?php the_title()?></p>
            <p class="copy"><?= $excerpt ?> ...</p>
        </div>
</div></a>