<?php get_template_part('template-parts/article-hero-gallery') ?>

<?php $fave_products = types_child_posts('feat-product-fave');?>
<?php if(!empty($fave_products)){ ?>
    <div class="row full-width" id="top-featured-products">
        <div id="fave-products">
            <?php foreach($fave_products as $fave_product){ ?>
                <a target="_blank" href="<?= $fave_product->fields['fave-product-link'] ?>" class="product <?= $fave_product->fields['box-size'] ?> <?= ($fave_product->fields['box-color'] != "#ffffff") ? 'color-bg' : '' ?>" style="background-color: <?= $fave_product->fields['box-color'] ?>">
                    <img src="<?= $fave_product->fields['fave-product-featured-image'] ?>" class="product-image"/>
                    <p class="product-title"><?= $fave_product->fields['fave-product-name'] ?></p>
                </a>
            <?php } ?>
        </div>
    </div>
<?php } ?>


<div class="row top-content-section">
    <div class="columns large-3 medium-3"></div>
    <div class="columns large-9 medium-9">
        <?php while ( have_posts() ) : the_post(); ?>
            <h2><?php echo types_render_field( "fav-lead-copy-title", array("output"=>"raw")); ?></h2>
            <div class="bottom-copy"><?php echo types_render_field( "content-first-section", array("output"=>"html")); ?></div>
        <?php endwhile;?>
    </div>
</div>
<!--content-first-section-->
<?php get_template_part('template-parts/gallery'); ?>

<div class="row bottom-content-section">
    <div class="columns large-3  medium-3 hide-for-small-only"></div>
    <div class="columns large-9  medium-9">
        <div class="post-tags">
            <?php
            $posttags = get_the_tags();
            if ($posttags) {
                foreach($posttags as $tag) {
                    echo '<a href="#" class="clear-tag post-tag fill">'.$tag->name . ' </a>';
                }
            }
            ?>
        </div>
        <div class="share-buttons">
            <a href=""><div class="title like"><i class="fa fa-heart" aria-hidden="true"></i> <span>Like</span> <span class="count">2</span></div></a>
            <a href=""><div class="title fb"><i class="fa fa-facebook" aria-hidden="true"></i> Share</div></a>
            <a href=""><div class="title tweet"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</div></a>
        </div>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="entry-content">
                <?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
            </div>
        <?php endwhile;?>
    </div>

</div>
<?php
    //for use in the loop, list 5 post titles related to first tag on current post
    $tags = wp_get_post_tags($post->ID);
    if ($tags) {
        $first_tag = $tags[0]->term_id;
        $args=array(
            'tag__in' => array($first_tag),
            'post__not_in' => array($post->ID),
            'posts_per_page'=>2,
            'caller_get_posts'=>1
        );
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) { ?>
        <div class="row full-width" id="similar-articles" >
            <div class="columns large-12">
                <div class="content">
                    <?php
                        while ($my_query->have_posts()) : $my_query->the_post();
                            $image_bg = '';
                        if (has_post_thumbnail( $post->ID ) ){
                            $image_bg = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' )[0];
                        }
                    ?>
                        <a href="<?php the_permalink() ?>"  rel="bookmark">
                            <div class="article" style="background: url(<?= $image_bg ?>); background-size:cover; background-position: center">
                                <div class="overlay"></div>
                                <p><?php the_title(); ?></p>
                            </div>
                        </a>


                    <?php endwhile; ?>
                </div>
            </div>
        </div>
  <?php
        }
        wp_reset_query();
    }
?>

<?php //get_template_part('template-parts/comments-section'); ?>

<script>
    $(function() {
        $('.hero-gallery').slick({
            dots: false,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
    });
</script>