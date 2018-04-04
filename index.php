<?php get_header(); ?>

	<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post() ?>
		<div class="content">
			<div class="title">
				<h2><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h2>
			</div>
			<div class="date">
				<?php the_date() ?>
			</div>
			<?php the_content() ?>
		</div> <!-- content -->
		<?php endwhile ?>
	<?php else : ?>
		<p>Looks like there is nothing here!</p>
	<?php endif ?>

<?php get_footer(); ?>
