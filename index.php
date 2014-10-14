<?php get_header(); ?>
<?php query_posts('post_type=page'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="screen" id="<?php echo get_post_meta($post->ID, 'id', true); ?>">
		<div class="content">
			<div class="text">
				<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
			</div>
			<div class="imageSwitcher">
				<div class="image active"><span id="<?php echo get_post_meta($post->ID, 'id', true); ?>Img1"><span></span></span></div>
				<div class="image"><span id="<?php echo get_post_meta($post->ID, 'id', true); ?>Img2"><span></span></span></div>
				<div class="image"><span id="<?php echo get_post_meta($post->ID, 'id', true); ?>Img3"><span></span></span></div>
				<div class="controls">
					<div class="prev"><i class="fa fa-angle-left"><!-- previous --></i></div>
					<div class="next"><i class="fa fa-angle-right"><!-- next --></i></div>
					<div class="switchDisplay">
						<i class="fa fa-circle"></i>
						<i class="fa fa-circle-o"></i>
						<i class="fa fa-circle-o"></i>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>

<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
