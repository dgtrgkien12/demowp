<?php get_header();
	while(have_posts()){
        the_post(); ?>
<div class="single-page-content">
	<div class="semi-links-container">
		<div class="semi-links">
			<a href="<?php echo site_url('/home');?>">
				<p>Home</p>
			</a>
			<svg width="4" height="8" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M3.85609 4.39604L0.838849 7.83581C0.646917 8.05473 0.335731 8.05473 0.143891 7.83581C-0.0479637 7.61708 -0.0479637 7.26232 0.143891 7.04361L2.81368 3.99994L0.143969 0.956381C-0.0478861 0.737564 -0.0478861 0.382842 0.143969 0.164113C0.335824 -0.0547044 0.646994 -0.0547044 0.838927 0.164113L3.85616 3.60393C3.95209 3.71335 4 3.8566 4 3.99992C4 4.14332 3.952 4.28668 3.85609 4.39604Z"
					fill="#919191" />
			</svg>
			<p><?php the_title(); ?></p></div>
			<svg width="4" height="8" viewBox="0 0 4 8" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path
					d="M3.85609 4.39604L0.838849 7.83581C0.646917 8.05473 0.335731 8.05473 0.143891 7.83581C-0.0479637 7.61708 -0.0479637 7.26232 0.143891 7.04361L2.81368 3.99994L0.143969 0.956381C-0.0478861 0.737564 -0.0478861 0.382842 0.143969 0.164113C0.335824 -0.0547044 0.646994 -0.0547044 0.838927 0.164113L3.85616 3.60393C3.95209 3.71335 4 3.8566 4 3.99992C4 4.14332 3.952 4.28668 3.85609 4.39604Z"
					fill="#919191" />
			</svg>
			<p><?php the_title(); ?></p>
		</div>
	</div>
	<div class="title-pages">
		<p><?php the_title(); ?></p></div>
	<div class="author-date-post">By <?php echo get_the_author();?> / <?php the_time('M d',)?></div>
	<div class="content-post-container">
		<?php the_content();?>
	</div>
	<div class="hashtag-social-post">
		<div class="hashtag-keyword-post">
			<ul>
				<li>Communication</li>
				<li>Business</li>
				<li>Fashion</li>
				<li>Marketing</li>
				<li>Teamwork</li>
			</ul>
		</div>
		<div class="social-share-post">
			<button class="button-facebook-share-post">
				<img src="<?php echo get_theme_file_uri('/images/icon-fb-share.png')?>">
				<p>Share on Facebook</p>
			</button>
			<button class="button-linkedin-share-post">
				<img src="<?php echo get_theme_file_uri('/images/icon-in-share.png')?>">
				<p>Share on LinkedIn</p>
			</button>
			<button class="button-twitter-share-post">
				<img src="<?php echo get_theme_file_uri('/images/icon-tw-share.png')?>">
				<p>Share on Twitter</p>
			</button>
			<button class="button-pinterset-share-post">
				<img src="<?php echo get_theme_file_uri('/images/icon-pc-share.png')?>">
				<p>Share on Pinterest</p>
			</button>
		</div>
		<div class="related-posts">
			<div class="title-related-posts">Related Posts</div>
			<div class="related-posts-list">
				<div class="related-posts-content-list">
					<?php
						$related_post = new WP_Query( array( 'posts_per_page' => 3 ) );
						while ( $related_post->have_posts() ) {
							$related_post->the_post();
							?>
					<div class="related-posts-content">
						<div class="img-related-post">
							<!-- <a href="<?php the_permalink(); ?>"><img class="image-related-post" src="<?php echo catch_that_image() ?>"></a> -->
							<a href="<?php the_permalink(); ?>">
								<div class="image-related-post"><?php the_post_thumbnail(); ?></div>
							</a>
							<div class="date-related-post">
								<p><?php the_time('M d',) ?></p>
							</div>
						</div>
						<div class="title-related-post">
							<a href="<?php the_permalink(); ?>"></a>
							<h4><?php echo the_title(); ?></h4>
						</div>
						<div class="post-readmore-related-post">
							<a href="<?php the_permalink(); ?>">Read more</a>
							<img class="icon-image-related-post"
								src="<?php echo get_theme_file_uri('/images/icon-arrow-rm.png')?>">
						</div>
					</div>
					<?php } 
						?>
				</div>
			</div>
		</div>
	</div>
</div>


<?php }
	
get_footer(); ?>