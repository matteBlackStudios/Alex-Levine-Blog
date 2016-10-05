<?php
/*
Template Name: Contact
*/
get_header(); ?>

<?php ?>
<?php get_template_part('template-parts/page-hero') ?>
<div class="row">
    <div class="columns large-12" id="contact">
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_content(); ?>
            <br/>
            <br/>
            <?php  edit_post_link( __( 'Edit', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
        <?php endwhile;?>
    </div>
</div>

<?php get_footer();
