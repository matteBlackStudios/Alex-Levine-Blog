<?php
/*
Template Name: Blog
*/
get_header(); ?>
<?php get_template_part('template-parts/page-hero') ?>


    <section id="category-articles">
        <div class="row">
            <div class="columns large-12" >
                <div class="row">
                    <div class="columns large-12 medium-12 small-12">
                        <div id="mr-articles">
                            <?php
                                $category_posts = new WP_Query( array( 'posts_per_page' => 4, 'orderby' => 'post_date', 'order' => 'DESC', 'offset' => '0'  ) );
                                $page_number = ($category_posts->max_num_pages);
                            ?>

                            <?php if ( $category_posts->have_posts() ) : ?>
                                <?php  while ( $category_posts->have_posts() ) : $category_posts->the_post(); ?>

                                    <?php get_template_part('template-parts/post-content')?>

                                    <?php
                                endwhile;
                                wp_reset_query();
                                ?>

                            <?php else : ?>
                                <?php get_template_part( 'template-parts/content', 'none' ); ?>


                            <?php endif; // End have_posts() check. ?>


                        </div>
                    </div>
                </div>
                <?= do_shortcode('[ajax_load_more transition_speed="600" destroy_after="'.($page_number - 1).'" scroll="false" offset="4" button_label="View More" post_type="post" post_format="standard" posts_per_page="4" pause="true" transition="fade" transition_container="true"]') ?>

            </div>
        </div>
    </section>

    <section id="footer-post" style="background-image:url(<?= types_render_field( "footer-background-image", array("output"=>"raw")) ?>)">
        <div class="overlay"></div>
        <div class="row">
            <div class="columns large-12" >
                <a href="<?= get_site_url().'/category/'.strtolower(types_render_field( "footer-post-category", array("output"=>"raw"))) ?>"><h4 class="tag"><?= types_render_field( "footer-post-category", array("output"=>"raw")) ?></h4></a>
                <a href="<?= types_render_field( "footer-post-link", array("output"=>"raw")) ?>"><h3><?= types_render_field( "footer-post-title", array("output"=>"raw")) ?></h3></a>
                <p><?= types_render_field( "post-excerpt", array("output"=>"raw")) ?></p>
            </div>
        </div>
    </section>


<?php get_footer();
