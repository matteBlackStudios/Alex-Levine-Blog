<?php
/*
Template Name: Front
*/
get_header(); ?>

<section id="top-stories">
	<div class="row full-width">
		<div class="columns large-8 featured-img" style="background: url(<?= get_template_directory_uri().'/assets/images/front/featured-home-img.jpg' ?>); background-size: cover; background-position:center center;">
			<div class="overlay"></div>
			<div class="copy">
				<h4 class="tag house">House</h4>
				<h2>Phasellus Garden Eleifend Sun</h2>
				<p>Proin vel enim ullamcorper, tincidunt augue vitae, tempus mi. In eros sem, euismod eleifend enim in, porta venenatis nisl. Donec.</p>
				<a href="#" class="cta"><img src="<?= get_template_directory_uri().'/assets/images/global/gallery-icon.png' ?>" alt="Gallery Icon" />View Gallery</a>
			</div>
		</div>
		<div class="columns large-4 articles" >
			<a href="#"><div class="outer-link-block top"><span>Top Stories</span></div></a>
			<a href="#"><div class="article-block">
				<div class="count house">1</div>
				<div class="copy">
					<h4>House</h4>
					<h3>Phasellus Garden Eleifend Sun</h3> <!-- Limit Characters Here -->
				</div>
				<div style="clear:both"></div>
			</div></a>
				<a href="#"><div class="article-block">
				<div class="count city">2</div>
				<div class="copy">
					<h4>City</h4>
					<h3>Quisque Tempus, nibh ac Hendrerit</h3>
				</div>
				<div style="clear:both"></div>
			</div></a>
			<a href="#"><div class="article-block">
				<div class="count gallery">3</div>
				<div class="copy">
					<h4>House</h4>
					<h3>Phasellus molestie velit eget tempus.</h3>
				</div>
				<div style="clear:both"></div>
			</div></a>
			<a href="#"><div class="article-block">
				<div class="count beauty">4</div>
				<div class="copy">
					<h4>BEAUTY</h4>
					<h3>Types Of Cosmeticsn</h3>
				</div>
				<div style="clear:both"></div>
			</div></a>
			<a href="#"><div class="article-block">
				<div class="count house">5</div>
				<div class="copy">
					<h4>House</h4>
					<h3>Phasellus Garden Eleifend Sun</h3>
				</div>
				<div style="clear:both"></div>
			</div></a>
			<a href=""><div class="outer-link-block bottom"><span>More</span></div></a>
		</div>
	</div>
</section>

<section id="most-recent-articles">
	<div class="row">
		<div class="columns large-12" >
			<h2>Most<br/>Recent</h2>
		</div>
	</div>
	<div class="row">
		<div class="columns large-12" >
			<div class="row">
				<div class="columns large-3 medium-6 small-12">
					<div class="article-post">
						<div class="featured-image" style="background:url(http://placehold.it/229x171); background-size:cover">
							<h4 class="house">House</h4>
						</div>
						<div class="featured-copy">
							<p class="lead-copy">Praesent rhoncus mi nec venenatis ultricies.</p>
							<p class="copy">Figuring out how our brains work is key to understanding </p>
						</div>
					</div>
				</div>
				<div class="columns large-3 medium-6 small-12">
					<div class="article-post">
						<div class="featured-image" style="background:url(http://placehold.it/229x171); background-size:cover">
							<h4 class="city">City</h4>
						</div>
						<div class="featured-copy">
							<p class="lead-copy">Praesent rhoncus mi nec venenatis ultricies.</p>
							<p class="copy">Figuring out how our brains work is key to understanding </p>
						</div>
					</div>
				</div>
				<div class="columns large-3 medium-6 small-12">
					<div class="article-post">
						<div class="featured-image" style="background:url(http://placehold.it/229x171); background-size:cover">
							<h4 class="beauty">Beauty</h4>
						</div>
						<div class="featured-copy">
							<p class="lead-copy">Praesent rhoncus mi nec venenatis ultricies.</p>
							<p class="copy">Figuring out how our brains work is key to understanding </p>
						</div>
					</div>
				</div>
				<div class="columns large-3 medium-6 small-12">
					<div class="article-post">
						<div class="featured-image" style="background:url(http://placehold.it/229x171); background-size:cover">
							<h4 class="city">City</h4>
						</div>
						<div class="featured-copy">
							<p class="lead-copy">Praesent rhoncus mi nec venenatis ultricies.</p>
							<p class="copy">Figuring out how our brains work is key to understanding </p>
						</div>
					</div>
				</div>
			</div>
			<a class="btn white">View More</a>
		</div>
	</div>
</section>

<section id="social-feature">
	<div class="row">
		<div class="columns large-12" >
			<div class="center-div">
				<div class="gallery">
					<div class="row">
						<div class="columns large-6" >
							<div class="copy">
								<h4>Gallery</h4>
								<h3>Maecenas dapibus cursus enim, at scelerisque</h3>
								<p>Maecenas rhoncus efficitur ligula, ac sollicitudin dui condimentum id. Pellentesque lectus quam.</p>
							</div>
						</div>
						<div class="columns large-6" >
							<img src="<?= get_template_directory_uri().'/assets/images/front/chair.png' ?>" alt="featured product">
						</div>
					</div>
				</div>
				<div id="instagram-feed" class="soc-container">
					<h5>Instagram</h5>
					<p class="handle">@alexlevine</p>
					<div style="clear:both"></div>
					<a href="#" class="view-profile">View Profile</a>
				</div>
				<div id="twitter-feed" class="soc-container">
					<h5>Twitter</h5>
					<p class="handle">@alexlevine</p>
					<hr/>
					<div style="clear:both"></div>
					<p class="tweet">Moore plays a Columbia professor diagnosed with early onset Alzheimer’s disease in “Still Alice”, which is based on Lisa Genova’s 2007 novel</p>
					<p class="time">9 min ago</p>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="footer-post">
	<div class="row">
		<div class="columns large-12" >
			<h4 class="tag">City</h4>
			<h3>Praesent augue enim, blandit faucibus posuere gravida, dictum vel nulla.</h3>
			<p>In id purus tempus leo facilisis interdum ac ut odio. In fermentum. </p>
		</div>
	</div>
</section>



<script type="text/javascript" src="<?= get_template_directory_uri().'/assets/javascript/vendor/instafeed/instafeed.min.js' ?>"></script>
<script type="text/javascript" src="<?= get_template_directory_uri().'/assets/javascript/pages/front.js' ?>"></script>

<script type="text/javascript">


	var feed = new Instafeed({
		get: 'tagged',
		tagName: 'awesome',
		clientId: '9c1fcee6ecf14b4f91f5e5d40a5db92b'
	});
	feed.run();
</script>

<?php get_footer();
