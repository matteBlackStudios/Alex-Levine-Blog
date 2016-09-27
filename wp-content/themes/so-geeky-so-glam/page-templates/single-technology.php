<?php get_template_part('template-parts/article-hero') ?>

<div class="row top-content-section">
    <div class="columns large-3 medium-3">
        <?php get_template_part('template-parts/author-info') ?>
    </div>

    <div class="columns large-9 medium-9">
        <?php while ( have_posts() ) : the_post(); ?>
            <p class="top-featured-copy"><?php echo types_render_field( "lead-article-callout", array("output"=>"raw")); ?></p>
            <h2><?php echo types_render_field( "lead-copy-header", array("output"=>"raw")); ?></h2>
            <div class="bottom-copy"><?php echo types_render_field( "content-section-1", array("output"=>"html")); ?></div>
        <?php endwhile;?>
    </div>
</div>

<?php get_template_part('template-parts/gallery'); ?>

<div class="row bottom-content-section">
    <div class="columns large-3  medium-3 hide-for-small-only">
        <div class="bottom-sidebar">
            <?php get_template_part('template-parts/side-bar-section')?>
        </div>
    </div>

    <div class="columns large-9  medium-9">
        <div class="bottom-copy"><?php echo $post_copy = types_render_field( "content-section-2", array("output"=>"html")); ?></div>
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


<div class="row full-width" id="comments-container" >
    <div class="columns large-12">
        <div class="content">
            <?php comments_template(); ?>
        </div>
    </div>
</div>