<?php get_header(); ?>
<section class="topo-internas blog" style="background: rgb(220,30,55);
background: linear-gradient(90deg, rgba(220,30,55,1) 0%, rgba(19,33,106,1) 50%);, url(<?php echo the_post_thumbnail_url('full'); ?>) no-repeat center;">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
</section>
<div class="main">
<section class="blog-principal">
	<div class="container">
		<div class="row">
			<div class="col-12">
			<?php while (have_posts()): the_post(); ?>
				<div class="box-post">
					<div class="image-blog">
						<img src="<?php the_post_thumbnail_url( $size = 'post-thumbnail' ); ?>" alt="" class="img-fluid">
					</div>
					<div class="post-meta">
						<span><?php the_time("d/m/Y"); ?></span>
					</div>
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>
</div>

<?php get_footer(); ?>