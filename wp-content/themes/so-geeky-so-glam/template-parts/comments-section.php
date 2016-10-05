<div class="row" id="comments-container" >
    <div class="columns large-12">
        <div class="content">
            <h3>Comments <span class="comment-count"><?php echo get_comments_number(); ?></span> <img id="comment-icon" src="<?= get_template_directory_uri() ?>/assets/images/global/comment-pencil-icon.png"> </h3>
            <?php comments_template(); ?>
        </div>
    </div>
</div>