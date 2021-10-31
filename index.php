<?php
	get_header();
?>
<div class="site-main">
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

			<p>Blog</p>
		</div>
	</div>

	<div class="title-pages">
		<p>Our Blog</p>
	</div>
	<div class="menu-navigation-bar">
		<a href="<?php echo site_url('/home');?>">All</a>
		<a href="<?php echo site_url('/category/company/');?>">Company</a>
		<a href="<?php echo site_url('/category/brands/');?>">Brands</a>
		<a href="<?php echo site_url('/category/fashion/');?>">Fashion</a>
		<a href="<?php echo site_url('/category/shop/');?>">Shop</a>
	</div>
	<div class="post-page-container">
		<div class="post-page-col-list">
			<?php
            $related_post = new WP_Query( array( 'posts_per_page' => 6 ) );
              while ( $related_post->have_posts() ) {
                $related_post->the_post();
                ?>
			<div class="col-post-page">
				<div class="post-page">
					<div class="post-page-image">
						<div class="date-post">
							<p><?php the_time('M d',) ?></p>
						</div>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
					</div>
					<div class="title-content-post">
						<h3><a href="<?php the_permalink(); ?>"
								style="text-decoration: none;"><?php echo the_title(); ?></a></h3>
						<p><?php echo wp_trim_words( get_the_content(),23 ) ?></p>
					</div>
					<div class="post-read-more">
						<a href="<?php the_permalink(); ?>">Read more</a>
						<a href=""><svg class="image-post" aria-hidden="true" role="img" focusable="false"
								xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
								fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
								stroke-linejoin="round">
								<line x1="0" y1="12" x2="19" y2="12"></line>
								<polyline points="12 5 19 12 12 19"></polyline>
							</svg></a>
					</div>
				</div>
			</div>

			<?php
              }	 				
          ?>
		</div>
	</div>
</div>
<div class="load-more-post container">
	<p>
		<?php
			$post_show_page = 6;
			$total = wp_count_posts()->publish;
			$percent = ($post_show_page / $total)*100;
			// echo $percent;
			$percent_bar = 100-$percent;
		?>
		Showing 6 of <?php echo $total  ?> post
	</p>
	<div class="hr-load-more-post">
		<hr class="hr-big" style="width:  100%">
		<hr class="hr-small" style="width:  <?php echo $percent?>%;">
	</div>
	<button>
		<p>Load More</p>
	</button>
</div>
</div>
<?php
	get_footer();
?>