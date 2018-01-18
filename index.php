<?php get_header(); ?>

<div class="topsection" style="background-image: url('<?php the_post_thumbnail_url( $full ); ?>');">
</div> <!-- topsection -->

<?php
$img = imagecreatefromjpeg( get_the_post_thumbnail_url( $post_id, 'thumbnail_1x1' ) );
$rgb = imagecolorat($img, 0, 0);
$r = ($rgb >> 16) & 0xFF;
$g = ($rgb >> 8) & 0xFF;
$b = $rgb & 0xFF;
?>

<div class="navigation-bar" style="background-image: linear-gradient(0deg, rgba(<?php echo $r ?>, <?php echo $g ?>, <?php echo $b ?>, 1), rgba(<?php echo $r ?>, <?php echo $g ?>, <?php echo $b ?>, 1)); border-bottom: 1px solid rgb(<?php echo $r ?>, <?php echo $g ?>, <?php echo $b ?>);">
	<!-- no need for navleft on homepage -->
	<div class="nav navright">
		<?php $prev_post = get_adjacent_post(false, '', true);
			if(!empty($prev_post)) {
				echo '<a href="' . get_permalink($prev_post->ID) . '" title="' . $prev_post->post_title . '">Next &raquo;</a>';
			} ?>
	</div> <!-- navright -->
</div> <!-- navigation-bar -->

<div class="main">

	<?php if( have_posts() ) : ?>
		<?php while( have_posts() ) : the_post() ?>
		<div class="content">
			<div class="title">
				<h2><a href='<?php the_permalink() ?>'><?php the_title() ?></a></h2>
			</div>
			<div class="date">
				<?php the_date() ?>
			</div>
			<?php the_content() ?>
			</div>
		</div> <!-- content -->
		<?php endwhile ?>
	<?php else : ?>
		<p>Looks like there is nothing here!</p>
	<?php endif ?>
	
</div> <!-- main -->

<?php get_footer(); ?>