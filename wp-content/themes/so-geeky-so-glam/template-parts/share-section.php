
<div class="share-buttons">
    <?php if( function_exists('zilla_likes') ) zilla_likes(); ?>
    <!--    <a href=""><div class="title like"><i class="fa fa-heart" aria-hidden="true"></i> <span>Like</span> <span class="count">2</span></div></a>-->
    <a href="javacript:void(0)" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(get_permalink()) ?>', 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0');"><div class="title fb"><i class="fa fa-facebook" aria-hidden="true"></i> Share</div></a>
    <a href="javacript:void(0)" onclick="window.open('https://twitter.com/home?status=<?=  urlencode(get_the_title()) ?>%20<?= urlencode(get_permalink()) ?>', 'mywin','left=20,top=20,width=500,height=500,toolbar=1,resizable=0');"
    ><div class="title tweet"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</div></a>
</div>

