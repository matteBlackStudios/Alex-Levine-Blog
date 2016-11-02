<?php get_template_part('template-parts/article-hero') ?>

<div class="row top-content-section">
    <div class="columns large-3 medium-12">
        <?php get_template_part('template-parts/author-info') ?>
    </div>

    <div class="columns large-9 medium-12">
        <?php while ( have_posts() ) : the_post(); ?>
            <p class="top-featured-copy"><?php echo types_render_field( "lead-article-callout", array("output"=>"raw")); ?></p>
            <h2><?php echo types_render_field( "lead-copy-header", array("output"=>"raw")); ?></h2>
            <div class="bottom-copy"><?php echo types_render_field( "content-section-1", array("output"=>"html")); ?></div>
        <?php endwhile;?>
    </div>
</div>

<?php get_template_part('template-parts/gallery'); ?>

<div class="row bottom-content-section">
    <div class="columns large-3  medium-12 hide-for-small-only"></div>
    <div class="columns large-9  medium-12">
        <div class="bottom-copy"><?php echo $post_copy = types_render_field( "content-section-2", array("output"=>"html")); ?></div>
    </div>
</div>

<div class="row bottom-featured-section">
    <div class="columns large-6  medium-12 small-12 image">
        <div class="featured-image">
            <img src="<?= types_render_field( "bottom-hero-copy-featured-image", array("output"=>"raw")); ?>"  alt="featured bottom image"/>
        </div>
    </div>
    <div class="columns large-6  medium-12 small-12 copy">
        <div class="featured-copy">
            <p><?= types_render_field( "bottom-hero-copy", array("output"=>"html")); ?></p>
        </div>
    </div>
</div>
<div style="clear:both"></div>

<div class="row bottom-content-section">
    <div class="columns large-3  medium-12 hide-for-small-only"></div>
    <div class="columns large-9  medium-12">
        <div class="post-tags">
            <?php
            $posttags = get_the_tags();
            if ($posttags) {
                foreach($posttags as $tag) {
                    echo '<a href="'.get_tag_link($tag->term_id).'" class="clear-tag post-tag fill">'.$tag->name . ' </a>';
                }
            }
            ?>
        </div>
        <?php get_template_part('template-parts/share-section')?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="entry-content">
                <?php edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
            </div>
        <?php endwhile;?>
    </div>
</div>
<?php $feat_products = types_child_posts('feat-products-footer');?>
<?php if(!empty($feat_products)){ ?>
    <div class="row full-width" id="footer-featured-products" >
        <div class="columns large-12  medium-12">
            <div id="products">

                <?php foreach($feat_products as $feat_product){?>
                    <a href="<?= $feat_product->fields['footer-product-link'] ?>" class="product" target="_blank">
                        <img class="product-image" src="<?= $feat_product->fields['footer-product-image'] ?>" />
                        <p class="product-name"><?= $feat_product->fields['footer-product-name'] ?></p>
                        <p class="vendor"><?= $feat_product->fields['product-vendor-seller'] ?></p>
                        <p class="price"><?= $feat_product->fields['footer-product-price'] ?></p>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
<?php get_template_part('template-parts/comments-section'); ?>