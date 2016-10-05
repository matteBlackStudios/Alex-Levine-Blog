<div id="archive-hero" class="<?= (is_author()) ? 'author' : '' ?>">
    <div class="overlay"></div>
    <div class="content">
        <?php
            global $wp_query;
            $curauth = $wp_query->get_queried_object();
            $fb = get_the_author_meta('facebook', $author_id) ;
            $twitter =  get_the_author_meta('twitter', $author_id) ;
            $instagram = get_the_author_meta('instagram', $author_id);
            if(is_author()){
        ?>
                <h1> <?= $curauth->display_name ?> </h1>
                <p><?= $curauth->description ?> </p>

                <div class="social-media-links">
                    <?php if(!empty($fb)): ?>
                        <a href="<?= $fb ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <?php endif; ?>
                    <?php if(!empty($twitter)): ?>
                        <a href="<?= $twitter ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <?php endif; ?>
                    <?php if(!empty($instagram)): ?>
                        <a href="<?= $instagram?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <?php endif; ?>
                </div>
        <?php
            }else{
        ?>
                <h1><?= (!is_category()) ? 'Tagged: ' : '' ?><?php single_tag_title(); $_GET['author_name']?> </h1>
        <?php
            }

        ?>

    </div>
</div>