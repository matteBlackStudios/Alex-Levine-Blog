<?php
    $sb_image =  types_render_field( "sidebar-image", array("output"=>"raw"));
    $sb_copy = types_render_field( "sidebar-copy", array("output"=>"raw"));
    $sb_link = types_render_field( "sidebar-link", array("output"=>"raw"));
    $sb_title = types_render_field( "sidebar-title", array("output"=>"raw"));
?>
<div class="content" id="side-bar-content">
    <?php if( !empty($sb_image)): ?>
        <img src="<?php echo $sb_image; ?>" class="feature">
    <?php endif; ?>
    <?php if( !empty($sb_copy)): ?>
        <p><?php echo $sb_copy; ?></p>
    <?php endif; ?>
    <?php if( !empty($sb_link) && !empty($sb_title)): ?>
        <a href="<?php echo $sb_link; ?>" id="about-link"><img src="<?= get_template_directory_uri() ?>/assets/images/global/icon-stoke.png"/><?php echo $sb_title; ?></a>
    <?php endif; ?>
</div>
<?php echo get_sidebar(); ?>