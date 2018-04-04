<?php
global $thumbnail_rgb;
$thumbnail_rgb = get_rgb_from_thumbnail();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Crimson+Text" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php get_template_part('templates/nav', 'primary'); ?>

<div class="site-container" style="background-color: rgba(<?php echo $thumbnail_rgb ?>, 0.08);">
	<div class="topsection" style="background-image: url('<?php the_post_thumbnail_url(); ?>');"></div>

	<?php get_template_part('templates/nav', 'posts'); ?>

	<div class="main">
