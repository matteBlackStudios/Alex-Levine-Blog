<?php $gallery_slides = types_child_posts('featured-gallery');?>
<?php if(!empty($gallery_slides)): ?>
    <div class="middle-content-section">
        <div class="columns large-12 gallery-section">

            <?php
            $gallery_images = array();
            $captions = array();
            $citations = array();
            foreach ($gallery_slides as $gallery_slide) {
                array_push($gallery_images, $gallery_slide->fields['gallery_image']);
                array_push($captions, array($gallery_slide->fields['gallery_caption'], $gallery_slide->fields['gallery_caption_citation']));
            }
            ?>
            <div class="gallery" id="gallery">
                <?php
                foreach($gallery_images as $gallery_image){
                    ?>
                    <div class="slide" style="background:url(<?= $gallery_image ?>);background-size:cover;-webkit-background-size: cover"></div>
                    <?php
                }
                ?>
            </div>
            <div id="gallery-caption">

                <?php
                $current_slide = 0;
                foreach($captions as $caption){
                    ?>
                    <div class="caption-container" id="caption-<?= $current_slide ?>" <?= ($current_slide != 0) ? 'style="display:none"' : '' ?>>
                        <p class="caption"><?= $caption[0] ?></p>
                        <?php
                        $cite = $caption[1];
                        if(!empty($cite)){
                            ?>
                            <cite><?= $cite ?></cite>
                            <?php
                        }
                        ?>

                    </div>
                    <?php
                    $current_slide += 1;
                }
                ?>
                <i class="fa fa-times close-btn" aria-hidden="true"></i>
            </div>
        </div>
    </div>
<?php endif; ?>