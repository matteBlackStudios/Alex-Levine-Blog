<?php get_template_part('template-parts/article-hero') ?>

<div class="row top-content-section">
    <div class="columns large-3 medium-12 author-column">
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
    <div class="columns large-3  medium-12 hide-for-small-only">
        <div class="bottom-sidebar">
            <?php get_template_part('template-parts/side-bar-section')?>
        </div>
    </div>

    <div class="columns large-9  medium-12">
        <div class="bottom-copy"><?php echo $post_copy = types_render_field( "content-section-2", array("output"=>"html")); ?></div>
        <div class="post-tags">
            <?php
            $posttags = get_the_tags();
            if ($posttags) {
                foreach($posttags as $tag) {
                    echo '<a href="'.get_tag_link($tag->term_id).'" class="clear-tag post-tag fill">'.$tag->name.' </a>';
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

<?php get_template_part('template-parts/comments-section'); ?>