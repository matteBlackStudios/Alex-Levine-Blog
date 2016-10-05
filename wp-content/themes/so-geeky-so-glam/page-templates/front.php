<?php
/*
Template Name: Front
*/
get_header();


$popularpost = new WP_Query( array( 'posts_per_page' => 5, 'meta_key' => 'wpb_post_views_count', 'orderby' => 'meta_value_num', 'order' => 'DESC'  ) );
if(empty($popularpost)){
	$popularpost = new WP_Query( array( 'posts_per_page' => 5, 'orderby' => 'date', 'order' => 'DESC'  ) );
}
$top_stories = array();
while ( $popularpost->have_posts() ) : $popularpost->the_post();
	$article_type = types_render_field( "post-type", array("output"=>"raw"));
	$category = get_the_category();
	$excerpt =  get_post_excerpt(130);
	$image = get_post_featured_image($post->ID);
	array_push($top_stories, array('name'=> get_the_title(), 'cat' =>  $category[0]->cat_name, 'cat_slug' => $category[0]->slug, 'permalink' => get_the_permalink(), 'excerpt' => $excerpt, 'type'=> $article_type, 'feat-img'=>$image));
endwhile;
wp_reset_query();
?>

<?php
	session_start();
	require('TwitterAPIExchange.php');
	$settings = array(
		'oauth_access_token' => "79810875-QIipF7Nj2wRBgEEqSaOmgVTcqy2TJGc7n8Ya7N6A",
		'oauth_access_token_secret' => "hdRLqlqEBWUCymaWy4O7cJUG9TCNuw0GFTifgVEIsnw",
		'consumer_key' => "etsBTboY79X4ZcHeDWX6vQ",
		'consumer_secret' => "7KYcffh0OxPmMjQkHbQciNlanRLCu3gF4WdVuH9KcI"
	);
	$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
	$getfield = '?screen_name=sogeekysoglam&count=1';
	$requestMethod = 'GET';

	$twitter = new TwitterAPIExchange($settings);
	$twitter_obj =  json_decode($twitter->setGetfield($getfield)->buildOauth($url, $requestMethod)->performRequest());
?>

<section id="top-stories">
	<div class="row full-width">
		<div class="columns large-8 featured-img">
			<div id="featured-story-image">
				<?php foreach($top_stories as $top_story): ?>
					<div class="featured-story-image" style="background: url(<?= $top_story['feat-img'] ?>); background-size: cover; background-position:center center;">
						<div class="overlay"></div>
						<div class="copy">
							<h4 class="tag <?= $top_story['cat_slug'] ?>"><?= $top_story['cat'] ?></h4>
							<h2><?=  $top_story['name']?></h2>
							<?=  $top_story['excerpt'].'...</p>' ?>
							<a href="<?= ($top_story['type']  == 'fave') ? $top_story['permalink'] : $top_story['permalink'].'#gallery'  ?>" class="cta">
								<?php
								if($top_story['type'] == 'fave'){ ?>
									View Story
									<?php

								}else{ ?>
									<img src="<?= get_template_directory_uri().'/assets/images/global/gallery-icon.png' ?>" alt="Gallery Icon" />View Gallery
									<?php
								}
								?>

							</a>
						</div>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<div class="columns large-4 articles" >
			<div class="outer-link-block top"><span>Top Stories</span></div>
			<?php
				$article_rank = 1;
				foreach($top_stories as $top_story) {
					?>
					<a href="<?= $top_story['permalink'] ?>">
						<div class="article-block <?= ($article_rank == 1) ? 'active' : '' ?>" id="block-<?= ($article_rank - 1) ?>">
							<div class="count <?=  $top_story['cat_slug'] ?>"><?= $article_rank ?></div>
							<div class="copy">
								<h4><?=  $top_story['cat'] ?></h4>
								<h3><?=  $top_story['name'] ?></h3> <!-- Limit Characters Here -->
							</div>
							<div style="clear:both"></div>
						</div>
					</a>
			<?php
					$article_rank += 1;
				}
			?>
			<a href="<?= get_Site_url() ?>/blog"><div class="outer-link-block bottom"><span>More</span></div></a>
		</div>
	</div>
</section>

<section id="most-recent-articles">
	<div class="row">
		<div class="columns large-12" >
			<h2>Most Recent</h2>
		</div>
	</div>
	<div class="row">
		<div class="columns large-12" >
			<div class="row">
				<div class="columns large-12 medium-12 small-12">
						<div id="mr-articles">
							<?php
							$most_recent_posts = new WP_Query( array( 'posts_per_page' => 4, 'orderby' => 'date', 'order' => 'DESC'  ) );
							while ( $most_recent_posts->have_posts() ) : $most_recent_posts->the_post();

							?>

								<?php get_template_part('template-parts/post-content')?>

							<?php
								endwhile;
								wp_reset_query();
							?>
					  	</div>
				</div>
			</div>
			<div style="clear:both"></div>
			<a href="<?= get_site_url() ?>/blog" class="btn white">View More</a>
		</div>
	</div>
</section>

<section id="social-feature">
	<div class="row">
		<div class="columns large-12" >
			<div class="center-div">
				<?php $link = types_render_field( "featured-item-link", array("output"=>"raw")); ?>
				<a href="<?= (types_render_field( "is-this-featured-item-a-gallery", array("output"=>"raw")) == 'yes') ? $link.'#gallery' : $link ?>" class="gallery">
					<div class="row">
						<div class="columns large-6" >
							<div class="copy">
								<h4><?= types_render_field( "featured-item-category", array("output"=>"raw")) ?></h4>
								<h3><?= types_render_field( "featured-item-name", array("output"=>"raw")) ?></h3>
								<p><?= types_render_field( "brief-feature-description", array("output"=>"raw")) ?></p>
							</div>
						</div>
						<div class="columns large-6" >
							<img class="featured-item-image" src="<?= types_render_field( "featured-item-image", array("output"=>"raw")) ?>" alt="featured product">
						</div>
					</div>
				</a>
				<div id="instagram-feed" class="soc-container">
					<h5>Instagram</h5>
					<a href="<?= get_option('instagram-url') ?>" target="_blank" class="handle">@alexlevine</a>
					<div style="clear:both"></div>
					<div id="instafeed"></div>
					<a href="<?= get_option('instagram-url') ?>" target="_blank" class="view-profile">View Profile</a>
				</div>
				<div id="twitter-feed" class="soc-container">
					<h5>Twitter</h5>
					<a href="<?= get_option('twitter-url') ?>" target="_blank"  class="handle">@alexlevine</a>
					<hr/>
					<div style="clear:both"></div>
					<p class="tweet"><?= linkify_tweet($twitter_obj[0]->text) ?></p>
					<p class="time"><?= get_timeago(strtotime($twitter_obj[0]->created_at)) ?></p>
				</div>
			</div>
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




<script type="text/javascript" src="<?= get_template_directory_uri().'/assets/javascript/vendor/instafeed/instafeed.min.js' ?>"></script>
<script type="text/javascript" src="<?= get_template_directory_uri().'/assets/javascript/pages/front.js' ?>"></script>

<?php get_footer();
