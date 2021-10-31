<?php

get_header();

if (have_posts()) :
?>
<div class="single-page-content">
	<div class="semi-links-single">
		<p>Home</p>
		<img src="<?php echo get_theme_file_uri('/images/icon-arrow.png') ?>">
		<p>Blog</p>
		<img src="<?php echo get_theme_file_uri('/images/icon-arrow.png') ?>">
		<p><?php echo single_cat_title("", false); ?></p>
	</div>
	<div class="title-pages">
		<?php echo single_cat_title("", false); ?>
	</div>
	<div class="menu-navigation-bar">
		<a href="<?php echo site_url('/home'); ?>">All</a>
		<a href="<?php echo site_url('/category/company/'); ?>">Company</a>
		<a href="<?php echo site_url('/category/brands/'); ?>">Brands</a>
		<a href="<?php echo site_url('/category/fashion/'); ?>">Fashion</a>
		<a href="<?php echo site_url('/category/shop/'); ?>">Shop</a>
	</div>
</div>
<div class="site-main">
	<div class="post-page-container">
		<div class="post-page-col-list">
			<?php
			while (have_posts()) : the_post(); ?>

				<div class="post-page">
					<div class="post-page-image">
						<div class="date-post">
							<p><?php the_time('M d',) ?></p>
						</div>
						<a href="<?php the_permalink(); ?>"><img class="image-post"
								src="<?php echo catch_that_image() ?>"></a>
					</div>
					<div class="title-content-post">
						<h3><a href="<?php the_permalink(); ?>"
								style="text-decoration: none;"><?php echo the_title(); ?></a>
						</h3>
						<p><?php echo wp_trim_words(get_the_content(), 23) ?></p>
					</div>
					<div class="post-read-more">
						<a href="<?php the_permalink(); ?>">Read more</a>
						<img class="image-post" src="<?php echo get_theme_file_uri('/images/icon-arrow-rm.png') ?>">
					</div>
				</div>


			<?php

			endwhile;?>
		</div>
	</div>
</div>
<?php
else :
	echo '<p>There are no posts!</p>';
endif;
get_footer();

?>